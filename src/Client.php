<?php

namespace CloudyCity\KuaishouMarketingSDK;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseInvoker;

/**
 * Class Client.
 *
 * @property \CloudyCity\KuaishouMarketingSDK\Advertiser\Client $advertiser
 * @property \CloudyCity\KuaishouMarketingSDK\Advertising\Campaign\Client $campaign
 * @property \CloudyCity\KuaishouMarketingSDK\Advertising\Unit\Client $unit
 * @property \CloudyCity\KuaishouMarketingSDK\Advertising\Creative\Client $creative
 * @property \CloudyCity\KuaishouMarketingSDK\Report\Client $report
 * @property \CloudyCity\KuaishouMarketingSDK\Tool\Invoker $tool
 * @property \CloudyCity\KuaishouMarketingSDK\Dmp\Invoker $dmp
 */
class Client extends BaseInvoker
{
    protected $providers = [
        'advertiser' => \CloudyCity\KuaishouMarketingSDK\Advertiser\Client::class,
        'campaign'   => \CloudyCity\KuaishouMarketingSDK\Advertising\Campaign\Client::class,
        'unit'       => \CloudyCity\KuaishouMarketingSDK\Advertising\Unit\Client::class,
        'creative'   => \CloudyCity\KuaishouMarketingSDK\Advertising\Creative\Client::class,
        'report'     => \CloudyCity\KuaishouMarketingSDK\Report\Client::class,
        'tool'       => \CloudyCity\KuaishouMarketingSDK\Tool\Invoker::class,
        'dmp'        => \CloudyCity\KuaishouMarketingSDK\Dmp\Invoker::class,
    ];
}
