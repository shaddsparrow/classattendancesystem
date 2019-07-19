<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_attendance";


$con = new mysqli($host, $user, $pass, $db);

if($con->connect_error){
	die("Not Connected");
	exit();
}
else{
	echo "Connected";
}



$state=$con->prepare("INSERT INTO assistance_table (username, password) VALUES(?,?)");

$state->bind_param("ss",$name,$pass);


if(isset($_POST['user'])){
	$name =mysqli_real_escape_string($con,$_POST['user']);
	$pass =mysqli_real_escape_string($con,$_POST['password']);
	}
	
$state->execute();

 

$state->close();

$con->close();





?>