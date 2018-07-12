<?php
include '../class/connectionBridge.php';
$con_obj = new ConnectionBridge();
$color_name = addslashes($_POST['color_name']);
$sql = "INSERT INTO color (color_name) VALUES ('$color_name')";
$status = $con_obj->insertData($sql);
if ($status) {
    $_SESSION['err_msg'] = '<div class="alert alert-success">Insert Successfully</div>';
} else {
    $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Insert</div>';
}
header("Location: ../manage-color.php");

