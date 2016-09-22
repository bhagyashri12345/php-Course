<?php
session_start();
ob_start(); 
include("view/header.php"); 
// head_method();
include("view/dashboard.php");
include("view/footer.php");
include("main/model.php");
$n=$_GET['page'];
switch ($n) {
	case 'login':
		if(empty($_POST['email'])){	
			include("main/regModel.php");
			$row = show($_POST);
			if(count($row)>0){
				include("view/login.php");
				echo "logged in";
			}
			else{
				include("view/login.php");
			}
		}
		else{
			include("main/regModel.php");
			$row = show($_POST);
			$_SESSION["name"]=$row[0]['fisrtname'];
			$_SESSION["lastname"]=$row[0]['lastname'];
			$_SESSION["email"]=$row[0]['email'];
			echo "logged in as:".$row[0]['fisrtname'];
			header("Location: http://localhost/mvc/index.php?page=dashboard",TRUE,301);
		}
		break;
	case 'register':
		include("main/regModel.php");
		if(empty($_POST['firstname'])){	
			include("view/register.php");
			save($_POST);
		}
		else{
			include("view/dashboard.php");
			echo "please login";
		}
			break;
	case 'dashboard':
		// print_r($_SESSION);
		login_details($_SESSION);
		break;
	case 'logout':
		unset($_SESSION);
		header("Location: http://localhost/mvc/index.php?page=login",TRUE,301);
		// include("view/login.php");
		break;
	default:
		# code...
		break;
}

foot_method();
?>