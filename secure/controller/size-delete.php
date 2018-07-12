<?php
    session_start();
    include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $id = base64_decode($_GET['id']);
    $sql = "DELETE FROM size WHERE size_id = '$id'";
    $status = $con_obj->deleteData($sql);
    
    if($status){
        $_SESSION['err_msg'] = '<div class="alert alert-success">Delete Successfully</div>';
    } else {
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Delete</div>';
    }
    
    header("Location: ../manage-size.php");
?>