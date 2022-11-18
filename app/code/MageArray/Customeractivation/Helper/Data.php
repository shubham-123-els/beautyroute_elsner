<?php
namespace MageArray\Customeractivation\Helper;

use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Framework\App\Area;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\DataObject;
use Magento\Framework\Escaper;
use Magento\Framework\Mail\Template\TransportBuilder;
use Magento\Framework\Translate\Inline\StateInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\Store;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class Data
 * @package MageArray\Customeractivation\Helper
 */
class Data extends AbstractHelper
{
    /**
     * To check customeractivation
     */
    const XML_CONFIG_PREFIX = 'customeractivation';

    /**
     *  To check active
     */
    const XML_PATH_ACTIVE =
        'general/active';
    /**
     * To check default activation
     */
    const XML_PATH_DEFAULTACTIVATION =
        'customers/defaultactivation';
    /**
     * To check activation for group
     */
    const XML_PATH_ACTIVATIONFORGROUP =
        'customers/activationforgroup';
    /**
     * To check require activation group
     */
    const XML_PATH_REQUIREACTIVATIONGROUP =
        'customers/requireactivationgroup';
    /**
     * For alert admin
     */
    const XML_PATH_ALERTADMIN =
        'admincon/alertadmin';
    /**
     * For admin email template
     */
    const XML_PATH_ADMINEMAILTEMPLATE =
        'admincon/adminemailtemplate';
    /**
     * For admin email
     */
    const XML_PATH_ADMINEMAIL = 'admincon/adminemail';
    /**
     * For alert customer
     */
    const XML_PATH_ALERTCUSTOMER =
        'customersemail/alertcustomer';
    /**
     * For alert welcome email template
     */
    const XML_PATH_WELCOMEEMAILTEMPLATE =
        'customersemail/welcomeemailtemplate';
    /**
     * For sender detail
     */
    const XML_PATH_SENDERDETAIL =
        'customersemail/senderdetail';
    /**
     * For error message text
     */
    const XML_PATH_ERRORMESSAGETEXT =
        'message/errormessagetext';
    /**
     * For registration success message text
     */
    const XML_PATH_REGISTRACTIONSUCCESSMESSAGETEXT =
        'message/registration_success_messagetext';

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var CustomerRepositoryInterface
     */
    protected $customerRepository;

    /**
     * @var
     */
    protected $_customers;

    /**
     * @var StateInterface
     */
    protected $inlinetranslation;

    /**
     * @var TransportBuilder
     */
    protected $transportbuilder;

    /**
     * @var Escaper
     */
    protected $escaper;

    /**
     * Data constructor.
     * @param Context $context
     * @param StoreManagerInterface $storeManager
     * @param CustomerRepositoryInterface $customerRepository
     * @param StateInterface $inlineTranslation
     * @param TransportBuilder $transportBuilder
     * @param Escaper $escaper
     */
    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager,
        CustomerRepositoryInterface $customerRepository,
        StateInterface $inlineTranslation,
        TransportBuilder $transportBuilder,
        Escaper $escaper
    ) {
        parent::__construct($context);
        $this->storeManager = $storeManager;
        $this->customerRepository = $customerRepository;
        $this->inlinetranslation = $inlineTranslation;
        $this->transportbuilder = $transportBuilder;
        $this->escaper = $escaper;
    }

    /**
     * @param $path
     * @param bool $joinPrefix
     * @return mixed
     */
    public function getConfig($path, $joinPrefix = true)
    {
        if ($joinPrefix) {
            $path = self::XML_CONFIG_PREFIX . '/' . $path;
        }
        return $this->scopeConfig
            ->getValue($path, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function isActive()
    {
        return $this->getConfig(self::XML_PATH_ACTIVE);
    }

    /**
     * @param $groupId
     * @return bool|mixed
     */
    public function getDefaultActivationStatus($groupId)
    {
        $isActiveDefault = $this->getConfig(self::XML_PATH_DEFAULTACTIVATION);
        $activateByGroupEnabled = $this->getConfig(
            self::XML_PATH_ACTIVATIONFORGROUP
        );

        if (!$isActiveDefault && $activateByGroupEnabled) {
            if (in_array($groupId, $this->getCustomerActivationGroupIds())) {
                $isActive = false;
            } else {
                $isActive = true;
            }
        } else {
            $isActive = $isActiveDefault;
        }
        return $isActive;
    }

    /**
     * @return mixed
     */
    public function isCustomerActivationByGroup()
    {
        return $this->getConfig(self::XML_PATH_ACTIVATIONFORGROUP);
    }

    /**
     * @return array
     */
    public function getCustomerActivationGroupIds()
    {
        return explode(',', (string)$this->getConfig(
            self::XML_PATH_REQUIREACTIVATIONGROUP
        ));
    }

    /**
     * @return mixed
     */
    public function isSendEmailToAdmin()
    {
        return $this->getConfig(self::XML_PATH_ALERTADMIN);
    }

    /**
     * @return mixed
     */
    public function getAdminTemplate()
    {
        return $this->getConfig(self::XML_PATH_ADMINEMAILTEMPLATE);
    }

    /**
     * @return array|trim
     */
    public function getAdminEmail()
    {
        $configValue = trim((string)$this->getConfig(
            self::XML_PATH_ADMINEMAIL
        ));
        $emailIds = [];
        if ($configValue) {
            $emailIds = array_map('trim', explode(',', $configValue));
        }
        return $emailIds;
    }

    /**
     * @return mixed
     */
    public function isSendApprovalEmailToCustomer()
    {
        return $this->getConfig(self::XML_PATH_ALERTCUSTOMER);
    }

    /**
     * @return array
     */
    public function getSenderDetail()
    {
        $senderType = $this->getConfig(self::XML_PATH_SENDERDETAIL);

        $name = $this->getConfig(
            'trans_email/ident_' . $senderType . '/name',
            false
        );
        $email = $this->getConfig(
            'trans_email/ident_' . $senderType . '/email',
            false
        );

        return ['name' => $name, 'email' => $email];
    }

    /**
     * @return mixed
     */
    public function getcustAprvlEmailTemplate()
    {
        return $this->getConfig(self::XML_PATH_WELCOMEEMAILTEMPLATE);
    }

    /**
     * @return mixed
     */
    public function getErrorMessageForUser()
    {
        return $this->getConfig(self::XML_PATH_ERRORMESSAGETEXT);
    }

    /**
     * @return mixed
     */
    public function getRegistractionSuccessMessageForUser()
    {
        return $this->getConfig(self::XML_PATH_REGISTRACTIONSUCCESSMESSAGETEXT);
    }

    /**
     * @param $customerId
     * @return mixed
     */
    public function getCustomerById($customerId)
    {
        if (is_object($customerId)) {
            return $customerId;
        }
        if (!isset($this->_customers[$customerId])) {
            $this->_customers[$customerId] = $this->customerRepository
                ->getById($customerId);
        }
        return $this->_customers[$customerId];
    }

    /**
     * @param $customerId
     * @param string $attribute
     * @return null
     */
    public function getAttributeValue($customerId, $attribute = 'is_approved')
    {
        $value = null;
        $customer = $this->getCustomerById($customerId);
        if ($attribute = $customer->getCustomAttribute($attribute)) {
            $value = $attribute->getValue();
        }
        return $value;
    }

    /**
     * @param $customerId
     * @param int $value
     * @param string $attribute
     */
    public function setAttributeValue($customerId, $value = 0, $attribute = 'is_approved')
    {
        $customer = $this->getCustomerById($customerId);
        $customer->setCustomAttribute($attribute, $value);
    }

    /**
     * @param $customer
     * @return \Magento\Customer\Api\Data\CustomerInterface
     */
    public function saveCustomer($customer)
    {
        return $this->customerRepository->save($customer);
    }

    /**
     * @param $customer
     */
    public function sendApprovalEmail($customer)
    {
        if ($this->isSendApprovalEmailToCustomer($customer->getStoreId())) {
            $emailTemplate = $this->getcustAprvlEmailTemplate($customer->getStoreId());
            $customerName = $customer->getFirstname() . " " .
                $customer->getLastname();
            $dataObject = new DataObject();
            $dataObject->setName($customerName);

            $this->_sendEmail(
                $emailTemplate,
                $customer->getEmail(),
                ['data' => $dataObject],
                '',
                $customer->getStoreId()
            );
        }
    }

    /**
     * @param $customer
     */
    public function sendRegistrationEmailToAdmin($customer)
    {
        
        if ($this->isSendEmailToAdmin()) {
            
            $Email_Notify = $this->getAdminEmail();
            foreach ($Email_Notify as $mails) {
                            $emailTemplate = $this->getAdminTemplate();
                            $customerName = $customer->getFirstname() . " " .
                            $customer->getLastname();
                            $dataObject = new DataObject();
                            $dataObject->setName($customerName);
                            $dataObject->setEmail($customer->getEmail());

                            $sender = ['name' => $this->escaper->escapeHtml($customerName),
                                'email' => $this->escaper->escapeHtml($customer->getEmail())
                            ];

                            $this->_sendEmail(
                                $emailTemplate,
                                $mails,
                                ['data' => $dataObject],
                                $sender,
                                $customer->getStoreId()
                            );
            }
            
        }
    }

    /**
     * @param $emailTemplate
     * @param $sendToEmail
     * @param array $vars
     * @param null $sender
     */
    protected function _sendEmail($emailTemplate, $sendToEmail, $vars = [], $sender = null)
    {
        if (!$sender) {
            $sender = $this->getSenderDetail();
        }

        $this->inlinetranslation->suspend();
        $transport = $this->transportbuilder
            ->setTemplateIdentifier($emailTemplate)
            ->setTemplateOptions(
                [
                    'area' => Area::AREA_FRONTEND,
                    'store' => Store::DEFAULT_STORE_ID,
                ]
            )
            ->setTemplateVars($vars)
            ->setFrom($sender)
            ->addTo($sendToEmail, ScopeInterface::SCOPE_STORE)
            ->getTransport();
        $emailSent = $transport->sendMessage();
        $this->inlinetranslation->resume();
        return $emailSent;
    }
}
