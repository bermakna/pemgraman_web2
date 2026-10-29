<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE TABLE tbl_bukutamu (
    id int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id),
    nama varchar(50),
    email varchar(50),
    komentar text,
    tanggal timestamp DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($con, $sql)) {
    echo "Tabel tbl_bukutamu berhasil dibuat!";
} else {
    echo "Error membuat tabel: " . mysqli_error($con);
}

mysqli_close($con);
?>