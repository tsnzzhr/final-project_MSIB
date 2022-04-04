<?php require_once __DIR__ . '/../../templates/header.php';

$target = mysqli_query($conn, "SELECT * FROM user WHERE id_user = " . $_SESSION['id_user']);
$target = mysqli_fetch_object($target);

?>

<div class="container">
    <h1 class="mb-3 txt-ungu">Pengaturan Akun</h1>

    <div class="row m-2 p-3">
        <div class="col">
            <img src="/final_project/assets/img/teen.png" width="300" height="300">
        </div>

        <div class="col">
            <form>
                <fieldset disabled>
                    <h2 class="txt-bold txt-ungu">Data Diri</h2>
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder=<?= $target->nama_user ?>>
                    </div>
                    <div class="mb-3">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" placeholder=<?= $target->email_user ?>>
                    </div>
                    <div class="mb-3">
                        <label for="wa">Nomor Whatsapp</label>
                        <input type="text" class="form-control" id="wa" placeholder=<?= $target->no_WA_user ?>>
                    </div>
                    <div class="mb-3">
                        <label for="gender">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="gender" placeholder=<?= $target->gender_user ?>>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="col p-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn m-2 dash" data-bs-toggle="modal" data-bs-target="#pwd">
                Ganti Password
            </button>
            <button type="button" class="btn m-2 dash" data-bs-toggle="modal" data-bs-target="#dataDiri">
                Edit Data Diri
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pwd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ganti Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="pwd">Password Baru</label>
                            <input type="password" class="form-control" id="pwd" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="re-pwd">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" id="re-pwd" placeholder="" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dash">Update</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="dataDiri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ganti Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>*) Alamat Email dan Jenis Kelamin tidak dapat berubah.</p>
                        <div class="mb-3">
                            <label for="nama_baru">Nama</label>
                            <input type="text" class="form-control" id="nama_baru" placeholder=<?= $target->nama_user?>>
                        </div>
                        <div class="mb-3">
                            <label for="no_WA_baru">Nomor Whatsapp</label>
                            <input type="text" class="form-control" id="wa_baru" placeholder="<?= $target->no_WA_user?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dash">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../../templates/footer.php'; ?>