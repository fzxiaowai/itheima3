<?php
	header('content-type:text/html;charset=UTF8');
	//输出数组的最大值
	echo max(1,2,3,4,5,6),'<br>';
	// 输出数组的最小值
	echo min(1,2,3,4,5,6),'<br>';
	// 输出数组元素的最大值
	echo max(array(4,6,8,9,12,68)),'<br>';
	// 输出数组元素的最小值
	echo min(array(4,6,8,9,12,68)),'<br>';
echo "<hr>";
	$arr=array(4,5,6,8,
		'score' => array(1,2,3)
		);
	// 输出数组元素的个数
	echo count($arr).'<br>';//不递归统计
	// 多维数组统计时,可以添加第二个参数,参数为true;递归统计
	echo count($arr,true);//递归统计