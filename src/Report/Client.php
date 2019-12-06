<?php

namespace CloudyCity\KuaishouMarketingSDK\Report;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 获取广告主报表
     *
     * @link https://yiqixie.com/d/home/fcAC2OzurfmGRLHLJsNRz_wIX
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAdvertiserReports(array $params)
    {
        return $this->httpPostJson('v1/report/account_report', $params);
    }

    /**
     * 获取广告计划报表
     *
     * @link https://yiqixie.com/d/home/fcAC2OzurfmGRLHLJsNRz_wIX
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCampaignReports(array $params)
    {
        return $this->httpPostJson('v1/report/campaign_report', $params);
    }

    /**
     * 获取广告组报表
     *
     * @link https://yiqixie.com/d/home/fcAC2OzurfmGRLHLJsNRz_wIX
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUnitReports(array $params)
    {
        return $this->httpPostJson('v1/report/unit_report', $params);
    }

    /**
     * 获取广告创意报表
     *
     * @link https://yiqixie.com/d/home/fcAC2OzurfmGRLHLJsNRz_wIX
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCreativeReports(array $params)
    {
        return $this->httpPostJson('v1/report/creative_report', $params);
    }
}
