<?php
include "header.php";
include "navbar.php";
require_once 'handle/connection.php';

if(isset($_SESSION['Login_error'])){

?>
<div class="container pt-5">
<div class="alert alert-danger"><?php   echo $_SESSION['Login_error']; ?></div>

</div>
 
<?php
 } 
  ?>

            
              <div class="card-body px-5 py-5 container" >
                <h3 class="card-title text-left mb-3"><?php echo $msg['Login'] ?></h3>
                <form  method="post" enctype="multipart/form-data" action="handle/loginhandle.php">
                  <div class="form-group">
                    <label class="pb-4"><?php echo $msg['Email'] ?> *</label>
                    <input type="email" class="form-control p_input mb-4"  name="email">
                  </div>
                  <div class="form-group">
                    <label class="pb-4"><?php echo $msg['Password'] ?> *</label>
                    <input type="password" class="form-control p_input mb-4" name="password">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input mb-4"><?php echo $msg['Remember me'] ?>  </label>
                    </div>
                    <a href="forgetPassword.php" class="forgot-pass"><?php echo $msg['Forgot password'] ?></a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" name="submit"><?php echo $msg['Login'] ?></button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook me-2 col">
                      <i class="mdi mdi-facebook"></i> <?php echo $msg['Facebook'] ?> </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> <?php echo $msg['Google plus'] ?> </button>
                  </div>
                  <p class="sign-up"><?php echo $msg["Don't have an Account?"] ?><a href="signup.php"> <?php echo $msg['Sign Up'] ?></a></p>
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

