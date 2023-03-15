<?php
include 'koneksi.php';
$id = $_GET["id"];
if (isset($_POST['submit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $kelas = $_POST['kelas'];
    $masuk = $_POST['masuk'];

    $sql = "UPDATE data_siswa SET nis='$nis', nama='$nama', tempat='$tempat', tgl='$tgl', jk='$jk', alamat='$alamat', tahun_ajaran='$tahun_ajaran', kelas='$kelas', masuk='$masuk' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    header("location: home.php");
}
$sql = "SELECT * FROM data_siswa WHERE id='$id'";
$kueri = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($kueri);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/assets/bootstrap/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">No Absen :</label>
                <input type="text" class="form-control" name="nis" value="<?= $data['nis']; ?>">
            </div>
            <div class="form-group">
                <label for="">Nama :</label>
                <input type="text" class="form-control" name="nama" value="<?= $data['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="">Tempat Lahir :</label>
                <input type="text" class="form-control" name="tempat" value="<?= $data['tempat']; ?>">
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir :</label>
                <input type="text" class="form-control" name="tgl" value="<?= $data['tgl']; ?>">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin :</label>
                <div class="radio">
                    <label for=""><input type="radio" name="jk" value="Perempuan" selected>Perempuan</label>
                    <label for=""><input type="radio" name="jk" value="Laki-Laki" selected>Laki-Laki</label>
                </div>
            </div>
            <div class="form-grup">
                <label for="">Alamat :</label>
                <input type="textarea" class="form-control" name="alamat" value="<?= $data['alamat']; ?>">
            </div>
            <div class="form-grup">
                <label for="">Tahun Ajaran :</label>
                <input type="text" class="form-control" name="tahun_ajaran" value="<?= $data['tahun_ajaran']; ?>">
            </div>
            <div class="form-grup">
                <label for="">Kelas :</label>
                <input type="text" class="form-control" name="kelas" value="<?= $data['kelas']; ?>">
            </div>
            <div class="form-grup">
                <label for="">Masuk :</label>
                <input type="text" class="form-control" name="masuk" value="<?= $data['masuk']; ?>">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" name="submit" value="Edit">
        </form>
    </div>





    <script src="https://kit.fontawesome.com/0dbca4b6f9.js" crossorigin="anonymous"></script>
</body>

</html>