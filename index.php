<?php require_once 'templates/header.php'; ?>

<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner txt-ungu">
            <div class="carousel-item text-center active">

                <img src="/final_project/assets/img/audio-waves.png" class="carou-img d-inline-block w-20">
                <div style="max-width:500px;" class="d-inline-block">
                    <h1 class="carou-title">Selamat Datang!</h1>
                    <p">Kenali kebutuhan gizi anda dengan berkonsultasi melalui FiberTalk!</p>
                </div>

            </div>
            <div class="carousel-item text-center">

                <img src="/final_project/assets/img/planet-earth.png" class="carou-img d-inline-block w-20">
                <div style="max-width:500px;" class="d-inline-block">
                    <h1 class="carou-title">Apa Saja Layanan Kami?</h1>
                    <p">Konsultasi secara temporer ataupun berkala untuk konsultasi gizi umum, ibu hamil dan menyusui serta program diet</p>
                </div>

            </div>
            <div class="carousel-item text-center">

                <img src="/final_project/assets/img/menu.png" class="carou-img d-inline-block w-20">
                <div style="max-width:500px;" class="d-inline-block">
                    <h1 class="carou-title">Keunggulan Kami..</h1>
                    <p">Ahli gizi unggulan yang terdaftar secara resmi dan responsif. Serta fitur-fitur yang lengkap dan mendukung sebagai kontrol konsultasi.</p>
                </div>

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row mt-4 p-3">
        <div class="col p-3 text-center txt-ungu">
            <h2>Tunggu Apalagi? Yuk Berkonsultasi Dengan Mendaftar Sekarang Juga!</h2>
            <a href="/final_project/views/register.php" class="button m-3 p-2 btn redirect">Daftar</a>
        </div>
    </div>
</div>
<?php require_once 'templates/footer.php'; ?>