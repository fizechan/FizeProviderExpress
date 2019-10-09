<?php
/**
 * 快递物流查看类
 */
class Express{
	
	/**
	 * 根据关键字返回快递公司代码
	 * @param string $keyword
	 * @return string
	 */
	private static function getCompany_($keyword){
		$expresses = array (
			//A
			'澳大利亚邮政' => 'auspost',	//英文结果
			'Aramex' => 'aramex',	//英文结果
			'AAE' => 'aae',
			'安信达' => 'anxindakuaixi',
			//B
			'比利时邮政' => 'bpost',	//英文结果
			'比利时邮政国际件' => 'bpostinter',	//英文结果
			'百福东方' => 'baifudongfang',
			'BHT' => 'bht',
			'邦送物流' => 'bangsongwuliu',
			//C
			'加拿大邮政' => 'canpost',	//英文结果
			'加拿大邮政德文' => 'canpostfr',	//德文结果
			'City-Link Express' => 'citylink',
			'希伊艾斯' => 'cces',
			'中国东方' => 'coe',
			'传喜物流' => 'chuanxiwuliu',
			//D
			'DPEX' => 'dpex',
			'DPEX（Toll Global Express）' => 'dpexen',
			'DHL-中国件' => 'dhl',
			'DHL-国际件' => 'dhlen',	//英文结果
			'DHL-德国件' => 'dhlde',	//德文结果
			'大田物流' => 'datianwuliu',
			'德邦物流' => 'debangwuliu',
			'D速快递' => 'dsukuaidi',
			'递四方' => 'disifang',
			//E
			'EMS' => 'ems',
			'E邮宝' => 'ems',
			'EMS中国英文' => 'emsen',	//英文结果
			'EMS国际中文' => 'emsguoji',
			'EMS国际英文' => 'emsinten',	//英文结果
			//F
			'Fedex英文' => 'fedex',	//英文结果
			'Fedex中文' => 'fedexcn',
			'Fedex美国' => 'fedexus',	//英文结果
			'飞康达物流' => 'feikangda',
			'飞快达' => 'feikuaida',
			'凡客如风达' => 'rufengda',
			'风行天下' => 'fengxingtianxia',
			'飞豹快递' => 'feibaokuaidi',
			//G
			'GLS' => 'gls',
			'港中能达' => 'ganzhongnengda',
			'国通快递' => 'guotongkuaidi',
			'广东邮政' => 'guangdongyouzhengwuliu',
			'共速达' => 'gongsuda',
			//H
			'香港邮政' => 'hkpost',
			'汇通快运' => 'huitongkuaidi',
			'汇强快递' => 'huiqiangkuaidi',
			'恒路物流' => 'hengluwuliu',
			'华夏龙' => 'huaxialongwuliu',
			'海外环球' => 'haiwaihuanqiu',
			'河北建华' => 'hebeijianhua',
			'海盟速递' => 'haimengsudi',
			'华企快运' => 'huaqikuaiyun',
			'山东海红' => 'haihongwangsong',
			//J
			'佳吉物流' => 'jiajiwuliu',
			'佳怡物流' => 'jiayiwuliu',
			'加运美' => 'jiayunmeiwuliu',
			'京广速递' => 'jinguangsudikuaijian',
			'急先达' => 'jixianda',
			'晋越快递' => 'jinyuekuaidi',
			'捷特快递' => 'jietekuaidi',
			'金大物流' => 'jindawuliu',
			'嘉里大通' => 'jialidatong',
			//K
			'快捷速递' => 'kuaijiesudi',
			'康力物流' => 'kangliwuliu',
			'跨越物流' => 'kuayue',
			//L
			'联邦快递' => 'lianbangkuaidi',
			'联邦快递英文' => 'lianbangkuaidien',	//英文结果
			'联昊通' => 'lianhaowuliu',
			'龙邦物流' => 'longbanwuliu',
			'蓝镖快递' => 'lanbiaokuaidi',
			'乐捷递' => 'lejiedi',
			'立即送' => 'lijisong',
			'隆浪快递' => 'longlangkuaidi',
			//M
			'门对门' => 'menduimen',
			'美国快递' => 'meiguokuaidi',
			'明亮物流' => 'mingliangwuliu',
			//N
			'新蛋奥硕物流' => 'neweggozzo',
			//O
			'OCS' => 'ocs',
			'onTrac' => 'ontrac',
			//Q
			'全晨快递' => 'quanchenkuaidi',
			'全际通' => 'quanjitong',
			'全日通' => 'quanritongkuaidi',
			'全一快递' => 'quanyikuaidi',
			'全峰快递' => 'quanfengkuaidi',
			//R
			'瑞典邮政' => 'ruidianyouzheng',	//英文结果
			'如风达快递' => 'rufengda',
			//S
			'新加坡邮政' => 'singpost',
			'七天连锁' => 'sevendays',
			'申通' => 'shentong',
			'顺丰速递' => 'shunfeng',
			'顺丰英文' => 'shunfengen',	//英文结果
			'三态速递' => 'santaisudi',
			'盛辉物流' => 'shenghuiwuliu',
			'速尔物流' => 'suer',
			'盛丰物流' => 'shengfengwuliu',
			'上大物流' => 'shangda',
			'赛澳递' => 'saiaodi',
			'山西红马甲' => 'sxhongmajia',
			'圣安物流' => 'shenganwuliu',
			'穗佳物流' => 'suijiawuliu',
			//T
			'TNT' => 'tnt',
			'TNT英文' => 'tnten',	//英文结果
			'天地华宇' => 'tiandihuayu',
			'天天快递' => 'tiantian',
			'通和天下' => 'tonghetianxia',
			//U
			'UPS' => 'ups',
			'UPS英文' => 'upsen',	//英文结果
			'USPS' => 'usps',
			//W
			'万家物流' => 'wanjiawuliu',
			'万象物流' => 'wanxiangwuliu',
			'微特派' => 'weitepai',
			//X
			'新邦物流' => 'xinbangwuliu',
			'信丰物流' => 'xinfengwuliu',
			'星晨急便' => 'xingchengjibian',
			'鑫飞鸿' => 'xinhongyukuaidi',
			//Y
			'邮政国内' => 'youzhengguonei',
			'邮政国际' => 'youzhengguoji',
			'优速物流' => 'youshuwuliu',
			'圆通速递' => 'yuantong',
			'韵达快运' => 'yunda',
			'运通快递' => 'yuntongkuaidi',
			'远成物流' => 'yuanchengwuliu',
			'亚风速递' => 'yafengsudi',
			'一邦速递' => 'yibangwuliu',
			'源伟丰快递' => 'yuanweifeng',
			'元智捷诚' => 'yuanzhijiecheng',
			'越丰物流' => 'yuefengwuliu',
			'源安达' => 'yuananda',
			'原飞航' => 'yuanfeihangwuliu',
			'银捷速递' => 'yinjiesudi',
			'一统飞鸿' => 'yitongfeihong',
			//Z
			'中邮物流' => 'zhongyouwuliu',
			'忠信达快递' => 'zhongxinda',
			'芝麻开门' => 'zhimakaimen',
			'中通速递' => 'zhongtong',
			'宅急送' => 'zhaijisong',
			'忠信达' => 'zhongxinda',
			'中速快件' => 'zhongsukuaidi',
			'郑州建华' => 'zhengzhoujianhua',
			'中天万运' => 'zhongtianwanyun'
		);
		if(isset($expresses[$keyword])){
			return $expresses[$keyword];
		}else{
			return strtolower($keyword);
		}
	}
	
	/**
	 * 获取物流信息
	 * @param string $com 快递公司关键字
	 * @param string $nu 单号
	 * @param bool $search 是否进行关键字搜索
	 * @return mixed
	 */
	public static function getInfo($com, $nu, $search = true){
		if($search){
			$com = self::getCompany_($com);
		}
		$id = "1DC833D5BE7F70E20413A370D858B4E4";
		$url= "http://api.kuaidi100.com/api?id={$id}&com={$com}&nu={$nu}&valicode=valicode&show=0&muti=1&order=asc";
		$json = file_get_contents($url);
		if($json){
			return json_decode($json, true);
		}else{
			return false;
		}
	}
}