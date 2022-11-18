<?php
namespace Magento\Framework\View\Element\UiComponent\DataProvider\Sanitizer;

/**
 * Interceptor class for @see \Magento\Framework\View\Element\UiComponent\DataProvider\Sanitizer
 */
class Interceptor extends \Magento\Framework\View\Element\UiComponent\DataProvider\Sanitizer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function sanitize(array $data) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sanitize');
        return $pluginInfo ? $this->___callPlugins('sanitize', func_get_args(), $pluginInfo) : parent::sanitize($data);
    }

    /**
     * {@inheritdoc}
     */
    public function sanitizeComponentMetadata(array $meta) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sanitizeComponentMetadata');
        return $pluginInfo ? $this->___callPlugins('sanitizeComponentMetadata', func_get_args(), $pluginInfo) : parent::sanitizeComponentMetadata($meta);
    }
}
