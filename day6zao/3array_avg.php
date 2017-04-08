<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-06 10:21:39
 * @version $Id$
 */
header("content-type:text/html;charset=utf-8");
$arr=array(10,20,30,40,50,60);
// count($arr)计算数组元素的个数
// echo count($arr);die;
$len=count($arr);
//循环读取所有的元素的值
for ($i=0,$sum=0; $i <$len; $i++) {
	// 元素值的总和
	$sum+=$arr[$i];
}
// 平均值
$avg =$sum / $len;
// echo $avg;
// 

