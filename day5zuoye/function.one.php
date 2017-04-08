<?php
	header("content-type:text/html;charset=UTF8");
	/*function fz($name,$age){
		echo "hallo!".$name."年龄:".$age;
	}	
	fz('樊志',24);*/


	/*// 可变函数
	function arr($a,$b){
		return $a*$a+$b*$b;
	}
	$str= 'arr';
	echo $str(5,6);*/

	/*function score($num1,$num2){
		if($num1>$num2){
			echo "欢迎光临!";
		}else{
			echo "洗洗睡吧!";
		}
	}
	score(46,58);*/

	/*echo "<pre>";
	function getmax(){

		$arr =func_get_args();
		// var_dump($arr);
		echo max($arr);
	}

	getmax(11,22,33,44,55,66);*/


	/*$c = 456;
	$sex = '男';
	function num(){
		echo $GLOBALS['c'],"<br>";
		$_GET['b'] = 100;
		$GLOBALS['name'] = '小外';
		unset($GLOBALS['name']);
		echo $GLOBALS['sex'];
	}
	$_GET['a'] = 50;
	num();
	echo $_GET['b'];
	echo $name;*/


	/*$a=100;
	function num(){
		global $a;
		$a = 123;
		unset($a);
	}
	num();
	echo $a;
*/

/*
	function num(){
		static $sum=1;
		echo "执行".$sum."次<br>";
		$sum++;
	}
	num();
	num();
	num();
	num();
	num();*/


	$str = "hello world!";
	$name = "樊志刚";
	// strlen字符串长度
	echo strlen($str),"<br>";
	echo strlen($name),"<br>";
	// substr(目标字符串,起始位置[,长度])
	echo substr($str,1),'<br>';
	echo substr($name,3,6),'<br>';
	$file ="./function.php";
	echo substr($file,11),'<br>';
	// strtolower全部小写
	echo strtolower($str),"<br>";
	// strtoupper全部大写
	echo strtoupper($str),"<br>";
	// ucfirst首字母大写
	echo ucfirst($str),"<br>";
	// strrev将字符串反转
	echo strrev($str),"<br>";
	echo strrpos($file,'.'),"<br>";
	echo substr($file,strrpos($file,'.')+1),"<br>";
	echo substr($file,strpos($file,'.')+1),"<br>";
	echo strstr($file,'.'),'<br>';
	// strstr 同 strchr
	echo strchr($file,'.'),"<br>";
	echo strrchr($file,'.'),"<br>";
	$str1 = "    456321   ";
	$str1 = trim($str1);
	echo strlen($str1),'<br>';
	$file= str_replace('.',';',$file);
	echo $file,'<br>';
echo '<hr>';
	echo time(),'<br>';
	echo date('Y-m-d H:i:s',1483620845),'<br>';
	echo date('H:i:s'),'<br>';
	echo date('当前时间为Y年m月d日 H时i分s秒',1483620845),'<br>';