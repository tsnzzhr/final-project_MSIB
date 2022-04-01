<?php require_once __DIR__ . '/../templates/header.php'; ?>

<div class="container">
    <h1>QnA oleh FiberTalk Fellows</h1>
    <?php
        $i = 1;
    $qna = mysqli_query($conn, "SELECT * FROM (qna q JOIN nutritionist n ON n.id = q.id_nutritionist) JOIN user u ON u.id = q.id_user WHERE qna_visibility = 1");
    while ($target = mysqli_fetch_object($qna)) {
    ?>
        <div class="row p-3">
            <div class="col text-center kolom-q p-4">
                <div style="min-width:800;" class="text-start p-3">
                    <h4><?= $target->judul_qna; ?></h4>
                    <p>Oleh : <?= $target->nama_user ?></p>
                    <p><?= $target->qna_text ?></p>
                </div>
                <button style="width:auto;" class="btn dash d-inline-flex p-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Jawaban Ekspertisi Disini!
                </button>

                <div class="m-3 collapse" id="collapseExample">
                    <div class="card txt-ungu card-body">
                        <p style="font-size:18px;" class="txt-bold"><?= $target->nama_nutritionist ?></p>
                        <p><?= $target->answer_text ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php }  $i += 1; ?>
</div>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>