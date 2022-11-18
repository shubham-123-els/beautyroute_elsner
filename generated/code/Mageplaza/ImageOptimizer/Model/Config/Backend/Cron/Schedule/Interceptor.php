<?php
namespace Mageplaza\ImageOptimizer\Model\Config\Backend\Cron\Schedule;

/**
 * Interceptor class for @see \Mageplaza\ImageOptimizer\Model\Config\Backend\Cron\Schedule
 */
class Interceptor extends \Mageplaza\ImageOptimizer\Model\Config\Backend\Cron\Schedule implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\App\Config\ValueFactory $configValueFactory, \Magento\Framework\Message\ManagerInterface $messageManager, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, $runModelPath = '', array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $configValueFactory, $messageManager, $resource, $resourceCollection, $runModelPath, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }
}
