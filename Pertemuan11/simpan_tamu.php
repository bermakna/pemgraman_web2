<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$komentar = isset($_POST['komentar']) ? $_POST['komentar'] : '';

$sql = "INSERT INTO tbl_bukutamu (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";

if (mysqli_query($con, $sql)) {
    echo "Pesan buku tamu berhasil disimpan! <br><br>";
    echo "<a href='buku_tamu.php'>Kembali ke Form</a> | ";
    echo "<a href='tampil_tamu.php'>Lihat Buku Tamu</a>";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>