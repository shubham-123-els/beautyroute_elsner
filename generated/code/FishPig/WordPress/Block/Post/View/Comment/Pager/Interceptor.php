<?php
namespace FishPig\WordPress\Block\Post\View\Comment\Pager;

/**
 * Interceptor class for @see \FishPig\WordPress\Block\Post\View\Comment\Pager
 */
class Interceptor extends \FishPig\WordPress\Block\Post\View\Comment\Pager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \FishPig\WordPress\Model\OptionManager $optionManager, \FishPig\WordPress\Model\Url $wpUrl, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $optionManager, $wpUrl, $data);
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
