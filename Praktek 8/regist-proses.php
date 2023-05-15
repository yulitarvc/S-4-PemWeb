<?php 
include 'koneksidb.php';
    if (isset($_POST['submit'])) {
        $nopendaftaran = $_POST['nopendaftaran'];
        $jenispend = $_POST['jnspendaftaran'];
        $tglmsksklh = $_POST['tglmsksekolah'];
        $nis = $_POST['nis'];
        $nopesujian= $_POST['nopesujian'];
        $appaud = $_POST['apkprnhpaud'];
        $aptk = $_POST['apkprnhtk'];
        $noserskhun = $_POST['noseriskhun'];
        $noserijazah = $_POST['noseriijazah'];
        $hobi = $_POST['hobi'];
        $citacita = $_POST['citacita'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO registrasi (nopendaftaran, jnspendaftaran, tglmsksekolah, nis, nopesujian, apkprnhpaud, apkprnhtk, noseriskhun, noseriijazah, hobi, citacita) VALUES ('$nopendaftaran', '$jnspendaftaran', '$tglmsksekolah', '$nis', '$nopesujian', '$apkprnhpaud', '$apkprnhtk', '$noseriskhun', '$noseriijazah', '$hobi', '$citacita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Pribadi!'); window.location.href='datapribadi-form.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Registrasi Gagal Ditambahkan!!');";
        }
      }
?>