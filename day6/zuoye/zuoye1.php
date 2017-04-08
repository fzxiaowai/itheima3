<?php
	header("content-type:text/html;charset=UTF8");
/*要求:
1.将个人信息保存在数组中，使用数组遍历的方式，打印在表格中
2.创建函数，实现验证码文字的生成过程
*/

	// 创建一个dump打印数组的方式
	function dump($arr){
		echo'<pre>';
		print_r($arr);
		echo'</pre>';
	}
	// 创建一个个人信息数组
	$xiaowai = array(
		'name' => '樊志',
		'age' => 24,
		'sex' => '男',
		'school' => '大连理工',
		'QQ' => 535357154
		);
	// dump($xiaowai);
	// 拼接输出的表格
	$str = '';
	$str.="<table border='1' width='600' align='center' rules='all' cellpadding='8'>";
	$str.="<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>毕业院校</th>
			<th>QQ号</th>
		</tr>";
	$str.="<tr align='center'>";
	// 拼接变量
	foreach($xiaowai as $val){
		$str.="<td>".$val."</td>";
	}
	$str.="</tr>";
	$str.="</table>";
	// 输出表格
	echo $str;