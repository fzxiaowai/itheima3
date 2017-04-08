<?php 
	header('content-type:text/html;charset=UTF8');
	function dump($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
	$arr = array(10,'score'=>80,50,20);
// sort($arr);对数组进行排序(升序),数组被重新建立索引
	// sort($arr);
	// dump($arr);
// asort($arr);对数组进行升序排序,同时保持索引
	// asort($arr);
	// dump($arr);
// rsort($arr);
// 对数组元素降序排列,重新建立索引
	// rsort($arr);
	// dump($arr);
// arsort($arr);降序排列,保持索引
	arsort($arr);
	dump($arr);
	