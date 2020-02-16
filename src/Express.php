<?php


namespace fize\provider\express;

/**
 * 快递查询
 */
class Express
{

    /**
     * 状态：在途
     */
    const STATE_EN_ROUTE = 0;

    /**
     * 状态：揽收
     */
    const STATE_COLLECT = 1;

    /**
     * 状态：疑难
     */
    const STATE_DIFFICULT = 2;

    /**
     * 状态：签收
     */
    const STATE_SIGN_FOR = 3;

    /**
     * 状态：退签
     */
    const state_SIGN_OUT = 4;

    /**
     * 状态：派件
     */
    const STATE_DELIVERY = 5;

    /**
     * 状态：退回
     */
    const STATE_BACK = 6;

    /**
     * @var ExpressHandler 接口处理器
     */
    protected static $handler;

    /**
     * 取得单例
     * @param string $handler 使用的实际接口名称
     * @param array $config 配置项
     * @return ExpressHandler
     */
    public static function getInstance($handler, array $config = [])
    {
        if (empty(self::$handler)) {
            $class = '\\' . __NAMESPACE__ . '\\handler\\' . $handler;
            self::$handler = new $class($config);
        }
        return self::$handler;
    }
}
