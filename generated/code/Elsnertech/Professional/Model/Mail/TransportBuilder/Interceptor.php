<?php
namespace Elsnertech\Professional\Model\Mail\TransportBuilder;

/**
 * Interceptor class for @see \Elsnertech\Professional\Model\Mail\TransportBuilder
 */
class Interceptor extends \Elsnertech\Professional\Model\Mail\TransportBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mail\Template\FactoryInterface $templateFactory, \Magento\Framework\Mail\MessageInterface $message, \Magento\Framework\Mail\Template\SenderResolverInterface $senderResolver, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Mail\TransportInterfaceFactory $mailTransportFactory, \Magento\Framework\Mail\MessageInterfaceFactory $messageFactory, \Magento\Framework\Mail\EmailMessageInterfaceFactory $emailMessageInterfaceFactory, \Magento\Framework\Mail\MimeMessageInterfaceFactory $mimeMessageInterfaceFactory, \Magento\Framework\Mail\MimePartInterfaceFactory $mimePartInterfaceFactory, \Magento\Framework\Mail\AddressConverter $addressConverter, \Laminas\Mime\PartFactory $partFactory)
    {
        $this->___init();
        parent::__construct($templateFactory, $message, $senderResolver, $objectManager, $mailTransportFactory, $messageFactory, $emailMessageInterfaceFactory, $mimeMessageInterfaceFactory, $mimePartInterfaceFactory, $addressConverter, $partFactory);
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
