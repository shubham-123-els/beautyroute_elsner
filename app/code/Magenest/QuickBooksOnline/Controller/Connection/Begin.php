<?php
/**
 * Copyright © 2020 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Connection;

use Magento\Framework\App\Action\Action;
use Magenest\QuickBooksOnline\Model\Authenticate;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\LocalizedException;

/**
 * Class Begin
 * @package Magenest\QuickBooksOnline\Controller\Connection
 */
class Begin extends Action
{
    /**
     * @var Authenticate
     */
    protected $authenticate;

    /**
     * Begin constructor.
     *
     * @param Context $context
     * @param Authenticate $authenticate
     */
    public function __construct(
        Context $context,
        Authenticate $authenticate
    ) {
        parent::__construct($context);
        $this->authenticate = $authenticate;
    }

    /**
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Redirect $redirectPage */
        $redirectPage = $this->resultFactory->create('redirect');
        $redirectPage->setPath('/');

        try {
            $link        = \Magento\Framework\App\ObjectManager::getInstance()->get('\Magento\Store\Model\StoreManagerInterface')
                    ->getStore()->getBaseUrl() . 'qbonline/connection/success';
            $redirectUrl = $this->authenticate->redirectUrl($link);
            $this->_redirect($redirectUrl);
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());

            return $redirectPage;
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());

            return $redirectPage;
        }
    }
}
