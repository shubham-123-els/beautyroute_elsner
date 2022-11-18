<?php
/**
 * Extension install action
 */
namespace Kangaroorewards\Core\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Integration\Model\ConfigBasedIntegrationManager;
use Magento\Framework\Setup\InstallDataInterface;

/**
 * Class InstallData
 *
 * @package Kangaroorewards\Core\Setup
 */
class InstallData implements InstallDataInterface
{
    /**
     * @var ConfigBasedIntegrationManage
     */
    private $_integrationManager;

    /**
     * @param ConfigBasedIntegrationManager $integrationManager
     */
    public function __construct(ConfigBasedIntegrationManager $integrationManager)
    {
        $this->_integrationManager = $integrationManager;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface   $context
     */
    public function install(ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $this->_integrationManager->processIntegrationConfig(['Kangaroorewards']);
    }
}
 
