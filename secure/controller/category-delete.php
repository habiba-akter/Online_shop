<?php

include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $id = base64_decode($_GET['id']);
    $sql = "DELETE FROM product_category WHERE category_id = '$id'";
    $status = $con_obj->deleteData($sql);
    
//    echo "<pre>";
//    print_r($status);
//    exit();
    
    if($status){
        $_SESSION['err_msg'] = '<div class="alert alert-success">Delete Successfully</div>';
    } else {
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Delete</div>';
    }
    header("Location: ../manage-category.php");