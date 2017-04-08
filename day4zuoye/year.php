<?php
	header("content-type:text/html;charset=UTF-8");
	/*闰年判断
	通过地址栏获取年份，判断是否是闰年。
	闰年的条件：
	（1）能被4整除并且不能被100整除的年份，是闰年
	（2）能被400整除的年份，是闰年 */
	$year=isset($_GET['year'])? $_GET['year'] : die;

	if($year%4==0 && $year%100!=0 || $year%400==0){
		echo "您输入的是闰年!";
	}else{
		echo "您输入的是平年!";
	}

	/*header("content-type:text/html;charset=UTF-8");
	$year=isset($_GET['year'])? $_GET['year'] :'';
	$year=isset($_GET['year'])? $_GET['year'] :'';
	$year=isset($_GET['year'])? $_GET['year'] :'';
	$year=isset($_GET['year'])? $_GET['year'] :'';
	$year=isset($_GET['year'])? $_GET['year'] :'';*/
