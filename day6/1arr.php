<?php
	header("content-type:text/html;charset=UTF8");
// 创建一个数组
	/*$arr = array(4,5,6,7,8,9);
	//dump 按照指定格式打印数组
	function dump($arr){
		echo'<pre>';
		print_r($arr);
		echo'</pre>';
	}
	dump($arr);*/

// 一个元素由键值对组成;
// 键(key);值(value)
	/*function dump($arr){
		echo"<pre>";
		print_r($arr);
		echo"</pre>";
	}
	$fanzhi = array(
		'name' => '樊志',
		'age' => 24,
		'sex' => '男',
		'xl' => '大专',
		'school' => '大连理工',
		'tel' => 535357154
		);
	dump($fanzhi);*/

// 创建数组的三种方式

	// 显示创建/使用 array()
	/*function dump($arr){
		echo"<pre>";
		print_r($arr);
		echo"</pre>";
	}
	$good = array(
		'cpu' => 'i7',
		'pp' => '华硕',
		'memory' => '16G'
		);
	dump($good);

	$number = array(1,2,3,4,5,6,7,8);
	dump($number);*/

	// 隐式创建/使用[ ]
	/*function dump($arr){
		echo"<pre>";
		print_r($arr);
		echo"</pre>";
	}
	$fz['name'] = '樊志';
	$fz['age'] = 24;
	$fz['sex'] = '男';
	dump($fz);

	$num[] = 1;
	$num[] = 2;
	$num[] = 3;
	dump($num);*/

	// 强制转换数组类型
	/*function dump($arr){
		echo'<pre>';
		print_r($arr);
		echo'</pre>';
	}
	$name = 'fanzhi';
	$arr = (array)$name;
	dump($arr);*/

// 数组分类
	// 索引数组/数字下标
	/*function dump($arr){
		echo '<pre>';
		print_r ($arr);
		echo '</pre>';
	}
	$num = array(
		2 => 'fanzhi',
		6 => 25,
		9 => '三门峡',
		'男',
	$num[] = 18832921638
		);
	dump($num);*/

	// 关联数组/下标为字符,表示数字的意义
	/*function dump($arr){
		echo '<pre>';
		print_r ($arr);
		echo '</pre>';
	}
	$fz = array(
		'name' => '樊志',
		'age' => 25,
		'sex' => '男'
		);
		dump($fz);*/

	// 混合数组
		// 数组套 数组
	function dump($arr){
		echo '<pre>';
		print_r ($arr);
		echo '</pre>';
	}
	$fz=array(
		'name' => '樊志',
		'age' => 18,
		'score' => array(
			'php' => 98,
			'js' => 78
			)
		);
	dump($fz);
	