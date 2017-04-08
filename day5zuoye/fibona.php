<?php
	header("content-type:text/html;charset=UTF8");
// 斐波那契
	 /*function fibonacci($n){
	 	// 递归的出口;$n为项数;
	 	if($n == 1 || $n == 2){

	 		return 1;
	 	}
	 	// 递归调用点
	 	$res = fibonacci($n-1)+fibonacci($n-2);
	 	return $res;
	 }
	 echo fibonacci(11);*/
	 echo '<hr>';

// 阶乘
	/*function factorial($n){
		// 递归出口
		if($n == 1){
			return 1;
		}
		// 递归调用点
		$res = $n*factorial($n-1);
		return $res;
	}
	echo factorial(6);*/
	echo '<hr>';

// 迭代/斐波那契
/**
 * [fibonacci 计算第n项的值]
 * @param  [type] $n [description]
 * @return [type]    [description]
 */
	/*function fibonacci($n){
		if($n == 1 || $n == 2){
			return 1;
		}
		$first = 1;
		$second = 1;
		for($i=3,$res=0;$i<=$n;$i++){
			$res = $first + $second;
			$first = $second;
			$second = $res;
		}	
		return $res;
	}
	echo fibonacci(110);*/
	echo '<hr>';

// 迭代/阶乘
/**
 * [factorial 计算n项的值]
 * @param  [type] $n [description]
 * @return [type]    [description]
 */
	function factorial($n){
		if($n == 1){
			return 1;
		}else if($n == 2){
			return 2;
		}
		$first = 1;
		$second = 2;
		for($i=3,$res=0;$i<=$n;$i++){
			$res = $n*factorial($n-1);
			$first = $second;
			$second = $res;
		}
		return $res;
	}
	echo factorial(5);