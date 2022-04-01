<?php
    ob_start();
    require_once __DIR__ . '/../templates/header.php';

        
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

        if (mysqli_query($conn,$query) && strcmp($email,'dokter@fibertalk.com') != 0) {
            header("location:patient/dashboard.php");
        } else {
            header("location:nutritionist/dashboard.php");
        }
    }

?>

<div class="container mt-4 mb-4">
    <div class="row justify-content-center text-center">
        <div class="col-6 m-1 text-center ">
            <div class="login p-4">
                <h2 class="p-3 m-3">Login</h2>
                <form action="" method="post">
                    <div class="login-form p-2 m-3">
                        <input type="email" value="" name="email" class="reg_input form-control" placeholder="Email">
                    </div>
                    <div class="login-form p-2 m-3">
                        <input type="password" value="" name="password" class="reg_input form-control" placeholder="Password">
                    </div>
                    <div class="login-form p-2 m-3 text-end">
                        <a class="text-white" href="#">Lupa Password?</a>
                    </div>
                    <div class="login-form p-2 m-3 text-start">
                        <p class="txt-brown">Belum memiliki akun? <a class="text-white" href="/final_project/views/register.php">Daftar Disini!</a></p>
                    </div>
                    <div class="login-form p-2 m-3 align-items-end">
                        <button name="submit" class="button p-2 btn login_submit">
                            Masuk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../templates/footer.php'; 
ob_end_flush();?>