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
 * @package     Mageplaza_FreeGifts
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\FreeGifts\Ui\Component\DataProvider;

use Magento\Directory\Model\Currency;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\ReportingInterface;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Locale\FormatInterface;
use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider as AbstractProvider;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class DataProvider
 * @package Mageplaza\FreeGifts\Ui\Component\DataProvider
 */
class DataProvider extends AbstractProvider
{
    /**
     * @var FormatInterface
     */
    protected $basePriceFormat;

    /**
     * @var Currency
     */
    protected $baseCurrency;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * DataProvider constructor.
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param ReportingInterface $reporting
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param RequestInterface $request
     * @param FilterBuilder $filterBuilder
     * @param StoreManagerInterface $storeManager
     * @param array $meta
     * @param array $data
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        ReportingInterface $reporting,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        RequestInterface $request,
        FilterBuilder $filterBuilder,
        StoreManagerInterface $storeManager,
        array $meta = [],
        array $data = []
    ) {
        $this->storeManager = $storeManager;

        parent::__construct(
            $name,
            $primaryFieldName,
            $requestFieldName,
            $reporting,
            $searchCriteriaBuilder,
            $request,
            $filterBuilder,
            $meta,
            $data
        );
    }

    /**
     * @return array
     * @throws NoSuchEntityException
     */
    public function getData()
    {
        $collection      = $this->getSearchResult();
        $cloneCollection = clone $collection;
        $data            = $this->searchResultToOutput($collection);
        $cloneCollection->setPageSize(0);
        $data['mpAllItems']  = $this->searchResultToOutput($cloneCollection)['items'];
        $data['formatPrice'] = $this->getBasePriceFormat();
        foreach ($data['items'] as &$item) {
            $item['base_currency_code'] = $this->getBaseCurrency()->getCode();
        }

        return $data;
    }

    /**
     * @return FormatInterface
     * @throws NoSuchEntityException
     */
    protected function getBasePriceFormat()
    {
        if (!$this->basePriceFormat) {
            $code = $this->getBaseCurrency()->getCode();

            $this->basePriceFormat = ObjectManager::getInstance()->get(FormatInterface::class)
                ->getPriceFormat(null, $code);
        }

        return $this->basePriceFormat;
    }

    /**
     * @return Currency
     * @throws NoSuchEntityException
     */
    protected function getBaseCurrency()
    {
        if (!$this->baseCurrency) {
            $code = $this->storeManager->getStore(0)->getBaseCurrencyCode();

            $this->baseCurrency = ObjectManager::getInstance()->get(Currency::class)->load($code);
        }

        return $this->baseCurrency;
    }
}
