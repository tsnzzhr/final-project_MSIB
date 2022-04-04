<?php require_once __DIR__ . '/../templates/header.php'; ?>


<div class="container mt-2 mb-4">
    <div class="row justify-content-center text-center">
        <div class="col-6 text-center">
            <div class="login p-4">
                <h2 class="p-3 m-2">Daftar</h2>
                <form action="" method="post">
                    <div class="login-form p-2 m-3">
                        <input type="text" name="nama" class="reg_input form-control" value="" placeholder="Nama">
                    </div>
                    <div class="login-form p-2 m-3">
                        <input type="email" name="email" class="reg_input form-control" value="" placeholder="Email">
                    </div>
                    <div class="login-form p-2 m-3">
                    <select name="gender" class="form-select" aria-label="Default select example">
                        <option value="">Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    </div>
                    <div class="login-form p-2 m-3">
                        <input type="password" name="password" id="password" class="reg_input form-control" value="" placeholder="Password">
                    </div>
                    <div class="login-form p-2 m-3">
                        <input type="password" class="reg_input form-control" id="confirm_password" value="" placeholder="Ulangi Password">
                    </div>
                    <div class="login-form p-2 m-3 text-start">
                        <p class="txt-smol text-white">*) Dengan membuat akun saya menyetujui dan menaati kebijakan yang berlaku</p>
                    </div>
                    <div class="login-form p-2 m-3 align-items-end">
                        <button type="submit" name="add" class="button p-2 btn login_submit">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var password = document.getElementById("password"),
        confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Maaf, Password Tidak Sesuai!");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>

<?php
if (isset($_POST['add'])) {
    $selectOption = $_POST['gender'];
    $query = "INSERT INTO user(nama_user, email_user, password_user, gender_user) VALUES(
          '" . $_POST['nama'] . "', '" . $_POST['email'] . "', MD5( '"
          . $_POST['password'] . "'),'". $selectOption ."')";

    if (mysqli_query($conn, $query) or die(mysqli_error($conn))) {
        echo "Success!";
    } else {
        echo "Failed!";
    }
}

require_once __DIR__ . '/../templates/footer.php'; ?>