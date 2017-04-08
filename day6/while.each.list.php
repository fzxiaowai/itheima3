<?php 
	header('content-type:text/html;charset=UTF8');
	function dump($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
	/*$fz = array(7,8,9,4,5,6);
	dump($fz);
	// list($v1,$v2)=$arr 是将数组中下标为0,1的元素值分别赋给$v1,$v2;
	list($a,$b)=$fz;
	echo $a,'$nbsp;',$b;*/

	$arr = array(
		'name' => '樊志',
		'age' => 18,
		'sex' => '男',
		'hun' => '否',
		'school' => '大连理工'
		);
	// 返回混合数组
	// $fz = each($arr);
	// dump($fz);
	// list($key,$value)=$fz;
	// echo $key,'$$',$value;

// 使用while-each-list模拟数组遍历
// 首先执行each($arr),返回混合数组,有下标为0.为1的元素
// 再执行list语句,将混合数组中,下标为0的值赋给$key,下标为1的值赋给$value
// 然后再循环中输出键名及键值

	while(list($key,$value)=each($arr)){
		echo $key.'=>'.$value.'<br>';
	}
 