<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_attendance";


$con = new mysqli($host, $user, $pass, $db);

$clas = "SELECT username,password FROM assistance_table";


$editor=$con->query($clas);



if($editor->num_rows>0){
    $seat=$editor->fetch_assoc();
    echo($seat);

}





// if(isset($_POST['user'])){
//     $name =mysqli_real_escape_string($con,$_POST['user']);
//     $pass =mysqli_real_escape_string($con,$_POST['password']);
//     }

    
// if($name=$seat['username']){
//     if($pass=$seat['password']){
//        require("form.php");
//     }
// }   
// else require("login.php");
//  echo "login error";

//  exit();

 $con->close();

?>