<?php
namespace Magenest\QuickBooksOnline\Logger;

use Magento\Framework\Logger\Handler\Base;

class Handler extends Base
{
    protected $fileName = '/var/log/qbonline/debug.log';
    protected $loggerType = \Monolog\Logger::DEBUG;
}
