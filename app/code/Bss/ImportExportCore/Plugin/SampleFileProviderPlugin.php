<?php
/**
 *
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category  BSS
 * @package   Bss_ImportExportCore
 * @author    Extension Team
 * @copyright Copyright (c) 2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license   http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\ImportExportCore\Plugin;

class SampleFileProviderPlugin
{
    const ENTERPRISE_EDITION_NAME = 'Enterprise';

    const BSS_SAMPLE_DOWNLOAD_FULL_ACTION_NAME = 'bssimportexport_import_download';

    const ENTERPRISE_SUFFIX = '_ee';

    /**
     * @var \Magento\Framework\App\ProductMetadataInterface
     */
    protected $productMetadata;

    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $request;

    /**
     * SampleFileProviderPlugin constructor.
     * @param \Magento\Framework\App\ProductMetadataInterface $productMetadata
     * @param \Magento\Framework\App\Request\Http $request
     */
    public function __construct(
        \Magento\Framework\App\ProductMetadataInterface $productMetadata,
        \Magento\Framework\App\Request\Http $request
    ) {
        $this->productMetadata = $productMetadata;
        $this->request = $request;
    }

    /**
     * @param $subject
     * @param \Closure $proceed
     * @param string $entityName
     * @return mixed
     */
    public function aroundGetSize($subject, \Closure $proceed, string $entityName)
    {
        if ($this->request->getFullActionName() == self::BSS_SAMPLE_DOWNLOAD_FULL_ACTION_NAME) {
            if ($this->productMetadata->getEdition() == self::ENTERPRISE_EDITION_NAME) {
                try {
                    return $proceed($entityName . self::ENTERPRISE_SUFFIX);
                } catch (\Exception $e) {
                    return $proceed($entityName);
                }
            }
        }
        return $proceed($entityName);
    }

    /**
     * @param $subject
     * @param \Closure $proceed
     * @param string $entityName
     * @return mixed
     */
    public function aroundGetFileContents($subject, \Closure $proceed, string $entityName)
    {
        if ($this->request->getFullActionName() == self::BSS_SAMPLE_DOWNLOAD_FULL_ACTION_NAME) {
            if ($this->productMetadata->getEdition() == self::ENTERPRISE_EDITION_NAME) {
                try {
                    return $proceed($entityName . self::ENTERPRISE_SUFFIX);
                } catch (\Exception $e) {
                    return $proceed($entityName);
                }
            }
        }
        return $proceed($entityName);
    }
}
