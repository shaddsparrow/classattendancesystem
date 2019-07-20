<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_attendance";


$con = new mysqli($host, $user, $pass, $db);

if(mysqli_connect_error()){
	die("Not Connected");
	exit();
}
else{
	echo "Connected";
}


if(isset($_POST['user'])){
$name =mysqli_real_escape_string($con,$_POST['user']);
$pass =mysqli_real_escape_string($con,$_POST['password']);
}



// if($name == ""){
		
// 	echo "Insert name";
// 	if($pass ==""){

// 		echo "Insert password";
		
// 	}
// }

$state=$con->prepare("INSERT INTO attendance_table (username, password) VALUES(?,?)");

$state->bind_param("ss",$name,$pass);
$state->execute();

// $rego = `INSERT INTO attendance_table (username, password) VALUES ($name,$pass)`; 

$state->close();

$con->close();
// mysqli_select_db($con, 'userregistration');

// $name =$_POST['user'];
// $pass =$_POST['password'];

// $s = "select * from class_attendance where name = '$name'";
// $result = mysql_query($con, $s);
// $num = mysqli_num_rows($result);

// if($num == 1){
// 	echo"username already taken";
// }else{
// 	$reg= "insert into userregistration( name, password) values ( '$name' , '$pass')";
// 	mysqli_query($con, $reg);
// 	echo "successful";
// }




?>