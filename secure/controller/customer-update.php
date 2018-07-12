<?php
    session_start();
    include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $id = $_POST['customer_id'];
    $sql = "UPDATE customer SET customer_status = '$_POST[customer_status]' WHERE customer_id = '$id'";
    $status = $con_obj->updateData($sql);

     if(!$status){
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Update</div>';
        header("Location: ../edit-customer.php");
    } 
        header("Location: ../manage-customer.php");

?>