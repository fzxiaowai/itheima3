<?php
	header("content-type:text/html;charset=UTF8");
	$num1 = 48;
	$num2 = 64;
	$num3 = $num1;
	$num4 = $num2;
	do{	
		$mod = $num1 % $num2;
		$num1 = $num2;
		$num2 = $mod;
		$agv = $num3*$num4/$num1;
	}while($mod !=0);
	echo '最大公约数为:'.$num1.'<br>';
	echo '最小公倍数为:'.$agv;