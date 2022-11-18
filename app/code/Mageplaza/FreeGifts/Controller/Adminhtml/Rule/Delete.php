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
 * @package     Mageplaza_FreeGifts
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\FreeGifts\Controller\Adminhtml\Rule;

use Exception;
use Magento\Backend\App\Action\Context;
use Magento\Catalog\Model\Session;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Registry;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Framework\View\Result\PageFactory;
use Mageplaza\FreeGifts\Controller\Adminhtml\Rule;
use Mageplaza\FreeGifts\Model\ResourceModel\Banner\CollectionFactory;
use Mageplaza\FreeGifts\Model\RuleFactory;
use Mageplaza\FreeGifts\Model\Source\Apply as ApplyType;

/**
 * Class Delete
 * @package Mageplaza\FreeGifts\Controller\Adminhtml\Rule
 */
class Delete extends Rule
{
    /**
     * @var CollectionFactory
     */
    protected $bannerCollectionFactory;

    /**
     * Delete constructor.
     *
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param Registry $registry
     * @param DateTime $datetime
     * @param RuleFactory $ruleFactory
     * @param ApplyType $applyType
     * @param Session $catalogSession
     * @param PageFactory $resultPageFactory
     * @param CollectionFactory $bannerCollectionFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        Registry $registry,
        DateTime $datetime,
        RuleFactory $ruleFactory,
        ApplyType $applyType,
        Session $catalogSession,
        PageFactory $resultPageFactory,
        CollectionFactory $bannerCollectionFactory
    ) {
        $this->bannerCollectionFactory = $bannerCollectionFactory;

        parent::__construct(
            $context,
            $pageFactory,
            $registry,
            $datetime,
            $ruleFactory,
            $applyType,
            $catalogSession,
            $resultPageFactory
        );
    }

    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        $ruleId = $this->getRequest()->getParam('rule_id');
        if ($ruleId) {
            $rule = $this->_initObject();
            $rule->load($ruleId);

            try {
                $rule->delete();
                $bannersCollection = $this->bannerCollectionFactory->create()
                    ->addFieldToFilter('rule_id', ['eq' => $ruleId]);
                foreach ($bannersCollection->getItems() as $banner) {
                    $banner->delete();
                }
                $this->messageManager->addSuccessMessage(__('You deleted the rule'));

                return $this->getResultRedirect('mpfreegifts/*/');
            } catch (Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());

                return $this->getResultRedirect('mpfreegifts/*/edit', ['rule_id' => $ruleId]);
            }
        }

        $this->messageManager->addErrorMessage(__('This rule no longer exists'));

        return $this->getResultRedirect('mpfreegifts/*/');
    }
}
