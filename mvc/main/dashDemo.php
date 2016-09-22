<?php
	session_start();
	print_r($_SESSION);
	echo "dashDemo";
	echo "<br>".$_SESSION["name"]."<br>";
	echo "<br>".$_SESSION["lastname"]."<br>";
	echo "<br>".$_SESSION["email"]."<br>";
 // 		$_SESSION["lastname"]=$rows[0]["lastname"];
 // 		$_SESSION["email"]=$rows[0]["email"];
?>