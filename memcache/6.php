<?php
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
//increment
// $mem->set('number',5,0,0);
// $mem->increment('number',1);
// echo '<br/>';
var_dump($mem->get('number'));
$mem->flush();
echo '<br/>';
var_dump($mem->get('number'));
