<?php
include "header.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forget Password</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>  </head>
  <body>
   
  <?php
  
  require_once 'handle/connection.php';
if(isset($_SESSION['error'])){

  echo $_SESSION['error'];
}

  
  ?>
  <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
    
            
              <div class="card-body px-5 py-5 shadow-lg">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form method="post" enctype="multipart/form-data" action="handle/forgetHandle.php">
                  <div class="form-group">
                    <label class="pb-4">Email *</label>
                    <input type="email" class="form-control mb-3 p_input" name="email">
                  </div>
                  <div class="form-group">
                    <label class="pb-4"> New Password *</label>
                    <input type="text" class="form-control mb-3 p_input" name="newPass">
                  </div>
                  <div class="form-group">
                    <label class="pb-4">Confirm Password *</label>
                    <input type="text" class="form-control mb-3 p_input" name="confirmPass">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="forgetPassword.php" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn mt-5 mb-3" name="submit">Confirm</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook me-2 col">
                    <i class="fa-brands fa-facebook-f text-primary pe-2"></i> Facebook </button>
                    <button class="btn btn-google col">
                    <i class="fa-brands fa-google-plus-g text-danger pe-2"></i> Google plus </button>
                  </div>
                  <p class="sign-up mt-3">Don't have an Account?<a href="signup.php"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <?php include "footer.php" ?>



    <script src="" async defer></script>
  </body>
</html>
