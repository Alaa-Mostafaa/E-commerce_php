<?php


require_once 'connection.php';

if(isset($_GET['id'])){

    $id=$_GET['id'];

    $query="select * from cart where id=$id";
    $result=mysqli_query($connection,$query);

    if(mysqli_num_rows($result)==1){

        $query="delete from cart where id=$id";
        $result=mysqli_query($connection,$query);
        header('location:../cart.php');




    }
    else{

        $error=[];
        $error="Product is not found";
        $_SESSION['delete_cart']=$error;

    }
}

?>