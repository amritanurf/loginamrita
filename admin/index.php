<?php
include '../koneksi.php';
//mengaktifkan session
session_start();
//cek apakanuser telah login.jika belum, alihkan ke halaman login
if($_SESSION['status']!="login"){
    header("location:../index.php");
}
//menampilkan pesan selamat datang
echo "hai selamat datang".$_SESSION['username'];
?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>