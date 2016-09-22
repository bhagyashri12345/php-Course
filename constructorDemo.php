<?php
class test{
	 function functn(){
		echo "no parameter<br>";
	}
}
class solution extends test{
	function functn($string){
		echo "one parameter".$string;
	}
}

	
$a = new solution();

$b = new test();
$b->functn();
$a->functn("  hello");
// $a->__construct("  hello");



?>