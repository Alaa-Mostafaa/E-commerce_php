<?php

require_once 'connection.php';

if(isset($_POST['submit'])){

$name=trim(htmlspecialchars($_POST['name']));
$email=trim(htmlspecialchars($_POST['email']));
$password=trim(htmlspecialchars($_POST['password']));
$phone=trim(htmlspecialchars($_POST['phone']));
$address=trim(htmlspecialchars($_POST['address']));

$errors=[];

// validation

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
elseif(empty($password)){
    $errors='Password is required';

}
elseif(empty($address)){
    $errors='Address is required';

}elseif(is_numeric($address)){
    $errors='Address  must be a string';

}

// check for the duplicated emails
$query="select * from users";
$result=mysqli_query($connection,$query);
$users=mysqli_fetch_all($result,MYSQLI_ASSOC);

if(in_array($email,$users)){

    $_SESSION['error']="Account is already exist";
    header('location:../signup.php');
}else{

    
if(empty($errors)){
    $password=password_hash($password,PASSWORD_DEFAULT);
    $query="INSERT INTO users (`name`,`Email`,`password`,`phone`,`Address`) values('$name','$email','$password','$phone','$address')";

    $result=mysqli_query($connection,$query);
    $_SESSION['user_id']=$result['id'];

    header('location:../login.php');


}
else{
    $_SESSION['error']=$errors;
    header('location:../signup.php');


}

}






}else{
header('location:../signup.php');
}








?>