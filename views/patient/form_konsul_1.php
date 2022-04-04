<?php require_once __DIR__ . '/../../templates/header.php'; ?>
<script>
    $(document).ready(function() {
        $('#cbox').on('change', function() {
            this.value = this.checked ? 1 : 0;
        }).change();
    });
</script>
<div class="container mt-4 mb-4">
    <div class="row justify-content-center text-center">
        <div class="col m-1 text-center ">
            <div class="form-obese p-4">
                <h2 class="p-3 m-3 txt-brown">Konsultasi Obesitas dan Diet Sehat</h2>
                <form action="" method="post">
                    <div class="form-obese form-floating p-2 m-3">
                        <input type="text" value="" name="judul" class="form-control" id="floatingInput" placeholder="Judul Konsultasi">
                        <label for="floatingInput">Judul Konsultasi</label>
                    </div>
                    <div class="form-obese form-floating p-2 m-3">
                        <textarea class="form-control" value="" name="isi" placeholder="Tuliskan Pertanyaan Disini.." id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Tuliskan Pertanyaan Disini . . . </label>
                    </div>
                    <div class="form-obese form-switch m-3 txt-brown text-start">
                        <input class="form-check-input" type="checkbox" name="checkbox" value="" id="cbox">
                        <label class="form-check-label m-1" for="cbox">Bagikan Publik?</label>
                    </div>
                    <div class="form-obese w-20 p-2 m-3 align-items-end">
                        <button name="submit" class="button p-2 btn login_submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php

if (isset($_POST['submit'])) {
    
    $query = "INSERT INTO qna(id_user,judul_qna,qna_text,qna_visibility,tag_qna) VALUES(
          '" . $_SESSION['id_user'] . "','" . $_POST['judul'] . "', '" 
          . htmlspecialchars($_POST['isi']) . "', '" . $_POST['checkbox'] . "','Obesitas & Diet Sehat');";

    if (mysqli_query($conn, $query)) {
        //header('Location:index.php');
        echo "Berhasil";
    } else {
        echo  $query;
        echo "terjadi kesalahan query";
    }
}


require_once __DIR__ . '/../../templates/footer.php'; ?>