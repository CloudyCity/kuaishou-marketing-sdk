<?php

namespace CloudyCity\KuaishouMarketingSDK\Advertising\Creative;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 创建广告创意
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
        return $this->httpPostJson('v2/creative/create', $params);
    }

    /**
     * 获取广告创意列表
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
        return $this->httpPostJson('v1/creative/list', $params);
    }

    /**
     * 更新广告创意
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
        return $this->httpPostJson('v2/creative/update', $params);
    }

    /**
     * 更新广告创意状态
     *
     * @link https://yiqixie.com/d/home/fcABb12AIZLwBzk5itfCK395N
     * @param $creativeId
     * @param $status
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateStatus($creativeId, $status)
    {
        $params = [
            'unit_id' => $creativeId,
            'put_status' => $status
        ];
        return $this->httpPostJson('v1/creative/update/status', $params);
    }
}
