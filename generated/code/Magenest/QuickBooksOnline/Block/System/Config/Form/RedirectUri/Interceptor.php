<?php
namespace Magenest\QuickBooksOnline\Block\System\Config\Form\RedirectUri;

/**
 * Interceptor class for @see \Magenest\QuickBooksOnline\Block\System\Config\Form\RedirectUri
 */
class Interceptor extends \Magenest\QuickBooksOnline\Block\System\Config\Form\RedirectUri implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
