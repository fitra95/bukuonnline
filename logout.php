<?php 
session_start();
session_destroy();
echo"<meta http-equiv='refresh' content='1'; url='index.php'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <script>
        alert('Anda telah keluar');
        document.location.href='login.php';
    </script>
</body>
</html>