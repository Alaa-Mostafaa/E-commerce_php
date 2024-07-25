<?php
require_once 'connection.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query="select * from products where id=$id";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)==1){
        $result=mysqli_fetch_assoc($result);
        $result_name=$result['name'];
        $result_price=$result['price'];
        $result_brand=$result['brand'];
        $result_image=$result['image'];

        $query="insert into cart(name,price,brand,image) values('$result_name',$result_price,'$result_brand','$result_image')";

        $result=mysqli_query($connection,$query);
        header('location:../index.php');
    
    }else{
        $error=[];
        $error="Product is not found";
        $_SESSION['error_cart']=$error;
    }

}
?>