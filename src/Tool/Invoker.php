<?php


namespace CloudyCity\KuaishouMarketingSDK\Tool;


use CloudyCity\KuaishouMarketingSDK\Kernel\BaseInvoker;

class Invoker extends BaseInvoker
{
    protected $providers = [
        'app' => \CloudyCity\KuaishouMarketingSDK\Tool\App\Client::class,
        'creativeWord' => \CloudyCity\KuaishouMarketingSDK\Tool\CreativeWord\Client::class,
        'file' => \CloudyCity\KuaishouMarketingSDK\Tool\File\Client::class,
        'interestTag' => \CloudyCity\KuaishouMarketingSDK\Tool\InterestTag\Client::class,
        'landingPage' => \CloudyCity\KuaishouMarketingSDK\Tool\LandingPage\Client::class,
        'region' => \CloudyCity\KuaishouMarketingSDK\Tool\Region\Client::class,
    ];
}