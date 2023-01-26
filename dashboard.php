<?php 
  
  include_once './autoloader.php';
  include_once './assets/php/scripts.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="./ckeditor/ckeditor.js"></script>

    <title>Planet Dev | Dashboard</title>
</head>

<body>
    <div class="d-flex shadow-sm bg-light" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 fs-4 fw-bold text-uppercase border-bottom"><i
                    class="uil uil-desktop-cloud-alt fs-4 me-2"></i>Planet Dev <br>  <span class="fs-3 mycolor1 "> Hello! <br>ADMIN
            
                      </span></div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action  text-secondary "><i
                        class="uil uil-tachometer-fast fs-4 me-2"></i>dashboard</a>
                <a href="logout.php" class="list-group-item list-group-item-action  text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4 ">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left mycolor fs-4 me-3" id="menu-toggle"></i>
                </div>
            </nav>

            <div class="container-fluid px-4" id="content">
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded-pill back">
                        <i class="uil uil-users-alt fs-1 mycolor1 "></i>
                            <div>
                                <h3 class="fs-2 mycolor1">0</h3>
                                <p class="fs-5 mycolor1">Users</p>
                            </div>                  
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded-pill back">
                        <i class="uil uil-document-layout-left fs-1 mycolor1 "></i>
                            <div>
                                <h3 class="fs-2 mycolor1"> <?php echo Article::nbrArticles();?> </h3>
                                <p class="fs-5 mycolor1">Articles</p>
                            </div>
                            
                            
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded-pill back"> 
                            <i class="uil uil-pen fs-1 mycolor1 "></i>
                            <div>
                                <h3 class="fs-2 mycolor1">1</h3>
                                <p class="fs-5 mycolor1">Authors</p>
                            </div>
                           
                        </div>
                    </div>

                    <div class="activity  mt-5 d-flex justify-content-between mb-3">
                           <div class="title">
                              <i class="uil uil-document-layout-left  fs-3"></i>
                                        <span class="text fs-5 fw-bold ">My Articles</span>                                     
                            </div>
                            <div class="input-group ms-5 w-25">
                        <input type="search" class="form-control rounded " placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="search-input" />
                        <button type="button" class="btn btn-secondary  ms-2 rounded  border-0" >search</button>
                      </div>

                            <div class="ms-auto">
					<button class="btn btn-dark text-light mycolor rounded-pill" ><i class="uil uil-plus text-white"></i> <a href="Addarticle.php">&emsp; Create an Article</a></button>
				            </div>   
                     </div>
                     <div class="d-flex">
                        <div class="card-body table-responsive col-6 ">
                            <table class="table table-bordered border-light text-center table-hover  ">
                                 <thead class="bg-dark text-white">
                                          <td>Title</td>
                                          <td>Author</td>
                                          <!-- <td>Category</td> -->
                                          <td>Uploaded Date</td>
                                          <td>View full details</td>
                                          <td>Update</td>
                                          <td>Delete</td>
                                 </thead>
                                <?php getAllarticles();?>
</table>   
                     </div>


</div>
</div>
</div>
<div class="modal fade" id="modal-article-update">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="./assets/php/scripts.php" method="POST" name="update-article">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="update-title">Update Article</h5>
                                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                                </div>
                                <div class="modal-body">
                                        <input type="hidden" id="id-update" name="id-update" value="">
                                        <label class="form-label">Title</label>
								       <input type="text" class="form-control"  id="article-title-update" name="article-title-update"></input>
							    </div>
                                <div class="modal-body">
                                        <label class="form-label">Author</label>
								       <input type="text" class="form-control"  id="article-author-update"  name="article-author-update"></input>
							    </div>
                                <div class="modal-body">
                                    <textarea class="form-control" name="editor1" id="editor1"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'editor1' );
                                    </script>
                                </div>
                                
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                    <button type="submit" name="updateArticle" class="btn btn-warning text-white " id="article-update-btn">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
        </div>

        <!-- view article -->
 <div class="modal fade bd-example-modal-xl shadow-sm" id="modal-article-view" tabindex="-1"  role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-xl ">
    <div class="modal-content ">
      <div class=" modal-header">
        <h5 class="modal-title">View Article</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class=" modal-body">
      <input type="hidden" id="id-view" name="id-view" value="">
      <h3 class="text-center mycolor fs-3 fw-bold" id="title-view"></h3>
      <section id="article-content">

      </section>
      </div>
      <div class="w-100 modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>


    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

    </script>
</body>

</html>