<?php
    include 'koneksidb.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

    <center>
    <h1> FORMULIR PESERTA DIDIK </h1>
    <form action="#" method="post">
		<label for="tanggal">Tanggal:</label>
		<input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
		<br><br>
	</form>
    </center>

<?php
    $error_nopendaftaran = "";
    $error_jnspendaftaran = "";
    $error_tglmsksekolah = "";
    $error_nis = "";
    $error_nopesujian = "";
    $error_apkprnhpaud = "";
    $error_apkprnhtk = "";
    $error_noseriskhun = "";
    $error_noseriijazah = "";
    $error_hobi = "";
    $error_citacita = "";

    $nopendaftaran = "";
    $jnspendaftaran = "";
    $tglmsksekolah = "";
    $nis = "";
    $nopesujian = "";
    $apkprnhpaud = "";
    $apkprnhtk = "";
    $noseriskhun = "";
    $noseriijazah = "";
    $hobi = "";
    $citacita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nopesujian"])) {
            $error_nopesujian = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $nopesujian = cek_input($_POST["nopesujian"]);
            if (!is_numeric($nopesujian)) {
                $error_nopesujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noseriskhun"])) {
            $error_noseriskhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $noseriskhun = cek_input($_POST["noseriskhun"]);
            if (!is_numeric($noserskhun)) {
                $error_noseriskhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noserijazah"])) {
            $error_noseriijazah = "No Seri Ijazah Tidak Boleh Kosong";
        } else {
            $noseriijazah = cek_input($_POST["noseriijazah"]);
            if (!is_numeric($noseriijazah)) {
                $error_noseriijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
<div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Registrasi Peserta Didik</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="regist-proses.php">

                    <div class="form-group row">
                        <label for="jnspendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jnspendaftaran" value="Siswa Baru">Siswa Baru</label>
                            <input type="radio" name="jnspendaftaran" value="Pindahan">Pindahan</label> 
                            <span class="warning" ><?php echo $error_jnspendaftaran; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" name="tglmsksekolah" id="tglmsksekolah" class="form-control <?php echo ($error_tglmsksekolah !="" ? "is-invalid" : ""); ?>" placeholder="XX - Bulan - XXXX" value="<?php echo $tglmsksekolah; ?>"> <span class="warning"><?php echo $error_tglmsksekolah ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nis" id="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span class="warning"><?php echo $error_nis ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nopesujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopesujian" id="nopesujian" class="form-control <?php echo ($error_nopesujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian" value="<?php echo $nopesujian; ?>"> <span class="warning"><?php echo $error_nopesujian ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="apkprnhpaud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                        <div class="col-sm-10">
                            <input type="radio" name="apkprnhpaud" value="Ya">Ya</label>
                            <input type="radio" name="apkprnhpaud" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_apkprnhpaud; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="apkprnhtk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                        <div class="col-sm-10">
                            <input type="radio" name="apkprnhtk" value="Ya">Ya</label>
                            <input type="radio" name="apkprnhtk" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_apkprnhtk; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noseriskhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noseriskhun" id="noseriskhun" class="form-control <?php echo ($error_noseriskhun !="" ? "is-invalid" : ""); ?>" placeholder="SKHUN Sebelumnya" value="<?php echo $noseriskhun; ?>"> <span class="warning"><?php echo $error_noseriskhun ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noseriijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noseriijazah" id="noseriijazah" class="form-control <?php echo ($error_noseriijazah !="" ? "is-invalid" : ""); ?>" placeholder="Seri Ijazah Sebelumnya" value="<?php echo $noseriijazah; ?>"> <span class="warning"><?php echo $error_noseriijazah ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_hobi; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="citacita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_citacita; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>