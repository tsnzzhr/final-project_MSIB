<?php
    require_once __DIR__. '/../config_path.php';
    require_once __DIR__. '/../db_connect.php';
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
                    <li class="nav-item">
                        <a href="/final_project/views/login.php" id="login" class="nav-link txt-ungu m-3 menu">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>