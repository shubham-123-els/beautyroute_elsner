<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Synchronization;

use Magenest\QuickBooksOnline\Model\Synchronization;
use Magento\Config\Model\Config as ConfigModel;
use Magenest\QuickBooksOnline\Model\TaxFactory;
use Magenest\QuickBooksOnline\Model\ResourceModel\Tax as TaxResource;
use Magenest\QuickBooksOnline\Model\Client;
use Magenest\QuickBooksOnline\Model\Log;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Action\Context;
use Magenest\QuickBooksOnline\Model\Config;

/**
 * Class TaxCode
 * @package Magenest\QuickBooksOnline\Model\Synchronization
 */
class TaxCode extends Synchronization
{
    /**
     * @var TaxFactory
     */
    protected $taxFactory;

    /**
     * @var TaxResource
     */
    protected $taxResource;

    /**
     * @var Config
     */
    protected $config;

    /**
     * TaxCode constructor.
     *
     * @param Client $client
     * @param Log $log
     * @param TaxFactory $taxFactory
     * @param TaxResource $taxResource
     * @param Config $config
     * @param Context $context
     */
    public function __construct(
        Client $client,
        Log $log,
        TaxFactory $taxFactory,
        TaxResource $taxResource,
        Config $config,
        Context $context
    ) {
        parent::__construct($client, $log, $context);
        $this->taxFactory  = $taxFactory;
        $this->taxResource = $taxResource;
        $this->config      = $config;
        $this->type        = 'taxcode';
    }

    /**
     * @param $id
     * @param $code
     * @param $rate
     *
     * @throws LocalizedException
     * @throws \Zend_Http_Client_Exception
     * @throws \Exception
     */
    public function sync($id, $code, $rate)
    {
        $check = $this->getTaxAgencyId();
        if (isset($check['TaxAgency']['0']['Id']) && $check['TaxAgency']['0']['Id'] > 0) {
            $params = [
                'TaxCode'        => $code,
                'TaxRateDetails' => [
                    'TaxRateName'     => $code . '_' . $id,
                    'RateValue'       => $rate,
                    'TaxAgencyId'     => $check['TaxAgency']['0']['Id'],
                    'TaxApplicableOn' => 'Sales',
                ]
            ];

            $check = $this->checkTaxCode($code);

            if (!empty($check)) {
                if (isset($check['TaxCode'][0]['Id'])) {
                    $model = $this->taxFactory->create()->load($code, 'tax_code');
                    $this->taxResource->load($model, $code, 'tax_code');
                    $model->setQboId($check['TaxCode'][0]['Id']);
                    $this->taxResource->save($model);
                    if (isset($check['TaxCode'][0]['SalesTaxRateList']['TaxRateDetail'][0]['TaxRateRef']['value'])) {
                        $model->setTaxRateValue($check['TaxCode'][0]['SalesTaxRateList']['TaxRateDetail'][0]['TaxRateRef']['value']);
                        $this->taxResource->save($model);
                    }
                    $this->addLog($id, $check['TaxCode'][0]['Id'], 'This Tax Code already exists in QuickBooks Online', 'skip');
                }
            } else {
                try {
                    $response = $this->sendRequest(\Zend_Http_Client::POST, 'taxservice/taxcode', $params);

                    if (isset($response['TaxCodeId'])) {
                        $model = $this->taxFactory->create();
                        $this->taxResource->load($model, $code, 'tax_code');
                        $model->setQboId($response['TaxCodeId']);
                        $this->taxResource->save($model);
                        $this->addLog($id, $response['TaxCodeId']);
                        if (isset($response['TaxRateDetails'])) {
                            $model->setTaxRateValue($response['TaxRateDetails'][0]['TaxRateId']);
                            $this->taxResource->save($model);
                        }
                    } else {
                        throw new LocalizedException(
                            __('We can\'t sync the Tax Code with name like "%1"', $code)
                        );
                    }
                } catch (LocalizedException $e) {
                    $this->addLog($id, null, $e->getMessage());
                }
            }
        } else {
            $this->addLog($id, null, __('Missing Tax Agency'));
        }
    }

    /**
     * @param $code
     *
     * @return array
     * @throws LocalizedException
     */
    public function checkTaxCode($code)
    {
        $code  = str_replace("'", "\'", $code);
        $query = "select * from TaxCode WHERE Name='{$code}'";

        return $this->queryTax($query);
    }

    /**
     * @return array
     * @throws LocalizedException
     */
    public function getTaxAgencyId()
    {
        $query = "select * from TaxAgency";

        return $this->queryTax($query);
    }

    /**
     * Get France Tax id
     *
     * @param $billCountry
     *
     * @return string
     * @throws LocalizedException
     */
    public function getFRProductTax($billCountry)
    {
        if (!$billCountry) {
            return '';
        }
        if ($billCountry == 'FR') {
            $query = "select Id from TaxCode WHERE Name='20 % TVA FR'";
        } elseif ($billCountry == 'GF' || $billCountry == 'YT') {
            $query = "select Id from TaxCode WHERE Name='8,5 % TVA DOM'";
        } elseif (in_array($billCountry, $this->config->getFranceTerritories())) {
            $query = "select Id from TaxCode WHERE Name='Pas de TVA DOM'";
        } elseif (in_array($billCountry, $this->config->getEUCountries())) {
            $query = "select Id from TaxCode WHERE Name='Pas de TVA EU (Ventes)'";
        } else {
            $query = "select Id from TaxCode WHERE Name='Pas de TVA Export'";
        }

        $taxCode = $this->queryTax($query);
        if (isset($taxCode['TaxCode'][0]['Id'])) {
            return $taxCode['TaxCode'][0]['Id'];
        } else {
            return '';
        }
    }

    /**
     * Get France shipping tax id
     *
     * @param $shipCountry
     *
     * @return string
     * @throws LocalizedException
     */
    public function getFRShippingTax($shipCountry)
    {
        if (!$shipCountry) {
            return '';
        }
        if ($shipCountry == 'FR') {
            $query = "select Id from TaxCode WHERE Name='Pas de TVA FR (Ventes)'";
        } elseif ($shipCountry == 'GF' || $shipCountry == 'YT') {
            $query = "select Id from TaxCode WHERE Name='8,5 % TVA DOM'";
        } elseif (in_array($shipCountry, $this->config->getFranceTerritories())) {
            $query = "select Id from TaxCode WHERE Name='Pas de TVA DOM'";
        } elseif (in_array($shipCountry, $this->config->getEUCountries())) {
            $query = "select Id from TaxCode WHERE Name='Pas de TVA EU (Ventes)'";
        } else {
            $query = "select Id from TaxCode WHERE Name='Pas de TVA Export'";
        }

        $taxCode = $this->queryTax($query);
        if (isset($taxCode['TaxCode'][0]['Id'])) {
            return $taxCode['TaxCode'][0]['Id'];
        } else {
            return '';
        }
    }
}
