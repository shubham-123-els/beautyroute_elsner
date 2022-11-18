<?php
namespace Magento\AdminNotification\Block\Grid\Renderer\Notice;

/**
 * Interceptor class for @see \Magento\AdminNotification\Block\Grid\Renderer\Notice
 */
class Interceptor extends \Magento\AdminNotification\Block\Grid\Renderer\Notice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\DataObject $row)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($row);
    }
}
