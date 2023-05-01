<?php
$koneksi = mysqli_connect("localhost","root","","db_data_pegawai");
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>