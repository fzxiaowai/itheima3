<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-06 11:53:51
 * @version $Id$
 */
header("content-type:text/html;charset=utf-8");
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
$each =each($goods);
// $each =each($goods);
dump($each);
// echo "当前元素的键名为".$each['key']."<br>";
// echo "当前元素的键名为".$each[0]."<br>";
// echo "当前元素的键值为".$each['value']."<br>";
// echo "当前元素的键名为".$each[1]."<br>";
// while($each = each($goods)){
// 	echo "当前元素的键名为".$each[0]."<br>";
// 	echo "当前元素的键值为".$each[1]."<br>";
// }