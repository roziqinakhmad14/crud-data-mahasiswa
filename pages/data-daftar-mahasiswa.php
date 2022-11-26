<?php include('../layouts/header.php'); ?>

<title>CRUD | Data Daftar Mahasiswa</title>

<?php
require "../config.php";

if (isset($_POST["search"])) {
    $keyword = $_POST["keyword"];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%'";
} else {
    $query = "SELECT * FROM mahasiswa";
}

$mahasiswa = mysqli_query($conn,$query);
?>

<div class="content container-fluid text-center justify-content-center mt-5 p-4">
    <div class="row">
        <h1>Data Daftar Mahasiswa</h1>
        <div class="card shadow p-3">
            <table class="table table-hover shadow">
                <thead>
                    <tr class="table-dark">
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>JENIS KELAMIN</th>
                        <th class="col-5">ALAMAT</th>
                        <th>NOMOR HP</th>
                        <?php if(isset($_SESSION["admin"])) { ?>
                            <th>ACTION</th>
                        <?php }; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($mhs = mysqli_fetch_assoc($mahasiswa)) : ?>
                        <tr>
                            <td><?= $mhs["nim"]; ?></td>
                            <td><?= $mhs["nama"]; ?></td>
                            <td><?= $mhs["jenis_kelamin"]; ?></td>
                            <td><?= $mhs["alamat"]; ?></td>
                            <td><a href="https://wa.me/<?= $mhs["no_hp"]; ?>" target="_blank"><?= $mhs["no_hp"]; ?></a></td>
                            <?php if(isset($_SESSION["admin"])) { ?>
                                <td>
                                    <a class="fw-bold" href="ubah.php?nim=<?= $mhs["nim"]; ?>&nama=<?= $mhs["nama"]; ?>&jenis_kelamin=<?= $mhs["jenis_kelamin"]; ?>&alamat=<?= $mhs["alamat"]; ?>&no_hp=<?= $mhs["no_hp"]; ?>">Ubah</a> | 
                                    <a class="fw-bold" href="../function/hapus.php?nim=<?= $mhs["nim"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
                                </td>
                            <?php }; ?>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php if(isset($_SESSION["admin"])) { ?>
                <div><a class="btn btn-dark" href="tambah-mahasiswa.php"><i class="fas fa-plus"></i>&nbsp; Tambah baru</a></div>
            <?php }; ?>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php'); ?>