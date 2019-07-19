<?php


   

$hostname="localhost";
$username="root";
$password="";
$db="db_attendance";


$con=new mysqli($hostname,$username,$password,$db);


  if($con->connect_error){
      die ("connection failed to establish".$conn->connect_error);
  }
      
     $take="SELECT username,password FROM assistance_table";

     $result=$con->query($take);
       
      
          
            if($result->num_rows > 0){
    
           
                $row=$result->fetch_assoc();

                if(isset($_POST['user'])){
                        $name =mysqli_real_escape_string($con,$_POST['user']);
                        $pass =mysqli_real_escape_string($con,$_POST['password']);
                        }
                    
                        
                    if($name=$row['username']){
                        if($pass=$row['password']){
                           require("form.php");
                        }
                        echo "WRONG PASSWORD";
                    }   
                    else require("login.php");
                     echo "login error";
                    
                     exit();
                
                    
                } 
      

        
 $con->close();

?>