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

<?php
    $error_namaibu = "";
    $error_thnlhribu = "";
    $error_pendibu = "";
    $error_pekeribu = "";
    $error_gajiibu = "";
    $error_berkebkhususibu = "";

    $namaibu = "";
    $thnlhribu = "";
    $pendibu = "";
    $pekeribu = "";
    $gajiibu = "";
    $berkebkhususibu = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["thnlhribu"])) {
            $error_thnlhribu = "Tanggal Lahir Tidak Boleh Kosong";
        } else {
            $thnlhribu = cek_input($_POST["thnlhribu"]);
            if (!is_numeric($thnlhribu)) {
                $error_thnlhribu = "Tanggal Lahir Hanya Boleh Angka";
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
                    <h5>Data Ibu Kandung</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="dataibu-proses.php">

                    <div class="form-group row">
                        <label for="namaibu" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaibu" id="namaibu" class="form-control <?php echo ($error_namaibu !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namaibu; ?>"> <span class="warning"><?php echo $error_namaibu ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="thnlhribu" class="col-sm-2 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="thnlhribu" id="thnlhribu" class="form-control <?php echo ($error_thnlhribu !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $thnlhribu; ?>"> <span class="warning"><?php echo $error_thnlhribu ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="pendibu" class="col-sm-2 col-form-label "> Pendidikan </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="pendibu">
                            <option value=""></option>
                            <option value="Tidak Sekolah"> Tidak Sekolah </option>
                            <option value="Putus SD"> Putus SD </option>
                            <option value="SD Sederajat"> SD Sederajat </option>
                            <option value="SMP Sederajat"> SMP Sederajat </option>
                            <option value="SMA Sederajat"> SMA Sederajat </option>
                            <option value="D1"> D1 </option>
                            <option value="D2"> D2 </option>
                            <option value="D3"> D3 </option>
                            <option value="D4/S1"> D4/S1 </option>
                            <option value="S2"> S2 </option>
                            <option value="S3"> S3 </option>
                            </select>
                            <span class="warning" ><?php echo $error_pendibu; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="pekeribu" class="col-sm-2 col-form-label "> Pekerjaan </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="pekeribu">
                            <option value=""></option>
                            <option value="Tidak Bekerja"> Tidak Bekerja </option>
                            <option value="Nelayan"> Nelayan </option>
                            <option value="Petani"> Petani </option>
                            <option value="Peternak"> Peternak </option>
                            <option value="PNS/TNI/POLRI"> PNS/TNI/POLRI </option>
                            <option value="ryawan swata"> Karyawan Swasta </option>
                            <option value="Pedagang Kecil"> Pedagang Kecil </option>
                            <option value="Pedagang Besar"> Pedagang Besar </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Wirausaha"> Wirausaha </option>
                            <option value="Buruh"> Buruh </option>
                            <option value="Pensiunan"> Pensiunan </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_pekeribu; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="gajiibu" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="gajiibu" value="< 500.000"> < 500.000 </label> <br>
                            <input type="radio" name="gajiibu" value="500.000 - 999.9999"> 500.000 - 999.9999 </label><br>
                            <input type="radio" name="gajiibu" value="1.000.000 - 1.999.999"> 1.000.000 - 1.999.999 </label><br>
                            <input type="radio" name="gajiibu" value="2.000.000 - 4.999.999"> 2.000.000 - 4.999.999 </label><br>
                            <input type="radio" name="gajiibu" value="5.0000.000 - 20.000.000"> 5.0000.000 - 20.000.000 </label> <br>
                            <input type="radio" name="gajiibu" value="20.000.000"> > 20.000.000 </label>
                            <span class="warning" ><?php echo $error_gajiibu; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="berkebkhususibu" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="berkebkhususibu">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra (A)"> Netra (A) </option>
                            <option value="Rungu (B)"> Rungu (B) </option>
                            <option value="Grahita Ringan (C)"> Grahita Ringan (C) </option>
                            <option value="Grahita Sedang (C1)"> Grahita Sedang (C1) </option>
                            <option value="Daksa Ringan (D)"> Daksa Ringan (D) </option>
                            <option value="Laras (E)"> Laras (E) </option>
                            <option value="Wicara (F)"> Wicara (F) </option>
                            <option value="Tuna Ganda (G)"> Tuna Ganda (G) </option>
                            <option value="Hiper Aktif (H)"> Hiper Aktif (H) </option>
                            <option value="Cerdas Istimewa (I)"> Cerdas Istimewa (I) </option>
                            <option value="Bakat Istimewa (J)"> Bakat Istimewa (J) </option>
                            <option value="Kesulitan Belajar (K)"> Kesulitan Belajar (K) </option>
                            <option value="Narkoba (N)"> Narkoba (N) </option>
                            <option value="Indigo (O)"> Indigo (O) </option>
                            <option value="Down Syndrom (P)"> Down Syndrom (P) </option>
                            <option value="Autis (Q)"> Autis (Q) </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_berkebkhususibu; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>