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
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Ui\Component\MassAction\Filter;
use Mageplaza\FreeGifts\Model\ResourceModel\Banner\CollectionFactory;
use Mageplaza\FreeGifts\Model\ResourceModel\Rule\CollectionFactory as RuleCollectionFactory;

/**
 * Class MassDelete
 * @package Mageplaza\FreeGifts\Controller\Adminhtml\Rule
 */
class MassDelete extends AbstractMassAction
{
    /**
     * @var CollectionFactory
     */
    protected $bannerCollectionFactory;

    /**
     * MassDelete constructor.
     *
     * @param Context $context
     * @param Filter $filter
     * @param RuleCollectionFactory $ruleCollectionFactory
     * @param CollectionFactory $bannerCollectionFactory
     */
    public function __construct(
        Context $context,
        Filter $filter,
        RuleCollectionFactory $ruleCollectionFactory,
        CollectionFactory $bannerCollectionFactory
    ) {
        $this->bannerCollectionFactory = $bannerCollectionFactory;

        parent::__construct($context, $filter, $ruleCollectionFactory);
    }

    /**
     * @return ResponseInterface|ResultInterface
     * @throws LocalizedException
     */
    public function execute()
    {
        $rules          = $this->getRuleCollection();
        $collectionSize = $rules->getSize();
        foreach ($rules as $rule) {
            try {
                $ruleId = $rule->getId();
                $rule->delete();
                $bannersCollection = $this->bannerCollectionFactory->create()
                    ->addFieldToFilter('rule_id', ['eq' => $ruleId]);
                foreach ($bannersCollection->getItems() as $banner) {
                    $banner->delete();
                }
            } catch (Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
        $this->messageManager->addSuccessMessage(__('A total of %1 record(s) have been deleted.', $collectionSize));

        return $this->getResultRedirect('*/*/');
    }
}
