<?php
/**
 * Prepare for send request to kangaroo api
 */
namespace Kangaroorewards\Core\Helper;
use Kangaroorewards\Core\Model\KangarooCredentialFactory;

/**
 * Class KangarooRewardsRequest
 *
 * @package Kangaroorewards\Core\Helper
 */
class KangarooRewardsRequest
{
    private static $_baseUri = 'https://integrations.kangarooapis.com/';
    private $_timeout = 240;

    const METHOD_POST = 'POST';
    const METHOD_GET = 'GET';

    /**
     * @var KangarooCredentialFactory
     */
    protected $credentialFactory;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    private $lang;

    /**
     * KangarooRewardsRequest constructor.
     * @param KangarooCredentialFactory $credentialFactory
     * @param \Psr\Log\LoggerInterface $logger
     * @param string $lang
     */
    public function __construct(
        KangarooCredentialFactory $credentialFactory,
        \Psr\Log\LoggerInterface $logger,
        $lang = null
    )
    {
        $this->credentialFactory = $credentialFactory;
        $this->logger = $logger;
        $this->lang = $lang;
    }

    /**
     * @param $path
     * @param array $data
     * @return mixed
     */
    public function post($path, $data = array())
    {
        $token = $this->getKangarooAccessToken();
        return $this->_request(
            self::METHOD_POST,
            $path,
            $data,
            $token
        );
    }

    /**
     * @param $path
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function get($path, $data = array())
    {
        $token = $this->getKangarooAccessToken();
        return $this->_request(
            self::METHOD_GET,
            $path,
            $data,
            $token
        );
    }

    /**
     * @param $method
     * @param $path
     * @param $data
     * @param string $key
     * @param bool $retry
     * @return mixed
     * @throws \Exception
     */
    private function _request($method, $path, $data, $key = '', $retry = true)
    {
        $uriPath = self::getKangarooAPIUrl() . '/' . $path;

        $ch = curl_init();
        $headers = ["Content-Type: application/json"];
        if ($key != '') {
            $headers[] = "Authorization: Bearer {$key}";
        }

        if (isset($this->lang)) {
            $headers[] = "Accept-Language: " . $this->lang;
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->_timeout);
        $curlOptPost = ($method === self::METHOD_POST) ? 1 : 0;
        curl_setopt($ch, CURLOPT_POST, $curlOptPost);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_URL, $uriPath);

        if (count($data) > 0) {
            if ($method == self::METHOD_GET) {
                curl_setopt($ch, CURLOPT_URL, $uriPath . '?' . http_build_query($data));
            } else {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            }
        }

        $response = curl_exec($ch);
        $errno = curl_errno($ch);
        $error = curl_error($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($retry && $httpCode == 401) {
            $this->logger->info('[KangarooRewards] - 401 error - path:' . $path);
            $key = $this->getKangarooAccessToken(true);
            return $this->_request($method, $path, $data, $key, $retry = false);
        } else if ($errno || $httpCode >= 400) {
            $this->logger->info('[KangarooRewards] Request error - ' . json_encode([
                    'url' => $path,
                    'payload' => $data,
                    'error' => $error,
                    'errno' => $errno,
                    'response' => $response
                ]));
        }

        return $response;
    }

    /**
     * @return string
     */
    public static function getKangarooAPIUrl()
    {
        $url = rtrim(self::$_baseUri, '/');
        return $url;
    }

    /**
     * @return string
     * @param $force
     * @throws \Exception
     */
    public function getKangarooAccessToken($force = false)
    {
        $existingCredential = $this->credentialFactory->create()->load(1);
        $id = $existingCredential->getId();
        if (!isset($id)) {
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $resourceConnection = $objectManager
                ->get('\Magento\Framework\App\ResourceConnection');
            $connection = $resourceConnection->getConnection();
            $sql = "select id FROM kangaroorewards_credential order by id desc limit 1";
            $latestIdResults = $connection->fetchAll($sql);
            if (isset($latestIdResults[0]['id'])) {
                $id = $latestIdResults[0]['id'];
                $existingCredential = $this->credentialFactory->create()->load($id);
                $this->logger->info('[KangarooRewards] - Get kangaroo credential from db. Id:' . $id);
            }
        }

        if (isset($id)) {
            try {
                $item = $existingCredential->getData();
                if (!$force && isset($item['access_token']) && $item['access_token'] != '') {
                    if ($item['updated_at'] + $item['expires_in'] > time()) {
                        $this->logger->info('[KangarooRewards] - Get access token from db.', $item);
                        return $item['access_token'];
                    }
                }

                $this->logger->info('[KangarooRewards] - Before request a token.' . json_encode($item));
                return $this->getAccessToken($existingCredential);

            } catch (\Exception $e) {
                $this->logger->info('[KangarooRewards] - Can not get access token. ' . $e->getMessage());
                return '';
            }
        }
        $this->logger->info('[KangarooRewards][getKangarooAccessToken] Error - Kangaroo credential not found.');
        return '';
    }

    /**
     * @param $credential
     * @return string
     * @throws \Exception
     */
    private function getAccessToken($credential)
    {
        $item = $credential->getData();
        $sendData = [
            'grant_type' => 'client_credentials',
            'client_id' => $item['client_id'],
            'client_secret' => $item['client_secret'],
            'scope' => $item['scope'],
        ];

        $response = $this->_request(self::METHOD_POST, 'oauth/token', $sendData);
        $this->logger->info('[KangarooRewards]- UpdateAccessToken');

        $object = json_decode($response, false);
        if (isset($object->access_token)) {
            $credential->setAccessToken($object->access_token);
            $credential->setExpiresIn($object->expires_in);
            $credential->save();
            return $object->access_token;
        }

        return '';
    }

}
