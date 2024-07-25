<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View Product </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<section>
    <?php 
    require_once 'handle/connection.php';
    require_once 'header.php';
    require_once 'navbar.php';
     if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query="select * from products where id=$id";

        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)==1){

            $product=mysqli_fetch_assoc($result);

       
    ?>
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-5 rounded-5">

            <img src="images/<?php echo $product['image'] ?>" class="w-100 "/>

            </div>
            <div class="col-1"></div>

            <div class="col-6 pt-5">
                <p><?php echo $msg[$product['brand']] ?></p>
                <h3 class="text-success"><?php echo $msg[$product['name']] ?></h3>
                <p><?php echo $msg[$product['price']] ?></p>

<?php if(isset($_SESSION['user_id'])){ ?>
<div>
    
             <button class="btn btn-secondary"><a  style="color: white;  text-decoration: none;"  href="editProduct.php?id=<?php echo $product['id'] ?>"><?php echo $msg['Edit'] ?></a></button>
                <button class="btn btn-danger"><a  style="color: white;  text-decoration: none;"  href="handle/deletehandle.php?id=<?php echo $product['id'] ?>"><?php echo $msg['Delete'] ?></a></button>


</div>

<?php } ?> 
            </div>

        </div>

    </div>

    <?php 
    
}
else{
    $msg='There is no post selected ';
    echo $msg;
}
}

require_once 'footer.php';
    ?>
</section>
        <script src="" async defer></script>
    </body>
</html>