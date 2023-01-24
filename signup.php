<?php 
  
//   include_once './autoloader.php';
  include_once './assets/php/scripts.php';

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Planet Dev | Sign in</title>
</head>
<body>

<section class="vh-100">
  <div class=" d-flex align-items-center h-100 back">
    <div class="container h-100 " >
      <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="card col-5" style="border-radius: 15px;">
            <div class="card-body p-5 text-center">
             <p class="fs-4 fw-bold text-secondary">Admin<span class="mycolor1 fs-4">Dashboard</span></p>
              <p class=" text-center mb-5 mycolor fs-3 fw-bold">Sign in now!</p>
              <span class="text-danger fw-bold m-2" id="msg"></span>
              <form action="./assets/php/scripts.php" method="POST" name="form1" id="mysignupform" onsubmit="return checkStuff()">
              <?php if (isset($_SESSION['dataInvalid'])): ?>
				<div class="alert alert-danger alert-dismissible fade show">
				<strong>Oops !</strong>
					<?php 
						echo  $_SESSION['dataInvalid']; 
						unset($_SESSION['dataInvalid']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				</div>
			<?php endif ?>
                <div class="form-outline mb-4 ">
                  <label class="form-label mycolor1 fw-bold" >Your Email</label>
                  <input type="email"  class="form-control fs-5  " id="email" name="email"/>          
                </div>

                <div class="form-outline mb-4">
                 <label class="form-label mycolor1 fw-bold" >Password</label>
                  <input type="password"  class="form-control fs-5 " id="pass" name="password"/>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="loginuser"
                    class=" btn btn-dark btn-block text-light mycolor" id="signup-btn" >Sign in</button>
                </div>
              </form>

            </div>
          </div>
      </div>
    </div>
  </div>
</section>

    <script src="./assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>