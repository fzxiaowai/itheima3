<?php
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
var_dump($mem->get('age'));

?>