<?php

namespace CloudyCity\KuaishouMarketingSDK\Kernel;

use CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException;
use CloudyCity\KuaishouMarketingSDK\Kernel\Traits\HasHttpRequests;
use CloudyCity\KuaishouMarketingSDK\Kernel\Traits\HasSdkBaseInfo;
use GuzzleHttp\Psr7\Request;

/**
 * Class Client.
 */
class BaseClient
{
    use HasHttpRequests, HasSdkBaseInfo {
        request as performRequest;
        HasHttpRequests::getResponseType insteadof HasSdkBaseInfo;
        HasHttpRequests::setResponseType insteadof HasSdkBaseInfo;
    }

    /**
     * @var string
     */
    protected $baseUri = 'https://ad.e.kuaishou.com/rest/openapi/';

    /**
     * Client constructor.
     *
     * @param string $advertiserId
     * @param string $accessToken
     * @param string $responseType
     */
    public function __construct($advertiserId, $accessToken, $responseType = 'array')
    {
        $this->setAdvertiserId($advertiserId);
        $this->setAccessToken($accessToken);
        $this->setResponseType($responseType);
    }

    /**
     * GET request.
     *
     * @param string $url
     * @param array  $data
     * @param array  $query
     *
     * @throws ApiException
     * @throws Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Psr\Http\Message\ResponseInterface|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|array|object|string
     */
    public function httpGetJson($url, array $data = [], array $query = [])
    {
        return $this->request($url, 'GET', ['query' => $query, 'json' => $data]);
    }

    /**
     * JSON request.
     *
     * @param string $url
     * @param array  $data
     *
     * @throws ApiException
     * @throws Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Psr\Http\Message\ResponseInterface|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|array|object|string
     */
    public function httpPost($url, array $data = [])
    {
        return $this->request($url, 'POST', ['form_params' => $data]);
    }

    /**
     * JSON request.
     *
     * @param string $url
     * @param array  $data
     * @param array  $query
     *
     * @throws ApiException
     * @throws Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Psr\Http\Message\ResponseInterface|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|array|object|string
     */
    public function httpPostJson($url, array $data = [], array $query = [])
    {
        return $this->request($url, 'POST', ['query' => $query, 'json' => $data]);
    }

    /**
     * @param string $url
     * @param string $method
     * @param array  $options
     * @param bool   $returnRaw
     *
     * @throws ApiException
     * @throws Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Psr\Http\Message\ResponseInterface|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|array|object|string
     */
    public function request($url, $method = 'POST', array $options = [], $returnRaw = false)
    {
        if (empty($this->middlewares)) {
            $this->registerHttpMiddlewares();
        }

        $options['json']['advertiser_id'] = $this->getAdvertiserId();
        $response = $this->performRequest($url, $method, $options);

        $result = $this->castResponseToType($response);
        $formatted = $this->castResponseToType($response, $this->getResponseType());

        if (!isset($result['code']) || $result['code'] != 0) {
            $message = isset($result['message']) ? $result['message'] : '';
            $code = isset($result['code']) ? $result['code'] : 0;

            throw new ApiException($message, $response, $formatted, $code);
        }

        return $returnRaw ? $response : $this->castResponseToType($response, $this->getResponseType());
    }

    /**
     * Register Guzzle middlewares.
     */
    protected function registerHttpMiddlewares()
    {
        // access token
        $this->pushMiddleware($this->accessTokenMiddleware(), 'access_token');
    }

    /**
     * Attache access token to request query.
     *
     * @return \Closure
     */
    protected function accessTokenMiddleware()
    {
        return function ($handler) {
            return function ($request, $options) use ($handler) {
                /** @var Request $request */
                $request = $request->withHeader('Access-Token', $this->getAccessToken());

                return $handler($request, $options);
            };
        };
    }
}
