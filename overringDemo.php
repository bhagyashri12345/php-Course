<?php
class test{
	 function functn(){
		echo "no parameter<br>";
	}
}
class solution extends test{
	function functn(){
		echo "one parameter";
	}
}

	
$a = new solution();

$b = new test();
$b->functn();
$a->functn();
// $a->__construct("  hello");



?>