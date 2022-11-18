<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details. *
 *
 * Magenest_QuickBooksOnline extension
 * NOTICE OF LICENSE
 *
 * @category  Magenest
 * @package   Magenest_QuickBooksOnline
 * @author    Magenest JSC
 *
 */
namespace Magenest\QuickBooksOnline\Observer\Customer;

use Magenest\QuickBooksOnline\Model\Synchronization\Customer;
use Magenest\QuickBooksOnline\Observer\AbstractObserver;
use Magento\Framework\Message\ManagerInterface;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magento\Framework\App\RequestInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class AbstractCustomer
 */
abstract class AbstractCustomer extends AbstractObserver
{

    /**
     * @var ManagerInterface
     */
    protected $messageManager;
    
    /**
     * @var Customer
     */
    protected $_customer;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var QueueFactory
     */
    protected $queueFactory;

    /**
     * @var RequestInterface
     */
    protected $_request;

    /**
     * AbstractCustomer constructor.
     *
     * @param ManagerInterface $messageManager
     * @param Config $config
     * @param QueueFactory $queueFactory
     * @param Customer $customer
     * @param RequestInterface $request
     */
    public function __construct(
        ManagerInterface $messageManager,
        Config $config,
        QueueFactory $queueFactory,
        Customer $customer,
        RequestInterface $request
    ) {
        parent::__construct($messageManager, $config, $queueFactory);
        $this->_request  = $request;
        $this->_customer = $customer;
        $this->type = 'customer';
    }
}
