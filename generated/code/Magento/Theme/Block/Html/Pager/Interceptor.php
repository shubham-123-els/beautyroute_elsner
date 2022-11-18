<?php
namespace Magento\Theme\Block\Html\Pager;

/**
 * Interceptor class for @see \Magento\Theme\Block\Html\Pager
 */
class Interceptor extends \Magento\Theme\Block\Html\Pager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getPagerUrl($params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPagerUrl');
        return $pluginInfo ? $this->___callPlugins('getPagerUrl', func_get_args(), $pluginInfo) : parent::getPagerUrl($params);
    }
}
