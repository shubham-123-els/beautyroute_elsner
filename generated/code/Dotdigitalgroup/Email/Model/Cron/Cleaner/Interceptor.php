<?php
namespace Dotdigitalgroup\Email\Model\Cron\Cleaner;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Model\Cron\Cleaner
 */
class Interceptor extends \Dotdigitalgroup\Email\Model\Cron\Cleaner implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\File $fileHelper, \Dotdigitalgroup\Email\Model\Cron\JobChecker $jobChecker, \Magento\Framework\Intl\DateTimeFactory $dateTimeFactory, \Dotdigitalgroup\Email\Model\DateIntervalFactory $dateIntervalFactory, \Magento\Framework\App\ResourceConnection $resourceConnection)
    {
        $this->___init();
        parent::__construct($fileHelper, $jobChecker, $dateTimeFactory, $dateIntervalFactory, $resourceConnection);
    }

    /**
     * {@inheritdoc}
     */
    public function getTablesForCleanUp(array $additionalTables = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTablesForCleanUp');
        return $pluginInfo ? $this->___callPlugins('getTablesForCleanUp', func_get_args(), $pluginInfo) : parent::getTablesForCleanUp($additionalTables);
    }
}
