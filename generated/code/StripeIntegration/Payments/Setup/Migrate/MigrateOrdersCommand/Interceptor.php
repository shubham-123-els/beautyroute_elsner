<?php
namespace StripeIntegration\Payments\Setup\Migrate\MigrateOrdersCommand;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Setup\Migrate\MigrateOrdersCommand
 */
class Interceptor extends \StripeIntegration\Payments\Setup\Migrate\MigrateOrdersCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Entity\TypeFactory $eavTypeFactory, \Magento\Eav\Model\Entity\Attribute\SetFactory $attributeSetFactory, \Magento\Catalog\Model\ResourceModel\Eav\AttributeFactory $attributeFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Group\CollectionFactory $groupCollectionFactory, \Magento\Eav\Model\AttributeManagement $attributeManagement, \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory)
    {
        $this->___init();
        parent::__construct($eavTypeFactory, $attributeSetFactory, $attributeFactory, $groupCollectionFactory, $attributeManagement, $eavSetupFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
