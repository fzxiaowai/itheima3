<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-06 11:25:28
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


$arr=array(
	'username' =>'大白',
	'password' =>'123456',
	'trueName' =>'老王',
	'age'      =>23
	);
dump($arr);
//获取当前元素的键名
echo key($arr),"<br>";
echo current($arr),"<br>";
// 指针向下移动一次，指向下一个元素
next($arr);
next($arr);
next($arr);
//获取当前元素的键名
echo key($arr),"<br>";
echo current($arr),"<br>";