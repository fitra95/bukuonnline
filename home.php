<?php
include 'koneksi.php';
$sql = "SELECT * FROM data_siswa";
$kueri = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/assets/bootstrap/bootstrap.min.css">
    <script src="assets/bootstrap/bootstrap.min.js"></script>
    <script src="assets/bootstrap/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 style="font-family: Roboto;">Data Siswa</h1>
        <br><br>
        <table class="table table-condensed table-hover">
            <thead>
                <tr class="success">
                    <th width="5%">No</th>
                    <th width="10%">Nama</th>
                    <th width="5%">Tempat</th>
                    <th width="8%">Tanggal</th>
                    <th width="7%">Jk</th>
                    <th width="10%">Alamat</th>
                    <th width="8%">Tahun</th>
                    <th width="7%">Kelas</th>
                    <th width="10%">Masuk Sekolah</th>
                    <th colspan="2" width="10%">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kueri as $data) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['tempat']; ?></td>
                        <td><?= $data['tgl']; ?></td>
                        <td><?= $data['jk']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['tahun_ajaran']; ?></td>
                        <td><?= $data['kelas']; ?></td>
                        <td><?= $data['masuk']; ?></td>
                        <td><a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-primary"><span class="fa fa-pencil-square-o">Edit</span></a></td>
                        <td><a href="hapus.php?id=<?= $data['id'] ?>" class="btn btn-danger"><span class="fa fa-trash-square-o">Hapus</span></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>