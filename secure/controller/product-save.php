<?php 
session_start();
include("../class/connectionBridge.php");
$obj = new ConnectionBridge();
extract($_POST);
$ext_array = ['png', 'jpg', 'jpeg', 'gif'];

if($_FILES){

  $ext = array_pop(explode('.', $_FILES['product_image']['name']));

  if(in_array($ext, $ext_array)){

    $file_name = time().'_'.$product_model.'.'.$ext;

    move_uploaded_file($_FILES['product_image']['tmp_name'], '../uploads/product/'.$file_name);
  }
  else{

    $_SESSION['err_msg'] = "<div class='alert alert-danger'>Invalid ext.</div>";
    header("Location:../add-product.php");
    exit();
  }
    
}

$status = $obj->insertData("INSERT INTO `product` (`product_model`, `product_name`, `category_id`, `product_price`, `product_quantity`, `product_size`, `product_color`, `product_discount`, `product_description`, `product_images`, `brand_id`, `product_status`) VALUES
('".addslashes($product_model)."', '".addslashes($product_name)."', '$category', '$product_price', '$product_qnt', '".json_encode($size)."', '$product_color', '$product_discount','".addslashes($description)."', '$file_name', '$brand', '$status')");

if($status){
    $_SESSION['err_msg'] = "<div class='alert alert-success'>Product Save Successfully!.</div>";
}
else{
    $_SESSION['err_msg'] = "<div class='alert alert-danger'>Unable to save Product!.</div>";
}

header("Location:../add-product.php");

?>