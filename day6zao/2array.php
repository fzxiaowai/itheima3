<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-06 09:34:16
 * @version $Id$
 */
header("content-type:text/html;charset=utf-8");

/**
 * [dump 按照指定格式打印数组]
 * @param  [array] $arr [要打印的数组]
 * @return [type]      [description]
 */
function dump($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

// 用户基本信息
$userName ="大白";
$password ="123456";
$trueName ="老王";
// 保存在数组中
$arr=array(
	'username' =>'大白',
	'password' =>'123456',
	'trueName' =>'老王',
	'age'      =>23
	);
dump($arr);
$goods=array(
	'CPU' =>'i7',
	'memory' =>'16G',
	'hard_disk' =>'1T固态',
	'price' =>3000
	);
dump($goods);
$num=array(1,2,3,4);
dump($num);

$student['name']   ='柳岩';
$student['age']    =18;
$student['weight'] =48;

dump($student);
$num1[] =1;
$num1[] =2;
$num1[] =3;
dump($num1);

$name='itcast';
$arr=(array) $name;
dump($arr);
$num3=array(
	2=>'julien',
	5=>23,
	7=>'三门峡',
	'男'
	);
$num3[]='18725932345';
dump($num3);
$stu=array(
	2003 =>'中关村二小',
	2009 =>'清华附中',
	2012 =>'蓝翔技校'
	);
dump($stu);
echo "<hr>";
$arr=array(
	'小花',18,'北京市',
	'score'=>100
	);
echo $arr[0];
echo $arr['score'];
dump($arr);
$stuInfo=array(
	'name' =>'anglababy',
	'age' =>18,
	'score'=>array(
		'PHP'=>98,
		'JS'=>78
		)
	);
dump($stuInfo);