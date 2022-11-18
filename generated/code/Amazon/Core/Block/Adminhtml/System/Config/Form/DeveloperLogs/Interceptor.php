<?php
namespace Amazon\Core\Block\Adminhtml\System\Config\Form\DeveloperLogs;

/**
 * Interceptor class for @see \Amazon\Core\Block\Adminhtml\System\Config\Form\DeveloperLogs
 */
class Interceptor extends \Amazon\Core\Block\Adminhtml\System\Config\Form\DeveloperLogs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Magento\Backend\Model\UrlInterface $urlBuilder, $data = [])
    {
        $this->___init();
        parent::__construct($context, $directoryList, $urlBuilder, $data);
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
