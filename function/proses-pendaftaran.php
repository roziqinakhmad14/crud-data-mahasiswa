<?php 
require "../config.php";

if (isset($_POST["submit"])) {
    $nim = htmlspecialchars($_POST["nim"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $no_hp = htmlspecialchars($_POST["no_hp"]);
    
    $query = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$jenis_kelamin','$alamat','$no_hp')";
    
    mysqli_query($conn,$query);

    echo "
    <script>
        document.location.href='../pages/data-daftar-mahasiswa.php';
    </script>
    ";
}
?>