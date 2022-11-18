<?php
namespace Magento\SalesRule\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponInterface
 */
interface CouponExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Dotdigitalgroup\Email\Api\Data\CouponAttributeInterface|null
     */
    public function getDdgExtensionAttributes();

    /**
     * @param \Dotdigitalgroup\Email\Api\Data\CouponAttributeInterface $ddgExtensionAttributes
     * @return $this
     */
    public function setDdgExtensionAttributes(\Dotdigitalgroup\Email\Api\Data\CouponAttributeInterface $ddgExtensionAttributes);
}
