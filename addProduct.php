<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Products </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <?php 
        require_once 'header.php';
        require_once 'navbar.php';
        require_once 'handle/connection.php';
        if(!isset($_SESSION['user_id'])){
            header('location:login.php');
        }
        ?>
<div class="container py-5">
            <h3 class="text-primary pb-3">Add your product</h3>

    <form action="handle/addProducthandle.php" method="post" enctype="multipart/form-data" >
    <div class="mb-3 ">
        <label class="pb-3 text-secondary">Product's name : </label>
        <input type="text" name="name"  class="form-control w-50 "/>
    </div>

    <div class="mb-3">
        <label class="pb-3 text-secondary">Product's brand : </label>
        <input type="text" name="brand"  class="form-control w-50"/>
    </div>

    <div class="mb-3">
        <label class="pb-3 text-secondary">Product's price : </label>
        <input type="number" name="price"  class="form-control w-50"/>
    </div>

    <div class="mb-3">
        <label class="pb-3 text-secondary">Product's image : </label>
        <input type="file" name="image"  class="form-control w-50"/>
    </div>

    <button class="btn btn-primary rounded-pill mt-3" type="submit" name="submit">Submit</button>

   </form>
        </div>


        <?php require_once 'footer.php' ?>
   
        <script src="" async defer></script>
    </body>
</html>