<?php 
define(AppId, "wx4b644d8834af53a9");//定义AppId，需要在微信公众平台申请自定义菜单后会得到
define(AppSecret, "1f978a292133d3b4f7f93522ccd5cb6e");//定义AppSecret，需要在微信公众平台申请自定义菜单后会得到
 
include("wechat.class.php");//引入微信类
 
$wechatObj = new Wechat();//实例化微信类
 
$creatMenu = $wechatObj->creatMenu();//创建菜单
 ?>
