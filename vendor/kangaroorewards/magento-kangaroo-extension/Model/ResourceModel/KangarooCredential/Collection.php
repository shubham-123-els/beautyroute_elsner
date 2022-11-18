<?php
/**
 * Kangaroo rewards credential
 */
namespace Kangaroorewards\Core\Model\ResourceModel\KangarooCredential;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Kangaroorewards\Core\Model\ResourceModel\KangarooCredential
 */
class Collection extends AbstractCollection
{
    /**
     * Collection constructor.
     */
    public function __construct()
    {
        $this->_init('Kangaroorewards\Core\Model\KangarooCredential',
            'Kangaroorewards\Core\Model\ResourceModel\KangarooCredential');
    }

}