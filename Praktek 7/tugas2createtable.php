<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_data_pegawai";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table data_pegawai
$sql = "CREATE TABLE data_pegawai (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    no_telepon VARCHAR(20) NOT NULL)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " .$sql. "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>