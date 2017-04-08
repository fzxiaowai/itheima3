<?php
	header("content-type:text/html;charset=UTF8");
	function factorial($n){
		// 调用出口.防止死循环
		if($n==1){
			return 1;
		}
		$res = $n * factorial($n-1);
		return $res;
	}
	echo factorial(100);