<?php

namespace Elsnertech\Professional\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Cms\Model\BlockFactory;

class AddNewStaticBlock implements DataPatchInterface, PatchVersionInterface
{

    private $moduleDataSetup;

    private $blockFactory;

    public function __construct(

        ModuleDataSetupInterface $moduleDataSetup,

        BlockFactory $blockFactory

    ) {

        $this->moduleDataSetup = $moduleDataSetup;

        $this->blockFactory = $blockFactory;

    }

    public function apply()

    {

        $newCmsStaticBlock = [
            'title' => 'collect_professionals',
            'identifier' => 'collect_professionals',
            'content' => '<div class="cms-block">Added a CMS Block Programmatically</div>',
            'is_active' => 1,
            'stores' => \Magento\Store\Model\Store::DEFAULT_STORE_ID
        ];

        $this->moduleDataSetup->startSetup();
        $block = $this->blockFactory->create();
        $block->setData($newCmsStaticBlock)->save();
        $this->moduleDataSetup->endSetup();
    }

    public static function getDependencies()
    {
        return [];
    }

    public static function getVersion()
    {
        return '2.0.0';
    }

    public function getAliases()
    {
        return [];
    }

}