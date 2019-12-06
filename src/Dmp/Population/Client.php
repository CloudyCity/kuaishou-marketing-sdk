<?php

namespace CloudyCity\KuaishouMarketingSDK\Dmp\Population;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 上传人群包.
     *
     * @link https://yiqixie.com/d/home/fcAAfm9OQj5OeEBd9TB2gtxvD
     *
     * @param array $params
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function upload(array $params)
    {
        return $this->httpPostJson('v1/dmp/population/upload', $params);
    }

    /**
     * 获取人群包列表.
     *
     * @link https://yiqixie.com/d/home/fcAAfm9OQj5OeEBd9TB2gtxvD
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
        return $this->httpPostJson('v1/dmp/population/list', $params);
    }

    /**
     * 删除人群包.
     *
     * @link https://yiqixie.com/d/home/fcAAfm9OQj5OeEBd9TB2gtxvD
     *
     * @param $id
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function delete($id)
    {
        $params = [
            'orientation_id' => $id,
        ];

        return $this->httpPostJson('v1/dmp/population/delete', $params);
    }

    /**
     * 推送人群包.
     *
     * @link https://yiqixie.com/d/home/fcAAfm9OQj5OeEBd9TB2gtxvD
     *
     * @param $id
     *
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function push($id)
    {
        $params = [
            'orientation_id' => $id,
        ];

        return $this->httpPostJson('v1/dmp/population/push', $params);
    }
}
