<?php
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);

//定义非标量类型
$array = array(1,2,3,4,5);
//定义一个类
class Person{
//属性封装
	public $name;
	public $age;
//类的同名方法,相当于构造方法
	public function Person(){
		$this->name = 'xiaowai';
		$this->age = 22;
	}

}
$obj = new Person();
// echo $person->name;
// echo "<br/>";
$null = null;


//存储
$re1 = $mem->set('array',serialize($array),0,0);
var_dump($re1);
echo '<br/>';
$re2 = $mem->set('obj',serialize($obj),0,0);
var_dump($re2);
echo '<br/>';
$re3 = $mem->set('null',serialize($null),0,0);
var_dump($re3);
echo '<br/>';

//查询
$data1 = $mem->get('array');
var_dump(unserialize($data1));
echo '<br/>';
$data2 = $mem->get('obj');
var_dump(unserialize($data2));
echo '<br/>';
$data3 = $mem->get('null');
var_dump(unserialize($data3));
echo '<br/>';