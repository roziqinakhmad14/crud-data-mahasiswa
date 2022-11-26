<?php include('../layouts/header.php'); ?>

<title>CRUD | Mahasiswa</title>

<div class="content container-fluid text-center d-flex align-items-center justify-content-center">
    <div class="row">
        <h1 class="fs-1 fw-bold mb-4">Program CRUD Mahasiswa</h1>
        <div class="card shadow d-inline-block p-4 text-dark">
            <p>CRUD Mahasiswa | Pemrograman Komputer II</p>
            <a class="btn btn-dark" href="data-daftar-mahasiswa.php">Data Daftar Mahasiswa</a>&nbsp;
            <?php if(isset($_SESSION["admin"])) { ?>
                <a class="btn btn-dark" href="tambah-mahasiswa.php">Buat Data Mahasiswa</a>
            <?php }; ?>
            <?php if(isset($_GET["status"])) { ?>
            <br><br>
            <?php if($_GET["status"]) { ?>
                    <p class="text-success fw-bold">Data mahasiswa berhasil ditambahkan!</p>
            <?php } else { ?>
                    <p class="text-danger fw-bold">Data mahasiswa tidak berhasil ditambahkan!</p>
            <?php }}; ?>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php'); ?>