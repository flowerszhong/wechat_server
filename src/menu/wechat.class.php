<?php
class Wechat {
	private function getAccessToken()//获取access_token
	{
		$url       = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . AppId . "&secret=" . AppSecret;
		$data      = getCurl($url);//通过自定义函数getCurl得到https的内容
		$resultArr = json_decode($data, true);//转为数组
		var_dump($resultArr);
		return $resultArr["access_token"];//获取access_token
	}

	public function creatMenu()//创建菜单
	{
		$accessToken    = $this->getAccessToken();//获取access_token
		$menuPostString = '{
			"button": [{
				"name": "资讯",
				"sub_button": [{
					"type": "click",
					"name": "最新",
					"key": "1100"
				}, {
					"type": "click",
					"name": "机动车管理",
					"key": "3100"
				}, {
					"type": "click",
					"name": "环境与健康",
					"key": "3200"
				}, {
					"type": "click",
					"name": "车辆驾驶",
					"key": "2100"
				}, {
					"type": "click",
					"name": "车辆养护",
					"key": "2200"
				}]
			}, {
				"name": "查询",
				"sub_button": [{
					"type": "view",
					"name": "4s维修店",
					"url": "http://weixin.gdepc.cn/baidu-map.html"
				}, {
					"type": "view",
					"name": "检测机构",
					"url": "http://weixin.gdepc.cn/inquery/index.php?r=tblcartest/search"
				}, {
					"type": "view",
					"name": "检测期限",
					"url": "http://weixin.gdepc.cn/inquery/index.php?r=Vehicle/search"
				}, {
					"type": "view",
					"name": "黄标车",
					"url": "http://weixin.gdepc.cn/inquery/index.php?r=YellowCars/search"
				}, {
					"type": "view",
					"name": "空气质量",
					"url": "http://www.pm25.in/guangzhou"
				}]
			}, {
				"name": "更多",
				"sub_button": [{
					"type": "click",
					"name": "参与",
					"key": "6101"
				}, {
					"type": "click",
					"name": "关于我们",
					"key": "6102"
				}]
			}]
		}';
		$menuPostUrl = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" . $accessToken;//POST的url
		$menu        = dataPost($menuPostString, $menuPostUrl);//将菜单结构体POST给微信服务器
	}
}

function getCurl($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//不输出内容
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

function dataPost($post_string, $url)//POST方式提交数据
{
	$context = array(
		'http' => array(
			'method'  => "POST",
			'header'  => "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) \r\n Accept: */*",
			'content' => $post_string,
		)
	);
	$stream_context = stream_context_create($context);
	$data           = file_get_contents($url, FALSE, $stream_context);
	var_dump($data);
	return $data;
}

?>