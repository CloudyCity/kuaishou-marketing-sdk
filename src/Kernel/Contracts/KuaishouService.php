<?php


namespace CloudyCity\KuaishouMarketingSDK\Kernel\Contracts;


interface KuaishouService
{
    /**
     * 从缓存获取所有应用
     *
     * @return mixed
     */
    public static function getApps();

    /**
     * 从缓存获取指定应用
     *
     * @param $appId
     * @return mixed
     */
    public static function getApp($appId);

    /**
     * 从缓存获取广告主
     *
     * @return mixed
     */
    public function getAdvertiserIds();

    /**
     * 从API获取tokens并保存到缓存
     *
     * @param $authCode
     * @return mixed
     */
    public function getTokens($authCode);

    /**
     * 从缓存获取token
     *
     * @param $advertiserId
     * @param bool $checkAvailability 检查可用性
     * @return mixed
     */
    public function getTokensByCache($advertiserId, $checkAvailability = true);

    /**
     * 刷新token
     *
     * @param array $tokens
     * @return mixed
     */
    public function refreshTokens(array $tokens);

    /**
     * 保存token到缓存
     *
     * @param array $tokens
     * @return mixed
     */
    public function saveTokens(array $tokens);

    /**
     * 检查token可用性，过期时刷新token
     *
     * @param array $tokens
     * @return mixed
     */
    public function checkToken(array $tokens);
}