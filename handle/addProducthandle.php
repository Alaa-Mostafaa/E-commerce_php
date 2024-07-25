<?php

require_once 'connection.php';

if(isset($_POST['submit'])){
    $user_id=$_SESSION['user_id'];

$name=trim(htmlspecialchars($_POST['name']));
$brand=trim(htmlspecialchars($_POST['brand']));
$price=trim(htmlspecialchars($_POST['price']));

$errors=[];

if(empty($name)){
    $errors='Name of the product is required';
    
}elseif(is_numeric($name)){
    $errors='Name of the product must be a string';

}elseif(empty($brand)){
    $errors='Brand of the product is required';

}elseif(is_numeric($brand)){
    $errors='Brand of the product must be a string';

}elseif(empty($price)){
    $errors='Price of the product is required';

}elseif(is_string($price)){
    $errors='Price of the product must be a number';

}


// image

if(isset($_FILES['image'])&&$_FILES['image']['name']){
    $image=$_FILES['image'];
    $image_name=$image['name'];
    $tmp_name=$image['tmp_name'];
    $image_error=$image['error'];
    $size=$image['size']/(1024*1024);
    $extension=strtolower(pathinfo($image_name,PATHINFO_EXTENSION));

if($image_error!=0){
    $errors[]=" Image is required";
}elseif($size>1){
    $errors[]="The image has big size";
}elseif(!in_array($extension,["jpg","png","jpeg"])){
    $errors[]="This is not an image";
}

    $new_name=uniqid().".".$extension;

}else{
    $new_name=null;
}


if(empty($error)){

    $query="insert into products (`name`,`brand`,`price`,`image`,`user_id`) 
    values ('$name','$brand','$price','$new_name','$user_id')";

    $result=mysqli_query($connection,$query);

    if($result){

        if(isset($_FILES['image'])&&$_FILES['image']['name']){
            move_uploaded_file($tmp_name,"../images/$new_name");
        }
    
      $_SESSION['success']="Your Post Created Successfully";
      header("location:../index.php");
    }else{
        $_SESSION['error']=["Error happened during inserting"];
    }
    

}
else{

    header('location:../addProduct.php');
}



}
?>