<?php
namespace Magento\Framework\View\TemplateEngine\Php;

/**
 * Interceptor class for @see \Magento\Framework\View\TemplateEngine\Php
 */
class Interceptor extends \Magento\Framework\View\TemplateEngine\Php implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $helperFactory, array $blockVariables = [])
    {
        $this->___init();
        parent::__construct($helperFactory, $blockVariables);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\View\Element\BlockInterface $block, $fileName, array $dictionary = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($block, $fileName, $dictionary);
    }
}
