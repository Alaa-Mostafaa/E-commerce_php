<?php
require_once 'connection.php';


if(isset($_GET['id'])){
    $id=$_GET['id'];


    $query="select * from products where id=$id";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)==1){
        $result=mysqli_fetch_assoc($result);
        $oldimage=$r;
        header('location:../index.php');
    }
    else{
        $_SESSION['error']="Product is not found";
        header('location:../index.php');

        
    }
    
}

?>