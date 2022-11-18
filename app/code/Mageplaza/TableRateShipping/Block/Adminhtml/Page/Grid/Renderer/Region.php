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

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer;

use Magento\Backend\Block\Context;
use Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer;
use Magento\Directory\Model\RegionFactory;
use Magento\Framework\DataObject;

/**
 * Class Region
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Page\Grid\Renderer
 */
class Region extends AbstractRenderer
{
    /**
     * @var RegionFactory
     */
    private $regionFactory;

    /**
     * Region constructor.
     *
     * @param Context $context
     * @param RegionFactory $regionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        RegionFactory $regionFactory,
        array $data = []
    ) {
        $this->regionFactory = $regionFactory;

        parent::__construct($context, $data);
    }

    /**
     * @param DataObject $row
     *
     * @return string
     */
    public function render(DataObject $row)
    {
        $region = $this->regionFactory->create()->load($row->getData('region'));

        if ($region->getCode()) {
            $row->setData('region', $region->getCode());
        }

        return parent::render($row);
    }
}
