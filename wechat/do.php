<meta charset="utf-8">
<?php
//测试调用wechat类的方法
//引入类文件
require './wechat.class.php';
//实例化
$wechat = new Wechat();
//获取access_token
// $wechat->getAccessToken();
// $wechat->getAccessTokenByFile();
// $wechat->getAccessTokenByMem();
// 获取ticket
// $wechat->getTicket(666);
// 换取二维码图片
// $wechat->getQRCode();
//创建菜单
// $wechat->createMenu();
//查看菜单
// $wechat->showMenu();
//删除菜单
// $wechat->delMenu();
// 
// 
// 获取用户openID列表
// $wechat->getUserList();

//通过openID列表获取用户信息
$wechat->getUserInfo();

// 通过mediaID获取素材
// $wechat->getMediaFile();
