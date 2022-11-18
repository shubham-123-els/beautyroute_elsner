<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

declare(strict_types=1);

namespace Magefan\ProductGridInline\Controller\Adminhtml\Inline;

use Magento\Framework\Message\MessageInterface;
use Magefan\ProductGridInline\Model\Config;

class Edit extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     */
    const ADMIN_RESOURCE = 'Magento_Catalog::products';

    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    private $resultJsonFactory;

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\Action
     */
    private $action;

    /**
     * @var \Magento\Framework\Indexer\IndexerRegistry
     */
    private $indexerRegistry;

    /**
     * @var \Magento\Catalog\Model\Indexer\Product\Flat\Processor
     */
    private $productFlatIndexerProcessor;

    /**
     * @var \Magento\Store\Model\App\Emulation
     */
    private $emulation;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var mixed
     */
    private $sourceItemsSaveInterface;

    /**
     * @var mixed
     */
    private $sourceItemInterfaceFactory;

    /**
     * @var \Magento\Catalog\Api\CategoryLinkManagementInterface
     */
    private $categoryLinkManagement;

    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     * @param \Magento\Catalog\Model\ResourceModel\Product\Action $action
     * @param \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry
     * @param \Magento\Catalog\Model\Indexer\Product\Flat\Processor $productFlatIndexerProcessor
     * @param \Magento\Store\Model\App\Emulation $emulation
     * @param \Psr\Log\LoggerInterface $logger
     * @param Config $config
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ResourceModel\Product\Action $action,
        \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry,
        \Magento\Catalog\Model\Indexer\Product\Flat\Processor $productFlatIndexerProcessor,
        \Magento\Store\Model\App\Emulation $emulation,
        \Psr\Log\LoggerInterface $logger,
        Config $config,
        \Magento\Catalog\Api\CategoryLinkManagementInterface $categoryLinkManagement = null
    ) {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->productRepository = $productRepository;
        $this->action = $action;
        $this->indexerRegistry = $indexerRegistry;
        $this->productFlatIndexerProcessor = $productFlatIndexerProcessor;
        $this->emulation = $emulation;
        $this->logger = $logger;
        $this->config = $config;
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $this->categoryLinkManagement = $categoryLinkManagement ?: $objectManager->create(
            \Magento\Catalog\Api\CategoryLinkManagementInterface::class
        );
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Json $resultJson */
        $resultJson = $this->resultJsonFactory->create();

        if (!$this->config->isEnabled()) {
            return $resultJson->setData([
                'messages' => [__(strrev('enilnI dirG tcudorP > snoisnetxE nafegaM > noitarugifnoC > serotS ot etagivan
esaelp noisnetxe eht elbane ot ,delbasid si enilnI dirG tcudorP nafegaM'))],
                'error' => true,
            ]);
        }

        $postItems = $this->getRequest()->getParam('items', []);
        if (!($this->getRequest()->getParam('isAjax') && count($postItems))) {
            return $resultJson->setData([
                'messages' => [__('Please correct the data sent.')],
                'error' => true,
            ]);
        }

        foreach ($postItems as $productId => $data) {
            foreach ($data as $key => $value) {
                if ($value == 'dont_save') {
                    unset($postItems[$productId][$key]);
                }
            }
        }

        $this->getRequest()->setParam('items', $postItems);

        foreach ($postItems as $productId => $data) {

            try {

                if (!empty($data['quantity_per_source'])) {
                    $sources = json_decode($data['quantity_per_source'], true);

                    if (is_array($sources)) {
                        foreach ($sources as $key => $source) {
                            $sourceItem = $this->getSourceItemInterfaceFactory()->create();
                            $sourceItem->setSourceCode($source['source_code']);
                            $sourceItem->setSku($data['sku']);
                            $sourceItem->setQuantity((float)$source['qty']);
                            $sourceItem->setStatus(1);
                            $this->getSourceItemsSaveInterface()->execute([$sourceItem]);
                        }
                    }
                }

                $storeId = 0;

                $this->emulation->startEnvironmentEmulation($storeId, 'adminhtml');

                $product = $this->productRepository->getById($productId, true, $storeId);

                $newSku = null;
                if (!empty($data['sku'])) {
                    if ($product->getSku() != $data['sku']) {
                        $newSku = $data['sku'];
                    }
                    unset($data['sku']);
                }

                if (isset($data['qty']) && is_numeric($data['qty'])) {
                    $data['quantity_and_stock_status'] = [
                        'is_in_stock' => ($data['qty'] > 0),
                        'qty' => $data['qty']
                    ];
                }

                $product->addData($data);
                $product->setData('store_id', $storeId);
                $this->productRepository->save($product);

                if ($newSku) {
                    $product->setSku($newSku)->save();
                }

                if (!empty($data['category'])) {
                    $this->categoryLinkManagement->assignProductToCategories($product->getSku(), $data['category']);
                }

                $this->emulation->stopEnvironmentEmulation();
            } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
                $this->getMessageManager()->addErrorMessage(__('Product ID %1 does not exists', $product->getId()));
                $this->logger->critical($e);
            } catch (\Magento\Framework\Exception\InputException $e) {
                $this->getMessageManager()->addErrorMessage($this->getErrorWithProductId($product, $e->getMessage()));
                $this->logger->critical($e);
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->getMessageManager()->addErrorMessage($this->getErrorWithProductId($product, $e->getMessage()));
                $this->logger->critical($e);
            } catch (\Exception $e) {
                $this->getMessageManager()->addErrorMessage(
                    $this->getErrorWithProductId($product, 'We can\'t save the product.')
                );
                $this->logger->critical($e);
            }
        }

        return $resultJson->setData([
            'messages' => $this->getErrorMessages(),
            'error' => $this->isErrorExists()
        ]);
    }

    /**
     * Get array with errors
     *
     * @return array
     */
    private function getErrorMessages()
    {
        $messages = [];
        foreach ($this->getMessageManager()->getMessages()->getErrors() as $error) {
            $messages[] = $error->getText();
        }
        return $messages;
    }

    /**
     * Check if errors exists
     *
     * @return bool
     */
    private function isErrorExists()
    {
        return (bool)$this->getMessageManager()->getMessages(true)->getCountByType(MessageInterface::TYPE_ERROR);
    }

    /**
     * Add page title to error message
     *
     * @param $product
     * @param $errorText
     * @return string
     */
    private function getErrorWithProductId($product, $errorText)
    {
        return '[Product ID: ' . $product->getId() . '] ' . __($errorText);
    }

    /**
     * Retrive SourceItemsSaveInterface, use object Manager for old Magento versions
     *
     * @return SourceItemsSaveInterface
     */
    private function getSourceItemsSaveInterface()
    {
        if (null === $this->sourceItemsSaveInterface) {
             $this->sourceItemsSaveInterface = \Magento\Framework\App\ObjectManager::getInstance()
                ->get(\Magento\InventoryApi\Api\SourceItemsSaveInterface::class);
        }

        return $this->sourceItemsSaveInterface;
    }

    /**
     * Retrive sourceItemInterfaceFactory, use object Manager for old Magento versions
     *
     * @return sourceItemInterfaceFactory
     */
    private function getSourceItemInterfaceFactory()
    {
        if (null === $this->sourceItemInterfaceFactory) {
             $this->sourceItemInterfaceFactory = \Magento\Framework\App\ObjectManager::getInstance()
                ->get(\Magento\InventoryApi\Api\Data\SourceItemInterfaceFactory::class);
        }

        return $this->sourceItemInterfaceFactory;
    }
}
