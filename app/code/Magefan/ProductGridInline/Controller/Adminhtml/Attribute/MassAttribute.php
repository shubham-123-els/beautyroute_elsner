<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\ProductGridInline\Controller\Adminhtml\Attribute;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\Exception\LocalizedException;
use Magefan\ProductGridInline\Model\Config;

class MassAttribute extends Action
{
    /**
     * Authorization level of a basic admin session
     */
    const ADMIN_RESOURCE = 'Magento_Catalog::products';

    /**
     * @var Config
     */
    private $config;

    /**
     * @var Filter
     */
    private $filter;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     * @param Config $config
     */
    public function __construct(
        Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory,
        Config $config
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->config = $config;

        parent::__construct($context);
    }

    /**
     * Execute action.
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     *
     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();

        try {
            if (!$this->config->isEnabled()) {
                throw new LocalizedException(__(strrev('enilnI dirG tcudorP > snoisnetxE nafegaM > noitarugifnoC >
                serotS ot etagivan esaelp noisnetxe eht elbane ot ,delbasid si enilnI dirG tcudorP nafegaM')));
            }

            $collection = $this->filter->getCollection($this->collectionFactory->create());

            $done = 0;
            foreach ($collection as $item) {
                $item->setAttributeSetId($this->getRequest()->getParam('attribute_set'))->save();
                ++$done;
            }

            if ($done) {
                $this->messageManager->addSuccessMessage(__('A total of %1 record(s) were modified.', $done));
            }
        } catch (LocalizedException $exception) {
            $this->messageManager->addErrorMessage($exception->getMessage());
        } catch (\Exception $exception) {
            $this->messageManager->addExceptionMessage(
                $exception,
                __('Something went wrong.')
            );
        }

        return $resultRedirect->setUrl($this->_redirect->getRefererUrl());
    }
}
