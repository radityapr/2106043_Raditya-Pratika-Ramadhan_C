<?php
include './koneksi.php';

$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$lapak=$_POST['lapak'];
$harga=$_POST['harga'];

$query="INSERT INTO pemancingan VALUES(NULL,'$nama','$jenis_kelamin','$lapak','$harga')";

mysqli_query($conn,$query);

echo "<script>alert('data ditambahkan')</script>";

echo "<script>window.location='./index.php'</script>";

?>