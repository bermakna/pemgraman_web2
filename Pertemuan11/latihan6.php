<?php
// 1. Koneksi ke server database dan memilih database "lat_dbase"
$link = mysqli_connect("localhost", "root", "", "lat_dbase");

// Cek koneksi
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// 2. Menjalankan query untuk mengambil seluruh data dari tabel tbl_mhs
$hasil = mysqli_query($link, "SELECT * FROM tbl_mhs");

// 3. Menampilkan data per baris menggunakan mysqli_fetch_array (bisa diakses via nama kolom)
while ($data = mysqli_fetch_array($hasil)) {
    // Menampilkan berdasarkan nama kolom tabel: FirstName, LastName, Age
    echo "$data[FirstName] $data[LastName] - Umur: $data[Age] tahun<br>";
}

// 4. Menutup koneksi database
mysqli_close($link);
?>