<?php 
include 'header.php';

$id = $_GET['id'];

$delete = "UPDATE`products` SET `testing` = 3 WHERE id = $id";
$deleteRes = mysqli_query($conn,$delete);

if($deleteRes){
    echo "
    <script>window.location.href='CPRI_dept.php'</script>
    ";
}

?>