<?php
require_once 'connection.php';

if(isset($_POST['submit'])){


$id=$_GET['id'];

$query="select * from products where id=$id";
$result=mysqli_query($connection,$query);

if(mysqli_num_rows($result)==1){

    $oldimage=mysqli_fetch_assoc($result)['image'];


// catch and check data
$name=trim(htmlspecialchars($_POST['name']));
$brand=trim(htmlspecialchars($_POST['brand']));
$price=trim(htmlspecialchars($_POST['price']));


$error=[];
if(empty($name)){
$error[]= "name Is Required";
}elseif(is_numeric($name)){
$error[]=" name must be string";
}

if(empty($brand)){
$error[]= "brand Is Required";
}elseif(is_numeric($brand)){
$error[]=" brand must be string";
}

if(empty($price)){
    $error[]= "price Is Required";
    }elseif(is_numeric($price)){
    $error[]=" price must be string";
    }
    

if(isset($_FILES['image'])&&$_FILES['image']['name']){
$image=$_FILES['image'];
$image_name=$image['name'];
$tmp_name=$image['tmp_name'];
$image_error=$image['error'];
$size=$image['size']/(1024*1024);
$extension=strtolower(pathinfo($image_name,PATHINFO_EXTENSION));

if($image_error!=0){
$error[]=" Image is required";
}elseif($size>1){
$error[]="The image has big size";
}elseif(!in_array($extension,["jpg","png","jpeg"])){
$error[]="This is not an image";
}

$new_name=uniqid().".".$extension;

}else{
$new_name=$oldimage;
}


//update

$queryy="update products set `name`='$name', `brand`='$brand',`price`=$price,`image`='$new_name' where id=$id";

$result=mysqli_query($connection,$queryy);

if($result){

    $_SESSION['success']="Post updated successfully";
    header("location:../viewProduct.php?id=$id");

}else{
    header("location:../editProduct.php?id=$id");


}


}

else{
    $_SESSION['error']=['Post is not found'];
    header('location:../index.php');

}




}
else{

    header('location:../index.php');

}
?>