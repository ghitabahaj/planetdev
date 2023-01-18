<?php 
require __DIR__.'/../../autoloader.php';

session_start();


 if(isset($_POST['loginuser']))                   logIn();
 if(isset($_POST['logoutuser']))                  logOut();




function logIn(){
    $usernamecheck = $_POST['email'];
    $passwordcheck  = $_POST['password'];
     
   if( User::loginUser($usernamecheck,$passwordcheck)){
       header("location: ../../dashboard.php");
   }else{
    header("location: ../../signup.php");
    $_SESSION['dataInvalid']="Invalid Username or Password!";
    
   }
}

function logOut(){
     if(User::logout()){
       $_SESSION['logout']="You've been logged out";
     }
}


function getAllarticles(){
    $req=Article::showArticles();
    foreach($req as $row){
        $date=substr($row['CreatedOn'],0,-7);
        // var_dump($date);
        // die();
        ?>
        <tr>
       <td <?php echo ' id="'.$row['id'].'"  text ="'.$row["text"].'" author="'.$row['author'].'" CreatedOn="'.$row['CreatedOn'].'"   '   ?> ><?php  echo $row['title']?> </td>
        <td><?php  echo $row['author']?> </td>
        <td><?php  echo  $date ?></td>
        <td><button  type="submit" name="viewArticle" class=" btn  text-white" >View Details</button></td>
        <td><button  type="submit" name="updateArticle" class="btn  text-white" onclick="showinfo(<?php echo ''.$row['id'].' '?>);">Update or Delete</button></td>
        </tr>
         <?php   
    }
}


?>