<?php

require_once 'connection.php';

if (isset($_POST['submit'])) {

    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));

    $errors = [];

    if (empty($email)) {

        $errors = 'Email is required';
    } elseif (is_numeric($email)) {

        $errors = 'Email must be a string';
    } elseif (empty($password)) {

        $errors = 'Password is required';
    }

    // check for the duplicated emails
    $query = "select * from users";
    $result = mysqli_query($connection, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

 

    if (empty($errors)) {

        $query = "select * from users where Email='$email' ";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $oldPassword = $user['password'];
            $verify = password_verify($password, $oldPassword);

            if ($verify) {
                $_SESSION['user_id'] = $user['id'];
                header('location:../index.php');
            } else {
                $_SESSION['Login_error'] = "Login error";
                header('location:../login.php');
            }
        }
    } else {
        $_SESSION['error'] = "This account is not exist";

        header('location:../login.php');
    }
} else {

    header('location:../login.php');
}
