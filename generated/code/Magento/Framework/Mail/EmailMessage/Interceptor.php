<?php
namespace Magento\Framework\Mail\EmailMessage;

/**
 * Interceptor class for @see \Magento\Framework\Mail\EmailMessage
 */
class Interceptor extends \Magento\Framework\Mail\EmailMessage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mail\MimeMessageInterface $body, array $to, \Magento\Framework\Mail\MimeMessageInterfaceFactory $mimeMessageFactory, \Magento\Framework\Mail\AddressFactory $addressFactory, ?array $from = null, ?array $cc = null, ?array $bcc = null, ?array $replyTo = null, ?\Magento\Framework\Mail\Address $sender = null, ?string $subject = '', ?string $encoding = 'utf-8', ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($body, $to, $mimeMessageFactory, $addressFactory, $from, $cc, $bcc, $replyTo, $sender, $subject, $encoding, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($body)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBody');
        return $pluginInfo ? $this->___callPlugins('setBody', func_get_args(), $pluginInfo) : parent::setBody($body);
    }
}
