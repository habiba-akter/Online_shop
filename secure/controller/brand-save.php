<?php

include '../class/connectionBridge.php';
$con_obj = new ConnectionBridge();
$brand_name = addslashes($_POST['brand_name']);
$brand_description = addslashes($_POST['brand_description']);
$sql = "INSERT INTO product_brand (brand_name, brand_description) VALUES ('$brand_name', '$brand_description')";
$status = $con_obj->insertData($sql);

if ($status) {
    $_SESSION['err_msg'] = '<div class="alert alert-success">Insert Successfully</div>';
} else {
    $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Insert</div>';
}
header("Location: ../manage-brand.php");
