<?php 
	header('content-type:text/html;charset=UTF8');
	
	function dump($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
	$arr = array(
		'name' => '樊志',
		'age' => 18,
		'sex' => '男',
		'hun' => '否',
		'school' => '大连理工'
		);
	dump($arr);
 // next($arr);/指针移动一次,指向下一个元素,可以获取键及值
 // key($arr);/获取当前元素(指针指向的元素)的键名
 // current($arr);/获取当前元素(指针指向的元素)的键值
	/*echo key($arr),'<br>';
	echo current($arr),'<br>';
	// 指针向下移动一次,指向下一个元素;
	next($arr);
	// 指针向下移动多次
	next($arr);
	next($arr);

	echo key($arr)."<br>";
	echo current($arr).'<br>';
*/


// 使用指针函数模拟数组遍历
	$len=count($arr);
	// next($arr)先指向下一个元素,在遍历
	next($arr);
	// reset($arr) 是复位数组的指针
	reset($arr);
	// end($arr) 指针指向最后一个元素
	end($arr);
	// prev($arr)指针向上移动一次
	prev($arr);
	
	for($i=0;$i<$len;$i++){
		$a = key($arr);
		$b = current($arr);
		echo $a.'=>'.$b.'<br>';
		// 移动指针,指向下一个元素;
		next($arr);
	}
