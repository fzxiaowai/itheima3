<?php
	header("content-type:text/html;charset=UTF8");
	function dump($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
// range(开始字符,结束字符[,步长=1])
// 步长默认为1;可省略不写;


	// 创建数组,其中的元素A-Z,a-z
	// $fz = range('A','z',2);
	// dump($fz);
	

// array_merge($arr1,$arr2,...)
// 将多个数组元素进行合并
	// 创建数组,元素为A-Z,a-z;
	$arr1 = range('A','Z');
	$arr2 = range('a','z');
	$fz = array_merge($arr1,$arr2);
	// dump($fz);


// array_rand($arr[,数目=1])
// 返回指定数目随机键名
// 返回单个,[]可省略
	// $res = array_rand($fz);
	// echo $res;
// 返回多个键名,按照数组的方式返回
	// $res = array_rand($fz,4);
	// dump($res);


// array_rand 随机性不强


// shuffle($arr);打乱数组
	shuffle($fz);
	// dump($fz);
	$res = array_rand($fz,4);
	dump($res);