<?php
session_start();

$email = $_GET['email'];
$password = $_GET['password']; 
// echo $email ;
// echo $password;

$connect = mysqli_connect("localhost", "root", "", "webtruyen");
mysqli_query($connect, "SET NAMES 'utf8'");

$query = "SELECT email,password,role from account where email ='$email' and password ='$password'";

$data = mysqli_query($connect, $query);
$arraydata = array();

	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['email'], $row['password'],$row['role']));

	}
$_SESSION['role'] = $arraydata[0]->role;
$_SESSION['email'] = $arraydata[0]->email;
echo $_SESSION['role'];	
echo $_SESSION['email'];	


// if((mysqli_num_rows($data) == 1)) {
// 		header("Location: http://localhost/new/view/".$_SESSION['userType'].".php");
// 		echo "1";
// 		die();
// 	}else{
// 		header("Location: http://localhost/new/Login.php");
// 		echo "0";
// 		die();
// 	}

if($_SESSION['role'] == "0") {
	header("Location: ../Manager/admin.php");
}else{
	header("Location: ../index.php");
}

class Lists
	{
		function __construct( $email, $password,$role)
		{
			

			$this->email = $email;
			$this->password = $password;
			$this->role = $role;
			
	}}

?>