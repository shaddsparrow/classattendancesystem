<?php

$host="localhost";
$username="root";
$password="";
$database="";




$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){

die("ERROR CONNECTING TO DATABASE");

}

//VALIDATION FROM THE DATABASE

$conn->query("SELECT usename,password from login");











?>