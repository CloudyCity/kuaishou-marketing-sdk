# Kuaishou Marketing Sdk

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
[![standard-readme compliant](https://img.shields.io/badge/readme%20style-standard-brightgreen.svg?style=flat-square)](https://github.com/RichardLitt/standard-readme)<!-- ALL-CONTRIBUTORS-BADGE:START - Do not remove or modify this section -->
[![All Contributors](https://img.shields.io/badge/all_contributors-1-orange.svg?style=flat-square)](#contributors-)
<!-- ALL-CONTRIBUTORS-BADGE:END -->

## 内容列表

- [安装](#安装)
- [使用说明](#使用说明)
	- [授权](#授权)
	- [基础调用](#基础调用)
	- [参照示例](#参照示例)
- [所有方法](#所有方法)
- [维护者](#维护者)
- [贡献者](#贡献者)
- [如何贡献](#如何贡献)
- [使用许可](#使用许可)

## 安装
```bash
composer require cloudycity/kuaishou-marketing-sdk:*
```

## 使用说明

### 授权

```php
use CloudyCity\KuaishouMarketingSDK\Auth;

// 获取token
$auth = new Auth(APPID, SECRET);
var_dump($auth->getTokens(AUTH_CODE));

// 刷新token
var_dump($auth->refreshTokens(REFRESH_TOKEN));
```

### 基础调用

参照[所有方法](#所有方法)

```php
$client = new Client(ADVERTISE_ID, TOKEN);
var_dump($client->advertiser->getInfo());
```

### 参照示例

组件提供了一个Interface [`CloudyCity\KuaishouMarketingSDK\Kernel\Contracts\KuaishouService`](src/Kernel/Contracts/KuaishouService.php)

这里以一个实现了Integerface的Service为例：

```php
use CloudyCity\KuaishouMarketingSDK\Client;
use App\Services\KuaishouService;

$apps = KuaishouService::getApps();

// 遍历开发者应用
foreach ($apps as $app) {

    $service = new KuaishouService($app['id'], $app['secret']);
    $advertiserIds = $service->getAdvertiserIds();

    // 遍历应用下授权的广告主
    foreach ($advertiserIds as $advertiserId) {
        $tokens = $service->getTokenByCache($advertiserId);
        $client = new Client($tokens['advertiser_id'], $tokens['access_token']);

        // 处理业务逻辑
        try {
            $result = $client->advertiser->getFunds();
        } catch(\Exception $e) {
            //
        }
    }
}
```

## 所有方法

广告主模块|执行方式
---|---
获取广告主信息|$client->advertiser->getInfo()
创建广告主余额|$client->advertiser->getFunds()
修改广告主流水|$client->advertiser->getFlows($params)

广告计划模块|执行方式
---|---
获取广告计划|$client->campaign->get($params)
创建广告计划|$client->campaign->create($params)
修改广告计划|$client->campaign->update($params)
更新计划状态|$client->campaign->updateStatus($campaignId, $status)

广告组|执行方式
---|---
获取广告组|$client->unit->get($params)
创建广告组|$client->unit->create($params)
修改广告组|$client->unit->update($params)
更新组出价|$client->unit->updateBid($unitId, $bid)
更新组预算|$client->unit->updateBudget($unitId, $budget)
更新组状态|$client->unit->updateStatus($unitId, $status)
获取深度转化类型|$client->unit->getConversionInfo()

广告创意|执行方式
---|---
获取创意列表|$client->creative->get($params)
创建广告创意|$client->creative->create($params)
修改创意信息|$client->creative->update($params)
更新创意状态|$client->creative->updateStatus($creativeId, $status)

数据报表|执行方式
---|---
广告主数据|$client->report->getAdvertiserReports($params)
广告计划数据|$client->report->getCampaignReports($params)
广告组数据|$client->report->getUnitReports($params)
广告创意数据|$client->report->getCreativeReports($params)

DMP 人群管理|执行方式
---|---
上传人群|$client->dmp->population->upload($params)
人群列表查询|$client->dmp->population->get($params)
删除人群包|$client->dmp->population->delete($id)
推送人群包|$client->dmp->population->push($id)

工具（文件管理）|执行方式
---|---
上传视频|$client->tool->file->uploadVideo($params)
获取视频列表|$client->tool->file->getVideos($params)
广告图片|$client->tool->file->uploadImage($params)
获取图片信息|client->tool->file->getImage($params)
获取图片列表|client->tool->file->getImages($params)

工具（动态词包）|执行方式
---|---
获取动态词包|$client->tool->creativeWord->get()
获取贴纸样式|$client->tool->creativeWord->getStyles()

工具（定向标签）|执行方式
---|---
获取定向标签|$client->tool->interestTag->get($type)

工具（应用定向）|执行方式
---|---
获取应用列表|$client->tool->app->get($params)
创建应用|$client->tool->app->create($params)
更新应用|$client->tool->app->update($params)
获取应用定向列表|$client->tool->app->search($appName)

工具（应用定向）|执行方式
---|---
获取地域信息|$client->tool->region->get()

工具（建站工具）|执行方式
---|---
获取落地页列表|$client->tool->landingPage->getPages($params)
获取组件列表|$client->tool->landingPage->getComponents($params)
获取线索列表|$client->tool->landingPage->getLeads($params)
更新线索|$client->tool->landingPage->updateLeads($params)

## 维护者

- @CloudyCity

## 贡献者 ✨

Thanks goes to these wonderful people ([emoji key](https://allcontributors.org/docs/en/emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<table>
  <tr>
    <td align="center"><a href="https://github.com/husanjun"><img src="https://avatars.githubusercontent.com/u/49985266?v=4?s=100" width="100px;" alt=""/><br /><sub><b>husanjun</b></sub></a><br /><a href="https://github.com/CloudyCity/kuaishou-marketing-sdk/commits?author=husanjun" title="Code">💻</a></td>
  </tr>
</table>

<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->

项目遵循 [all-contributors](https://github.com/all-contributors/all-contributors) 规范。 欢迎任何形式的贡献!

## 如何贡献

非常欢迎你的加入！[提一个 Issue](https://github.com/CloudyCity/kuaishou-marketing-sdk/issues/new) 或者提交一个 Pull Request。

标准 Readme 遵循 [Contributor Covenant](http://contributor-covenant.org/version/1/3/0/) 行为规范。

## 使用许可

[MIT](LICENSE)

[ico-version]: https://img.shields.io/packagist/v/cloudycity/kuaishou-marketing-sdk.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/cloudycity/kuaishou-marketing-sdk/master.svg?style=flat-square
[ico-code-coverage]: https://img.shields.io/scrutinizer/coverage/g/cloudycity/kuaishou-marketing-sdk.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/222357859/shield?branch=master
[ico-code-quality]: https://img.shields.io/scrutinizer/g/cloudycity/kuaishou-marketing-sdk.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/cloudycity/kuaishou-marketing-sdk.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/cloudycity/kuaishou-marketing-sdk
[link-travis]: https://travis-ci.org/cloudycity/kuaishou-marketing-sdk
[link-code-coverage]: https://scrutinizer-ci.com/g/cloudycity/kuaishou-marketing-sdk/code-structure
[link-styleci]: https://styleci.io/repos/222357859
[link-code-quality]: https://scrutinizer-ci.com/g/cloudycity/kuaishou-marketing-sdk
[link-downloads]: https://packagist.org/cloudycity/kuaishou-marketing-sdk
[link-author]: https://github.com/cloudycity
