<?php
namespace Elsnertech\Professional\Model;

use Psr\Log\LoggerInterface;
use Magento\Framework\App\Area;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Exception\MailException;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Translate\Inline\StateInterface;
use Magento\Cms\Api\BlockRepositoryInterface;
use Elsnertech\Professional\Model\FileManagementInterface;
use Elsnertech\Professional\Model\Mail\TransportBuilder;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Directory\Model\CountryFactory;


class Emailsender extends AbstractHelper
{
    const EMAIL_TEMPLATE = 'email_section/sendmail/email_template';

    const EMAIL_SERVICE_ENABLE = 'email_section/sendmail/enabled';

    /**
     * @var BlockRepositoryInterface
     */
    private $blockRepository;

    /**
     * @var StateInterface
     */
    private $inlineTranslation;

    /**
     * @var TransportBuilder
     */
    private $transportBuilder;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var FileManagementInterface
     */
    private $fileManagement;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var CountryFactory
     */
    private $countryFactory;

    /**
     * Data constructor.
     * @param Context $context
     * @param StoreManagerInterface $storeManager
     * @param TransportBuilder $transportBuilder
     * @param StateInterface $inlineTranslation
     * @param LoggerInterface $logger
     */
    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager,
        FileManagementInterface $fileManagement,
        TransportBuilder $transportBuilder,
        ScopeConfigInterface $scopeConfig,
        BlockRepositoryInterface $blockRepository,
        StateInterface $inlineTranslation,
        LoggerInterface $logger,
        CountryFactory $countryFactory
    )
    {
        $this->storeManager = $storeManager;
        $this->transportBuilder = $transportBuilder;
        $this->fileManagement = $fileManagement;
        $this->blockRepository = $blockRepository;
        $this->scopeConfig = $scopeConfig;
        $this->inlineTranslation = $inlineTranslation;
        $this->logger = $logger;
        $this->countryFactory = $countryFactory;
        parent::__construct($context);
    }

    /**
     * Send Mail
     *
     * @return $this
     *
     * @throws LocalizedException
     * @throws MailException
     */
    public function sendMail($post)
    {   
        $templateId = 'eyetest_email_template';
        $fromEmail = $this->scopeConfig->getValue("helloworld/general/senderemail");
        $fromName = $this->scopeConfig->getValue("helloworld/general/emailtitle");
        
        $tosupportEmail = $this->scopeConfig->getValue('trans_email/ident_support/email',ScopeInterface::SCOPE_STORE);
        $tocustom1Email = $this->scopeConfig->getValue('trans_email/ident_custom1/email',ScopeInterface::SCOPE_STORE);
        $tocustom2Email = $this->scopeConfig->getValue('trans_email/ident_custom2/email',ScopeInterface::SCOPE_STORE);

        if($post['country_id']){
            $countryName = $this->getCountryname($post['country_id']);
        } else {
            $countryName = '';
        }

        $templateVars = [
            'firstname' => $post['firstname'],
            'lastname' => $post['lastname'],
            'email' => $post['email'],
            'salon' => $post['salon'],
            'street1' => $post['street1'],
            'street2' => $post['street2'],
            'city' => $post['city'],
            'country_name' => $countryName,
            'postcode' => $post['postcode'],
            'phonenumber' => $post['phonenumber']
        ];

        $storeId = $this->storeManager->getStore()->getId();
        $from = ['email' => $fromEmail, 'name' => $fromName];
        $this->inlineTranslation->suspend();

        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $templateOptions = [
            'area' => \Magento\Framework\App\Area::AREA_FRONTEND,
            'store' => $storeId
        ];

        $this->transportBuilder->setTemplateIdentifier($templateId, $storeScope)
            ->setTemplateOptions($templateOptions)
            ->setTemplateVars($templateVars)
            ->setFrom($from)
            ->addTo([$tosupportEmail,$tocustom1Email,$tocustom2Email]);


        if (!empty($post['certificate'])) {
            $certificatefile = $post['certificate'];
            if (!empty($certificatefile['name'])) {
                $this->transportBuilder->addAttachment(
                    $this->fileManagement->getFileContent($certificatefile['tmp_name']),
                    $certificatefile['name'],
                    $certificatefile['type']
                );
            }
        }
        if (!empty($post['proof'])) {
            $prooffile = $post['proof'];
            if (!empty($prooffile['name'])) {
                $this->transportBuilder->addAttachment(
                    $this->fileManagement->getFileContent($prooffile['tmp_name']),
                    $prooffile['name'],
                    $prooffile['type']
                );
            }
        }
             
        $transport = $this->transportBuilder->getTransport();
        $transport->sendMessage();

    }

    /*
     * get Current store id
     */
    public function getStoreId()
    {
        return $this->storeManager->getStore()->getId();
    }

    /*
     * get Current store Info
     */
    public function getStore()
    {
        return $this->storeManager->getStore();
    }

    /*
     * get Country name
     */
    public function getCountryname($countryCode){    
        $country = $this->countryFactory->create()->loadByCode($countryCode);
        return $country->getName();
    }
}