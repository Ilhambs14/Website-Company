<?php
include '../koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM contact WHERE id='$id'";
$data=mysqli_query($conn,$sql);
header('location:contact.php');
?>