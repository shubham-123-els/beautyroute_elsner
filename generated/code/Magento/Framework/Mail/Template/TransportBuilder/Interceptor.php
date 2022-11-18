<?php
namespace Magento\Framework\Mail\Template\TransportBuilder;

/**
 * Interceptor class for @see \Magento\Framework\Mail\Template\TransportBuilder
 */
class Interceptor extends \Magento\Framework\Mail\Template\TransportBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mail\Template\FactoryInterface $templateFactory, \Magento\Framework\Mail\MessageInterface $message, \Magento\Framework\Mail\Template\SenderResolverInterface $senderResolver, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Mail\TransportInterfaceFactory $mailTransportFactory, ?\Magento\Framework\Mail\MessageInterfaceFactory $messageFactory = null, ?\Magento\Framework\Mail\EmailMessageInterfaceFactory $emailMessageInterfaceFactory = null, ?\Magento\Framework\Mail\MimeMessageInterfaceFactory $mimeMessageInterfaceFactory = null, ?\Magento\Framework\Mail\MimePartInterfaceFactory $mimePartInterfaceFactory = null, ?\Magento\Framework\Mail\AddressConverter $addressConverter = null)
    {
        $this->___init();
        parent::__construct($templateFactory, $message, $senderResolver, $objectManager, $mailTransportFactory, $messageFactory, $emailMessageInterfaceFactory, $mimeMessageInterfaceFactory, $mimePartInterfaceFactory, $addressConverter);
    }

    /**
     * {@inheritdoc}
     */
    public function setFrom($from)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrom');
        return $pluginInfo ? $this->___callPlugins('setFrom', func_get_args(), $pluginInfo) : parent::setFrom($from);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateIdentifier($templateIdentifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateIdentifier');
        return $pluginInfo ? $this->___callPlugins('setTemplateIdentifier', func_get_args(), $pluginInfo) : parent::setTemplateIdentifier($templateIdentifier);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateOptions($templateOptions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateOptions');
        return $pluginInfo ? $this->___callPlugins('setTemplateOptions', func_get_args(), $pluginInfo) : parent::setTemplateOptions($templateOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function getTransport()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTransport');
        return $pluginInfo ? $this->___callPlugins('getTransport', func_get_args(), $pluginInfo) : parent::getTransport();
    }
}
