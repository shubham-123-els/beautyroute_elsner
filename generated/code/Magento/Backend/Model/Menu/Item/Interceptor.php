<?php
namespace Magento\Backend\Model\Menu\Item;

/**
 * Interceptor class for @see \Magento\Backend\Model\Menu\Item
 */
class Interceptor extends \Magento\Backend\Model\Menu\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Model\Menu\Item\Validator $validator, \Magento\Framework\AuthorizationInterface $authorization, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Backend\Model\MenuFactory $menuFactory, \Magento\Backend\Model\UrlInterface $urlModel, \Magento\Framework\Module\ModuleListInterface $moduleList, \Magento\Framework\Module\Manager $moduleManager, array $data = [])
    {
        $this->___init();
        parent::__construct($validator, $authorization, $scopeConfig, $menuFactory, $urlModel, $moduleList, $moduleManager, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl();
    }
}
