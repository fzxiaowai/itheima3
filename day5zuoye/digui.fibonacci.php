<?php
header("content-type:text/html;charset=UTF8");
function fibonacci($num){
	// $num为项数
	// 递归出口
	if($num==1 || $num==2){
		return 1;
	}
	// 递归调用点
	$res = fibonacci($num-1)+fibonacci($num-2);
	return $res;
}
echo fibonacci(11);