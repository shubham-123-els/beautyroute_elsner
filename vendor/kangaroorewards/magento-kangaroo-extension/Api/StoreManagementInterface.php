<?php
/**
 * Customized api interface to get store address
 */
namespace Kangaroorewards\Core\Api;

/**
 * Interface StoreManagementInterface
 *
 * @package Kangaroorewards\Core\Api
 */
interface StoreManagementInterface
{
    /**
     * Get store address, country info
     *
     * @return array
     */
    public function getStoreAddressInfo();
}
