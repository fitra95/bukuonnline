<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short icon" href="bootstrap/assets/img/student.ico">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/metisMenu.min.css">
    <link rel="stylesheet" href="bootstrap/css/timeline.css">
    <link rel="stylesheet" href="bootstrap/css/startmin.css">
    <link rel="stylesheet" href="bootstrap/css/morris.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
    <style>
        .navbar-brand{
            color: white;
        }
        .navbar-brand:hover{
            color: white;
        }
        .navbar{
            background-color: black;
            height: 50px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.php">Sistem Informasi Data Siswa</a>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
                <span class="sf-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"><i class="fa fa-home fa-fw"></i></a></li>
            </ul>
            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i>Hi, Admin</a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>
                        <li class="padding">
                            <a href="dashboard.php" class="active"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        <li class="padding">
                            <a href="#"><i class="fa fa-file fa-fw"></i>Olah Data <span class="fa-arrow"></span></a>
                        </li>
                        <ul class="nav nav-second-level">
                            <li class="padding">
                                <a href="home.php"><span class="fa fa-file-text-o"></span>Data Siswa</a>
                                <a href="tambah.php"><span class="fa fa-plus"></span>Tambah Data Siswa</a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="contaier-fluid">
                <div class="row" style="margin-bottom: 100px;">
                    <div class="col-lg-12">

                    </div>
                </div>
                <?php 
                include "link.php";
                ?>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/metisMenu.min.js"></script>
    <script src="bootstrap/js/startmin.js"></script>
    <script src="https://kit.fontawesome.com/0dbca4b6f9.js" crossorigin="anonymous"></script>
</body>
</html>