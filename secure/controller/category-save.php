<?php
    include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $sql = "INSERT INTO product_category (category_name, parent, category_description, status) "
            . "VALUES('$_POST[category_name]', '$_POST[parent]', '$_POST[category_description]', '$_POST[status]')";
    $status = $con_obj->insertData($sql);
    
//    echo "<pre>";
//    print_r($status);
//    exit();
    
    if($status){
        $_SESSION['err_msg'] = '<div class="alert alert-success">Insert Successfully</div>';
    } else {
        $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Insert</div>';
    }
    header("Location: ../manage-category.php");

?>

