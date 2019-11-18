<?php


namespace CloudyCity\KuaishouMarketingSDK\Advertising\Campaign;


use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 创建广告计划
     *
     * @link https://yiqixie.com/d/home/fcACuwYpSB3pFCkgbykniO7_h
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $params)
    {
        return $this->httpPostJson('v2/campaign/create', $params);
    }

    /**
     * 获取广告计划列表
     *
     * @link https://yiqixie.com/d/home/fcAB8NFoHn82gbNSTAM4rU2re
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(array $params)
    {
        return $this->httpPostJson('v1/campaign/list', $params);
    }

    /**
     * 更新广告计划
     *
     * @link https://yiqixie.com/d/home/fcABb12AIZLwBzk5itfCK395N
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(array $params)
    {
        return $this->httpPostJson('v2/campaign/update', $params);
    }

    /**
     * 更新广告计划状态
     *
     * @link https://yiqixie.com/d/home/fcABb12AIZLwBzk5itfCK395N
     * @param $campaignId
     * @param $status
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateStatus($campaignId, $status)
    {
        $params = [
            'campaign_id' => $campaignId,
            'put_status' => $status
        ];
        return $this->httpPostJson('v1/campaign/update/status', $params);
    }
}