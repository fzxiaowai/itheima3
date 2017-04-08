<?php
	/*header("content-type:text/html;charset=UTF-8");
	$score = isset($_GET['score']) ? $_GET['score'] :'';
	if($score >= 90){
		echo "上天了呢";
	}elseif ($score >=80){
		echo "腻害啊!";
	}elseif ($score >=70){
		echo "不错哦";
	}elseif ($score >=60){
		echo "及格啦";
	}else{
		echo "加油哦";
	}
*/
	header("content-type:text/html;charset=UTF-8");
	$score = isset($_GET['score'])? $_GET['score'] :'';
	if($score >=90){
		echo "上天了呢亲!";
	}elseif ($score >=80){
		echo "厉害啊!";
	}elseif ($score >=70){
		echo "不错哦";
	}elseif ($score >=60){
		echo "及格啦";
	}else{
		echo "加油哦";
	}