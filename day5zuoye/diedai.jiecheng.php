<?php
	header("content-type:text/html;charset=UTF8");
	function factorial($n){
		if($n == 1){
			return 1;
		}else if($n==2){
			return 2;
		}
		$num1 = 1;
		$num2 = 2;
		for($i=3,$res=0;$i<=$n;$i++){
			$res = $i*$num2;
			$num1 = $num2;
			$num2 = $res;
			
		}
		return $res;
	}
	echo factorial(500);