<?php
/**
 * Table kangaroorewards_credential
 */
namespace Kangaroorewards\Core\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class KangarooCredential
 * @package Kangaroorewards\Core\Model\ResourceModel
 */
class KangarooCredential extends AbstractDb
{
    /**
     * KangarooCredential constructor.
     */
    protected function _construct()
    {
        $this->_init('kangaroorewards_credential', 'id');
    }
}