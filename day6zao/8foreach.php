<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-06 11:33:44
 * @version $Id$
 */
header("content-type:text/html;charset=utf-8");
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

$len=count($arr);
$i =0;
next($arr);
reset($arr);
// while($i <$len){
for($i=0;$i <$len;$i++){
	$key =key($arr);
	$val =current($arr);
	echo $key."=>".$val."<br>";
	//移动指针，指向下一个元素
	next($arr);
	// $i++;
}