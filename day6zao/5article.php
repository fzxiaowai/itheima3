<?php
/**
 * 
 * @authors Julien
 * @date    2017-01-06 10:42:37
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



$keywords=<<<heredoc
国家如何杀人于无形——以俄罗斯沐浴露中毒为例
据俄罗斯媒体近日报道，西伯利亚地区伊尔库茨克市大批民众把廉价的含酒精的沐浴露产品当成饮用酒的替代品饮用，造成中毒事件，至少58人死亡，另有多人情况危急。当地甚至宣布进入紧急状态。
沐浴露杀人？是不是很难理解。说六神花露水里含有酒精，俄罗斯人去喝还可以理解，沐浴露俄罗斯人怎么喝的下去？
其实很简单，那就是披着沐浴露外衣的伏特加而已，买卖双方都心知肚明。因为俄罗斯政府对酒设置最低售价
heredoc;
$article=array(
	'aid' =>1001,
	'title'=>'战斗民族56人喝沐浴露致死',
	'author'=>'julien',
	'keywords'=>$keywords,
	'add_time'=>'2016-12-13 11:14:15'
	);
// dump($article);

$str='';
$str.="<table width='80%' border='1' rules='all' align='center'>
    	<tr>
    		<th>文章编号</th>
    		<th>标题</th>
    		<th>作者</th>
    		<th>主要内容</th>
    		<th>发布时间</th>
    	</tr>";
$str.=" <tr align='center'>";
foreach($article as $val){
	$str.=" 		<td>".$val."</td>";
}

$str.="</tr>";
$str.="</table>";
echo $str;
