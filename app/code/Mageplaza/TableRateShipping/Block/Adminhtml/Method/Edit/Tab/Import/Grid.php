<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab\Import;

use Exception;
use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Widget\Grid\Extended;
use Magento\Backend\Helper\Data;
use Magento\Directory\Model\Config\Source\Country;
use Magento\Framework\Registry;
use Magento\Store\Model\Store;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Postcode;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Qty;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Subtotal;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Weight;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\RegistryConstants;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate\Collection;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate\CollectionFactory;

/**
 * Class Grid
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab\Import
 * @method setId(string $string)
 * @method setUseAjax(bool $true)
 */
class Grid extends Extended
{
    /**
     * @var Method
     */
    private $_method;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var Registry
     */
    private $_coreRegistry;

    /**
     * @var Country
     */
    private $country;

    /**
     * @var \Magento\Directory\Model\ResourceModel\Region\CollectionFactory
     */
    private $regionCollectionFactory;

    /**
     * @var \Mageplaza\TableRateShipping\Helper\Data
     */
    private $helper;

    /**
     * Grid constructor.
     *
     * @param Context $context
     * @param Data $backendHelper
     * @param CollectionFactory $collectionFactory
     * @param Registry $registry
     * @param Country $country
     * @param \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory
     * @param \Mageplaza\TableRateShipping\Helper\Data $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $backendHelper,
        CollectionFactory $collectionFactory,
        Registry $registry,
        Country $country,
        \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory,
        \Mageplaza\TableRateShipping\Helper\Data $helper,
        array $data = []
    ) {
        $this->collectionFactory       = $collectionFactory;
        $this->_coreRegistry           = $registry;
        $this->country                 = $country;
        $this->regionCollectionFactory = $regionCollectionFactory;
        $this->helper                  = $helper;

        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * Initialize grid
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();

        $this->setId('mptablerate_method_import_grid');
        $this->setUseAjax(true);
    }

    /**
     * @inheritdoc
     */
    protected function _prepareCollection()
    {
        $object = $this->getObject();

        /** @var Collection $collection */
        $collection = $this->collectionFactory->create();
        $collection->addFieldToFilter('method_id', ['neq' => $object->getId()]);

        $request = $this->getRequest();
        $ids     = $request->getParam('internal_ids');
        if (!empty($ids) && !$request->getParam('ajax')) {
            $collection->addFieldToFilter('rate_id', ['in' => explode(',', $ids)]);
        }

        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * Prepare grid columns
     *
     * @return Extended
     * @throws Exception
     */
    protected function _prepareColumns()
    {
        $this->addColumn('import_rate_id', [
            'header_css_class' => 'a-center',
            'type'             => 'checkbox',
            'html_name'        => 'import_rate_id',
            'align'            => 'center',
            'index'            => 'rate_id',
            'filter'           => false,
            'sortable'         => false
        ]);

        $this->addColumn('rate_id', [
            'header' => __('ID'),
            'index'  => 'rate_id',
            'type'   => 'text',
        ]);

        $this->addColumn('rate_name', [
            'header' => __('Name'),
            'index'  => 'name',
            'type'   => 'text',
        ]);

        $countries = ['*' => __('All')];
        foreach ($this->country->toOptionArray(true) as $item) {
            $countries[$item['value']] = $item['label'];
        }
        $this->addColumn('country_id', [
            'header'  => __('Country'),
            'index'   => 'country_id',
            'type'    => 'options',
            'options' => $countries,
        ]);

        $regionCollection = $this->regionCollectionFactory->create()->load();
        $regions          = ['*' => __('All')];
        foreach ($regionCollection->getItems() as $region) {
            $regions[$region->getId()] = $region->getDefaultName();
        }
        $this->addColumn('region', [
            'header'  => __('State/Region'),
            'index'   => 'region',
            'type'    => 'options',
            'options' => $regions,
        ]);

        $this->addColumn('postcode', [
            'header'   => __('Zip/Post code'),
            'index'    => 'postcode',
            'type'     => 'text',
            'filter'   => false,
            'sortable' => false,
            'renderer' => Postcode::class,
        ]);

        $this->addColumn('weight', [
            'header'   => __('Weight'),
            'index'    => 'weight',
            'type'     => 'text',
            'filter'   => false,
            'sortable' => false,
            'renderer' => Weight::class,
        ]);

        $this->addColumn('subtotal', [
            'header'   => __('Price'),
            'index'    => 'subtotal',
            'type'     => 'text',
            'filter'   => false,
            'sortable' => false,
            'renderer' => Subtotal::class,
        ]);

        $this->addColumn('qty', [
            'header'   => __('# of Items'),
            'index'    => 'qty',
            'type'     => 'text',
            'filter'   => false,
            'sortable' => false,
            'renderer' => Qty::class,
        ]);

        $shipTypes = [];
        foreach ($this->helper->getProdAttrOptions(\Mageplaza\TableRateShipping\Helper\Data::SHIP_TYPE_ATTR) as $type) {
            $shipTypes[$type['value']] = $type['label'];
        }
        $this->addColumn('shipping_group', [
            'header'  => __('Shipping Group'),
            'index'   => 'shipping_group',
            'type'    => 'options',
            'options' => $shipTypes,
        ]);

        /** @var Store $store */
        $store    = $this->_storeManager->getStore();
        $currency = $store->getBaseCurrencyCode();

        $this->addColumn('product_fixed_rate', [
            'header'        => __('Product Fixed Rate'),
            'index'         => 'product_fixed_rate',
            'align'         => 'right',
            'type'          => 'price',
            'currency_code' => $store->getBaseCurrencyCode()
        ]);

        $this->addColumn('product_percentage_rate', [
            'header' => __('Product Percentage Rate'),
            'index'  => 'product_percentage_rate',
            'align'  => 'right',
            'type'   => 'number',
        ]);

        $this->addColumn('weight_fixed_rate', [
            'header'        => __('Weight Fixed Rate'),
            'index'         => 'weight_fixed_rate',
            'align'         => 'right',
            'type'          => 'price',
            'currency_code' => $currency,
        ]);

        $this->addColumn('order_fixed_rate', [
            'header'        => __('Order Fixed Rate'),
            'index'         => 'order_fixed_rate',
            'align'         => 'right',
            'type'          => 'price',
            'currency_code' => $currency,
        ]);

        $this->addColumn('delivery', [
            'header' => __('Estimated Delivery Days'),
            'index'  => 'delivery',
            'type'   => 'text',
        ]);

        return parent::_prepareColumns();
    }

    /**
     * {@inheritdoc}
     */
    public function getGridUrl()
    {
        return $this->getUrl('*/*/importgrid', ['_current' => true]);
    }

    /**
     * @return Method
     */
    private function getObject()
    {
        if ($this->_method === null) {
            $this->_method = $this->_coreRegistry->registry(RegistryConstants::METHOD);
        }

        return $this->_method;
    }
}
