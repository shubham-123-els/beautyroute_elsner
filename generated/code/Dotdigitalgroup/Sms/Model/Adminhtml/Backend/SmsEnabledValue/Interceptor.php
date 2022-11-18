<?php
namespace Dotdigitalgroup\Sms\Model\Adminhtml\Backend\SmsEnabledValue;

/**
 * Interceptor class for @see \Dotdigitalgroup\Sms\Model\Adminhtml\Backend\SmsEnabledValue
 */
class Interceptor extends \Dotdigitalgroup\Sms\Model\Adminhtml\Backend\SmsEnabledValue implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection, \Dotdigitalgroup\Sms\Model\Account $account, \Dotdigitalgroup\Sms\Model\Config\TransactionalSms $smsConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $account, $smsConfig, $data);
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
