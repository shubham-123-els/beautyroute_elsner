<?php
/**
 * Copyright © 2019 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Block\Adminhtml;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Backend\Block\Widget\Container;
use Magento\Backend\Block\Widget\Context;

/**
 * Class LogViewer
 * @package Magenest\QuickBooksOnline\Block\Adminhtml
 */
class LogViewer extends Container
{
    /**
     * @var DirectoryList
     */
    private $directoryList;

    public $_template = 'debug/log.phtml';

    public function __construct(
        DirectoryList $directoryList,
        Context $context,
        array $data = []
    ) {
        $this->directoryList = $directoryList;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function getFileLocation()
    {
        return $this->directoryList->getPath('log') . DIRECTORY_SEPARATOR . 'qbonline' . DIRECTORY_SEPARATOR . 'debug.log';
    }

    /**
     * @return string
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function getLogContent()
    {
        $pathLogfile = $this->getFileLocation();
        $lengthBefore = 1000000;
        try {
            $contents = '';
            if (!file_exists($pathLogfile)) {
                return '<pre>'."QuickBooks debug log is not readable or does not exist. File path: "
                    . $pathLogfile.'</pre>';
            }

            $handle   = fopen($pathLogfile, 'r');
            fseek($handle, -$lengthBefore, SEEK_END);
            if (!$handle) {
                return '<pre>'."QuickBooks debug log is not readable or does not exist. File path: "
                    . $pathLogfile.'</pre>';
            }

            if (filesize($pathLogfile) > 0) {
                while (!feof($handle)) {
                    $contents .= preg_replace('[\[\]\s\[\]]', '</br>', '<pre>' . fgets($handle) . '</pre>');
                }
                if ($contents === false) {
                    return '<pre>'."QuickBooks debug log is not readable or does not exist. File path: "
                        . $pathLogfile.'</pre>';
                }
                fclose($handle);
            }

            return $contents;
        } catch (\Exception $e) {
            return $e->getMessage() . $pathLogfile;
        }
    }

    /**
     * @return void
     */
    public function _construct()
    {
        $this->_controller = 'adminhtml_logviewer';
        $this->_headerText = __('Debug Log Viewer');
        parent::_construct();
    }
}
