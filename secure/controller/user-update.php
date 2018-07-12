<?php
    session_start();
    include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $id = $_POST['user_id'];
    $sql = "UPDATE user SET user_status = '$_POST[user_status]' WHERE user_id = '$id'";
    $status = $con_obj->updateData($sql);

     if(!$status){
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Update</div>';
        header("Location: ../edit-user.php");
    } 
        header("Location: ../manage-user.php");

?>