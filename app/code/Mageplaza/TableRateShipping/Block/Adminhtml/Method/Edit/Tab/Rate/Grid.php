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

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab\Rate;

use Exception;
use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Widget\Grid\Extended;
use Magento\Backend\Block\Widget\Grid\Massaction;
use Magento\Backend\Helper\Data;
use Magento\Directory\Model\Config\Source\Country;
use Magento\Framework\Registry;
use Magento\Store\Model\Store;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Action;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Postcode;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Qty;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Region;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\ShippingGroup;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Subtotal;
use Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer\Weight;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\RegistryConstants;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate\Collection;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate\CollectionFactory;

/**
 * Class Grid
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab\Rate
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

        $this->setId('mptablerate_rate_grid');
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
        $collection->addFieldToFilter('method_id', $object->getId());

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
        if ($this->_request->getFullActionName() === 'mptablerate_method_rateExportCsv') {
            $this->addExportColumn();

            return parent::_prepareColumns();
        }

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

        $this->addColumn('shipping_group', [
            'header'   => __('Shipping Group'),
            'index'    => 'shipping_group',
            'type'     => 'text',
            'filter'   => false,
            'sortable' => false,
            'renderer' => ShippingGroup::class,
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

        $this->addColumn('page_actions', [
            'header'           => __('Action'),
            'sortable'         => false,
            'filter'           => false,
            'renderer'         => Action::class,
            'header_css_class' => 'col-action',
            'column_css_class' => 'col-action'
        ]);

        $this->addExportType('*/*/rateExportCsv', __('CSV'));

        return parent::_prepareColumns();
    }

    /**
     * Configure grid mass actions
     *
     * @return $this
     */
    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('rate_id');
        /** @var Massaction $massAction */
        $massAction = $this->getMassactionBlock();
        $massAction->setFormFieldName('ids');
        $massAction->setUseAjax(true);
        $massAction->setHideFormElement(true);
        $massAction->addItem('delete', [
            'label'    => __('Delete'),
            'url'      => $this->getUrl('*/*/ratemassdelete/', ['_current' => true]),
            'complete' => 'mptablerate_rate_gridJsObject.reload()'
        ]);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGridUrl()
    {
        return $this->getUrl('*/*/rategrid', ['_current' => true]);
    }

    /**
     * @throws Exception
     */
    private function addExportColumn()
    {
        $this->addColumn('rate_name', [
            'header' => 'name',
            'index'  => 'name',
            'type'   => 'text',
        ]);

        $this->addColumn('country_id', [
            'header' => 'country_id',
            'index'  => 'country_id',
            'type'   => 'text',
        ]);

        $this->addColumn('region', [
            'header'   => 'region',
            'index'    => 'region',
            'type'     => 'text',
            'renderer' => Region::class,
        ]);

        $this->addColumn('postcode', [
            'header' => 'postcode',
            'index'  => 'postcode',
            'type'   => 'text',
        ]);

        $this->addColumn('postcode_from', [
            'header' => 'postcode_from',
            'index'  => 'postcode_from',
            'type'   => 'text',
        ]);

        $this->addColumn('postcode_to', [
            'header' => 'postcode_to',
            'index'  => 'postcode_to',
            'type'   => 'text',
        ]);

        $this->addColumn('weight_from', [
            'header' => 'weight_from',
            'index'  => 'weight_from',
            'type'   => 'text',
        ]);

        $this->addColumn('weight_to', [
            'header' => 'weight_to',
            'index'  => 'weight_to',
            'type'   => 'text',
        ]);

        $this->addColumn('subtotal_from', [
            'header' => 'subtotal_from',
            'index'  => 'subtotal_from',
            'type'   => 'text',
        ]);

        $this->addColumn('subtotal_to', [
            'header' => 'subtotal_to',
            'index'  => 'subtotal_to',
            'type'   => 'text',
        ]);

        $this->addColumn('qty_from', [
            'header' => 'qty_from',
            'index'  => 'qty_from',
            'type'   => 'text',
        ]);

        $this->addColumn('qty_to', [
            'header' => 'qty_to',
            'index'  => 'qty_to',
            'type'   => 'text',
        ]);

        $this->addColumn('product_fixed_rate', [
            'header' => 'product_fixed_rate',
            'index'  => 'product_fixed_rate',
            'type'   => 'text',
        ]);

        $this->addColumn('product_percentage_rate', [
            'header' => 'product_percentage_rate',
            'index'  => 'product_percentage_rate',
            'type'   => 'text',
        ]);

        $this->addColumn('weight_fixed_rate', [
            'header' => 'weight_fixed_rate',
            'index'  => 'weight_fixed_rate',
            'type'   => 'text',
        ]);

        $this->addColumn('order_fixed_rate', [
            'header' => 'order_fixed_rate',
            'index'  => 'order_fixed_rate',
            'type'   => 'text',
        ]);

        $this->addColumn('shipping_group', [
            'header' => 'shipping_group',
            'index'  => 'shipping_group',
            'type'   => 'text',
        ]);

        $this->addColumn('delivery', [
            'header' => 'delivery',
            'index'  => 'delivery',
            'type'   => 'text',
        ]);
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
