<?php
	header('content-type:text/html;charset=UTF8');
// 数组遍历foreach
	function dump($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
	$fz = array(
		'name' => '樊志',
		'age' => 18,
		'sex' => '男'
		);
// 遍历原理
	// 拷贝一次数组,使用拷贝的数据进行遍历
	// & 是引用传递
	foreach($fz as $key => &$val){
		$val = $val.'^_^';
		echo $val.'<br>';
	}
	dump($fz);





	
