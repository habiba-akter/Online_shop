<?php
    include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $id = $_POST['color_id'];
    $sql = "UPDATE color SET color_name = '$_POST[color_name]' WHERE color_id = '$id'";
    $status = $con_obj->updateData($sql);
//    echo '<pre>';
//    print_r($status);
//    exit();
     if(!$status){
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Update</div>';
        header("Location: ../edit-color.php");
    } 
        header("Location: ../manage-color.php");
?>