<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .container-fluid {
        display: flex;
        justify-content: center;
    }
    .form{
        width: 400px;
        margin: 0 auto;
    }
</style>
<body>
<div class="container-fluid">
<div class="form mt-3">
    <form   method="POST" 
            action="form_nilai.php"
            >
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="text" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="select" name="matkul" class="custom-select">
                <option disabled selected>Pilih Mata Kuliah</option>
                <option value="Pemrograman Web 2">PEMWEB 2</option>
                <option value="Basis Data">BASIS DATA</option>
                <option value="UI/UX">UI/UX</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_praktikum" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
            <div class="col-8">
            <input id="nilai_praktikum" name="nilai_praktikum" placeholder="Nilai Tugas/Praktikum" type="number" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
<?php

    $proses = isset($_POST['proses']) ? $_POST['proses'] : "simpan";
    $nama = isset($_POST['nama']) ? $_POST['nama'] : "";
    $matkul = isset($_POST['matkul']) ? $_POST['matkul'] : "";
    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : "";
    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : "";
    $praktikum = isset($_POST['nilai_praktikum']) ? $_POST['nilai_praktikum'] : "";

$total = (0.3 * floatval($nilai_uts)) + (0.35 * floatval($nilai_uas)) + (0.35 * floatval($praktikum));

    if ($total > 55){
        $kelulusan = 'Lulus';
    }
    else{
        $kelulusan = 'Tidak Lulus';
    }

    switch(true){
        case($total >= 85 AND $total <= 100):
            $range = 'A';
            $predikat = 'Sangat Memuaskan';
            break;
        case($total >= 70 AND $total <= 84):
            $range = 'B';
            $predikat = 'Memuaskan';
            break;
        case($total >= 56 AND $total <= 69):
            $range = 'C';
            $predikat = 'Cukup';
            break;
        case($total >= 36 AND $total <= 55):
            $range = 'D';
            $predikat = 'Kurang';
            break;
        case($total >= 0 AND $total <= 35):
            $range = 'E';
            $predikat = 'Sangat Kurang';
            break;
        case($total >= 85 AND $total <= 100):
            $range = 'A';
            $predikat = 'Sangat Memuaskan';
            break;
        default:
            $range = 'I';
            $predikat = 'Tidak Ada';
            break;
    }

if(!empty($proses)){
    echo 'Proses :'.$proses . "<br>";
    echo "Nama Siswa   : " . htmlspecialchars($nama) . "<br>";
    echo "Nama Mata Kuliah   : " . htmlspecialchars($matkul) . "<br>";
    echo "Nilai UTS  : " . htmlspecialchars($nilai_uts) . "<br>";
    echo "Nilai UAS  : " . htmlspecialchars($nilai_uas) . "<br>";
    echo "Nilai Tugas/Praktikum  : " . htmlspecialchars($praktikum) . "<br>";
    echo "Status Kelulusan       : " . htmlspecialchars($kelulusan) . "<br>";
    echo "Grade       : " . htmlspecialchars($range) . "<br>";
    echo "Predikat       : " . htmlspecialchars($predikat) . "<br>";
}
?>
</body>
</html>