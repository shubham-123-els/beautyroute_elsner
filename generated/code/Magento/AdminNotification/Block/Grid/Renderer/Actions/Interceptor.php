<?php
namespace Magento\AdminNotification\Block\Grid\Renderer\Actions;

/**
 * Interceptor class for @see \Magento\AdminNotification\Block\Grid\Renderer\Actions
 */
class Interceptor extends \Magento\AdminNotification\Block\Grid\Renderer\Actions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Url\Helper\Data $urlHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $urlHelper, $data);
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
