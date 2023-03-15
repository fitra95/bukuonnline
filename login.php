<?php
session_start();
require 'koneksi.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $captcha = $_POST["captcha"];
    $recaptcha = $_POST["recaptcha"];


    if ($captcha != $recaptcha) {
        echo " <script> alert
        ('captcha tidak sama')
        document.location.href= 'login.php';
        </script>";
    } else {
        if (mysqli_num_rows($result) === 1) {
            // cek password
            $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                // set session
                $_SESSION['login'] = true;

                echo "<script>document.location.href='dashboard.php'</script>";
            }
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/styles.css">
    <link rel="short icon" href="bootstrap/assets/img/login.ico">
</head>

<body style="background-image: url(img/kel.jpg);">
    <form action="" method="post" name="form_login" id="form_login" style="margin-top: 120px;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg-mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">LOGIN</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="chapcha">
                                            <input type="text" class="captcha" name="captcha" id="capctha" value="<?= substr(uniqid(), 5); ?>">
                                            <br>
                                            <input type="text" name="recaptcha" id="recaptcha">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between my-4 mb-0">
                                        <a href="dashboard.php" class="btn btn-primary">Login</a>
                                    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copf;2022</div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>