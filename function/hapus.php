<?php 

session_start();

if(isset($_SESSION["admin"])) {
    require "../config.php";
    
    $nim = $_GET["nim"];

    $query = "DELETE FROM mahasiswa WHERE nim = $nim";
    mysqli_query($conn,$query);

    echo "
    <script>
        document.location.href='../pages/data-daftar-mahasiswa.php';
    </script>
    ";
}
?>