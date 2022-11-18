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

namespace Mageplaza\TableRateShipping\Controller\Adminhtml\Method;

use Exception;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Magento\Ui\Component\MassAction\Filter;
use Mageplaza\TableRateShipping\Controller\Adminhtml\AbstractMethod;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Helper\Media;
use Mageplaza\TableRateShipping\Model\MethodFactory;
use Mageplaza\TableRateShipping\Model\RateFactory;
use Mageplaza\TableRateShipping\Model\ResourceModel\Method as MethodResource;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate as RateResource;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate\CollectionFactory;
use Psr\Log\LoggerInterface;

/**
 * Class Save
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class Duplicate extends AbstractMethod
{
    /**
     * @var CollectionFactory
     */
    private $rateCollectionFactory;

    /**
     * @var RateFactory
     */
    private $rateFactory;

    /**
     * @var RateResource
     */
    private $rateResource;

    /**
     * Duplicate constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param Registry $registry
     * @param Filter $filter
     * @param Data $helper
     * @param Media $media
     * @param MethodFactory $methodFactory
     * @param MethodResource $methodResource
     * @param LoggerInterface $logger
     * @param CollectionFactory $rateCollectionFactory
     * @param RateFactory $rateFactory
     * @param RateResource $rateResource
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        Registry $registry,
        Filter $filter,
        Data $helper,
        Media $media,
        MethodFactory $methodFactory,
        MethodResource $methodResource,
        LoggerInterface $logger,
        CollectionFactory $rateCollectionFactory,
        RateFactory $rateFactory,
        RateResource $rateResource
    ) {
        $this->rateCollectionFactory = $rateCollectionFactory;
        $this->rateFactory           = $rateFactory;
        $this->rateResource          = $rateResource;

        parent::__construct(
            $context,
            $resultPageFactory,
            $registry,
            $filter,
            $helper,
            $media,
            $methodFactory,
            $methodResource,
            $logger
        );
    }

    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        $method = $this->_initMethod();

        if (!$id = $method->getId()) {
            return $this->_redirect('*/*/');
        }

        if ($image = $method->getImage()) {
            $method->setImage(str_replace(Media::TEMPLATE_MEDIA_PATH . '/', '', $image));
        }
        $method->setId(null);

        $collection = $this->rateCollectionFactory->create()->addFieldToFilter('method_id', $id);

        try {
            $this->methodResource->save($method);

            $newId = $method->getId();

            foreach ($collection->getItems() as $rate) {
                $newRate = $this->rateFactory->create();

                $newRate->setData($rate->getData())->setId(null)->setMethodId($newId);

                $this->rateResource->save($newRate);
            }

            $this->messageManager->addSuccessMessage(__('The method has been duplicated.'));

            return $this->_redirect('*/*/edit', ['id' => $newId, '_current' => true]);
        } catch (Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());

            $this->logger->critical($e);

            return $this->_redirect('*/*/edit', ['id' => $id, '_current' => true]);
        }
    }
}
