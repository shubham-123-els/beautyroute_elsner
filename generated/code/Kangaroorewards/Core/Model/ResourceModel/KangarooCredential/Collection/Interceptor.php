<?php
namespace Kangaroorewards\Core\Model\ResourceModel\KangarooCredential\Collection;

/**
 * Interceptor class for @see \Kangaroorewards\Core\Model\ResourceModel\KangarooCredential\Collection
 */
class Interceptor extends \Kangaroorewards\Core\Model\ResourceModel\KangarooCredential\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
