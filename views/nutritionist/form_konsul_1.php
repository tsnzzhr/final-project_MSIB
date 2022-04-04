<?php require_once __DIR__ . '/../../templates/header.php'; ?>

<div class="container mt-4 mb-4">
    <div class="wrapper">
        <div class="users container d-block">
            <div class="row">
                <h1>Daftar QnA Pasien Obesitas & Diet Sehat</h1>
                <br>
                <br>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>ID-QnA</th>
                            <th>Judul QnA</th>
                            <th>Pertanyaan</th>
                            <th>Nama Pasien</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $qna = mysqli_query($conn, "SELECT * FROM qna q JOIN user u ON u.id_user = q.id_user WHERE q.tag_qna = 'Obesitas & Diet Sehat'");
                        while ($target = mysqli_fetch_object($qna)) {
                        ?>
                            <tr>
                                <td><?= $target->id_qna; ?></td>
                                <td><?= $target->judul_qna; ?></td>
                                <td><?= $target->qna_text; ?></td>
                                <td><?= $target->nama_user; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col m-1">
                                            <button class="btn btn-add dash" data-bs-toggle="modal" data-bs-target="#reply">Balas</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="reply" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Balas QnA</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?= $target->id_qna; ?>">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="reply">Balasan</label>
                                                <textarea type="text" class="form-control" id="reply" name="reply" placeholder="" required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="update" class="btn dash">Update</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php 

if (isset($_POST['update'])) {
    $query = "UPDATE qna  
    SET answer_text = '" . $_POST['reply'] . "' WHERE id_qna = " . $_POST['id'];
    
    if (mysqli_query($conn, $query)) {
       echo "Berhasil";
    } else {
        echo "terjadi kesalahan query";
        echo $query;
    }
}


require_once __DIR__ . '/../../templates/footer.php'; 

?>