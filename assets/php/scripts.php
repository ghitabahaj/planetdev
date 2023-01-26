<?php 
require __DIR__.'/../../autoloader.php';

session_start();


 if(isset($_POST['loginuser']))                    logIn();
 if(isset($_POST['logoutuser']))                  logOut();
 if(isset($_POST['save']))                   saveArticle();
 if(isset($_GET['id']))                           delete();
 if(isset($_POST['updateArticle']))               update();


 


function logIn(){
    $emailcheck = $_POST['email'];
    $passwordcheck  = $_POST['password'];
     
   if( User::loginUser($emailcheck,$passwordcheck)){
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
        $date=substr($row['CreatedOn'],0,10);
        // var_dump($date);
        // die();
        ?>
        <tr>
       <td id='<?=$row['id']?>' title='<?=$row['title']?>' text='<?=$row['text']?>' author='<?=$row['author']?>'> <?php  echo $row['title']?> </td>
        <td><?php  echo $row['author']?> </td>
        <td><?php  echo  $date ?></td>
        <td><button  type="submit" name="viewArticle" class=" btn btn-primary  text-white" data-bs-toggle="modal" data-bs-target="#modal-article-view " onclick="view(<?php echo ''.$row['id'].''?>);" >View Details</button></td>
        <td><button  type="submit" name="updateArticle" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#modal-article-update" onclick="showinfo(<?php echo ''.$row['id'].' '?>);">Update</button></td>
        <td><button  type="submit" name="deleteArticle" class="btn btn-danger text-white"><a href="assets/php/scripts.php?id=<?php echo ''.$row['id'].' '?>">Delete</a> </button></td>
        </tr>
         <?php   
    }


     
}
function delete(){
        $id = $_GET['id'];
        $req=Article::deleteArticle($id);
        header("location: ../../dashboard.php");
    }

function saveArticle(){
    $data=$_POST;
    $db_connect = new db_connect;
    $pdo = $db_connect->connection();
    for($i=0; $i<count($data['title']);$i++){
        $stmt=$pdo->prepare("INSERT INTO articles(title,text,author,CreatedOn) VALUES (?,?,?,?)");
        $stmt->execute([$data['title'][$i],$data['editor1'][$i],$data['author'][$i],date('Y-m-d H:i:s')]);
    }
   header("location: ../../dashboard.php");
}


function update(){
    $id = $_POST['id-update'];
    $title = $_POST['article-title-update'];
    $author = $_POST['article-author-update'];
    $text = $_POST['editor1'];
    $date=date('Y-m-d H:i:s');


    Article::updateArticle($id,$text,$title,$author,$date);
    header("location: ../../dashboard.php");
    
   }





?>