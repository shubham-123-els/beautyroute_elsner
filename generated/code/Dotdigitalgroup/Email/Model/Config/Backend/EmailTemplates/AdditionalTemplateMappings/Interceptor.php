<?php
namespace Dotdigitalgroup\Email\Model\Config\Backend\EmailTemplates\AdditionalTemplateMappings;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Model\Config\Backend\EmailTemplates\AdditionalTemplateMappings
 */
class Interceptor extends \Dotdigitalgroup\Email\Model\Config\Backend\EmailTemplates\AdditionalTemplateMappings implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Model\Email\TemplateFactory $templateFactory, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null, array $data = [])
    {
        $this->___init();
        parent::__construct($templateFactory, $helper, $context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $serializer, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }
}
