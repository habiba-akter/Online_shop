<?php

include '../class/connectionBridge.php';
$con_obj = new ConnectionBridge();
$size_name = addslashes($_POST['size_name']);

$sql = "INSERT INTO size (size_name) VALUES ('$size_name')";
$status = $con_obj->insertData($sql);

if ($status) {
    $_SESSION['err_msg'] = '<div class="alert alert-success">Insert Successfully</div>';
} else {
    $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Insert</div>';
}
header("Location: ../manage-size.php");
