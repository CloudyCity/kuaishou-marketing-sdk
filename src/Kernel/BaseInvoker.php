<?php


namespace CloudyCity\KuaishouMarketingSDK\Kernel;


use CloudyCity\KuaishouMarketingSDK\Kernel\Traits\HasSubInvoker;

class BaseInvoker
{
    use HasSubInvoker;

    protected $providers = [];

    /**
     * @var string
     */
    protected $responseType;

    /**
     * @return string
     */
    protected function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @param string $responseType
     */
    protected function setResponseType($responseType)
    {
        $this->responseType = $responseType;
    }

    public function __construct($advertiserId, $accessToken, $responseType = 'array')
    {
        $this->setAdvertiserId($advertiserId);
        $this->setAccessToken($accessToken);
        $this->setResponseType($responseType);
    }
}