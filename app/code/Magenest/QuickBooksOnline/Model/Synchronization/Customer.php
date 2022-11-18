<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Synchronization;

use Magenest\QuickBooksOnline\Model\Client;
use Magenest\QuickBooksOnline\Model\Log;
use Magenest\QuickBooksOnline\Model\Synchronization;
use Magento\Customer\Model\CustomerFactory as CustomerModelFactory;
use Magento\Customer\Model\ResourceModel\Customer as CustomerResource;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Action\Context;

/**
 * Class Customer
 * @package Magenest\QuickBooksOnline\Model\Sync
 * @method \Magento\Customer\Model\Customer getModel()
 */
class Customer extends Synchronization
{
    const PREFIX_GUEST = 'Guest ';

    /**
     * @var CustomerModelFactory
     */
    protected $_customerModel;

    /**
     * @var CustomerResource
     */
    protected $_customerResource;

    /**
     * Customer constructor.
     *
     * @param Client $client
     * @param Log $log
     * @param CustomerModelFactory $customer
     * @param CustomerResource $_customerResource
     * @param Context $context
     */
    public function __construct(
        Client $client,
        Log $log,
        CustomerModelFactory $customer,
        CustomerResource $_customerResource,
        Context $context
    ) {
        parent::__construct($client, $log, $context);
        $this->_customerModel    = $customer;
        $this->_customerResource = $_customerResource;
        $this->type              = 'customer';
    }

    /**
     * @param $id
     * @param bool $update
     *
     * @return mixed
     * @throws \Exception
     */
    public function sync($id, $update = false)
    {
        try {
            $model = $this->_customerModel->create();
            $this->_customerResource->load($model, $id);
            $this->setParameter(null);
            if (!$model->getId()) {
                throw new LocalizedException(__('We can\'t find the customer have Id like %1', $id));
            }
            $this->setModel($model);
            if ($qboId = $this->getQboId($model)) {
                $customer = $this->checkCustomerByQbId($qboId);
            } else {
                $email    = $model->getEmail();
                $customer = $this->checkCustomerByEmail($email);
            }
            if (!empty($customer) && !$update) {
                return $customer['Id'];
            }

            $this->prepareParams();
            $params = array_replace_recursive($this->getParameter(), $customer);


            $response = $this->sendRequest(\Zend_Http_Client::POST, 'customer', $params);
            if (isset($response['Customer']['Id'])) {
                $qboId     = (string)$response['Customer']['Id'];
                $qboIdTemp = $response['Customer']['Id'];
                $this->addLog($id, $qboId);
            }
            /**
             * registry variable used in Magenest\QuickBooksOnline\Observer\Customer\Update
             */
            $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');
            if ($registryObject->registry('check_to_syn_customer' . $id) !== true) {
                $registryObject->register('check_to_syn_customer' . $id, true);
            }

            /**
             * @var \Magenest\QuickBooksOnline\Model\Config $config
             */
            $config    = ObjectManager::getInstance()->create('Magenest\QuickBooksOnline\Model\Config');
            $companyId = (string)$config->getCompanyId();
            $qboId     = $companyId . $qboId;
            $model->setQboId($qboId);
            $this->_customerResource->saveAttribute($model, 'qbo_id');

            return isset($qboIdTemp) ? $qboIdTemp : null;
        } catch (LocalizedException $e) {
            $this->addLog($id, null, $e->getMessage());
        }

        return null;
    }

    /**
     * @param $id
     *
     * @return bool
     * @throws LocalizedException
     */
    public function checkCustomerExists($id)
    {
        $customer = $this->_customerModel->create();
        $this->_customerResource->load($customer, $id);
        if ($customer->getName()) {
            return true;
        }

        return false;
    }

    /**
     * Sync Guest Customer when place order
     *
     * @param $bill
     * @param $ship
     * @param bool $update
     *
     * @return mixed
     * @throws LocalizedException
     */
    public function syncGuest($bill, $ship, $update = false)
    {
        try {

            $firstName = trim($bill->getFirstname());
            $lastName  = trim($bill->getLastname());
//            $qboId     = $bill->getQboId();
//            if (empty($qboId)) {
            $email    = trim($bill->getEmail());
            $customer = $this->checkCustomerByEmail($email);
//            } else {
//                $customer = $this->checkCustomerByQbIdAndEmail($qboId, trim($bill->getEmail()));
//            }
            if (!empty($customer) and $update == false) {
                return $customer['Id'];
            }
            $suffix      = time();
            $displayName = $firstName . ' ' . $lastName . ' ' . $suffix;
            $params      = [
                'DisplayName'      => $displayName,
                'GivenName'        => $firstName,
                'FamilyName'       => $lastName,
                'Suffix'           => $suffix,
                'PrimaryEmailAddr' => ['Address' => $bill->getEmail()],
                'PrimaryPhone'     => ['FreeFormNumber' => mb_substr(str_replace(' ', '', $bill->getTelephone()), 0, 30)]
            ];

            $params                = str_replace($this->unSupportedChar, "", $params);
            $params['CompanyName'] = $bill->getCompany();
            $params['BillAddr']    = $this->getAddress($bill);
            if ($ship !== null) {
                $params['ShipAddr'] = $this->getAddress($ship);
            }
            $response = $this->sendRequest(\Zend_Http_Client::POST, 'customer', $params);

            if (isset($response['Customer']['Id'])) {
                $qboId = $response['Customer']['Id'];
                $this->addLog(self::PREFIX_GUEST . $bill->getParentId(), $qboId);
            }

            if (is_array($response)) {
                return $response['Customer']['Id'];
            } else {
                throw new LocalizedException(__('Can\'t sync guest to QuickBooks Online'));
            }
        } catch (\Exception $exception) {
            $this->addLog(self::PREFIX_GUEST . $bill->getParentId(), null, $exception->getMessage());
            throw new LocalizedException(__('Can\'t sync guest to QuickBooks Online'));
        }
    }

    /**
     * @return $this
     */
    protected function prepareParams()
    {
        $model = $this->getModel();

        $givenName  = mb_substr(trim($model->getFirstname()), 0, 25);
        $familyName = mb_substr(trim($model->getLastname()), 0, 100);
        $suffix     = mb_substr((string)$this->getModel()->getId(), 0, 10);

        $params = [
            'DisplayName'      => $givenName . ' ' . $familyName . ' ' . $suffix,
            'GivenName'        => $givenName,
            'FamilyName'       => $familyName,
            'Suffix'           => $suffix,
            'PrimaryEmailAddr' => ['Address' => mb_substr($model->getEmail(), 0, 100)]
        ];

        $params = str_replace($this->unSupportedChar, "", $params);

        $this->setParameter($params);

        // set currency
        $this->setCurrencyParams();

        // set billing address
        $this->setBillingAddressParams();

        // set shipping address
        $this->setShippingAddressParams();

        return $this;
    }

    /**
     * @return $this
     */
    public function setCurrencyParams()
    {
        //TODO in the next version
        return $this;
    }

    /**
     * @return $this
     */
    public function setBillingAddressParams()
    {
        $billAddress = $this->getModel()->getDefaultBillingAddress();
        if ($billAddress) {
            $params = [
                'PrimaryPhone' => ['FreeFormNumber' => mb_substr(str_replace(' ', '', $billAddress->getTelephone()), 0, 30)],
                'CompanyName'  => mb_substr($billAddress->getCompany(), 0, 100),
                'BillAddr'     => $this->getAddress($billAddress)
            ];
        } else {
            $params = [
                'PrimaryPhone' => ['FreeFormNumber' => ''],
                'CompanyName'  => '',
                'BillAddr'     => [
                    'Line1'                  => '',
                    'Line2'                  => '',
                    'Line3'                  => '',
                    'City'                   => '',
                    'Country'                => '',
                    'CountrySubDivisionCode' => '',
                    'PostalCode'             => ''
                ]
            ];
        }
        $this->setParameter($params);

        return $this;
    }

    /**
     * @return $this
     */
    public function setShippingAddressParams()
    {
        $shipAddress = $this->getModel()->getDefaultShippingAddress();
        if ($shipAddress) {
            $params = [
                'ShipAddr' => $this->getAddress($shipAddress)
            ];
        } else {
            $params = [
                'ShipAddr' => [
                    'Line1'                  => '',
                    'Line2'                  => '',
                    'Line3'                  => '',
                    'City'                   => '',
                    'Country'                => '',
                    'CountrySubDivisionCode' => '',
                    'PostalCode'             => ''
                ]
            ];
        }
        $this->setParameter($params);

        return $this;
    }

    /**
     * @param $qboId
     * @param $email
     *
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function checkCustomerByQbId($qboId)
    {
        $query = "SELECT Id, SyncToken FROM Customer";
        $query .= " WHERE Id='{$qboId}'";

        return $this->query($query);
    }

    /**
     * @param $email
     *
     * @return array
     * @throws LocalizedException
     */
    public function checkCustomerByEmail($email)
    {
        $query = "SELECT Id, SyncToken FROM Customer";
        $query .= " WHERE PrimaryEmailAddr='{$email}'";

        return $this->query($query);
    }

    /**
     * @param $params
     *
     * @return mixed
     * @throws LocalizedException
     */
    public function getCustomer($params)
    {
        $query = "select * from Customer maxresults 1000";
        if (isset($params['type']) && $params['type'] == 'time_start') {
            $input = $params['from'];
            $query = "select * from Customer where MetaData.LastUpdatedTime >= '$input'";
        }
        if (isset($params['type']) && $params['type'] == 'time_around') {
            $from  = $params['from'];
            $to    = $params['to'];
            $query = "select * from Customer where MetaData.LastUpdatedTime >= '$from' and MetaData.LastUpdatedTime <= '$to'";
        }
        if (isset($params['type']) && $params['type'] == 'name') {
            $input = $params['input'];
            $query = "select * from Customer where FamilyName Like '$input'";
        }
        if (isset($params['type']) && $params['type'] == 'id') {
            $input = $params['input'];
            $query = "select * from Customer where  Id = '$input'";
        }
        $path      = 'query?query=' . rawurlencode($query);
        $responses = $this->sendRequest(\Zend_Http_Client::GET, $path);
        $result    = $responses['QueryResponse'];

        return $result;
    }

    /**
     * @return mixed
     * @throws LocalizedException
     */
    public function getCountCustomer()
    {
        $query     = "select COUNT(*) from Customer ";
        $path      = 'query?query=' . rawurlencode($query);
        $responses = $this->sendRequest(\Zend_Http_Client::GET, $path);
        $result    = $responses['QueryResponse'];

        return $result['totalCount'];
    }

    /**
     * @param $start
     *
     * @return mixed
     * @throws LocalizedException
     */
    public function listCustomer($start)
    {
        $query     = "select * from Customer startposition {$start} maxresults 100";
        $path      = 'query?query=' . rawurlencode($query);
        $responses = $this->sendRequest(\Zend_Http_Client::GET, $path);

        return $responses['QueryResponse'];
    }
}
