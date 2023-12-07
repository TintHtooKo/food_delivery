<?php

error_reporting(1);
include('connect.php');


$del = "DELETE FROM all_product WHERE id = '{$_REQUEST['del']}'";
$result = mysqli_query($con,$del) or die(mysqli_error());
if($result){
    unlink('product/'.$_REQUEST['p_img']);
    rmdir('product/'.$_REQUEST['p_img']);
    header('location:product.php');
    echo "<script>alert('delete success')</script>";
}else{
    echo 'error';
}


?>