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
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\MethodFactory;
use Mageplaza\TableRateShipping\Model\ResourceModel\Method as MethodResource;
use Psr\Log\LoggerInterface;
use RuntimeException;

/**
 * Class InlineEdit
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class InlineEdit extends Action
{
    /**
     * @var JsonFactory
     */
    protected $jsonFactory;

    /**
     * @var MethodFactory
     */
    protected $methodFactory;

    /**
     * @var MethodResource
     */
    protected $methodResource;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * InlineEdit constructor.
     *
     * @param Context $context
     * @param JsonFactory $jsonFactory
     * @param MethodFactory $methodFactory
     * @param MethodResource $methodResource
     * @param LoggerInterface $logger
     */
    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        MethodFactory $methodFactory,
        MethodResource $methodResource,
        LoggerInterface $logger
    ) {
        $this->jsonFactory    = $jsonFactory;
        $this->methodFactory  = $methodFactory;
        $this->methodResource = $methodResource;
        $this->logger         = $logger;

        parent::__construct($context);
    }

    /**
     * @return ResultInterface
     */
    public function execute()
    {
        /** @var Json $resultJson */
        $resultJson = $this->jsonFactory->create();
        $error      = false;
        $messages   = [];
        $items      = $this->getRequest()->getParam('items', []);

        if (empty($items) && !$this->getRequest()->getParam('isAjax')) {
            return $resultJson->setData([
                'messages' => [__('Please correct the data sent.')],
                'error'    => true,
            ]);
        }

        foreach (array_keys($items) as $objId) {
            /** @var Method $object */
            $object = $this->methodFactory->create();
            $this->methodResource->load($object, $objId);

            try {
                $object->addData($items[$objId]);
                $this->methodResource->save($object);
            } catch (RuntimeException $e) {
                $messages[] = $this->getErrorWithRuleId($object, $e->getMessage());
                $error      = true;
            } catch (Exception $e) {
                $messages[] = $this->getErrorWithRuleId($object, __('Something went wrong while saving the method.'));
                $error      = true;

                $this->logger->critical($e);
            }
        }

        return $resultJson->setData(compact('messages', 'error'));
    }

    /**
     * Add object id to error message
     *
     * @param Method $object
     * @param string $errorText
     *
     * @return string
     */
    public function getErrorWithRuleId(Method $object, $errorText)
    {
        return '[Method ID: ' . $object->getId() . '] ' . $errorText;
    }
}
