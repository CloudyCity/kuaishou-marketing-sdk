<?php


namespace CloudyCity\KuaishouMarketingSDK\Dmp;


use CloudyCity\KuaishouMarketingSDK\Kernel\BaseInvoker;

class Invoker extends BaseInvoker
{
    protected $providers = [
        'population' => \CloudyCity\KuaishouMarketingSDK\Dmp\Population\Client::class
    ];
}