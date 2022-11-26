<?php 

session_start();

if (isset($_SESSION["admin"])) {
    session_unset();
    session_destroy();

    echo "
        <script>
            alert('Logout berhasil!');
            location.href='../index.php';
        </script>
    ";
} else {
    die("AKSES DILARANG");
}

?>