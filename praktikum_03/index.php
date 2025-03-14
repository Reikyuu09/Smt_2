<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Selamat Datang di Perpustakaan STT NF</h2>
        <h5>Silahkan Isi Buku Tamu di Bawah Ini</h5>
        <form method="POST"
                action="kunjungan.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama" name="fullname" type="text" class="form-control" aria-describedby="namaHelpBlock" required="required"> 
                <span id="namaHelpBlock" class="form-text text-muted">Isi Dengan Nama Lengka Kamu</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" type="text" class="form-control" aria-describedby="emailHelpBlock" required="required"> 
                <span id="emailHelpBlock" class="form-text text-muted">Isi Dengan Email Kamu</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="keperluan" class="col-4 col-form-label">Keperuan</label> 
                <div class="col-8">
                <textarea id="keperluan" name="message" cols="40" rows="5" required="required" class="form-control" aria-describedby="keperluanHelpBlock"></textarea> 
                <span id="keperluanHelpBlock" class="form-text text-muted">Isi Keperluan Kamu</span>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>