<!DOCTYPE html>
<?php 

require_once 'handle/connection.php';
if(isset($_SESSION['lang'])){

$lang=$_SESSION['lang'];
}else{
    $lang="en";
}

if($lang=="ar"){
    require_once 'msg_ar.php';
}else{
    require_once 'msg_en.php';
}

?>

<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-commerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>




<section id="hero">

        <h4><?php echo $msg['Trade-in-offer']?></h4>
        <h2><?php echo $msg['Super value deals']?></h2>
        <h1><?php echo $msg['On all products']?></h1>
        <p><?php echo $msg['Save more with coupons & up to 70% off!']?></p>
        <button><?php echo $msg['Shop Now!']?></button>

    </section>

    <!-- End Hero -->

    <!-- start Feature-->
    <section id="feature" class="section-p1">
        <div class="fe-1">
            <img src="img/features/f1.png" alt="">
            <h6><?php echo $msg['Free Shipping']?></h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f2.png" alt="">
            <h6><?php echo $msg['Online Order']?></h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f3.png" alt="">
            <h6><?php echo $msg['Save Money']?></h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f4.png" alt="">
            <h6><?php echo $msg['Promitions']?></h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f5.png" alt="">
            <h6><?php echo $msg['Happy Sell']?></h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f6.png" alt="">
            <h6><?php echo $msg['F7/24 Support']?></h6>
        </div>
    </section>
    <!-- End Feature-->

    <!-- Start New Arrival or productCard Features -->
    <section id="product1" class="section-p1">
        

        <h2><?php echo $msg['Featured Products']?></h2>
        <p><?php echo $msg['Summer Collection New Modren Desgin']?></p>
        <div class="pro-container">
            <?php 
            require_once 'handle/connection.php';

            $query="select * from products order by id limit 8 offset 0";
            $result=mysqli_query($connection,$query);

            if(mysqli_num_rows($result)>0){

                $products=mysqli_fetch_all($result,MYSQLI_ASSOC);

                foreach($products as $product){


           
            ?>
            <div class="pro">
                <img src="images/<?php echo $product['image'] ?>" alt="p1">
                <div class="des">
                    <span><?php echo $msg[$product['brand']] ?></span>
                    <h5><?php echo $msg[$product['name']] ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $msg[$product['price']] ?></h4>
                    <a href="handle/cartHandle.php?id=<?php echo $product['id'] ?>" class="cart" ><i class="fas fa-shopping-cart"></i></a>
                    
                    <button class="btn btn-success rounded-pill mt-5"><a  style="color: white;  text-decoration: none;"  href="viewProduct.php?id=<?php echo $product['id'] ?>"><?php echo $msg['View'] ?></a></button>
                </div>
            </div>

            <?php
                }
            
        }
        else{
            $msg="There are no products ";
            $_SESSION['error']=$msg;
            echo $_SESSION['error'];

        }
        
            
            
            ?>
        
        </div>
    </section>
    <!-- End New Arrival -->
    <!-- Start bannar -->
    <section id="bannar" class="section-m1">
        <h4><?php echo $msg['Repair Service'] ?></h4>
        <h2><?php echo $msg['Up to 70% Off - All t-Shirts & Accessories'] ?></h2>
        <button class="normal"><?php echo $msg['Explore More'] ?></button>
    </section>
    <!-- End bannar -->
    <section id="product1" class="section-p1">
        <h2><?php echo $msg['New Arrival'] ?></h2>
        <p><?php echo $msg['Summer Collection New Modren Desgin'] ?></p>
        <div class="pro-container">
        <?php 
            require_once 'handle/connection.php';

            $query="select * from products order by id limit 8 offset 8";
            $result=mysqli_query($connection,$query);

            if(mysqli_num_rows($result)>0){

                $products=mysqli_fetch_all($result,MYSQLI_ASSOC);

                foreach($products as $product){


           
            ?>
               <div class="pro">
                <img src="images/<?php echo $product['image'] ?>" alt="p1">
                <div class="des">
                    <span><?php echo $msg[$product['brand']] ?></span>
                    <h5><?php echo $msg[$product['name']] ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $msg[$product['price']] ?></h4>
                    <a href="handle/cartHandle.php?id=<?php echo $product['id'] ?>" class="cart" ><i class="fas fa-shopping-cart"></i></a>
                    <button class="btn btn-success rounded-pill mt-3"><a  style="color: white;  text-decoration: none;"  href="viewProduct.php?id=<?php echo $product['id'] ?>"><?php echo $msg['View'] ?></a></button>
                </div>
            </div>
            <?php
                }
            
        }
        else{
            $msg="There are no products ";
            $_SESSION['error']=$msg;
            echo $_SESSION['error'];

        }
        
            
            
            ?>
         
        </div>
    </section>
    <section id="sm-bannar" class="section-p1">
        <div class="bannar-box">
            <h4><?php echo $msg['Crazy Deals'] ?></h4>
            <h2><?php echo $msg['buy 1 get 1 Free'] ?></h2>
            <span><?php echo $msg['The best classic dress is on sale from cara'] ?></span>
            <button class="white"><?php echo $msg['Learn More'] ?></button>
        </div>
        <div class="bannar-box bannar-box2">
            <h4><?php echo $msg['Spring/Summer'] ?></h4>
            <h2><?php echo $msg['buy 1 get 1 Free'] ?>e</h2>
            <span><?php echo $msg['The best classic dress is on sale from cara'] ?></span>
            <button class="white"><?php echo $msg['Learn More'] ?></button>
        </div>

    </section>

    <section id="bannar3" class="section-p1">
        <div class="bannar-box">
            <h2><?php echo $msg['SEASONAL SALE'] ?></h2>
            <h3><?php echo $msg['Winter Collection - 50% off'] ?></h3>
        </div>
        <div class="bannar-box bannar-box2">
            <h2><?php echo $msg['SEASONAL SALE'] ?></h2>
            <h3><?php echo $msg['Winter Collection - 50% off'] ?></h3>
        </div>
        <div class="bannar-box bannar-box3">
            <h2><?php echo $msg['SEASONAL SALE'] ?></h2>
            <h3><?php echo $msg['Winter Collection - 50% off'] ?></h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4><?php echo $msg['Sign Up For Newletters'] ?></h4>
            <p><?php echo $msg['Get E-mail Updates about our latest shop and Special Offers.'] ?></p>
        </div>
        <div class="form">
            <input type="text">
            <button class="normal"><?php echo $msg['Sign Up'] ?></button>
        </div>
    </section>





<?php include 'footer.php' ?>
        
        <script src="" async defer></script>
    </body>
</html>