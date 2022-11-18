<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\SourceInterface;
use Magento\Framework\Data\OptionSourceInterface;
use Magenest\QuickBooksOnline\Model\AccountFactory;

/**
 * Product status functionality model
 */
class PaymentMethods implements SourceInterface, OptionSourceInterface
{
    /**
     * @var AccountFactory
     */
    protected $accountFactory;

    /**
     * Deposit constructor.
     *
     * @param AccountFactory $accountFactory
     */
    public function __construct(
        AccountFactory $accountFactory
    ) {
        $this->accountFactory = $accountFactory;
    }

    /**
     * Retrieve option array
     *
     * @return string[]
     */
    public function getOptionArray()
    {
        $banks       = $this->accountFactory->create()->getCollection()->addFieldToFilter('type', 'Bank');
        $otherAssets = $this->accountFactory->create()->getCollection()->addFieldToFilter('type', 'Other Current Asset');
        $result      = [];

        /** get bank accounts */
        foreach ($banks as $bank) {
            $accountId   = $bank->getQboId();
            $accountName = $bank->getName();
            $result[]    = ['value' => $accountId, 'label' => $accountName];
        }

        /** get other asset accounts */
        foreach ($otherAssets as $otherAsset) {
            $accountId   = $otherAsset->getQboId();
            $accountName = $otherAsset->getName();
            $result[]    = ['value' => $accountId, 'label' => $accountName];
        }

        return $result;
    }

    /**
     * Retrieve option array with empty value
     *
     * @return string[]
     */
    public function getAllOptions()
    {
        $result = [];

        foreach (self::getOptionArray() as $option) {
            $result[] = ['value' => $option['value'], 'label' => $option['label']];
        }

        return $result;
    }

    /**
     * Retrieve option text by option value
     *
     * @param string $optionId
     * @return string
     */
    public function getOptionText($optionId)
    {
        $options = self::getOptionArray();

        return isset($options[$optionId]) ? $options[$optionId] : null;
    }

    /**
     * Get options as array
     *
     * @return array
     * @codeCoverageIgnore
     */
    public function toOptionArray()
    {
        return $this->getAllOptions();
    }
}
