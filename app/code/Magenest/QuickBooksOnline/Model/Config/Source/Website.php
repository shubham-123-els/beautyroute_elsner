<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\Config\Source;

/**
 * Class Website
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class Website implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var array
     */
    protected $_options;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * Website constructor.
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    ) {
        $this->_storeManager = $storeManager;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        if (!$this->_options) {
            $this->_options = [];
            $website = $this->_storeManager->getWebsites();
            foreach ($website as $websites) {
                $id = $websites->getId();
                $name = $websites->getName();
                if ($id != 0) {
                    $this->_options[] = ['value' => $id, 'label' => $name];
                }
            }
            $array = [
                [
                    'label' => __('All Websites'),
                    'value' => '0'
                ],
            ];
            $arayReturn = array_merge($array, $this->_options);
        }

        return $arayReturn;
    }
}
