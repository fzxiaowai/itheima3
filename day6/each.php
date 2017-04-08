<?php 
	header('content-type:text/html;charset=UTF8');
	function dump($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
	$arr = array(
		'name' => '樊志',
		'age' => 18,
		'sex' => '男',
		'hun' => '否',
		'school' => '大连理工'
		);
	// $fz = each($arr);
	// // 执行两次,指针移动两次
	// $fz = each($arr);
	// // dump($fz);
	// echo '键名为:'.$fz['key'].'<br>';
	// echo '键名为:'.$fz[0].'<br>';
	// echo '键值为:'.$fz['value'].'<br>';
	// echo '键值为:'.$fz[1].'<br>';
	
// 模拟数组遍历
	while($fz = each($arr)){
		echo'键名为:'.$fz[0].'<br>';
		echo'键值为:'.$fz[1].'<br>';
	}