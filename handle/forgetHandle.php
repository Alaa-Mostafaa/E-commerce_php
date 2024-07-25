<?php

require_once 'connection.php';

if(isset($_POST['submit'])){

    $email=trim(htmlspecialchars($_POST['email']));
    $newPass=trim(htmlspecialchars($_POST['newPass']));
    $confirmPass=trim(htmlspecialchars($_POST['confirmPass']));

    $errors=[];

    if(empty($email)){
        $errors='Email is required';
    }elseif(empty($newPass)){
        $errors="New password is required";
    }elseif(empty($confirmPass)){
        $errors="Confirm password is required";
    }elseif($newPass !== $confirmPass){
        $errors="Confirm password must be match new password";
    }

    if(empty($errors)){

        $query="select * from users where Email='$email' ";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)==1){
            $user=mysqli_fetch_assoc($result);
            $old_password=$user['password'];

            $newPass=password_hash($newPass,PASSWORD_DEFAULT);
 
            $query="UPDATE users SET password = '$newPass' WHERE Email = '$email' ";

            $result=mysqli_query($connection,$query);
            $_SESSION['success']=['Password is updated successfully'];
            header('location:../login.php');

        }
        else{
            $_SESSION['error']=["User is not found"];
            header('location:../forgetPassword.php');

        }


    }
    else{
        $_SESSION['error']=$errors;
        header('location:../forgetPassword.php ');
    }


}
else{

    header('location:../forgetPassword.php ');


}




?>