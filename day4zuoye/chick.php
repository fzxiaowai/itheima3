<?php
	/*百钱百鸡代码进行优化
	鸡翁一值钱五，鸡母一值钱三，鸡雏三值钱一。
	百钱买百鸡，问鸡翁、鸡母、鸡雏各几何？*/
	// $cock = 0;//公鸡数
	// $hens = 0;//母鸡数
	// $chick = 0;//小鸡数
	/*$cock = 0;
	while($cock <=20){
		$hens = 0;
		while($hens <=33){
			$chick = 100-$cock-$hens;
			if(5*$cock + 3*$hens + $chick/3 == 100){
				printf("%d,%d,%d<br>",$cock,$hens,$chick);
			}
			$hens++;
		}
		$cock++;
	}*/


//简化
	/*header("content-type:text/html;charset=UTF-8");
	$cock = 0;
	while($cock <= 14){
		$hens = 25-7*$cock/4;
		$chick = 75+3*$cock/4;
		if(gettype($hens) ==='integer' && gettype($chick) ==='integer'){
			printf('公鸡:%d,母鸡:%d,小鸡:%d<br>',$cock,$hens,$chick);
		}
		$cock++;
	}
*/

	header("content-type:text/html;charset=UTF-8");
	$cock = 0;
	while($cock <= 14){
		$hens = (100-7*$cock)/4;
		$chick = 100-$hens-$cock;
		if(gettype($hens) ==='integer' && gettype($chick) ==='integer'){
			printf('公鸡:%d,母鸡:%d,小鸡:%d<br>',$cock,$hens,$chick);
		}
		$cock++;
	}