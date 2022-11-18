<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Plugin\Model\Quote;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Quote\Model\Quote\Address\Rate;
use Mageplaza\Core\Helper\Media;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\MethodFactory;
use Psr\Log\LoggerInterface;

/**
 * Class Address
 * @package Mageplaza\TableRateShipping\Plugin\Model\Quote
 */
class Address
{
    /**
     * @var Media
     */
    private $mediaHelper;

    /**
     * @var MethodFactory
     */
    private $methodFactory;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * ShippingMethodConverter constructor.
     *
     * @param Media $mediaHelper
     * @param MethodFactory $methodFactory
     * @param LoggerInterface $logger
     */
    public function __construct(
        Media $mediaHelper,
        MethodFactory $methodFactory,
        LoggerInterface $logger
    ) {
        $this->mediaHelper   = $mediaHelper;
        $this->methodFactory = $methodFactory;
        $this->logger        = $logger;
    }

    /**
     * @param \Magento\Quote\Model\Quote\Address $subject
     * @param array $rates
     *
     * @return array
     */
    public function afterGetGroupedAllShippingRates(\Magento\Quote\Model\Quote\Address $subject, $rates)
    {
        foreach ($rates as &$group) {
            /** @var Rate $rate */
            foreach ($group as &$rate) {
                if ($rate->getCarrier() !== 'mptablerate') {
                    continue;
                }

                /** @var Method $method */
                $method = $this->methodFactory->create()->load($rate->getMethod());

                if ($img = $method->getImage()) {
                    try {
                        $rate->setMptablerateImage($this->mediaHelper->getMediaUrl($img));
                    } catch (NoSuchEntityException $e) {
                        $this->logger->critical($e->getMessage());
                    }
                }

                $rate->setMptablerateComment(__($method->getComment()));
            }
        }

        return $rates;
    }
}
