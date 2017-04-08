<?php
	header('content-type:text/html;charset=UTF8');
// 数组遍历foreach
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
	// dump($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border='1' width='600' align='center' rules='all' cellpadding='8'>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>婚否</th>
			<th>毕业院校</th>
		</tr>
		<tr align='center'>
			<?php
				foreach($arr as $val){
					echo '<td>'.$val.'</td>';
				}
			?>
		</tr>
	</table>
</body>
</html>