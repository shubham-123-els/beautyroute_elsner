<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/28/2020
 * Time: 5:05 PM
 */

namespace Kangaroorewards\Core\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Integration\Model\ConfigBasedIntegrationManager;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * @var ConfigBasedIntegrationManage
     */
    protected $_integrationManager;

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
    public function upgrade(ModuleDataSetupInterface $setup,
                            ModuleContextInterface $context
    )
    {
        $this->_integrationManager->processIntegrationConfig(['Kangaroorewards']);
    }
}