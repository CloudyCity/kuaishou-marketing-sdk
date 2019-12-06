<?php

namespace CloudyCity\KuaishouMarketingSDK\Tool\App;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 创建应用.
     *
     * @link https://yiqixie.com/d/home/fcACuwYpSB3pFCkgbykniO7_h#
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
        return $this->httpPostJson('v1/file/ad/app/create', $params);
    }

    /**
     * 获取应用列表.
     *
     * @link https://yiqixie.com/d/home/fcACuwYpSB3pFCkgbykniO7_h#
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
        return $this->httpGetJson('v1/file/ad/app/list', $params);
    }

    /**
     * 更新应用.
     *
     * @link https://yiqixie.com/d/home/fcACuwYpSB3pFCkgbykniO7_h#
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
        return $this->httpPostJson('v1/file/ad/app/update', $params);
    }

    /**
     * 获取应用定向.
     *
     * @link https://yiqixie.com/d/home/fcACuwYpSB3pFCkgbykniO7_h#
     *
     * @param $appName
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function search($appName)
    {
        $params = [
            'app_name' => $appName,
        ];

        return $this->httpGetJson('v1/tool/app/search', $params);
    }
}
