<?php
	header("content-type:text/html;charset=UTF8");
	echo '引入前<br>';
	// include "./1jiecheng.php";
	// include "e:www/day5zuoye/include.two.html";
	// echo __DIR__;
	// 输出E:\WWW\day5zuoye
	$dir = __DIR__.'/';
	// str_replace('原先的字符串','替换后的字符串','目标字符串')
	$dir = str_replace("\\","/",$dir);
	// echo $dir;
	//  定义常量
	 define("DIR_ROOT",$dir);
	 include "include.one.php";
	 // die("这是载入文件");
	 exit('樊志');
	 include "include.two.html";

	echo '引入后<br>' ;

	
	  echo date('H:i:s');
	  sleep(3);
	  echo date('H:i:s');
