<?php
/**
 * For save kangaroo credential information
 */
namespace Kangaroorewards\Core\Api;

/**
 * Interface KangarooCredentialRepositoryInterface
 * @package Kangaroorewards\Core\Api
 */
interface KangarooCredentialRepositoryInterface
{
    /**
     * @param \Kangaroorewards\Core\Api\Data\KangarooCredentialInterface $credential
     * @return \Kangaroorewards\Core\Api\Data\KangarooCredentialInterface
     */
    public function save(\Kangaroorewards\Core\Api\Data\KangarooCredentialInterface $credential);
}