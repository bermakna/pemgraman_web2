<?php
// 1. Koneksi ke server database dan memilih database "lat_dbase"
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

// Cek koneksi
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// 2. Mengambil data dari form dengan pengecekan isset agar tidak muncul warning
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname  = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$age       = isset($_POST['age']) ? $_POST['age'] : '';

// 3. Menyusun query SQL untuk memasukkan data inputan form ke tabel tbl_mhs
$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')";

// 4. Menjalankan query dan memeriksa apakah berhasil
if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

echo "1 record added";

// 5. Menutup koneksi database
mysqli_close($con);
?>
