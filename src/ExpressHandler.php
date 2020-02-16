<?php


namespace fize\provider\express;

/**
 * 快递接口
 */
abstract class ExpressHandler
{

    /**
     * @var array 配置
     */
    protected $config;

    /**
     * @var int 错误码
     */
    protected $errcode = 0;

    /**
     * @var string 错误信息
     */
    protected $errmsg = '';

    /**
     * @var int 快递状态
     */
    protected $state;

    /**
     * @var array 快递明细
     */
    protected $details;

    /**
     *  构造
     * @param array $config 配置
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * 获取错误码
     * @return int
     */
    public function getErrcode()
    {
        return $this->errcode;
    }

    /**
     * 获取错误信息
     * @return string
     */
    public function getErrmsg()
    {
        return $this->errmsg;
    }

    /**
     * 获取状态
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * 获取明细
     *
     * 数组，包含多项，全量，倒序（即时间最新的在最前）
     * 每项格式为 [time, content]
     * @return array
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * 查询
     * @param string $num 快递单号
     * @param string $company 快递公司
     * @return bool
     */
    abstract public function query($num, $company = null);
}
