<?php

session_start();
include '../class/connectionBridge.php';
$con_obj = new ConnectionBridge();
$email = $_POST['user_email'];
$password = md5($_POST['user_password']);
$sql = "SELECT * FROM user WHERE user_email ='$email'";
$user = $con_obj->getAllData($sql);

//echo '<pre>';
//print_r($user);
//exit();
if (count($user) > 0) {
    if ($password == $user[0]['user_password'] && $user[0]['user_status'] == 1) {
        $_SESSION['user_id'] = $user[0]['user_id'];
        $_SESSION['user_email'] = $user[0]['user_email'];
        $_SESSION['user_name'] = $user[0]['user_name'];
        $_SESSION['user_type'] = $user[0]['user_type'];
        header("Location: ../index.php");
    } else {
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Your Password is Wrong</div>';
        header("Location: ../login.php");
    }
} else {
    $_SESSION['err_msg'] = '<div class="alert alert-denger">Your Email is Wrong</div>';
    header("Location: ../login.php");
}
?>