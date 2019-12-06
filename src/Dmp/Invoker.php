<?php

namespace CloudyCity\KuaishouMarketingSDK\Dmp;

use CloudyCity\KuaishouMarketingSDK\Kernel\BaseInvoker;

/**
 * Class Invoker.
 *
 * @property \CloudyCity\KuaishouMarketingSDK\Dmp\Population\Client $population
 */
class Invoker extends BaseInvoker
{
    protected $providers = [
        'population' => \CloudyCity\KuaishouMarketingSDK\Dmp\Population\Client::class,
    ];
}
