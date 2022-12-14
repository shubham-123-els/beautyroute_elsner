<?php
/**
 * Product options block
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */

namespace MageArray\HidePrice\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\Product;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Options extends \Magento\Framework\View\Element\Template
{

    /**
     * @return mixed
     */
    protected function _toHtml()
    {
        $this->setModuleName(
            $this->extractModuleName(\Magento\Catalog\Block\Product\View\Options::Class)
        );
        return parent::_toHtml();
    }

    /**
     * @var Product
     */
    protected $_helperData;
    /**
     * @var
     */
    protected $_product;

    /**
     * Product option
     *
     * @var \Magento\Catalog\Model\Product\Option
     */
    protected $_option;

    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_registry = null;

    /**
     * Catalog product
     *
     * @var Product
     */
    protected $_catalogProduct;

    /**
     * @var \Magento\Framework\Json\EncoderInterface
     */
    protected $_jsonEncoder;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Pricing\Helper\Data $pricingHelper
     * @param \Magento\Catalog\Helper\Data $catalogData
     * @param \Magento\Framework\Json\EncoderInterface $jsonEncoder
     * @param \Magento\Catalog\Model\Product\Option $option
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Stdlib\ArrayUtils $arrayUtils
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Pricing\Helper\Data $pricingHelper,
        \Magento\Catalog\Helper\Data $catalogData,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Catalog\Model\Product\Option $option,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Stdlib\ArrayUtils $arrayUtils,
        \MageArray\HidePrice\Helper\Data $_helperData,
        \Magento\Customer\Model\Session $customerSession,
        array $data = []
    ) {
        $this->pricingHelper = $pricingHelper;
        $this->_catalogData = $catalogData;
        $this->_jsonEncoder = $jsonEncoder;
        $this->_registry = $registry;
        $this->_option = $option;
        $this->arrayUtils = $arrayUtils;
        $this->_dataHelper = $_helperData;
        $this->customerSession = $customerSession;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve product object
     *
     * @return Product
     * @throws \LogicExceptions
     */
    public function getProduct()
    {
        if (!$this->_product) {
            if ($this->_registry->registry('current_product')) {
                $this->_product = $this->_registry->registry('current_product');
            } else {
                throw new \LogicException('Product is not defined');
            }
        }
        
        return $this->_product;
    }

    /**
     * Set product object
     *
     * @param Product $product
     * @return \Magento\Catalog\Block\Product\View\Options
     */
    public function setProduct(Product $product = null)
    {
        $this->_product = $product;
        return $this;
    }

    /**
     * @param string $type
     * @return string
     */
    public function getGroupOfOption($type)
    {
        $group = $this->_option->getGroupByType($type);

        return $group == '' ? 'default' : $group;
    }

    /**
     * Get product options
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->getProduct()->getOptions();
    }

    /**
     * @return bool
     */
    public function hasOptions()
    {
        if ($this->getOptions()) {
            return true;
        }
        return false;
    }

    /**
     * Get price configuration
     *
     * @param \Magento\Catalog\Model\Product\Option\Value|\Magento\Catalog\Model\Product\Option $option
     * @return array
     */
    protected function _getPriceConfiguration($option)
    {
        $optionPrice = $this->pricingHelper->currency($option->getPrice(true), false, false);
        $data = [
            'prices' => [
                'oldPrice' => [
                    'amount' => $this->pricingHelper->currency($option->getRegularPrice(), false, false),
                    'adjustments' => [],
                ],
                'basePrice' => [
                    'amount' => $this->_catalogData->getTaxPrice(
                        $option->getProduct(),
                        $optionPrice,
                        false,
                        null,
                        null,
                        null,
                        null,
                        null,
                        false
                    ),
                ],
                'finalPrice' => [
                    'amount' => $this->_catalogData->getTaxPrice(
                        $option->getProduct(),
                        $optionPrice,
                        true,
                        null,
                        null,
                        null,
                        null,
                        null,
                        false
                    ),
                ],
            ],
            'type' => $option->getPriceType(),
            'name' => $option->getTitle()
        ];
        return $data;
    }

    /**
     * Get json representation of
     *
     * @return string
     */
    public function getJsonConfig()
    {
        $config = [];
        foreach ($this->getOptions() as $option) {
            /* @var $option \Magento\Catalog\Model\Product\Option */
            if ($option->getGroupByType() == \Magento\Catalog\Model\Product\Option::OPTION_GROUP_SELECT) {
                $tmpPriceValues = [];
                foreach ($option->getValues() as $value) {
                    /* @var $value \Magento\Catalog\Model\Product\Option\Value */
                    $id = $value->getId();
                    $tmpPriceValues[$id] = $this->_getPriceConfiguration($value);
                }
                $priceValue = $tmpPriceValues;
            } else {
                $priceValue = $this->_getPriceConfiguration($option);
            }
            $config[$option->getId()] = $priceValue;
        }

        $configObj = new \Magento\Framework\DataObject(
            [
                'config' => $config,
            ]
        );

        $this->_eventManager->dispatch(
            'catalog_product_option_price_configuration_after',
            ['configObj' => $configObj]
        );
        
        $config = $configObj->getConfig();

        return $this->_jsonEncoder->encode($config);
    }

    /**
     * Get option html block
     *
     * @param \Magento\Catalog\Model\Product\Option $option
     * @return string
     */
    public function getOptionHtml(\Magento\Catalog\Model\Product\Option $option)
    {
        $active = $this->_dataHelper->getIsActive();
        $hideProductPrice = $this->getProduct()->getHidePrice();
        $hideByCustomerGroup = $this->_dataHelper->getHideByCustomerGroup();

        $om = \Magento\Framework\App\ObjectManager::getInstance();
        /** @var \Magento\Framework\App\Http\Context $context */
        $context = $om->get(\Magento\Framework\App\Http\Context::Class);
        /** @var bool $isLoggedIn */
        $isLoggedIn = $context->getValue(
            \Magento\Customer\Model\Context::CONTEXT_AUTH
        );

        $currentCustomerGroupId = $this->customerSession->getcustomer_group_id();

        if ($hideByCustomerGroup != 0) {
            $disableCustomerId = $this->_dataHelper->getCustomerGroupId();
            $disableCustIdArray = explode(",", $disableCustomerId);
        }

        $hideProductByCustGroup = $this->getProduct()->getHidepriceByCustomergroup();

        if (!empty($hideProductByCustGroup)) {
            $hideProductByCustGroupArray = explode(",", $hideProductByCustGroup);
        }

        if ($active) {
            if ($isLoggedIn) {
                if ($hideByCustomerGroup == 1) {
                    if (!empty($hideProductByCustGroup)) {
                        if (in_array($currentCustomerGroupId, $hideProductByCustGroupArray)) {

                            $type = $this->getGroupOfOption($option->getType());
                            $renderer = $this->getChildBlock($type);

                            $renderer->setProduct($this->getProduct())
                                ->setOption($option);

                            return $this->getChildHtml($type, false);
                        } else {

                        }
                    } else {
                        if (in_array($currentCustomerGroupId, $disableCustIdArray)) {

                        } else {
                            $type = $this->getGroupOfOption($option->getType());
                            $renderer = $this->getChildBlock($type);

                            $renderer->setProduct($this->getProduct())
                                ->setOption($option);

                            return $this->getChildHtml($type, false);

                        }
                    }
                } else {
                    $type = $this->getGroupOfOption($option->getType());
                    $renderer = $this->getChildBlock($type);

                    $renderer->setProduct($this->getProduct())
                        ->setOption($option);

                    return $this->getChildHtml($type, false);

                }
            } else {
                if ($hideProductPrice != 0) {
                } else {
                    $type = $this->getGroupOfOption($option->getType());
                    $renderer = $this->getChildBlock($type);

                    $renderer->setProduct($this->getProduct())
                        ->setOption($option);

                    return $this->getChildHtml($type, false);

                }
            }
        } else {
            $type = $this->getGroupOfOption($option->getType());
            $renderer = $this->getChildBlock($type);

            $renderer->setProduct($this->getProduct())->setOption($option);

            return $this->getChildHtml($type, false);
        }

        /**
         * Decorate a plain array of arrays or objects
         *
         * @param array $array
         * @param string $prefix
         * @param bool $forceSetAll
         * @return array
         */
    }

    public function decorateArray($array, $prefix = 'decorated_', $forceSetAll = false)
    {
        return $this->arrayUtils
            ->decorateArray($array, $prefix, $forceSetAll);
    }
}
