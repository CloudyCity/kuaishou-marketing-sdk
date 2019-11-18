<?php


namespace CloudyCity\KuaishouMarketingSDK\Tool\LandingPage;


use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 获取落地页列表
     *
     * @link https://yiqixie.com/d/home/fcADtLnLiWvasTjKvfRy9S9lr
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPages(array $params)
    {
        return $this->httpPostJson('v1/lp/page/list', $params);
    }

    /**
     * 获取组件列表
     *
     * @link https://yiqixie.com/d/home/fcADtLnLiWvasTjKvfRy9S9lr
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getComponents(array $params)
    {
        return $this->httpPostJson('v1/lp/component/list', $params);
    }

    /**
     * 获取线索列表
     *
     * @link https://yiqixie.com/d/home/fcADtLnLiWvasTjKvfRy9S9lr
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getLeads(array $params)
    {
        return $this->httpPostJson('v1/lp/lead/list', $params);
    }

    /**
     * 更新线索
     *
     * @link https://yiqixie.com/d/home/fcADtLnLiWvasTjKvfRy9S9lr
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateLeads(array $params)
    {
        return $this->httpPostJson('v1/lp/lead/mod', $params);
    }
}