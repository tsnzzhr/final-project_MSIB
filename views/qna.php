<?php require_once __DIR__ . '/../templates/header.php'; ?>

<div class="container">
    <h1 class="txt-ungu">QnA oleh FiberTalk Fellows</h1>
    <?php
        $qna = mysqli_query($conn, "SELECT * FROM (qna q JOIN user u ON q.id_user = u.id_user) WHERE q.qna_visibility = 1");
        //echo  $qna or die(mysqli_error($conn));
        //$target = mysqli_fetch_object($qna);
        //if($target){
        //    echo "Berhasil";
        //}else{
        //   echo "Target Not Found!";
        //}
    while ($target  = mysqli_fetch_object($qna)) {
        
    ?>
        <div class="row p-3">
            <div class="col text-center kolom-q p-4">
                <div style="min-width:800;" class="text-start p-3">
                    <h4><?= $target->judul_qna; ?></h4>
                    <p>Oleh : <?= $target->nama_user; ?></p>
                    <p><?= $target->qna_text; ?></p>
                    <p class="tag text-center">Tag : <?= $target->tag_qna; ?></p>
                </div>
                <button style="width:auto;" class="btn dash d-inline-flex p-3" type="button" data-bs-toggle="collapse" data-bs-target="#pop" aria-expanded="false" aria-controls="collapseExample">
                    Jawaban Ekspertisi Disini!
                </button>

                <div class="m-3 collapse" id="pop">
                    <div class="card txt-ungu card-body">
                        <p style="font-size:18px;" class="txt-bold">Dokter</p>
                        <p><?= $target->answer_text; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>