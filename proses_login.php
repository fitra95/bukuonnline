<?php 
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$kueri =  mysqli_query($koneksi,$sql);
$hasil = mysqli_fetch_assoc($kueri);
if($hasil != null){
    if($password==$hasil['password']){
        $_SESSION['usernmae']c= $hasil;
        header("Location: dashboard.php");
    }else{
        header("Location: login.php");
    }
}
if ($_POST['captcha'] == $_SESSION['captcha_code']) {
        echo "ANDA BERHASIL LOGIN!";
}else{
        echo"ANDA GAGAL LOGIN!";
}
?>