<?php 
include('db.php');
$ID = $_GET['id'];
mysqli_query($conn,"DELETE FROM project_gestion WHERE id=$ID");
header('location:Product.php');
?>