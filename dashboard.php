<?php 
  
//   include_once './autoloader.php';
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
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Planet Dev | Dashboard</title>
</head>

<body>
    <div class="d-flex shadow-sm bg-light" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 fs-4 fw-bold text-uppercase border-bottom"><i
                    class="uil uil-desktop-cloud-alt fs-4 me-2"></i>Planet Dev <br>  <span class="fs-3 mycolor1 "> Hello! 
                      </span> </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action  text-secondary "><i
                        class="uil uil-tachometer-fast fs-4 me-2"></i>dashboard</a>
                <a href="#" class="list-group-item list-group-item-action  text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4 ">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left mycolor fs-4 me-3" id="menu-toggle"></i>
                    <!-- <h2 class="fs-2 m-0"> Admin Dashboard</h2> -->
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded-pill back">
                        <i class="uil uil-users-alt fs-1 mycolor1 "></i>
                            <div>
                                <h3 class="fs-2 mycolor1">10</h3>
                                <p class="fs-5 mycolor1">Users</p>
                            </div>                  
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded-pill back">
                        <i class="uil uil-document-layout-left fs-1 mycolor1 "></i>
                            <div>
                                <h3 class="fs-2 mycolor1">20</h3>
                                <p class="fs-5 mycolor1">Articles</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded-pill back"> 
                            <i class="uil uil-pen fs-1 mycolor1 "></i>
                            <div>
                                <h3 class="fs-2 mycolor1">5</h3>
                                <p class="fs-5 mycolor1">Authors</p>
                            </div>
                           
                        </div>
                    </div>

                    <div class="activity  mt-5 d-flex justify-content-between mb-3">
                           <div class="title col-6">
                              <i class="uil uil-document-layout-left  fs-3"></i>
                                        <span class="text fs-5 fw-bold ">My Articles</span>
                            </div>
                            <div class="ms-auto">
					<button class="btn btn-block text-light mycolor rounded-pill"><i class="uil uil-plus text-white"></i>&emsp; Add an article</button>
				            </div>   
                     </div>
                
                </div>


</div>
</div>
</div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>