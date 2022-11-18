<?php
/**
 * Handle kangaroorewards_credential
 */
namespace Kangaroorewards\Core\Model;
use Kangaroorewards\Core\Api\KangarooCredentialRepositoryInterface;
use Kangaroorewards\Core\Helper\KangarooRewardsRequest;

/**
 * Class KangarooCredentialRepository
 * @package Kangaroorewards\Core\Model
 */
class KangarooCredentialRepository 
    implements KangarooCredentialRepositoryInterface
{
    /**
     * @var KangarooCredentialFactory \
     */
    protected $credentialFactory;

    /**
     * @var Kangaroorewards\Core\Model\ResourceModel\KangarooCredential
     */
    protected $recourceModel;

    /**
     * KangarooCredentialRepository constructor.
     * @param KangarooCredentialFactory $credentialFactory
     * @param ResourceModel\KangarooCredential $resourceModel
     */
    public function __construct(
        \Kangaroorewards\Core\Model\KangarooCredentialFactory $credentialFactory,
        \Kangaroorewards\Core\Model\ResourceModel\KangarooCredential $resourceModel
    )
    {
        $this->credentialFactory = $credentialFactory;
        $this->resourceModel = $resourceModel;
    }

    /**
     * @param \Kangaroorewards\Core\Api\Data\KangarooCredentialInterface $credential
     * @return \Kangaroorewards\Core\Api\Data\KangarooCredentialInterface
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function save(\Kangaroorewards\Core\Api\Data\KangarooCredentialInterface $credential)
    {
        $credentialResource = $this->credentialFactory->create()->load(1);
        $id = $credentialResource->getId();
        if (isset($id)) {
            //update first record
            $credential->setId(1);
            $credential->setAccessToken(null);
            $credential->setRefreshToken(null);
            $credential->setExpiresIn(null);
            $this->resourceModel->save($credential);
            return $credential;
        } else {
            $connection = $this->resourceModel->getConnection();
            $clientId = $credential->getClientId();
            $secret = $credential->getClientSecret();
            $scope = $credential->getScope();
            $sql = "insert into kangaroorewards_credential (id, client_id, client_secret, scope) values(1, '{$clientId}','{$secret}','{$scope}')";
            $connection->query($sql);
            $credentialResource = $this->credentialFactory->create()->load(1);
            return $credentialResource;
        }
    }
}