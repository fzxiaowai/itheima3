<?php
	header("content-type:text/html;charset=UTF8");
	function fibonacci($n){
		// 迭代出口
		if($n==1 || $n==2){
			return 1;
		}
		$first = 1;
		$second = 1;
		// 迭代调用点
		for($i=3,$res=0;$i<=$n;$i++){
			$res = $first+$second;
			$first = $second;
			$second = $res;
		}
		return $res;
	}
	echo fibonacci(11);