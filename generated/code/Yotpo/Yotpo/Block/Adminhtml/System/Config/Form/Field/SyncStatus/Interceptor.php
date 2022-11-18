<?php
namespace Yotpo\Yotpo\Block\Adminhtml\System\Config\Form\Field\SyncStatus;

/**
 * Interceptor class for @see \Yotpo\Yotpo\Block\Adminhtml\System\Config\Form\Field\SyncStatus
 */
class Interceptor extends \Yotpo\Yotpo\Block\Adminhtml\System\Config\Form\Field\SyncStatus implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Yotpo\Yotpo\Model\Config $yotpoConfig, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory, \Yotpo\Yotpo\Model\SyncFactory $yotpoSyncFactory, \Magento\Store\Model\App\Emulation $appEmulation, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $yotpoConfig, $orderCollectionFactory, $yotpoSyncFactory, $appEmulation, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
