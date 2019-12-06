<?php

namespace CloudyCity\KuaishouMarketingSDK\Tool\CreativeWord;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 获取动态词包列表
     *
     * @link https://yiqixie.com/d/home/fcACuwYpSB3pFCkgbykniO7_h#
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get()
    {
        return $this->httpGetJson('v1/tool/creative_word/list');
    }

    /**
     * 获取贴纸样式列表
     *
     * @link https://yiqixie.com/d/home/fcACuwYpSB3pFCkgbykniO7_h#
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getStyles()
    {
        return $this->httpGetJson('v1/tool/creative_word/styles');
    }
}
