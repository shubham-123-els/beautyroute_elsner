<?php
/**
 * Kangaroo crdential
 */
namespace Kangaroorewards\Core\Model;
use Kangaroorewards\Core\Api\Data\KangarooCredentialInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

/**
 * Class KangarooCredential
 * @package Kangaroorewards\Core\Model
 */
class KangarooCredential  extends AbstractExtensibleModel 
    implements    KangarooCredentialInterface
{
    const ID = 'id';
    const KEY_CLIENT_ID = 'client_id';
    const KEY_CLIENT_SECRET = 'client_secret';
    const KEY_SCOPE = 'scope';
    const KEY_ACCESS_TOKEN = 'access_token';
    const KEY_REFRESH_TOKEN = 'refresh_token';
    const KEY_EXPIRES_IN = 'expires_in';
    const KEY_UPDATED_AT = 'updated_at';

    /**
     * KangarooCredential construct.
     */
    protected function _construct()
    {
        $this->_init('Kangaroorewards\Core\Model\ResourceModel\KangarooCredential');
    }

    /**
     * @param int $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        return $this->setData(self::KEY_CLIENT_ID, $clientId);
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->getData(self::KEY_CLIENT_ID);
    }

    /**
     * @param string $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        return $this->setData(self::KEY_CLIENT_SECRET, $clientSecret);
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->getData(self::KEY_CLIENT_SECRET);
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        return $this->setData(self::KEY_SCOPE, $scope);
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->getData(self::KEY_SCOPE);
    }

    /**
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        return $this->setData(self::KEY_ACCESS_TOKEN, $accessToken);
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->getData(self::KEY_ACCESS_TOKEN);
    }

    /**
     * @param string $refreshToken
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        return $this->setData(self::KEY_REFRESH_TOKEN, $refreshToken);
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->getData(self::KEY_REFRESH_TOKEN);
    }

    /**
     * @param int $expiresIn
     * @return $this
     */
    public function setExpiresIn($expiresIn)
    {
        return $this->setData(self::KEY_EXPIRES_IN, $expiresIn);
    }

    /**
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->getData(self::KEY_EXPIRES_IN);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param int $time
     * @return $this
     */
    public function setUpdated($time)
    {
        return $this->setData(self::KEY_UPDATED_AT, $time);
    }

    /**
     * @return int
     */
    public function getUpdated()
    {
        return $this->getData(self::KEY_UPDATED_AT);
    }

    /**
     * Processing object before save data
     *
     * @return $this
     */
    public function beforeSave()
    {
        $this->setUpdated(time());
        return parent::beforeSave();
    }

}