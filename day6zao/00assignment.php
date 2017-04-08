<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-05 09:37:50
 * @version $Id$
 */
header("content-type:text/html;charset=utf-8");
// n!=n*(n-1)!
/**
 * [使用递归思想 ，计算n的阶乘]
 * @param  [int] $n [description]
 * @return [numeric]    [第n项的阶乘]
 */
function factorial($n){
	// 递归的出口
	if($n ==1 ){
		return 1;
	}
	// 递归的调用点
	$res =$n * factorial($n-1);
	return $res;
}
// $num1=isset($_GET['num1']) ?$_GET['num1'] : 1;
// echo factorial($num1),"<br>";





/**
 * [factorialB 使用迭代思想计算n的阶乘]
 * @param  [int] $n [项数]
 * @return [numeric]    [n的阶乘]
 */
function factorialB($n){
	// 求5！--转换为（2！---3！--4！--5！）
	for ($i= 1,$res =1; $i<=$n  ; $i++) { 
		$res *=$i;
		// $res =$res *$i;
	}
	return $res;

}


$num1=isset($_GET['num1']) ?$_GET['num1'] : 1;
echo factorialB($num1);


