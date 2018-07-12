<?php
    session_start();
    include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $id = $_POST['category_id'];
    //$category_description = addslashes($_POST['category_description']);
    $sql = "UPDATE product_category SET "
            . "category_name = '$_POST[category_name]', "
            . "parent = '$_POST[parent]', "
//            . "category_description = '$category_description', "
            . "category_description = '".addslashes($_POST['category_description'])."', "
            . "status = '$_POST[status]' "
            . "WHERE category_id = '$id'";
    $status = $con_obj->updateData($sql);

     if(!$status){
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Update</div>';
        header("Location: ../edit-category.php");
    } 
        header("Location: ../manage-category.php");

?>