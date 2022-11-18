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

namespace Mageplaza\TableRateShipping\Model;

use Magento\Backend\Model\Session\Quote;
use Magento\Cms\Model\Template\Filter;
use Magento\Cms\Model\Template\FilterProvider;
use Magento\Customer\Model\Session;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;
use Magento\Quote\Model\Quote\Address\RateRequest;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Model\Carrier\TableRate;
use Mageplaza\TableRateShipping\Model\Source\CalculateRule;
use Mageplaza\TableRateShipping\Model\Source\Status;

/**
 * Class Method
 * @package Mageplaza\TableRateShipping\Model
 * @method getName()
 * @method getDescription()
 * @method getStatus()
 * @method getCalculateRule()
 * @method getImage()
 * @method setImage($value)
 * @method getLabels()
 * @method getComments()
 * @method getStoreId()
 * @method getCustomerGroup()
 */
class Method extends AbstractModel
{
    /**
     * @var Data
     */
    private $helper;

    /**
     * @var Quote
     */
    private $backendSession;

    /**
     * @var Session
     */
    private $customerSession;

    /**
     * @var FilterProvider
     */
    private $filterProvider;

    /**
     * Method constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param Data $helper
     * @param Quote $backendSession
     * @param Session $customerSession
     * @param FilterProvider $filterProvider
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        Data $helper,
        Quote $backendSession,
        Session $customerSession,
        FilterProvider $filterProvider,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->helper          = $helper;
        $this->backendSession  = $backendSession;
        $this->customerSession = $customerSession;
        $this->filterProvider  = $filterProvider;

        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Method::class);
    }

    /**
     * @param int $storeId
     *
     * @return bool
     */
    public function isActive($storeId = 0)
    {
        $stores = explode(',', $this->getStoreId());

        $groupId = $this->helper->isAdmin()
            ? $this->backendSession->getQuote()->getCustomerGroupId()
            : $this->customerSession->getCustomerGroupId();
        $groups  = explode(',', $this->getCustomerGroup());

        return (int) $this->getStatus() === Status::ENABLE
            && array_intersect([$storeId, 0], $stores)
            && array_intersect([$groupId], $groups);
    }

    /**
     * @param int $storeId
     *
     * @return string
     */
    public function getTitle($storeId = 0)
    {
        $labels = Data::jsonDecode($this->getLabels());

        if (empty($labels[$storeId])) {
            return $this->getName();
        }

        return $labels[$storeId];
    }

    /**
     * @return string
     */
    public function getComment()
    {
        try {
            $storeId = $this->helper->getScopeId();
        } catch (LocalizedException $e) {
            $this->_logger->critical($e);

            return '';
        }

        $comments = Data::jsonDecode($this->getComments());

        if (empty($comments[$storeId])) {
            $comment = $comments[0] ?? '';
        } else {
            $comment = $comments[$storeId];
        }

        /** @var Filter $filter */
        $filter = $this->filterProvider->getBlockFilter();

        return $filter->setStoreId($storeId)->filter($comment);
    }

    /**
     * @param Rate[] $rates
     * @param RateRequest $request
     * @param TableRate $carrier
     *
     * @return float|bool
     */
    public function calculatePrice($rates, $request, $carrier)
    {
        $result = null;

        foreach ($rates as $rate) {
            $price = $rate->calculatePrice($carrier->getCartData($request, $rate));

            if ($result === null) {
                $result = $price;

                continue;
            }

            switch ($this->getCalculateRule()) {
                case CalculateRule::SUM:
                    $result += $price;
                    break;
                case CalculateRule::MIN:
                    if ($result > $price) {
                        $result = $price;
                    }
                    break;
                case CalculateRule::MAX:
                    if ($result < $price) {
                        $result = $price;
                    }
                    break;
            }
        }

        return $result;
    }
}
