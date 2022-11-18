<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\Synchronization;

use Magenest\QuickBooksOnline\Model\Synchronization;
use Magento\Framework\Exception\LocalizedException;

/**
 * Class Company
 *
 * @package Magenest\QuickBooksOnline\Model\Synchronization
 */
class Company extends Synchronization
{
    /**
     * @return bool|array
     * @throws \Exception
     */
    public function getInformation()
    {
        $query    = 'Select * From CompanyInfo';
        $path     = 'query?query='.rawurlencode($query);

        $response = $this->sendRequest(\Zend_Http_Client::GET, $path);
        if (is_array($response['QueryResponse']['CompanyInfo'][0])) {
            return $response['QueryResponse']['CompanyInfo'][0];
        } else {
            $this->logger->debug($query);
            $this->logger->debug($path);
            $this->logger->debug(print_r($response, true));
            throw new LocalizedException(__('We can\'t get the company information'));
        }
    }
}
