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

namespace Mageplaza\TableRateShipping\Model\ResourceModel;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Mageplaza\TableRateShipping\Helper\Media;

/**
 * Class Method
 * @package Mageplaza\TableRateShipping\Model\ResourceModel
 */
class Method extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('mageplaza_tablerate_method', 'method_id');
    }

    /**
     * @param AbstractModel|\Mageplaza\TableRateShipping\Model\Method $object
     *
     * @return AbstractDb
     */
    protected function _afterLoad(AbstractModel $object)
    {
        if ($image = $object->getImage()) {
            $object->setImage(Media::TEMPLATE_MEDIA_PATH . '/' . $image);
        }

        return parent::_afterLoad($object);
    }
}
