<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Block\System\Config\Form;

use Magento\Backend\Block\Template\Context;
use Magenest\QuickBooksOnline\Model\Synchronization\Company;
use Magento\Config\Block\System\Config\Form\Field as FormField;
use Magenest\QuickBooksOnline\Model\Config;
use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Class Information
 * @package Magenest\QuickBooksOnline\Block\System\Config\Form
 */
class Information extends FormField
{
    /**
     * @var array
     */
    protected $companyInfo;

    /**
     * @var Company
     */
    protected $company;

    /**
     * Set Template
     *
     * @var string
     */
    protected $_template = 'system/config/information.phtml';

    /**
     * Information constructor.
     * @param Context $context
     * @param Company $company
     * @param array $data
     */
    public function __construct(
        Context $context,
        Company $company,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->company = $company;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getCompanyInfo()
    {
        $information = $this->company->getInformation();
        try {
            $data = [
                'Company Name' => isset($information['CompanyName']) ? $information['CompanyName'] : '',
                'Company Start Date' => isset($information['CompanyStartDate']) ? $information['CompanyStartDate'] : '',
                'Country' => isset($information['Country']) ? $information['Country'] : '',
                'Email' => isset($information['Email']['Address']) ? $information['Email']['Address'] : '',
                'Last Activity' => isset($information['MetaData']['LastUpdatedTime']) ? $information['MetaData']['LastUpdatedTime'] : '',
            ];

            return $data;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        return null;
    }

    /**
     * Get Disconnect Url
     *
     * @return string
     */
    public function getDisconnectUrl()
    {
        return $this->getUrl('qbonline/connection/disconnect', ['_secure' => true]);
    }

    /**
     * Get Element Html
     *
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        try {
            if ($this->_scopeConfig->isSetFlag(Config::XML_PATH_QBONLINE_IS_CONNECTED, 'store')) {
                return $this->_toHtml();
            }
            return '';
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
