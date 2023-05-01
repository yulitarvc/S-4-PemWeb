<?php
include 'tugas3koneksi.php';

//Mengambil data 
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];

//Input data 
mysqli_query($koneksi,"INSERT INTO `data_pegawai` (`id`, `nama`, `email`, `alamat`, `no_telepon`) 
VALUES (NULL, '$nama', '$email', '$alamat', '$no_telepon')");

//Kembali ke halaman utama
header("location:tugas3index.php");
?>