<?php

namespace CloudyCity\KuaishouMarketingSDK\Tool\File;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 上传视频.
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
    public function uploadVideo(array $params)
    {
        return $this->httpPost('v2/file/ad/video/upload', $params);
    }

    /**
     * 获取视频列表.
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
    public function getVideos(array $params)
    {
        return $this->httpPostJson('v1/file/ad/video/list', $params);
    }

    /**
     * 上传图片.
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
    public function uploadImage(array $params)
    {
        return $this->httpPost('v2/file/ad/image/upload', $params);
    }

    /**
     * 获取图片信息.
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
    public function getImage(array $params)
    {
        return $this->httpGetJson('v1/file/ad/image/get', $params);
    }

    /**
     * 获取图片列表.
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
    public function getImages(array $params)
    {
        return $this->httpGetJson('v1/file/ad/image/list', $params);
    }
}
