<?php 
include 'koneksi.php';
if(isset($_POST['submit'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $kelas = $_POST['kelas'];
    $tempat = $_POST['tempat'];
    $jk = $_POST['jk'];
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $masuk = $_POST['masuk'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO data_siswa VALUES('', '$nis', '$nama', '$tempat', '$tgl', '$jk', '$alamat', '$tahun_ajaran', '$kelas', '$masuk')";
    $kueri = mysqli_query($koneksi, $sql);
    if ($kueri) {
        echo "<script>alert('Berhasil disimpan')
                   document.location.href='home.php';
        </script>";
    }else{
        echo "Gagal Tersimpan";
        echo mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/assets/font-awesome/css/font-awesome.css">
</head>
<body>
<div class="container">
    <h2>Tambah Data Siswa</h2>
    <form action="" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="">No Absen :</label>
            <input type="text" class="form-control" name="nis">
        </div>
        <div class="form-group">
            <label for="">Nama :</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="">Tempat Lahir :</label>
            <input type="text" class="form-control" name="tempat">
        </div>
        <div class="form-group">
            <label for="">Tanggal Lahir :</label>
            <input type="date" class="form-control" name="tgl">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin :</label>
            <div class="radio">
                <label for=""><input type="radio" name="jk" value="Perempuan" selected>Perempuan</label>
                <label for=""><input type="radio" name="jk" value="Laki-Laki" selected>Laki-Laki</label>
            </div>
        </div>
        <div class="form-group">
            <label for="">Alamat :</label>
            <input type="text" class="form-control" name="alamat">
        </div>
        <div class="form-group">
            <label for="">Tahun Ajaran :</label>
            <input type="text" class="form-control" name="tahun_ajaran">
        </div>
        <div class="form-group">
            <label for="">Kelas :</label>
            <input type="text" class="form-control" name="kelas">
        </div>
        <div class="form-group">
            <label for="">Masuk Sekolah :</label>
            <input type="date" class="form-control" name="masuk">
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-primary" value="simpan">
        <a href="dashboard.php" class="btn btn-default">Batal</a>
    </form>
</div>



<script src="https://kit.fontawesome.com/0dbca4b6f9.js" crossorigin="anonymous"></script>
</body>
</html>