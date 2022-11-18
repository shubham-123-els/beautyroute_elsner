<?php
namespace Elsnertech\Professional\Block;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Directory\Block\Data;
use Magento\Framework\View\Element\Template\Context;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $directoryBlock;
    protected $scopeConfig;
    protected $_isScopePrivate;

    public function __construct(
       	Context $context,
       	Data $directoryBlock,
        ScopeConfigInterface $scopeConfig,
       	array $data = []
    ) {
       	parent::__construct($context, $data);
       	$this->_isScopePrivate = true;
        $this->scopeConfig = $scopeConfig;
      	$this->directoryBlock = $directoryBlock;
    }

    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('professionals/index/post', ['_secure' => true]);
    }

	public function getCmsblock() {
		return $this->getLayout()
        ->createBlock(\Magento\Cms\Block\Block::class)
        ->setBlockId('collect_professionals') //replace my_cmsblock_identifier with real CMS bock identifier
        ->toHtml();
	}

	public function getCountries() {
      	$country = $this->directoryBlock->getCountryHtmlSelect();
       	return $country;
    }
    
    public function getRegion() {
        $region = $this->directoryBlock->getRegionHtmlSelect();
        return $region;
    }

    public function getMaxsize() {
        return $this->scopeConfig->getValue("helloworld/general/maxsize");
    }

    public function getenable() {
        return $this->scopeConfig->getValue("helloworld/general/enable");
    }
     
    public function getCountryAction() {
        return $this->getUrl('extension/extension/country', ['_secure' => true]);
    }

}