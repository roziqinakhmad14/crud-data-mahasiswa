<?php 

session_start();

if (isset($_SESSION["admin"])) {
    include('../layouts/header.php'); 
} else {
    die("AKSES DILARANG");
}

?>

<title>CRUD | Tambah Data Mahasiswa</title>

<div class="content container d-flex justify-content-center align-items-center">
    <div class="row text-center mt-5">
        <h1>Tambah Data Mahasiswa</h1>
        <div class="card shadow p-3 text-start">
            <form action="../function/proses-pendaftaran.php" method="POST">
                <fieldset>
                    <div class="my-2">
                        <label for="nim" class="form-label">NIM :</label>
                        <input type="number" name="nim" id="nim" class="form-control" required>
                    </div>
                    <div class="my-2">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="my-2">
                        <label class="form-label">Jenis Kelamin :</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="jenis_kelamin" id="laki-laki" class="form-check-input" value="Laki-laki">
                            <label for="laki-laki" class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="jenis_kelamin" id="perempuan" class="form-check-input" value="Perempuan">
                            <label for="perempuan" class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="alamat" class="form-label">Alamat :</label>
                        <textarea type="text" name="alamat" id="alamat" class="form-control" required></textarea>
                    </div>
                    <div class="my-2">
                        <label for="no_hp" class="form-label">No HP :</label>
                        <input type="number" name="no_hp" id="no_hp" class="form-control" required>
                    </div>
                    <input name="submit" type="submit" class="btn btn-dark form-control mt-2" value="Tambah">
                </fieldset>
            </form>   
        </div>
    </div>
</div>

<?php include('../layouts/footer.php'); ?>