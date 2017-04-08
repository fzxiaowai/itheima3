<?php
	header('content-type:text/html;charset=UTF8');
	
// 求数组所有元素的平均值
	$wai = array(10,20,30,40,50);
	// echo count($wai);
	// count(wai)是计算数组的长度
	$len = count($wai);
	// 循环所有元素值
	for($i=0,$sum=0;$i<$len;$i++){
		// 元素值的总和
		$sum += $wai[$i];
	}
	// 平均值
	$avg = $sum/$len;
	echo $avg;

	