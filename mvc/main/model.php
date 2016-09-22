<?php
$mysqli = new mysqli("127.0.0.1", "root","","test");
if ($mysqli->connect_errno) {
    // echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
	 // echo "sucessfully connect<br>";
}
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
email VARCHAR(50),
password varchar(10) )";
$result=$mysqli->query($sql);
// $row = $result->fetch_assoc();
// var_dump($result);
// echo $row['id'];
?>