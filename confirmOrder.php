<?php
include "header.php";
include "navbar.php";

require_once 'handle/connection.php';
if(!isset($_SESSION['user_id'])){
    header('location:login.php');
}

?>


<section id="cart-add" class="section-p1">
    <form>
        <div id="coupon">
            <h3><?php echo $msg['Coupon'] ?></h3>
            <input type="text" name="coupon" placeholder="Enter coupon code">
            <button class="normal" type="submit" ><?php echo $msg['Apply'] ?></button>
        </div>
        </form>
        <div id="subTotal">
            <h3 class="pb-3"><?php echo $msg['Cart totals'] ?></h3>
            <form class=" col-4" action="handle/confirmHandle.php" method="post" enctype="multipart/form-data">
            <?php echo $msg['Name'] ?> <input class="my-3" type="text" name="name">
            <?php echo $msg['Email'] ?>  <input class="my-3" type="email" name="email">
            <?php echo $msg['Address'] ?> <input class="my-3" type="text" name="address">
            <?php echo $msg['City'] ?> <input class="my-3" type="text" name="city">
            <?php echo $msg['Postal Code'] ?> <input class="my-3" type="number" name="code">
                <?php echo $msg['Phone'] ?> <input class="my-3" type="tel" name="phone">
                <?php echo $msg['Payment Type'] ?><select class="my-3" name="type">
                <option value="Cash_on_Delivery"><?php echo $msg['Cash on Delivery'] ?></option>
                    <option value="Credit_Card"><?php echo $msg['Credit Card'] ?></option>
                    <option value="Fawry"><?php echo $msg['Fawry'] ?></option>
                </select>
                <button class="normal" type="submit" name="submit"><?php echo $msg['Proceed to checkout'] ?></button>
            </form>
           
        </div>
    </section>


    <?php include "footer.php" ?>