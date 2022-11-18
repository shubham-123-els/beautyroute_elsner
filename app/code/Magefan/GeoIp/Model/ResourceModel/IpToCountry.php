<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * See LICENSE.txt for license details (http://opensource.org/licenses/osl-3.0.php).
 */

namespace Magefan\GeoIp\Model\ResourceModel;

/**
 * Class IpToCountry
 * @package Magefan\GeoIp\Model\ResourceModel
 */
class IpToCountry extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('magefan_geoip_country', 'id');
    }
}
