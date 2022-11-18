<?php
namespace Magento\CustomerGraphQl\Model\Resolver\IsSubscribed;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\IsSubscribed
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\IsSubscribed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Newsletter\Model\SubscriberFactory $subscriberFactory)
    {
        $this->___init();
        parent::__construct($subscriberFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
