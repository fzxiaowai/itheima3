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
// array_keys($arr)
// 返回数组的键名组成的新数组
	$res1 = array_keys($arr);
	dump($res1);
// array_values()
// 返回数组的值组成的新数组
	$res2 = array_values($arr);
	dump($res2);
// array_combine($arr1,$arr2)
// 将两个数组合并为新的数组
	$res3 = array_combine($res1,$res2);
	dump($res3);
// array_flip()
// 对调数组的键名及键值
	$res3 = array_flip($res3);
	dump($res3);


// in_array('查找的字符',目标数组);
// 在目标数组中查找指定的字符/默认区分字符大小写/完全相等才返回true,否则返回false;
	$res4 = in_array('16',$arr);
	$res5 = in_array('男',$arr);
	var_dump($res4);
	var_dump($res5);
echo'<hr>';
// array_key_exists(要查找的键名,目标数组)
// 完全相同返回true,否则返回false
	$res6 = array_key_exists('name',$arr);
	var_dump($res6);
// array_search(查找的元素,目标数组);
// 找到时,返回该元素的键名,否则返回false
	$res7 = array_search(18,$arr);
	var_dump($res7);

// implode(分隔符,$arr);将数组的元素,使用指定的分隔符进行拼接/分隔符自定义;
	$res8 = implode('%%',$arr);
	// var_dump($res8);
	echo $res8;
// explode(分隔符,目标字符串);
// 将字符串使用指定的字符,分割为数组的不同元素
	$res9 = explode('%%',$res8);
	dump($res9);


// array_map(回调函数,数组);
// 将回掉函数作用于数组的每个元素
	// 定义乘2的函数
	function fz($n){
		return 2*$n;
	}
	$arr = array(10,20,30,40,50);

	$arr = array_map('fz',$arr);
	dump($arr);

	// 获取最高分数
	$score = array(
		'zhang'=>array('ch'=>78,'math'=>65,'el'=>54),
		'zh'=>array('ch'=>98,'math'=>75,'el'=>54),
		'ang'=>array('ch'=>88,'math'=>65,'el'=>99)
		);
	$maxscore = array_map('max',$score);
	dump($maxscore);


echo '<hr>';
// **栈模拟**后入先出
// array_push(目标数组,元素1,元素2)
// 压栈(入栈)将元素压入数组,自动添加至数组的**末尾**
	$arr = array(10,20,30,40);
	array_push($arr,'A');
	array_push($arr,'B','C');
	dump($arr);
// array_pop($arr)
// 从数组的**末尾**弹出一个元素
	array_pop($arr);
	dump($arr);
// 总结:上面过程在数组的**末尾**压入,在数组的**末尾**弹出;
echo '<hr>';
// array_unshift(目标数组,元素1,元素2...)
// 在数组的**开头**压入一个元素
	$arr1 = array(10,20,30,40);
	array_unshift($arr1,'A');
	dump($arr1);
// array_shift($arr);
// 从数组的**开头**弹出元素
	array_shift($arr1);
	dump($arr1);


// **队列模拟**
// 原则:先入先出,后入后出
// array_push----array_shift
// array_unshift----array_pop
	$arr2 = array(10,20,30,40);
	array_push($arr2,'A');
	dump($arr2);
	array_shift($arr2);
	dump($arr2);