<?php 
include 'koneksidb.php';
    if (isset($_POST['submit'])) {
        $namaayah = $_POST['namaayah'];
        $thnlhrayah = $_POST['thnlhrayah'];
        $pendayah = $_POST['pendayah'];
        $pekerayah = $_POST['pekerayah'];
        $gajiayah = $_POST['gajiayah'];
        $berkebkhususayah = $_POST['berkebkhususayah'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataayah (namaayah, thnlhrayah, pendayah, pekerayah, gajiayah, berkebkhususayah) VALUES ('$namaayah', '$thnlhrayah', '$pendayah', '$pekerayah', '$gajiayah', '$berkebkhususayah')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Ibu!'); window.location.href='dataibu-form.php'</script>";  
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ayah Kandung Gagal Ditambahkan!!');";
        }
      }
?>