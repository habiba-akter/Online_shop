<?php 
session_start();
include("../class/connectionBridge.php");
$obj = new connectionBridge();
extract($_POST);
$ext_array = ['png', 'jpg', 'jpeg', 'gif'];

if($_FILES){

  $ext = array_pop(explode('.', $_FILES['image']['name']));

  if(in_array($ext, $ext_array)){

    $file_name = time().'_'.'.'.$ext;

  	move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/slider/'.$file_name);
  }
  else{

  	$_SESSION['err_msg'] = "<div class='alert alert-danger'>Invalid ext.</div>";
  	header("Location:../add-slider.php");
  	exit();
  }
    
}

$status = $obj->insertData("INSERT INTO slider(title, url, images, sort_order) VALUES('".addslashes($title)."', '".addslashes($url)."', '$file_name', '$sort_order')");

if($status){
	$_SESSION['err_msg'] = "<div class='alert alert-success'>Slider images Save Successfully!.</div>";
}
else{
	$_SESSION['err_msg'] = "<div class='alert alert-danger'>Unable to save Slider images!.</div>";
}

header("Location:../add-slider.php");

?>