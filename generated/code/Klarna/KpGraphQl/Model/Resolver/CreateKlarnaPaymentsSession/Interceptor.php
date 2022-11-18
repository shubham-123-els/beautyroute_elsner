<?php
namespace Klarna\KpGraphQl\Model\Resolver\CreateKlarnaPaymentsSession;

/**
 * Interceptor class for @see \Klarna\KpGraphQl\Model\Resolver\CreateKlarnaPaymentsSession
 */
class Interceptor extends \Klarna\KpGraphQl\Model\Resolver\CreateKlarnaPaymentsSession implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Klarna\Core\Helper\ConfigHelper $configHelper, \Klarna\Kp\Model\Session $session, \Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser)
    {
        $this->___init();
        parent::__construct($configHelper, $session, $getCartForUser);
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
