<?php

namespace MageArray\Wholesale\Setup;

use Magento\Customer\Setup\CustomerSetupFactory;
use Magento\Customer\Model\Customer;
use Magento\Eav\Model\Entity\Attribute\SetFactory as AttributeSetFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class UpgradeData implements UpgradeDataInterface
{

    /**
     * InstallData constructor.
     * @param CustomerSetupFactory $customerSetupFactory
     * @param AttributeSetFactory $attributeSetFactory
     */
    public function __construct(
        CustomerSetupFactory $customerSetupFactory,
        AttributeSetFactory $attributeSetFactory
    ) {
        $this->_customerSetupFactory = $customerSetupFactory;
        $this->_attributeSetFactory = $attributeSetFactory;
    }
    
    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.2') < 0) {
            $customerSetup = $this->_customerSetupFactory
                ->create(['setup' => $setup]);

            $customerEntity = $customerSetup->getEavConfig()
                ->getEntityType('customer');
            $attributeSetId = $customerEntity->getDefaultAttributeSetId();

            $attributeSet = $this->_attributeSetFactory->create();
            $attributeGroupId = $attributeSet->getDefaultGroupId($attributeSetId);

            $customerSetup->addAttribute(Customer::ENTITY, 'cust_file', [
                'type' => 'varchar',
                'label' => 'File Upload',
                'input' => 'file',
                'source' => '',
                'backend' => \MageArray\Wholesale\Model\Customer\Attribute\Backend\FileUpload::Class,
                'frontend' => \MageArray\Wholesale\Model\Customer\Attribute\Frontend\FileUpload::Class,
                'value' => 0,
                'default' => 0,
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 150,
                'position' => 150,
                'system' => false,
                'is_used_in_grid' => false,
                'is_visible_in_grid' => false,
                'is_filterable_in_grid' => false,
                'is_searchable_in_grid' => false,
            ]);

            $attribute = $customerSetup->getEavConfig()
                ->getAttribute(Customer::ENTITY, 'cust_file')
                ->addData([
                    'attribute_set_id' => $attributeSetId,
                    'attribute_group_id' => $attributeGroupId,
                    'used_in_forms' => [
                        'customer_account_create',
                        'customer_account_edit',
                        'adminhtml_customer'
                    ],
                ]);

            $attribute->save();
        }

        $setup->endSetup();
    }
}
