<?php
namespace Magento\Backend\Block\Menu;

/**
 * Interceptor class for @see \Magento\Backend\Block\Menu
 */
class Interceptor extends \Magento\Backend\Block\Menu implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\UrlInterface $url, \Magento\Backend\Model\Menu\Filter\IteratorFactory $iteratorFactory, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Backend\Model\Menu\Config $menuConfig, \Magento\Framework\Locale\ResolverInterface $localeResolver, array $data = [], ?\Magento\Backend\Block\MenuItemChecker $menuItemChecker = null, ?\Magento\Backend\Block\AnchorRenderer $anchorRenderer = null, ?\Magento\Framework\App\Route\ConfigInterface $routeConfig = null)
    {
        $this->___init();
        parent::__construct($context, $url, $iteratorFactory, $authSession, $menuConfig, $localeResolver, $data, $menuItemChecker, $anchorRenderer, $routeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function renderNavigation($menu, $level = 0, $limit = 0, $colBrakes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderNavigation');
        return $pluginInfo ? $this->___callPlugins('renderNavigation', func_get_args(), $pluginInfo) : parent::renderNavigation($menu, $level, $limit, $colBrakes);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
