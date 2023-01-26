

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
    <p class="text-center fs-3 fw-bold"><i class="uil uil-edit fw-3"></i>  Create a new Article</p>
   <hr>
   <div>
   </div>
</div>

<div class="col-6 m-auto">
    <form id="article-frm" method="post" action="./assets/php/scripts.php" data-parsley-validate>
        <div id="listElement">
        <input type="hidden" name="article_id" id="article_id">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon addon-diff-color">
                    <span  class="bi bi-pencil-fill"></span>
                </div>
                <input type="text" class="form-control" id="title" name="title[]" placeholder="Enter article title"  required >
            </div>
        </div>

        <div class="form-group my-3">
            <div class="input-group">
                 <div class="input-group-addon addon-diff-color">
                 <span class="glyphicon glyphicon-user"></span>
                 </div>
                 <input type="text" class="form-control" id="author" name="author[]" placeholder="Enter author name" required >
            </div>
        </div>
    </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1[]" id="text"  required></textarea>
            <script>
             CKEDITOR.replace( 'editor1[]' );
            </script>
        </div>

        
        
        
        <div class="my-3" id="copyarticle">

        </div>
        <div class="form-group d-flex justify-content-between mt-3">
            <button type="button" class="btn btn-success   w-25" id="addnew">add article</button>
            <button type="submit" class="btn btn-danger    w-25 " id="saveArticle" name="save">Create Article(s)</button>
        </div>
        
    </form>
    

</div>
    




<script src="./assets/js/addarticle.js"></script>
<script src="./assets/js/script.js"></script>
<script src="./ckeditor/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./assets/js/parsley.js"></script>


</body>
</html>