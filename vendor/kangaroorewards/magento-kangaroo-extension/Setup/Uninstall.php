<?php
/**
 * Handle uninstall action, send uninstall request to kangaroo api
 */
namespace Kangaroorewards\Core\Setup;
use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Kangaroorewards\Core\Helper\KangarooRewardsRequest;
use Magento\Integration\Block\Adminhtml\Integration\Edit\Tab\Info;

class Uninstall implements UninstallInterface
{
    /**
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     */
    public function uninstall(SchemaSetupInterface $setup,
        ModuleContextInterface $context
    )
    {
        //Uninstall logic
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $storeManager = $objectManager
            ->get('\Magento\Store\Model\StoreManagerInterface');
        $integrationFactory = $objectManager
            ->get('\Magento\Integration\Model\IntegrationFactory');
        $credentialFactory = $objectManager
            ->get('\Kangaroorewards\Core\Model\KangarooCredentialFactory');
        $oauthService = $objectManager
            ->get('\Magento\Integration\Api\OauthServiceInterface');
        $log = $objectManager
            ->get('\Psr\Log\LoggerInterface');
        $baseUrl = $storeManager->getStore()->getBaseUrl();

        $log->info('[Kangaroo Rewards] Uninstall start: ');
        $integration = $integrationFactory->create()->load('Kangaroorewards', 'name');
//        $consumer = $oauthService->loadConsumer($integration->getConsumerId());
//        $key = $consumer->getSecret();
        $integrationService = $objectManager
            ->get('\Magento\Integration\Api\IntegrationServiceInterface');

        $integrationData = $integrationService->delete($integration->getId());
        $log->info('[Kangaroo Rewards] Uninstall Id: ' . $integration->getId());
        if ($integrationData[Info::DATA_ID]) {
            //Integration deleted successfully, now safe to delete the associated consumer data
            if (isset($integrationData[Info::DATA_CONSUMER_ID])) {
                $oauthService->deleteConsumer($integrationData[Info::DATA_CONSUMER_ID]);
            }
        }
        $setup->startSetup();
        $connection = $setup->getConnection();
        $tableName = $setup->getTable('kangaroorewards_credential');
        // Check if the table already exists
        $log->info('[Kangaroo Rewards] Uninstall getTableName: ' . $tableName);
        if ($setup->getConnection()->isTableExists($tableName)) {
            $request = new KangarooRewardsRequest($credentialFactory, $log);
            $data = array("domain" => $baseUrl);
            $log->info('[Kangaroo Rewards] Uninstall table exist: ' . $tableName . ' make request to uninstall: ' . json_encode($data));
            try {
                $request->post('magento/unInstall', $data);
            } catch (\Exception $exception) {
                $log->info('[Kangaroo Rewards] Uninstall error: ' . $exception->getMessage());
            }
            $connection->dropTable($tableName);
            $log->info('[Kangaroo Rewards] Uninstall drop table: ' . $tableName);
        }
        $setup->endSetup();
    }
}
