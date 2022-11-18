<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 15/06/2018
 * Time: 14:11
 */

namespace Magenest\QuickBooksOnline\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Model\Config;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Customer\Model\Customer;
use Magento\Catalog\Model\Product;
use Magento\Tax\Model\Calculation\Rate;
use Magenest\QuickBooksOnline\Model\TaxFactory;
use Magento\Framework\App\State;
use Magento\Ui\Api\Data\BookmarkInterfaceFactory;
use Magento\Ui\Model\ResourceModel\BookmarkRepository;
use Magento\Framework\Exception\LocalizedException;

class UpgradeData implements UpgradeDataInterface
{
    private $eavSetupFactory;

    private $eavConfig;

    private $rate;

    private $taxFactory;

    private $bookmarkInterface;

    private $bookmarkRepository;

    public function __construct(
        EavSetupFactory $eavSetupFactory,
        Config $eavConfig,
        Rate $rate,
        TaxFactory $taxFactory,
        BookmarkInterfaceFactory $bookmarkInterface,
        BookmarkRepository $bookmarkRepository,
        State $state
    ) {
        $this->eavSetupFactory    = $eavSetupFactory;
        $this->eavConfig          = $eavConfig;
        $this->rate               = $rate;
        $this->taxFactory         = $taxFactory;
        $this->bookmarkInterface  = $bookmarkInterface;
        $this->bookmarkRepository = $bookmarkRepository;
        try {
            $state->setAreaCode('global');
        } catch (LocalizedException $e) {
            //if area code is already set, then ignore
        }
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '2.3.2') < 0) {
            $this->addCustomerQboIdAttr($setup);
            $this->addProductQboIdAttr($setup);

        }
        if (version_compare($context->getVersion(), '2.3.3') < 0) {
            $this->removeProductQboIdAttr($setup);
            $this->addProductQboIdAttr($setup);

        }
        if (version_compare($context->getVersion(), '2.4.1') < 0) {
            $this->addTaxCodes();
        }
        if (version_compare($context->getVersion(), '2.4.2') < 0) {
            $this->deleteOldBookmark();
        }
    }

    /**
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    private function deleteOldBookmark()
    {
        $collection = $this->bookmarkInterface->create()->getCollection();
        $collection->addFieldToFilter('namespace', ['like' => 'qbonline%']);

        if ($collection->getItems()) {
            foreach ($collection->getItems() as $bookmark) {
                $this->bookmarkRepository->deleteById($bookmark->getBookmarkId());
            }
        }
    }

    /**
     * @param ModuleDataSetupInterface $setup
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function addCustomerQboIdAttr(ModuleDataSetupInterface $setup)
    {
        /** @var \Magento\Eav\Setup\EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->addAttribute(
            Customer::ENTITY,
            'qbo_id',
            [
                'type'     => 'varchar',
                'input'    => 'text',
                'required' => false,
                'visible'  => false,
                'system'   => 0,
            ]
        );
    }

    /**
     * @param ModuleDataSetupInterface $setup
     */
    private function addProductQboIdAttr(ModuleDataSetupInterface $setup)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->addAttribute(
            Product::ENTITY,
            'qbo_id',
            [
                'type'     => 'varchar',
                'required' => false,
                'visible'  => false,
                'nullable' => true,
                'input'    => 'text',
            ]
        );
    }

    /**
     * @param ModuleDataSetupInterface $setup
     */
    private function removeProductQboIdAttr(ModuleDataSetupInterface $setup)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->removeAttribute(
            Product::ENTITY,
            'qbo_id'
        );
    }

    /**
     * Add existing tax codes to qbonline tax table
     * @throws \Exception
     */
    private function addTaxCodes()
    {
        $collections = $this->rate->getCollection();
        /** @var \Magento\Tax\Model\Calculation\Rate $collections */
        foreach ($collections as $tax) {
            $data  = [
                'tax_id'        => $tax->getId(),
                'tax_code'      => trim($tax->getCode()),
                'rate'          => $tax->getRate(),
                'tax_rate_name' => trim($tax->getCode()) . '_' . $tax->getId(),
            ];
            $model = $this->taxFactory->create()->load($tax->getCode(), 'tax_code');
            $model->addData($data)->save();
        }
        $taxZero = [
            'tax_id'        => 1000,
            'tax_code'      => 'tax_zero_qb',
            'rate'          => 0,
            'tax_rate_name' => 'tax_zero_qb_1000',
        ];

        $model = $this->taxFactory->create()->load('tax_zero_qb', 'tax_code');
        $model->addData($taxZero)->save();
    }
}
