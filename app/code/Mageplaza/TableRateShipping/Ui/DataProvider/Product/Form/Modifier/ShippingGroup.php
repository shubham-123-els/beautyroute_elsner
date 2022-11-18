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

namespace Mageplaza\TableRateShipping\Ui\DataProvider\Product\Form\Modifier;

use Magento\Catalog\Model\Product\Attribute\Repository;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\UrlInterface;
use Magento\Ui\DataProvider\Modifier\ModifierInterface;
use Mageplaza\TableRateShipping\Helper\Data;
use Psr\Log\LoggerInterface;

/**
 * Class ShippingGroup
 * @package Mageplaza\TableRateShipping\Ui\DataProvider\Product\Form\Modifier
 */
class ShippingGroup implements ModifierInterface
{
    /**
     * @var Repository
     */
    private $repository;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var UrlInterface
     */
    private $url;

    /**
     * ShippingGroup constructor.
     *
     * @param Repository $repository
     * @param LoggerInterface $logger
     * @param UrlInterface $url
     */
    public function __construct(
        Repository $repository,
        LoggerInterface $logger,
        UrlInterface $url
    ) {
        $this->repository = $repository;
        $this->logger     = $logger;
        $this->url        = $url;
    }

    /**
     * @inheritdoc
     */
    public function modifyMeta(array $meta)
    {
        try {
            $attribute = $this->repository->get(Data::SHIP_TYPE_ATTR);
        } catch (NoSuchEntityException $e) {
            $this->logger->critical($e);

            return $meta;
        }

        $link = sprintf(
            '<a href="%s" target="_blank">%s</a>',
            $this->url->getUrl(
                'catalog/product_attribute/edit',
                ['attribute_id' => $attribute->getAttributeId(), '_nosid' => true, '_secure' => true]
            ),
            __('here')
        );

        foreach ($meta as &$item) {
            if (empty($item['children']['container_' . Data::SHIP_TYPE_ATTR])) {
                continue;
            }

            $item['children']['container_' . Data::SHIP_TYPE_ATTR]['children'][Data::SHIP_TYPE_ATTR]['arguments']
            ['data']['config']['additionalInfo'] = __('To add the options, please go to settings %1.', $link);
        }

        return $meta;
    }

    /**
     * @inheritdoc
     */
    public function modifyData(array $data)
    {
        return $data;
    }
}
