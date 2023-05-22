<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SISWA BARU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 7%;
            padding-left: 15%;
        }
    </style>
</head>
<body>

<div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                <center><h3>DATA SISWA BARU</h3></center>
                </div>
                <div class="card-body">
                <?php
include "koneksi.php";
$cetak = mysqli_query($koneksi, "SELECT * from tb_siswa") or die ("Proses cetak gagal" );

    echo "<table class='table table-bordered border-dark'>
    <tr class='text-center'>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Alamat</th>";
    $no=1;
    foreach ($cetak as $hasil) {
    echo "<tr>
    <td>$no</td>
    <td>".$hasil['nama']."</td>
    <td>".$hasil['kelas']."</td>
    <td>".$hasil['alamat']."</td>
    </tr>";
    $no++;
}
echo "</table>";
?>
<br>
<a class="btn btn-success" href="tambahsiswa.php">Tambah Siswa Baru</a>
<a class="btn btn-danger" href="reportdataexcel.php">Cetak Excel</a>

                </div>
            </div>
        </div>
</div>
</body>
</html>