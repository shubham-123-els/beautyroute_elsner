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
 * @package     Mageplaza_SeoDashboard
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\SeoDashboard\Block\Adminhtml\Dashboard\Tab;

use Magento\Backend\Block\Template\Context;
use Magento\Backend\Helper\Data as BackendHelper;
use Mageplaza\SeoDashboard\Block\Adminhtml\Dashboard\Tab;
use Mageplaza\SeoDashboard\Block\Adminhtml\Renderer\Count;
use Mageplaza\SeoDashboard\Block\Adminhtml\Renderer\Duplicate;
use Mageplaza\SeoDashboard\Block\Adminhtml\Renderer\UcFirst;
use Mageplaza\SeoDashboard\Helper\Data as SeoDashboardData;
use Mageplaza\SeoDashboard\Model\ResourceModel\Low\CollectionFactory;

/**
 * Class Low
 * @package Mageplaza\SeoDashboard\Block\Adminhtml\Dashboard\Tab
 */
class Low extends Tab
{
    /**
     * View more url
     */
    const VIEW_MORE_URL = 'seo/low';

    /**
     * @type CollectionFactory
     */
    protected $_collectionFactory;

    /**
     * Low constructor.
     *
     * @param SeoDashboardData $seoDashboardData
     * @param Context $context
     * @param BackendHelper $backendHelper
     * @param CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(
        SeoDashboardData $seoDashboardData,
        Context $context,
        BackendHelper $backendHelper,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->_collectionFactory = $collectionFactory;

        parent::__construct($seoDashboardData, $context, $backendHelper, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('mpSeoDbLowCountContent');
    }

    /**
     * {@inheritdoc}
     */
    protected function _prepareCollection()
    {
        $collection = $this->_collectionFactory->create()
            ->setPageSize(10)
            ->setCurPage(1)
            ->setOrder('issue_id');

        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * {@inheritdoc}
     */
    protected function _prepareColumns()
    {
        $this->addColumn('entity_id', [
            'header'           => __('Case'),
            'sortable'         => false,
            'index'            => 'entity_id',
            'renderer'         => Duplicate::class,
            'header_css_class' => 'col-name',
            'column_css_class' => 'col-name'
        ]);

        $this->addColumn('fields', [
            'header'   => __('Field'),
            'sortable' => false,
            'index'    => 'fields',
            'type'     => 'options',
            'options'  => $this->_seoDashboardData->getFieldOptions()
        ]);

        $this->addColumn('Count', [
            'header'   => __('Count'),
            'sortable' => false,
            'index'    => 'count',
            'renderer' => Count::class,
        ]);

        $this->addColumn('entity', [
            'header'   => __('Entity'),
            'sortable' => false,
            'index'    => 'entity',
            'renderer' => UcFirst::class,
        ]);

        $this->addColumn('store', [
            'header'     => __('Store View'),
            'sortable'   => false,
            'index'      => 'store',
            'type'       => 'store',
            'store_view' => true
        ]);

        $this->setFilterVisibility(false);
        $this->setPagerVisibility(false);

        return parent::_prepareColumns();
    }

    /**
     * Get View more url
     *
     * @return string
     */
    public function getViewMoreUrl()
    {
        return $this->_urlBuilder->getUrl(self::VIEW_MORE_URL);
    }
}
