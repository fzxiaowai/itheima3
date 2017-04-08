<?php 
	header("content-type:text/html;charset=UTF-8");
	// 使用字符串拼接的方式，在表格中，输出个人基本信息。
	$name = '樊志';
	$age = 24;
	$sex = '男';
	$school = '大连理工';
	$qq = 535357154;
	$mile = '535357154@qq.com';
	$hun = '未婚';
	$di = '河北';
	$str = '';
	$str.= "<table border='1' align='center' rules='all' width='600' cellpadding='8'>";
	$str.= "<tr>";
	$str.= "<th colspan='4'>"."樊志的个人信息"."</th>";
	$str.= "</tr>";
	$str.= "<tr align='center'>";
	$str.= "<td>".$name."</td>";
	$str.= "<td>".$age."</td>";
	$str.= "<td>".$sex."</td>";
	$str.= "<td>".$school."</td>";
	$str.= "</tr>";
	$str.= "<tr align='center'>";
	$str.= "<td>".$qq."</td>";
	$str.= "<td>".$mile."</td>";
	$str.= "<td>".$hun."</td>";
	$str.= "<td>".$di."</td>";
	$str.= "</tr>";
	$str.= "</table>";
	echo $str;

