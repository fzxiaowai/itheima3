<?php
//实例化
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
var_dump($mem->set('age',18,0,time()+10));

?>