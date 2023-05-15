<?php 
include 'koneksidb.php';
    if (isset($_POST['submit'])) {
        $namaibu = $_POST['namaibu'];
        $thnlhribu = $_POST['thnlhribu'];
        $pendibu = $_POST['pendibu'];
        $pekeribu = $_POST['pekeribu'];
        $gajiibu = $_POST['gajiibu'];
        $berkebkhususibu = $_POST['berkebkhususibu'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataibu (namaibu, thnlhribu, pendibu, pekeribu, gajiibu, berkebkhususibu) VALUES ('$namaibu', '$thnlhribu', '$pendibu', '$pekeribu', '$gajiibu', '$berkebkhususibu')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Data Keseluruhan Berhasil Disimpan!'); window.location.href='regist-form.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ibu Kandung Gagal Ditambahkan!!');";
        }
      }
?>