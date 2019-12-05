<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// update data ke database
mysqli_query($koneksi,"update tbl_user set nama='$nama', email='$email', username='$username', password='$password' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:adm_home.php");

?>