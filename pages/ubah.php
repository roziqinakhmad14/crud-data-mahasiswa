<title>CRUD | Ubah Data Mahasiswa</title>

<?php 

session_start();

if (isset($_SESSION["admin"])) {
    include('../layouts/header.php');

    require "../config.php";

    if (isset($_GET["nim"])) {
        $nim = $_GET["nim"];
    }
    
    if (isset($_POST["submit"])) {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $no_hp = $_POST["no_hp"];
    
        $query = "UPDATE mahasiswa SET
        nama = '$nama',
        jenis_kelamin = '$jenis_kelamin',
        alamat = '$alamat',
        no_hp = '$no_hp'
        WHERE nim = '$nim'";
    
        mysqli_query($conn,$query);
    
        echo "
        <script>
            alert('Data mahasiswa berhasil diubah!');
            document.location.href='data-daftar-mahasiswa.php';
        </script>
        ";
    }
} else {
    die("AKSES DILARANG");
}

?>

<div class="content container d-flex justify-content-center align-items-center">
    <div class="row text-center mt-5">
        <h1>Ubah Data Mahasiswa</h1>
        <div class="card shadow p-3 text-start">
            <form action="" method="POST">
                <fieldset>
                    <div class="my-2 d-none">
                        <label for="nim" class="form-label">NIM :</label>
                        <input type="number" name="nim" id="nim" class="form-control" value="<?= $_GET["nim"]; ?>" required>
                    </div>
                    <div class="my-2">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $_GET["nama"]; ?>" required>
                    </div>
                    <div class="my-2">
                        <label class="form-label">Jenis Kelamin :</label><br>
                        <?php if ($_GET["jenis_kelamin"]=="Laki-laki") { ?>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="jenis_kelamin" id="laki-laki" class="form-check-input" value="Laki-laki" checked>
                                <label for="laki-laki" class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="jenis_kelamin" id="perempuan" class="form-check-input" value="Perempuan">
                                <label for="perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        <?php } else { ?>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="jenis_kelamin" id="laki-laki" class="form-check-input" value="Laki-laki">
                                <label for="laki-laki" class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="jenis_kelamin" id="perempuan" class="form-check-input" value="Perempuan" checked>
                                <label for="perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="my-2">
                        <label for="alamat" class="form-label">Alamat :</label>
                        <textarea type="text" name="alamat" id="alamat" class="form-control" required><?= $_GET["alamat"]; ?></textarea>
                    </div>
                    <div class="my-2">
                        <label for="no_hp" class="form-label">No HP :</label>
                        <input type="number" name="no_hp" id="no_hp" class="form-control" value="<?= $_GET["no_hp"]; ?>" required>
                    </div>
                    <input name="submit" type="submit" class="btn btn-dark form-control mt-2" value="Ubah">
                </fieldset>
            </form>   
        </div>
    </div>
</div>

<?php include('../layouts/footer.php'); ?>