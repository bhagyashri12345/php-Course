<?php 



$mysqli = new mysqli("127.0.0.1", "root","","test");
if ($mysqli->connect_errno) {
    // echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
 // echo $mysqli->host_info . "\n";


$mysqli = new mysqli("127.0.0.1", "root", '','test');
if ($mysqli->connect_errno) {
	// echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
 // echo $mysqli->host_info . "\n";

// echo $mysqli->host_info . "\n";
// echo $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";
// $result=$mysqli->query($sql);
// echo "<pre> mysql cha result = >>";
// var_dump($result);
// echo "</pre>";





// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
// $request=
// echo "<pre> path info = >>";

// var_dump($_SERVER['PATH_INFO']);

// echo "</pre> path info = >>";


$phoneNum=$_POST['num'];
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];
$method=$_SERVER["REQUEST_METHOD"];
switch ($method) {
  case 'PUT':
    
    break;
  case 'POST':
    post();
    break;
  case 'GET':
    get();
    break;
  case 'HEAD':
    
    break;
  case 'DELETE':
     
    break;
  case 'OPTIONS':
      
    break;
  default:
      
    break;
}
function post(){
	if($_POST['fname']=="")
	{
		$data['fname']="please enter the name";
	}
	elseif (preg_match('/^[A-Z]+$/i', $firstName)) {
		$data['fname']="valid";
	}
	else{
		$data['fname']="please enter proper name";
	}
	if($_POST['lname']=="")
	{
		$data['lname']="please enter the last name";
	}
	elseif (preg_match('/^[A-Z]+$/i', $lastName)) {
		$data['lname']="valid";
	}
	else{
		$data['lname']="please enter proper last name";
	}
	if(preg_match('/^[0-9]{10}$/', $phoneNum))
	{
		$data['phone']="valid";
	}
	else{
		$data['phone']="please enter the phone number";
	}
	if ($email=="") {
		$data['email']="enter email";
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$data['email']="enter proper email";
	}
	else{
		$data['email']="valid";
	}
	$data['status']="fail";
	echo json_encode($data);
}
function get(){
$mydata['fname'] = 'bhagyashri';
$mydata['lname'] = 'lokhande';
$mydata['email'] = 'abc@gmail.com';
$mydata['phone'] = '9773337993';

	echo json_encode($mydata);
}






?>