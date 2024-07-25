<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign Up</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include "header.php";
  include "navbar.php";
  ?>



  <div class="card-body px-5 py-5 shadow-lg">
    <?php if (isset($_SESSION['error'])) {
    ?>
      <div class="container">
        <div class="alert alert-danger">
          <?php echo $_SESSION['error'] ?>
        </div>
      </div>

    <?php } ?>
    <h3 class="card-title text-left mb-3 text-primary"><?php echo $msg["Register"] ?></h3>
    <form method="post" enctype="multipart/form-data" action="handle/signuphandle.php">
      <div class="form-group">
        <label class="py-3"><?php echo $msg["User name"] ?></label>
        <input type="text" class="form-control p_input w-50" name="name">
      </div>
      <div class="form-group">
        <label class="py-3"><?php echo $msg["Email"] ?> :</label>
        <input type="email" class="form-control p_input w-50" name="email">
      </div>
      <div class="form-group">
        <label class="py-3"><?php echo $msg["Password"] ?> :</label>
        <input type="password" class="form-control p_input w-50" name="password">
      </div>
      <div class="form-group">
        <label class="py-3"><?php echo $msg["Phone"] ?> :</label>
        <input type="tel" class="form-control p_input w-50" name="phone">
      </div>
      <div class="form-group">
        <label class="py-3"><?php echo $msg["ِAddress"] ?> :</label>
        <input type="text" class="form-control p_input w-50" name="address">
      </div>

      <div class="form-group d-flex align-items-center justify-content-between">
        <div class="form-check">

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn my-4" name="submit"><?php echo $msg["Sign Up"] ?></button>
          </div>
          <div class="d-flex">
            <button class="btn btn-facebook col me-2">
              <i class="fa-brands fa-facebook-f text-primary pe-2"></i> <?php echo $msg["Facebook"] ?> </button>
            <button class="btn btn-google col">
              <i class="fa-brands fa-google-plus-g text-danger pe-2"></i> <?php echo $msg["Google plus"] ?> </button>
          </div>
          <p class="sign-up text-center"><?php echo $msg["Already have an Account?"] ?><a href="login.php"> <?php echo $msg["Login"] ?></a></p>
          <p class="terms"><?php echo $msg["By creating an account you are accepting our"] ?><a href="#"> <?php echo $msg["Terms & Condtions"] ?></a></p>
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