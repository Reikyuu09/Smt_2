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
                <option value="pweb2">PEMWEB 2</option>
                <option value="basdat">BASIS DATA</option>
                <option value="uiux">UI/UX</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_praktikum" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
            <div class="col-8">
            <input id="nilai_praktikum" name="nilai_praktikum" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
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


$total = (0.3 * $nilai_uts) + (0.35 * $nilai_uas) + (0.35 * $praktikum);

// <!-- SISWA DINYATAKAN LULUS JIKA NILAI TOTAL dengan presentase 30% UTS, 35% UAS dan
// TUGAS 35% melebihi 55, buatlah tampilan programnya !!. -->

function syaratLulus($nilai){
    $kelulusan = 'Lulus';
    if ($nilai > 55){
        $kelulusan = 'Lulus';
    }
    else{
        $kelulusan = 'Tidak Lulus';
    }
    return $kelulusan;
}

function rangeNilai($range){
    if ($total >= 85 AND $total <= 100){
        $range = "A";
    }
    elseif ($total >= 85 AND $total <= 100){
        $range = "A";
    }
    elseif ($total >= 70 AND $total <= 84){
        $range = "B";
    }
    elseif ($total >= 56 AND $total <= 69){
        $range = "C";
    }
    elseif ($total >= 36 AND $total <= 55){
        $range = "D";
    }
    elseif ($total >= 0 AND $total <= 35){
        $range = "E";
    }
}

if(!empty($proses)){
    echo 'Proses :'.$proses;
    echo "Nama Siswa   : " . htmlspecialchars($nama) . "<br>";
    echo "Nama Mata Kuliah   : " . htmlspecialchars($matkul) . "<br>";
    echo "Nilai UTS  : " . htmlspecialchars($nilai_uts) . "<br>";
    echo "Nilai UAS  : " . htmlspecialchars($nilai_uas) . "<br>";
    echo "Nilai Tugas/Praktikum  : " . htmlspecialchars($praktikum) . "<br>";
}
?>

<!-- No Range Nilai Grade
1 0 s/d 35 E
2 36 s/d 55 D
3 56 s/d 69 C
4 70 s/d 84 B
5 85 s/d 100 A
6 Kurang dari 0, atau lebih besar dari 100 I -->

<!-- Berdasarkan aturan predikat grade dibawah ini, cetaklah grade dari nilai ujian siswa
dengan menggunakan syntax SWITCH.
No Grade Predikat
1 E Sangat Kurang
2 D Kurang
3 C Cukup
4 B Memuaskan
5 A Sangat Memuaskan
6 I Tidak Ada -->
</body>
</html>