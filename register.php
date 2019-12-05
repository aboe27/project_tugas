<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi,"insert into tbl_user values('','$nama','$email','$username','$password')");

header("location:index.php?p=login");

?>