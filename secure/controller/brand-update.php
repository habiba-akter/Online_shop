<?php
    include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $id = $_POST['brand_id'];
    $sql = "UPDATE product_brand SET "
            . "brand_name = '$_POST[brand_name]', "
            . "brand_description = '$_POST[brand_description]' "
            . "WHERE brand_id = '$id'";
    $status = $con_obj->updateData($sql);
//    echo '<pre>';
//    print_r($status);
//    exit();
     if(!$status){
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Update</div>';
        header("Location: ../edit-brand.php");
    } 
        header("Location: ../manage-brand.php");
?>