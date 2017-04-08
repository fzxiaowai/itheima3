<?php 
	header("content-type:text/html;charset=UTF8");
	function dump($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
// 验证码图片上的文字长度固定,内容随机
/*使用指定的文字:A-Z,a-z,1-9
使用文字组成数组
打乱数组
随机返回4个元素的小标,返回为数组
遍历数组,获取元素的值
拼接字符串,作为验证码文字*/


// 定义使用文字的范围
	$fz = array_merge(range('A','Z'),range('a','z'),range('1','9'));
	// 打乱数组顺序
	shuffle($fz);
	// dump($fz);
	// 返回指定数目的键名
	$xw = array_rand($fz,4);
	// dump($xw);
	// 存储最终的验证文字
	$wai = '';
	// 遍历索引组成数组,然后使用索引获取对应的元素值
	foreach($xw as $key => $val){
		// 拼接字符串
		$wai.=$fz[$val];
	}
	// 输出
	echo '验证码为:'.$wai;
 ?>