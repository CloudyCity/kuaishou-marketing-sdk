<?php


namespace CloudyCity\KuaishouMarketingSDK;


use CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\AuthException;
use CloudyCity\KuaishouMarketingSDK\Kernel\Traits\HasHttpRequests;

class Auth
{
    use HasHttpRequests;

    /**
     * @var string
     */
    protected $appId;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var string
     */
    protected $baseUri = 'https://ad.e.kuaishou.com/rest/openapi/';

    /**
     * Auth constructor.
     * @param $appId
     * @param $secret
     * @param $responseType
     */
    public function __construct($appId, $secret, $responseType = 'array')
    {
        $this->setAppId($appId);
        $this->setSecret($secret);
        $this->setResponseType($responseType);
    }

    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
    }

    /**
     * @param $authCode
     * @return array|Kernel\Http\Response|Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface
     * @throws AuthException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws Kernel\Exceptions\InvalidArgumentException
     */
    public function getTokens($authCode)
    {
        $params = [
            'app_id' => $this->getAppId(),
            'secret' => $this->getSecret(),
            'auth_code' => $authCode
        ];
        return $this->httpPostJson('oauth2/authorize/access_token', $params);
    }

    /**
     * @param $refreshToken
     * @return array|Kernel\Http\Response|Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface
     * @throws AuthException
     * @throws Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refreshTokens($refreshToken)
    {
        $params = [
            'app_id' => $this->getAppId(),
            'secret' => $this->getSecret(),
            'refresh_token' => $refreshToken
        ];
        return $this->httpPostJson('oauth2/authorize/refresh_token', $params);
    }

    /**
     * @param $url
     * @param array $params
     * @return array|Kernel\Http\Response|Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface
     * @throws AuthException
     * @throws Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function httpPostJson($url, array $params) {
        $response = $this->request($url, 'POST', [
            'json' => $params
        ]);

        $result = $this->castResponseToType($response, 'array');
        $formatted = $this->castResponseToType($response, $this->getResponseType());

        if (!isset($result['code']) || $result['code'] != 0) {
            $message = isset($result['message']) ? $result['message'] : '';
            $code = isset($result['code']) ? $result['code'] : 0;
            throw new AuthException($message, $response, $formatted, $code);
        }

        return $formatted;
    }
}