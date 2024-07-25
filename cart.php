<?php include 'header.php' ?>
<?php include 'navbar.php' ?>




<section id="page-header" class="about-header"> 


        <h2><?php echo $msg['Cart'] ?></h2>
        <p><?php echo $msg["Let's see what you have."] ?></p>
    </section>
 
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead >
                <tr>
                    <td><?php echo $msg['Image'] ?></td>
                    <td><?php echo $msg['Name'] ?></td>
                    <td><?php echo $msg['brand'] ?></td>
                    <td><?php echo $msg['price'] ?></td>
                    <td><?php echo $msg['Remove'] ?></td>
                </tr>
            </thead>
            <tbody>

            <?php 

require_once 'handle/connection.php';
if(isset($_SESSION['user_id'])){
$id=$_SESSION['user_id'];
   
        $query2="select * from cart where user_id=$id";
        $result2=mysqli_query($connection,$query2);
        $products=mysqli_fetch_all($result2,MYSQLI_ASSOC);
        $total="select SUM(price) from cart as total";
        $sum=mysqli_query($connection,$total);
        $total=mysqli_fetch_assoc($sum);
        $_SESSION['total']=$total;
        if(empty($products)){

            echo "Cart is empty";

        }else{
            foreach($products as $product){

       
        
        ?>
                <tr >
                    <td  class="py-3"><img src="images/<?php echo $product['image'] ?>" alt="product" class="w-100"></td>
                    <td class="fs-5 ps-5"><?php echo $msg[$product['name']] ?></td>
                    <td class="fs-5 "><?php echo $msg[$product['brand']] ?></td>
                    <td class="fs-5"><?php echo $msg[$product['price']] ?></td>
                 <!-- Remove any cart item  -->
                    <td><button type="submit"  class="btn btn-danger"><a href="handle/deletecart.php?id=<?php echo $product['id'] ?>" style="color:white;text-decoration:none"><?php echo $msg['Remove'] ?></a></button></td>
                    
                    
                    
                
                </tr>
   
    <?php 
        }
    

    }}else{

        header("location:login.php");
    }
    
    ?>

</tbody>
            <!-- confirm order  -->

           <?php 
           if(!empty($products)){
           ?>
            <td class="pt-5">
            <button type="submit" name="" class="btn btn-success"><a href="confirmOrder.php" style="color:white;text-decoration:none">
            <?php echo $msg['Confirm'] ?></a></button>
            <?php echo "<span class='fs-5 ps-5'>Total : ".$total['SUM(price)']."</span>"   ?>

        </td>

            <?php }?>
        </table>

    </section>


    <?php  include "footer.php" ?>

