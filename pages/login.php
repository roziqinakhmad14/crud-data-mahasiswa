<?php include('../layouts/header.php') ?>

<title>Login</title>

<?php 

if (isset($_POST["login"])) {
    if ($_POST["username"]=="admin" && $_POST["password"]=="123") {
        echo "
        <script>
            alert('Welcome, admin!');
            location.href='../index.php';
        </script>
        ";

        session_start();
        $_SESSION["admin"] = "Admin";
    } else {
        echo "
        <script>
            alert('Username atau password Anda salah!');
        </script>
        ";
    }
}

?>

<div class="content container-fluid text-center d-flex align-items-center justify-content-center">
    <div class="row">
        <h1 class="text-center my-4">Login</h1>
        <div class="card shadow p-3">
            <form action="" method="POST">
                <fieldset>
                    <div class="my-2">
                        <label for="username" class="form-label">Username :</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="my-2">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <input type="submit" name="login" value="Login" class="btn btn-dark form-control mt-2">
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>