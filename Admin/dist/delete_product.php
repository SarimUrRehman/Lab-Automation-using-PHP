<?php 
include 'config.php';

$id = $_GET['id'];

$delete = "DELETE FROM `products` WHERE id = $id";
$deleteRes = mysqli_query($conn,$delete);

if($deleteRes){
    header("location: view_product.php");
}

?>