<?php 

class simple{
	
	public $a="helloworld";
	public $b="anoither";
	public $b="anoither";
	public function display(){
	echo $this->a;
	}
	public function show(){
		echo $this -> a;
	}
}
$obj=new simple();
$obj->display();
$obj -> show();




?>