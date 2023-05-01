<?php
include 'tugas3koneksi.php';

//Mengambil data
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
echo $id;

//Input data
mysqli_query($koneksi, "UPDATE `data_pegawai` SET `nama` = '$nama', `email` = '$email', `alamat` = '$alamat', `no_telepon` = '$no_telepon' 
WHERE `data_pegawai`.`id` = $id;"); 


//Kembali ke halaman awal
header("location:tugas3index.php");
?>