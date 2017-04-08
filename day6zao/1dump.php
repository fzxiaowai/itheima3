<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-06 09:11:58
 * @version $Id$
 */
header("content-type:text/html;charset=utf-8");

$arr=array(1,2,3);
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

dump($arr);