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

namespace Mageplaza\TableRateShipping\Plugin\Model\Cart;

use Magento\Framework\Api\ExtensionAttributesFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Quote\Api\Data\ShippingMethodInterface;
use Mageplaza\Core\Helper\Media;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\MethodFactory;
use Psr\Log\LoggerInterface;

/**
 * Class ShippingMethodConverter
 * @package Mageplaza\TableRateShipping\Plugin\Model\Cart
 */
class ShippingMethodConverter
{
    /**
     * @var Media
     */
    private $mediaHelper;

    /**
     * @var MethodFactory
     */
    private $methodFactory;

    /**
     * @var ExtensionAttributesFactory
     */
    private $attributesFactory;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * ShippingMethodConverter constructor.
     *
     * @param Media $mediaHelper
     * @param MethodFactory $methodFactory
     * @param ExtensionAttributesFactory $attributesFactory
     * @param LoggerInterface $logger
     */
    public function __construct(
        Media $mediaHelper,
        MethodFactory $methodFactory,
        ExtensionAttributesFactory $attributesFactory,
        LoggerInterface $logger
    ) {
        $this->mediaHelper       = $mediaHelper;
        $this->methodFactory     = $methodFactory;
        $this->attributesFactory = $attributesFactory;
        $this->logger            = $logger;
    }

    /**
     * @param \Magento\Quote\Model\Cart\ShippingMethodConverter $subject
     * @param ShippingMethodInterface $result
     *
     * @return ShippingMethodInterface
     */
    public function afterModelToDataObject(
        \Magento\Quote\Model\Cart\ShippingMethodConverter $subject,
        ShippingMethodInterface $result
    ) {
        if ($result->getCarrierCode() !== 'mptablerate') {
            return $result;
        }

        /** @var Method $method */
        $method = $this->methodFactory->create()->load($result->getMethodCode());

        $attributes = $result->getExtensionAttributes();

        if ($attributes === null) {
            $attributes = $this->attributesFactory->create(ShippingMethodInterface::class);
        }

        if ($img = $method->getImage()) {
            try {
                $attributes->setMptablerateImage($this->mediaHelper->getMediaUrl($img));
            } catch (NoSuchEntityException $e) {
                $this->logger->critical($e->getMessage());
            }
        }

        $attributes->setMptablerateComment(__($method->getComment()));

        $result->setExtensionAttributes($attributes);

        return $result;
    }
}
