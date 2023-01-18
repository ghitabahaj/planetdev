<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Dev|Create Article</title>
</head>
<body>

<div class="container">
    <h2 class="text-center fw-bold"><i class="uil uil-edit fw-3"></i>Create a new Article</h2>
   <hr>
   <div>
    <?php 
     if (isset($_REQUEST['save'])){
           require "./classes/article.php";
           $objArticle= new Article();
           $objArticle->title=$_REQUEST['title'];
           $objArticle->text=$_REQUEST['editor1'];
           $objArticle->author=$_REQUEST['author'];
           $objArticle->createdOn=date('Y-m-d H:i:s');

           if($objArticle->saveArticle()){
             echo '<div class="alert alert-success">
             <div id="result">Inserted succefully.</div></div>';
           }
     }
    
    ?>
   </div>
</div>

<div class="">
    <form id="article-frm" method="post" action="" class="">
        <input type="hidden" name="article_id" id="article_id">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon addon-diff-color">
                    <span class="glyphicon glyphicon-pencil"></span>
                </div>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter article title">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                 <div class="input-group-addon addon-diff-color">
                 <span class="glyphicon glyphicon-user"></span>
                 </div>
                 <input type="text"class="form-control" id="author" name="author" placeholder="Enter author name" >
            </div>
        </div>

        <div class="form-group">
            <textarea class="form-control" name="editor1" >Article Description</textarea>
            <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
        </div>

        <div class="form-group">
            <input type="submit" value="Create Article" class="btn btn-danger btn-block" id="saveArticle" name="save">
        </div>


        



    </form>

</div>
    
</body>
</html>