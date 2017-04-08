<?php
	header('content-type:text/html;charset=UTF-8');
	function dump($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
/*	规律描述：
１，假设数组的数据有ｎ个。
２，要进行比较的“趟数”为ｎ－１；
３，每一趟要比较的数据个数都比前一趟少一个，第一趟要比较ｎ个（即比较ｎ－１次）
４，每一次比较，如果发现“左边数据”大于“右边数据”，就对这两者进行交换位置。*/
$arr = array(9,6,3,5,4,7);
// 下标为0,1,2,3,4,5
// dump($arr);
//个数
$len = count($arr);
 //循环len-1趟
for($i=0;$i<$len-1;$i++){
	// 该趟要比较的次数
	for($j=0;$j<$len-$i-1;$j++){
		// 这里可以把$j当做下标来使用
		if($arr[$j] > $arr[$j+1]){
			$num = $arr[$j];
			$arr[$j] = $arr[$j+1];
			$arr[$j+1] = $num;
		}
	}

}
dump($arr);