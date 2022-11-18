<?php
namespace Magento\Framework\Amqp\Bulk\Exchange;

/**
 * Interceptor class for @see \Magento\Framework\Amqp\Bulk\Exchange
 */
class Interceptor extends \Magento\Framework\Amqp\Bulk\Exchange implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Amqp\Config $amqpConfig, \Magento\Framework\MessageQueue\Publisher\ConfigInterface $publisherConfig, \Magento\Framework\Communication\ConfigInterface $communicationConfig, \Magento\Framework\Amqp\Exchange $exchange)
    {
        $this->___init();
        parent::__construct($amqpConfig, $publisherConfig, $communicationConfig, $exchange);
    }

    /**
     * {@inheritdoc}
     */
    public function enqueue($topic, array $envelopes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'enqueue');
        return $pluginInfo ? $this->___callPlugins('enqueue', func_get_args(), $pluginInfo) : parent::enqueue($topic, $envelopes);
    }
}
