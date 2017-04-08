<?php
	header("content-type:text/html;charset=UTF8");
// 要求:创建函数，实现验证码文字的生成过程

	// 创建一个dump输出数组方式
	function dump($arr){
		echo'<pre>';
		print_r($arr);
		echo'</pre>';
	}
	// 定义验证码文字的范围
	// array_merge 是将多个数组元素进行合并
	// range('A','Z') 是创建数组,其中的元素为A至Z
	$div = array_merge(range('A','Z'),range('a','z'),range('1','9'));
	// 打乱定义的数组
	shuffle($div);
	// dump($div);
	// 获取4个元素的下标
	$arr_index = array_rand($div,4);
	// dump($arr_index);
	// 定义存储输出的验证码变量为空
	$fz = '';
	// 遍历索引组成的数组,然后使用索引获取对应的元素值
	foreach($arr_index as $key => $val){
	// 拼接字符串
		$fz.=$div[$val];
	}
	// 输出结果
	echo "验证码为:".$fz;
