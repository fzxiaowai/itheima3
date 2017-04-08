<?php
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);

// 定义类型
$int = 18;
$float = 183.55;
$string = 'fanzhi';
$bool = true;

//存储标量类型
$rs1 = $mem->set('int',$int,0,0);
var_dump($rs1);
echo '<br/>';
$rs2 = $mem->set('float',$float,0,0);
var_dump($rs2);
echo '<br/>';
$rs3 = $mem->set('string',$string,0,0);
var_dump($rs3);
echo '<br/>';
$rs4 = $mem->set('bool',$bool,0,0);
var_dump($rs4);
echo '<br/>';


//取出标量类型
$data1 = $mem->get('int');
var_dump($data1);
echo '<br/>';
$data2 = $mem->get('float');
var_dump($data2);
echo '<br/>';
$data3 = $mem->get('string');
var_dump($data3);
echo '<br/>';
$data4 = $mem->get('bool');
var_dump($data4);
echo '<br/>';
?>