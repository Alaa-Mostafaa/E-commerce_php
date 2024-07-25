<?php

require_once 'connection.php';

if(isset($_POST['submit'])){
    $user_id=$_SESSION['user_id'];
    
$name=trim(htmlspecialchars($_POST['name']));
$email=trim(htmlspecialchars($_POST['email']));
$city=trim(htmlspecialchars($_POST['city']));
$phone=trim(htmlspecialchars($_POST['phone']));
$address=trim(htmlspecialchars($_POST['address']));
$type=trim(htmlspecialchars($_POST['type']));
$code=trim(htmlspecialchars($_POST['code']));


$errors=[];

if(empty($name)){
    $errors='Name  is required';
    
}elseif(is_numeric($name)){
    $errors='Name  must be a string';

}elseif(empty($email)){
    $errors='Email is required';

}elseif(is_numeric($email)){
    $errors='Email must be a string';

}elseif(empty($phone)){
    $errors='Phone is required';

}
elseif(empty($type)){
    $errors='Type is required';

}
elseif(empty($address)){
    $errors='Address is required';

}elseif(is_numeric($address)){
    $errors='Address  must be a string';

}
elseif(empty($city)){
    $errors='City is required';

}
elseif(empty($code)){
    $errors='code is required';

}

if(empty($errors)){

$query="insert into orders(`name`,`email`,`phone`,`city`,`payment_type`,`postal_code`,`address`,`user_id`)
values ('$name','$email','$phone','$city','$type','$code','$address',$user_id)
";

$result=mysqli_query($connection,$query);

$query="delete from cart";
$result=mysqli_query($connection,$query);

header('location:../index.php');




}

}










?>