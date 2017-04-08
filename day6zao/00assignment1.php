<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-05 10:04:14
 * @version $Id$
 */
header("content-type:text/html;charset=utf-8");
/**
 * [common 同时计算两数的最大公约数及最小公倍数]
 * @param  [int] $num1 [数1]
 * @param  [int] $num2 [数2]
 * @param  [int] $orginal1 [保存数1的值]
 * @param  [int] $orginal2 [保存数2的值]
 * @param  [int] $GCD [greatestCommonDivisor，最大公约数]
 * @param  [int] $LCM [Lowest Common Multiple，最小公倍数]
 */
function common($num1,$num2){
	// 首先将两参数保存起来，一遍计算最小公倍数时使用。
	// 因为后续计算有可能会被覆盖。
	$orginal1 =$num1;
	$orginal2 =$num2;

	// 辗转相除法，计算两数的最大公约数
	do{
		$mod  = $num1 % $num2;
		$num1 = $num2;
		$num2 = $mod;
	}while($mod !=0);

	// 最大公约数
	$GCD = $num1;


	// 计算最小公倍数
	// 两数之积除以两者的最大公约数
	$LCM = $orginal1 * $orginal2 /$GCD;

	printf("%d %d 两数的最大公约数为:%d，最小公倍数为：%d",$orginal1,$orginal2,$GCD,$LCM);
}

common(48,36);
