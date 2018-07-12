<?php
    include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $id = $_POST['size_id'];
    $sql = "UPDATE size SET size_name = '$_POST[size_name]' WHERE size_id = '$id'";
    $status = $con_obj->updateData($sql);
//    echo '<pre>';
//    print_r($status);
//    exit();
     if(!$status){
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Update</div>';
        header("Location: ../edit-size.php");
    } 
        header("Location: ../manage-size.php");
?>