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
use Mageplaza\SeoDashboard\Helper\Data as SeoDashboardData;
use Mageplaza\SeoDashboard\Model\ResourceModel\NoRoute\CollectionFactory;

/**
 * Class NoRoute
 * @package Mageplaza\SeoDashboard\Block\Adminhtml\Dashboard\Tab
 */
class NoRoute extends Tab
{
    /**
     * View more url
     */
    const VIEW_MORE_URL = 'seo/noroute';
    /**
     * Limit
     */
    const LIMIT = 5;

    /**
     * @type CollectionFactory
     */
    protected $_collectionFactory;

    /**
     * NoRoute constructor.
     *
     * @param Context $context
     * @param BackendHelper $backendHelper
     * @param CollectionFactory $collectionFactory
     * @param SeoDashboardData $seoDashboardData
     * @param array $data
     */
    public function __construct(
        Context $context,
        BackendHelper $backendHelper,
        CollectionFactory $collectionFactory,
        SeoDashboardData $seoDashboardData,
        array $data = []
    ) {
        $this->_collectionFactory = $collectionFactory;

        parent::__construct($seoDashboardData, $context, $backendHelper, $data); // TODO: Change the autogenerated stub
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('mpSeoDbNoRouteContent');
    }

    /**
     * {@inheritdoc}
     */
    protected function _prepareCollection()
    {
        $collection = $this->_collectionFactory->create()
            ->setOrder('issue_id')
            ->setPageSize(10)
            ->setCurPage(1);

        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * {@inheritdoc}
     */
    protected function _prepareColumns()
    {
        $this->addColumn('uri', [
            'header'           => __('Uri'),
            'sortable'         => false,
            'index'            => 'uri',
            'header_css_class' => 'col-name',
            'column_css_class' => 'col-name'
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
