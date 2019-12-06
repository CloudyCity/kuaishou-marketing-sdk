<?php

namespace CloudyCity\KuaishouMarketingSDK\Kernel\Traits;

trait HasSdkBaseInfo
{
    /**
     * @var string
     */
    protected $accessToken;

    /**
     * @var string
     */
    protected $advertiserId;

    /**
     * @return string
     */
    protected function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    protected function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    protected function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    /**
     * @param string $advertiserId
     */
    protected function setAdvertiserId($advertiserId)
    {
        $this->advertiserId = $advertiserId;
    }
}
