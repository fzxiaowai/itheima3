<?php
	header("content-type:text/html;charset=UTF8");
	function dump($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
// range(开始字符,结束字符[,步长=1])
// 步长默认为1;可省略不写;


	// 创建数组,其中的元素A-Z,a-z
	$fz = range('A','z',2);
	dump($fz);