
<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_mahasiswa2"
);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>
