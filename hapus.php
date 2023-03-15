<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM data_siswa WHERE id='$id'";
$kueri = mysqli_query($koneksi, $sql);
if ($kueri) {
    echo '<script>document.location.href="home.php"</script>';
}
