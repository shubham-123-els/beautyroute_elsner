<?php
namespace Vertex\Tax\Block\Adminhtml\Config\Form\Field\Version;

/**
 * Interceptor class for @see \Vertex\Tax\Block\Adminhtml\Config\Form\Field\Version
 */
class Interceptor extends \Vertex\Tax\Block\Adminhtml\Config\Form\Field\Version implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Filesystem\File\ReadFactory $readFactory, \Magento\Framework\Serialize\Serializer\Json $serializer, \Magento\Framework\Config\CacheInterface $cache, \Magento\Framework\App\Utility\Files $files, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $readFactory, $serializer, $cache, $files, $data);
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
