<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-06 10:34:47
 * @version $Id$
 */
header("content-type:text/html;charset=utf-8");
/**
 * [dump 按照指定格式打印数组]
 * @param  [array] $arr [要打印的数组]
 * @return [type]      [description]
 */
function dump($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}


$goods=array(
	'CPU' =>'i7',
	'memory' =>'16G',
	'hard_disk' =>'1T固态',
	'price' =>3000
	);
/*foreach($goods as $k =>$val){
	$val=$val."111";
	echo $val."<br>";
}*/
foreach($goods as $k =>&$val){
	$val=$val."111";
	echo $val."<br>";
}
dump($goods);