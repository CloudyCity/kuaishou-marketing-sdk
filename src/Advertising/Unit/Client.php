<?php

namespace CloudyCity\KuaishouMarketingSDK\Advertising\Unit;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 创建广告组.
     *
     * @link https://yiqixie.com/d/home/fcACuwYpSB3pFCkgbykniO7_h
     *
     * @param array $params
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function create(array $params)
    {
        return $this->httpPostJson('v2/ad_unit/create', $params);
    }

    /**
     * 获取广告组列表.
     *
     * @link https://yiqixie.com/d/home/fcAB8NFoHn82gbNSTAM4rU2re
     *
     * @param array $params
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function get(array $params)
    {
        return $this->httpPostJson('v1/ad_unit/list', $params);
    }

    /**
     * 更新广告组.
     *
     * @link https://yiqixie.com/d/home/fcABb12AIZLwBzk5itfCK395N
     *
     * @param array $params
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function update(array $params)
    {
        return $this->httpPostJson('v2/ad_unit/update', $params);
    }

    /**
     * 更新广告组出价.
     *
     * @link https://yiqixie.com/d/home/fcABb12AIZLwBzk5itfCK395N
     *
     * @param $unitId
     * @param $bid
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateBid($unitId, $bid)
    {
        $params = [
            'unit_id' => $unitId,
            'bid'     => $bid,
        ];

        return $this->httpPostJson('v1/ad_unit/update/bid', $params);
    }

    /**
     * 更新广告组预算.
     *
     * @link https://yiqixie.com/d/home/fcABb12AIZLwBzk5itfCK395N
     *
     * @param $unitId
     * @param $budget
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateBudget($unitId, $budget)
    {
        $params = [
            'unit_id'    => $unitId,
            'day_budget' => $budget,
        ];

        return $this->httpPostJson('v1/ad_unit/update/day_budget', $params);
    }

    /**
     * 更新广告组状态
     *
     * @link https://yiqixie.com/d/home/fcABb12AIZLwBzk5itfCK395N
     *
     * @param $unitId
     * @param $status
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function updateStatus($unitId, $status)
    {
        $params = [
            'unit_id'    => $unitId,
            'put_status' => $status,
        ];

        return $this->httpPostJson('v1/ad_unit/update/status', $params);
    }

    /**
     * 获取深度转化类型.
     *
     * @link https://yiqixie.com/d/home/fcACuwYpSB3pFCkgbykniO7_h#
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function getConversionInfo()
    {
        return $this->httpGetJson('v1/ad_unit/ocpc/conversion_infos');
    }
}
