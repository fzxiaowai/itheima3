<?php
	header("content-type:text/html;charset=UTF8");
	function factorial($n){
		if($n == 1){
			return 1;
		}
		
		for($i=2,$res=1;$i<=$n;$i++){
			$res = $res*$i;
			
		}
		return $res;
	}
	echo factorial(5);