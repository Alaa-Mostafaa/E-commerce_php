<?php
require_once 'handle/connection.php';
?>
<?php 

require_once 'handle/connection.php';
if(isset($_SESSION['lang'])){

$lang=$_SESSION['lang'];
}else{
    $lang="en";
    $_SESSION['lang']="en";
}

if($lang=="ar"){
    require_once 'msg_ar.php';
}else{
    require_once 'msg_en.php';
}

?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>" dir="<?php echo $msg['dir']?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <section id="header">
<a href="index.php">
    <img src="img/logo.png" alt="homeLogo">
</a>

<div>
    <ul id="navbar">
        <li class="link">
            <a class="active " href="index.php"></a>
        </li>
        <li class="link">
            <a href="shop.php"></a>
        </li>
        <?php if(isset($_SESSION['user_id'])){

?> 
        <li class="link">
            <a href="addProduct.php"><?php echo $msg['Add Product']?></a>
        </li>
        <?php  } ?>
      
        <?php if(!isset($_SESSION['user_id'])){

?>   
        <li class="link">
            <a href="signup.php"><?php echo $msg['Signup']?></a>
        </li>
        <?php  } ?>
        

        <?php if($_SESSION['lang'] !=="en"){?>
        <li class="link">
            <a href="lang.php?lang=en"><?php echo $msg['English']?></a>
        </li>
        <?php  } ?>

        <?php if($_SESSION['lang']!=="ar"){?>
        <li class="link">
            <a href="lang.php?lang=ar"><?php echo $msg['Arabic']?></a>
        </li>

        <?php  } ?>


 <?php if(!isset($_SESSION['user_id'])){

   ?>       
    <li class="link">
      <a href="login.php"><?php echo $msg['Login']?></a>
        </li>
<?php  } ?>

<?php if(isset($_SESSION['user_id'])){

?>  
      <li class="link">
      <a href="handle/logouthandle.php"><?php echo $msg['Logout']?></a>
    </li>
    <?php  } ?>
        <li class="link">
            <a id="lg-cart" href="cart.php">
                <i class="fas fa-shopping-cart"></i> 
            </a>
        </li>
        <a href="#" id="close"><i class="fas fa-times"></i> </a>
    </ul>

</div>

<div id="mobile">
    <a href="cart.html">
        <i class="fas fa-shopping-cart"></i>
    </a>
    <a href="#" id="bar"> <i class="fas fa-outdent"></i> </a>
</div>
</section>
        
        <script src="" async defer></script>
    </body>
</html>
