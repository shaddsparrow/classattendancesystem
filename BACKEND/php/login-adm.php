<?php


   

$hostname="localhost";
$username="root";
$password="";
$db="db_attendance";


$con=new mysqli($hostname,$username,$password,$db);


  if($con->connect_error){
      die ("connection failed to establish".$con->connect_error);
  }
      
     $take="SELECT username,password FROM attendance_table";

     $result=$con->query($take);
       
      
          
            
    
           
               

                if($result->num_rows > 0){
    
               
    
                    if(isset($_POST['log_user'])){
                        $user=mysqli_real_escape_string($con,$_POST['log_user']);
                        $pass=mysqli_real_escape_string($con,$_POST['log_password']);
                        $dehash=md5($pass);
                    
                    $row=$result->fetch_assoc();
                   
                    
                    if($user===$row['username']&& $dehash===$row['password']){
                        require("form.php");
    
                        exit();
                    
                    }else{


                    require("login.php"); 
                    echo "<h1 id='redisplay'>SIGN UP FIRST</h1>";
                    exit();}
                    
                   
                }}
                require("login.php");
                    echo "<p class='redisplay'>NO REGISTERED USER FOR THE PLATFORM</p>";
                
                
      

        
 $con->close();

?>