<?php
namespace Magento\SalesRule\Api\Data;

/**
 * Extension class for @see \Magento\SalesRule\Api\Data\CouponInterface
 */
class CouponExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CouponExtensionInterface
{
    /**
     * @return \Dotdigitalgroup\Email\Api\Data\CouponAttributeInterface|null
     */
    public function getDdgExtensionAttributes()
    {
        return $this->_get('ddg_extension_attributes');
    }

    /**
     * @param \Dotdigitalgroup\Email\Api\Data\CouponAttributeInterface $ddgExtensionAttributes
     * @return $this
     */
    public function setDdgExtensionAttributes(\Dotdigitalgroup\Email\Api\Data\CouponAttributeInterface $ddgExtensionAttributes)
    {
        $this->setData('ddg_extension_attributes', $ddgExtensionAttributes);
        return $this;
    }
}
