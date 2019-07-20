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




$state=$con->prepare("INSERT INTO attendance_table (username, password) VALUES(?,?)");

$state->bind_param("ss",$name,$enc);


if(isset($_POST['user'])){
	$name =mysqli_real_escape_string($con,$_POST['user']);
	$pass =mysqli_real_escape_string($con,$_POST['password']);
	$enc=md5($pass);
	}
	
$state->execute();

 require("login.php");
 

$state->close();

$con->close();





?>