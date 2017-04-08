<?php
//实例化对象
$mem = new Memcache();
// var_dump($mem);
//连接memcache
$mem->connect('127.0.0.1',11211);
// var_dump($mem);
$res = $mem->set('classname','itheima3',0,0);
// var_dump($res);
$data = $mem->get('classname');
var_dump($data);
?>