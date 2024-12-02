<?php
include '../koneksi.php';

$nama=$_POST['nama'];
$no_telp=$_POST['no_telp'];
$email=$_POST['email'];
$tanggal= date('Y-m-d');
$pesan=$_POST['pesan'];

$query="INSERT INTO contact VALUES(null, '$nama', '$no_telp', '$email','$tanggal', '$pesan')";
$data=mysqli_query($conn,$query);
header("location:../contact.php");

?>