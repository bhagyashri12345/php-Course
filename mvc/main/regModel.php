<?php

function save($info){
	$mysqli = new mysqli("127.0.0.1", "root","","test");
	if ($mysqli->connect_errno) {
    	// echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		// "sucessfully connect<br>";
	}
	$sql = "INSERT INTO user_details (fisrtname, lastname, email, password) VALUES ('".$info['firstname']."','".$info['lastname']."','".$info['email']."','".$info['password']."')";
	$result=$mysqli->query($sql);
}
function show($info){
	$mysqli = new mysqli("127.0.0.1", "root","","test");
	if ($mysqli->connect_errno) {
    	// echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error
	}
	else{
		 // "<br>sucessfully connect<br>";
	}
	$sql = "SELECT * FROM user_details WHERE email='".$info['email']."'";

	$result=$mysqli->query($sql);
 	$row = $result->fetch_array();

	while($row = $result->fetch_array()){
		$rows[] = $row;
	}
	if(count($rows)>0){
 		if ($info['email']==$rows[0]["email"]&&$info['password']==$rows[0]["password"]) {
 			// echo "your successfully logged in<br>";
	 		$_SESSION["name"]=$rows[0]["fisrtname"];
 			$_SESSION["lastname"]=$rows[0]["lastname"];
 			$_SESSION["email"]=$rows[0]["email"];
 			// echo "<br>session var";
 		
 			return $rows;
 		}
 		else{
 			echo "<br>incorrect email or password<br>";
 		}
 	}
 	else{
 		echo "authentication problem<br>";
 	}
}
?>