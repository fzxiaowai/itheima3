<?php
	header("content-type:text/html;charset=UTF-8");
	switch(2*5){
		case 1+6 :
			echo "灯1<br>";
			break;
		case 2+7 :
			echo "灯2<br>";
			break;
		case 3+7 :
			echo "灯3<br>";
			break;
		case 4+5 :
			echo "灯4<br>";
			break;
		default :
			echo"灯5<br>";
	}