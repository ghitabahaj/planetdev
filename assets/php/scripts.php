<?php 
require __DIR__.'/../../autoloader.php';

session_start();


 if(isset($_POST['loginuser']))                   logIn();



function logIn(){
    $usernamecheck = $_POST['email'];
    $passwordcheck  = $_POST['password'] ;
     
   if( User::loginUser($usernamecheck,$passwordcheck)){
       header("location: ../../dashboard.php");
   }else{
    header("location: ../../signup.php");
    $_SESSION['dataInvalid']="Invalid Username or Password!";
    
   }
}





?>