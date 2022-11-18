<?php
namespace Magento\AdobeStockAdminUi\Block\Adminhtml\System\Config\TestConnection;

/**
 * Interceptor class for @see \Magento\AdobeStockAdminUi\Block\Adminhtml\System\Config\TestConnection
 */
class Interceptor extends \Magento\AdobeStockAdminUi\Block\Adminhtml\System\Config\TestConnection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdobeStockClientApi\Api\ClientInterface $client, \Magento\AdobeImsApi\Api\ConfigInterface $config, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($client, $config, $context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
