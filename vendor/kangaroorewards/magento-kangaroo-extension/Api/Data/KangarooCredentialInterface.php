<?php
/**
 * For save kangaroo credential information
 */
namespace Kangaroorewards\Core\Api\Data;
use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Interface KangarooCredentialInterface
 * @package Kangaroorewards\Core\Api\Data
 */
interface KangarooCredentialInterface extends ExtensibleDataInterface
{
    /**
     * @param int $clientId
     * @return $this
     */
    public function setClientId($clientId);

    /**
     * @return int
     */
    public function getClientId();

    /**
     * @param string $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret);

    /**
     * @return string
     */
    public function getClientSecret();

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope($scope);

    /**
     * @return string
     */
    public function getScope();

    /**
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken($accessToken);

    /**
     * @return string
     */
    public function getAccessToken();

    /**
     * @param string $refreshToken
     * @return $this
     */
    public function setRefreshToken($refreshToken);

    /**
     * @return string
     */
    public function getRefreshToken();

    /**
     * @param int $expiresIn
     * @return $this
     */
    public function setExpiresIn($expiresIn);

    /**
     * @return int
     */
    public function getExpiresIn();

    /**
     * @return $this
     */
    public function getId();

    /**
     * @param int $time
     * @return $this
     */
    public function setUpdated($time);

    /**
     * @return int
     */
    public function getUpdated();
}