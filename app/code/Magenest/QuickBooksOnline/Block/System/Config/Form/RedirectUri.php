<?php
namespace Magenest\QuickBooksOnline\Block\System\Config\Form;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field as FormField;
use Magenest\QuickBooksOnline\Model\Config;
use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Class RedirectUri
 * @package Magenest\QuickBooksOnline\Block\System\Config\Form
 */
class RedirectUri extends FormField
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
    protected $_template = 'system/config/redirecturi.phtml';

    /**
     * RedirectUri constructor.
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }


    public function getRedirectUri()
    {
        return $this->getBaseUrl().'qbonline/connection/success';
    }
    /**
     * Get Element Html
     *
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }
}
