<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "class_attendance";


$con = new mysqli($host, $user, $pass, $db);

if(mysqli_connect_error()){
	die("Not Connected");
	exit();
}
else{
	echo "Connected";
}

$name =$_POST['user'];
$pass =$_POST['password'];

if($name ==""){
		
	echo "Insert name";
	if($pass ==""){

		echo "Insert password";
		
	}
}



$rego = `INSERT INTO attendance_table (username, password) VALUES ($name,$pass)`; 
        $con->query($rego);

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