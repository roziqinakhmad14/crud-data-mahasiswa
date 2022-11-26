<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../css/stylesheet.css">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="../index.php" class="navbar-brand fw-bold">DB MAHASISWA</a>
                <div class="collapse navbar-collapse">
                    <form action="../pages/data-daftar-mahasiswa.php" method="POST" class="col me-3">
                        <input type="text" name="keyword" id="search" class="form-control" placeholder="Search...">
                        <input type="submit" name="search" hidden>
                    </form>
                    <ul class="navbar-nav">
                        <?php if(isset($_SESSION["admin"])) { ?>
                            <li class="nav-item"><a href="../function/logout.php" class="btn btn-outline-light">Logout</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a href="../pages/login.php" class="btn btn-outline-light">Login</a></li>
                        <?php }; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <?php if(isset($_SESSION["admin"])) { ?>
            <p class="m-2">Logged in as : <?= $_SESSION["admin"]; ?></p>
        <?php } else { ?>
            <p class="m-2">Logged in as : Guest</p>
        <?php }; ?>
    </header>
    <main>