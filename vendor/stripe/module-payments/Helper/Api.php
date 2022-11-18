<?php

namespace StripeIntegration\Payments\Helper;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\CouldNotSaveException;
use StripeIntegration\Payments\Model;
use StripeIntegration\Payments\Model\PaymentMethod;
use StripeIntegration\Payments\Model\Config;
use Psr\Log\LoggerInterface;
use Magento\Framework\Validator\Exception;
use StripeIntegration\Payments\Helper\Logger;

class Api
{
    public function __construct(
        \StripeIntegration\Payments\Model\Config $config,
        LoggerInterface $logger,
        Generic $helper,
        \StripeIntegration\Payments\Model\PaymentIntent $paymentIntent,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \StripeIntegration\Payments\Helper\Rollback $rollback,
        \Magento\Quote\Model\QuoteFactory $quoteFactory
    ) {
        $this->logger = $logger;
        $this->helper = $helper;
        $this->config = $config;
        $this->customer = $helper->getCustomerModel();
        $this->_eventManager = $eventManager;
        $this->rollback = $rollback;
        $this->paymentIntent = $paymentIntent;
        $this->quoteFactory = $quoteFactory;
    }

    public function retrieveCharge($token)
    {
        if (empty($token))
            return null;

        if (strpos($token, 'pi_') === 0)
        {
            $pi = \Stripe\PaymentIntent::retrieve($token);

            if (empty($pi->charges->data[0]))
                return null;

            return $pi->charges->data[0];
        }
        else if (strpos($token, 'in_') === 0)
        {
            // Subscriptions save the invoice number instead
            $in = \Stripe\Invoice::retrieve(['id' => $token, 'expand' => ['charge']]);

            return $in->charge;
        }

        return \Stripe\Charge::retrieve($token);
    }

    public function reCreateCharge($payment, $baseAmount, $originalCharge)
    {
        try
        {
            $order = $payment->getOrder();

            if (empty($originalCharge->payment_method) || empty($originalCharge->customer))
                throw new LocalizedException(__("The authorization has expired and the original payment method cannot be reused to re-create the payment."));

            $token = $originalCharge->payment_method;

            $fraud = false;

            $amount = $this->helper->convertBaseAmountToOrderAmount($baseAmount, $payment->getOrder(), $originalCharge->currency);

            if ($amount > 0)
            {
                $quoteId = $payment->getOrder()->getQuoteId();

                // We get here if an existing authorization has expired, in which case
                // we want to discard old Payment Intents and create a new one
                $this->paymentIntent->refreshCache($quoteId, $order);
                $this->paymentIntent->destroy($quoteId, true);

                $quote = $this->quoteFactory->create()->load($quoteId);
                $this->paymentIntent->quote = $quote;
                $this->paymentIntent->capture = \StripeIntegration\Payments\Model\PaymentIntent::CAPTURE_METHOD_AUTOMATIC;

                $params = $this->paymentIntent->getParamsFrom($quote, $order, $token);
                $params["customer"] = $originalCharge->customer;
                $params["amount"] = $this->helper->convertMagentoAmountToStripeAmount($amount, $originalCharge->currency);
                $params["currency"] = $originalCharge->currency;
                $this->paymentIntent->setCustomParams($params);

                if (!$this->paymentIntent->create($params, $quote, $order))
                    throw new \Exception("The payment intent could not be created");

                $payment->setAdditionalInformation("token", $token);
                $pi = $this->paymentIntent->confirmAndAssociateWithOrder($payment->getOrder(), $payment);
                if (is_string($pi))
                    throw new \Exception($pi);
                else if (!$pi)
                    throw new \Exception("Could not create a Payment Intent for this order");

                $charge = $this->retrieveCharge($pi->id);

                $this->rollback->addCharge($charge->id);

                if ($this->config->isStripeRadarEnabled() &&
                    isset($charge->outcome->type) &&
                    $charge->outcome->type == 'manual_review')
                {
                    $payment->setAdditionalInformation("stripe_outcome_type", $charge->outcome->type);
                    $this->helper->holdOrder($order);
                }

                if (!$charge->captured && $this->config->isAutomaticInvoicingEnabled())
                {
                    $payment->setIsTransactionPending(true);
                    $invoice = $order->prepareInvoice();
                    $invoice->register();
                    $order->addRelatedObject($invoice);
                }

                $payment->setTransactionId($pi->id);
                $payment->setLastTransId($pi->id);
            }

            $payment->setIsTransactionClosed(0);
            $payment->setIsFraudDetected($fraud);
        }
        catch (\Stripe\Exception\CardException $e)
        {
            $this->rollback->run($e);
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        catch (\Exception $e)
        {
            $this->rollback->run($e);

            if ($this->helper->isAdmin())
                throw new CouldNotSaveException(__($e->getMessage()));
            else
                throw new CouldNotSaveException(__("Sorry, a payment error has occurred, please contact us for support."));
        }
    }
}
