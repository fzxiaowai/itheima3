<?php
//实例化
$redis = new Redis();
//连接redis
 $redis->connect('127.0.0.1',6379);
// var_dump($r);
//存string
var_dump($redis->set('classname','xiaowai'));
//设置key的过期时间
$redis->setTimeout('classname',3);
echo '<br/>';

