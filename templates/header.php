<?php
require_once __DIR__ . '/../config_path.php';
require_once __DIR__ . '/../db_connect.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/png" href="/final_project/assets/img/audio-waves.ico" sizes="400x400">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiberTalk</title>
    <link rel="stylesheet" href="/final_project/assets/css/bootstrap.min.css">
    <script src="/final_project/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/final_project/assets/js/jquery.min.js"></script>
    <script src="/final_project/assets/js/script.js"></script>
</head>

<body>
    <style>
        <?php include CSS . '/style.css' ?>
    </style>

    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light mb-2 p-2">
        <div class="container-fluid p-3">
            <a class="navbar-brand m-1" href="/final_project/index.php"><img src="/final_project/assets/img/header.png" width="250" height="60"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php
                    if (isset($_SESSION['id_user'])) {
                    ?>
                        <li class="nav-item m-3 dropdown">
                            <!-- <a href="/final_project/views/login.php" id="login" class="nav-link txt-ungu m-3 menu">Login</a> -->
                            <a class="nav-link dropdown-toggle txt-ungu m-1 p-1 menu" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Akun
                            </a>
                            <ul class="dropdown-menu p-2 dropdown-menu-right" aria-labelledby="navbarDarkDropdownMenuLink">
                                <?php if (strcmp($_SESSION['email_user'], 'dokter@fibertalk.com') == 0) { ?>
                                    <li><a class="dropdown-item p-2" href="/final_project/views/nutritionist/dashboard.php">Dashboard</a></li>
                                <?php } else { ?>
                                    <li><a class="dropdown-item p-2" href="/final_project/views/patient/dashboard.php">Dashboard</a></li>
                                <?php } ?>
                                <li><a class="dropdown-item p-2" href="/final_project/views/patient/setting.php">Pengaturan Akun</a></li>
                                <li><a class="dropdown-item p-2" href="/final_project/views/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a href="/final_project/views/login.php" id="login" class="nav-link txt-ungu m-3 menu">Login</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a href="/final_project/views/layanan.php" id="layanan" class="nav-link txt-ungu m-3 menu">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="/final_project/views/qna.php" id="qna" class="nav-link txt-ungu m-3 menu">QnA</a>
                    </li>
                    <li class="nav-item">
                        <a href="/final_project/views/artikel.php" id="artikel" class="nav-link txt-ungu m-3 menu">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a href="/final_project/views/tentang.php" id="tentang" class="nav-link txt-ungu m-3 menu">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>