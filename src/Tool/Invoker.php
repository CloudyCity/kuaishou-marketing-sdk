<?php

namespace CloudyCity\KuaishouMarketingSDK\Tool;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseInvoker;

/**
 * Class Invoker.
 *
 * @property \CloudyCity\KuaishouMarketingSDK\Tool\App\Client          $app
 * @property \CloudyCity\KuaishouMarketingSDK\Tool\CreativeWord\Client $creativeWord
 * @property \CloudyCity\KuaishouMarketingSDK\Tool\File\Client         $file
 * @property \CloudyCity\KuaishouMarketingSDK\Tool\InterestTag\Client  $interestTag
 * @property \CloudyCity\KuaishouMarketingSDK\Tool\LandingPage\Client  $landingPage
 * @property \CloudyCity\KuaishouMarketingSDK\Tool\Region\Client       $region
 */
class Invoker extends BaseInvoker
{
    protected $providers = [
        'app'          => \CloudyCity\KuaishouMarketingSDK\Tool\App\Client::class,
        'creativeWord' => \CloudyCity\KuaishouMarketingSDK\Tool\CreativeWord\Client::class,
        'file'         => \CloudyCity\KuaishouMarketingSDK\Tool\File\Client::class,
        'interestTag'  => \CloudyCity\KuaishouMarketingSDK\Tool\InterestTag\Client::class,
        'landingPage'  => \CloudyCity\KuaishouMarketingSDK\Tool\LandingPage\Client::class,
        'region'       => \CloudyCity\KuaishouMarketingSDK\Tool\Region\Client::class,
    ];
}
