<?php 
include 'koneksidb.php';
    if (isset($_POST['submit'])) {
    $namaleng = $_POST['namaleng'];
    $jnskelamin = $_POST['jnskelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tmplahir = $_POST['tmplahir'];
    $tglahir = $_POST['tglahir'];
    $agama = $_POST['agama'];
    $berkebkhusus = $_POST['berkebkhusus'];
    $alamatjln = $_POST['alamatjln'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $namadusun = $_POST['namadusun'];
    $namakel = $_POST['namakel'];
    $kec = $_POST['kec'];
    $kodepos = $_POST['kodepos'];
    $tmptinggal = $_POST['tmptinggal'];
    $transport = $_POST['transport'];
    $nohp = $_POST['nohp'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $kpspkhkip = $_POST['kpspkhkip'];
    $nokpskkspkh = $_POST['nokpskkspkhkip'];
    $kwn = $_POST['kwn'];
    $namaneg = $_POST['namaneg'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO datapribadi (namaleng, jnskelamin, nisn, nik, tmplahir, tglahir, agama, berkebkhusus, alamatjln, rt, rw, namadusun, namakel, kec, kodepos, tmptinggal, transport, nohp, notelp, email, kpspkhkip, nokpskkspkhkip, kwn, namaneg) VALUES ('$namaleng', '$jnskelamin', '$nisn', '$nik', '$tmplahir', '$tglahir', '$agama', '$berkebkhusus', '$alamatjln', '$rt', '$rw', '$namadusun', '$namakel', '$kec', '$kodepos', '$tmptinggal', '$transport', '$nohp', '$notelp', '$email', '$kpspkhkip', '$nokpskkspkhkip', '$kwn', '$namaneg')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Ayah!'); window.location.href='dataayah-form.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Pribadi Gagal Ditambahkan!!');";
        }
      }
?>