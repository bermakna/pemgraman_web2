<?php
// 1. Koneksi ke server database dan memilih database "lat_dbase"
$link = mysqli_connect("localhost", "root", "", "lat_dbase");

// Cek koneksi
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// 2. Menjalankan query untuk mengambil seluruh data dari tabel tbl_mhs
$hasil = mysqli_query($link, "SELECT * FROM tbl_mhs");

// 3. Menghitung jumlah baris / record data yang ditemukan
$hit = mysqli_num_rows($hasil);

// 4. Menampilkan hasil jumlah record ke layar
echo "jumlah record $hit";

// 5. Menutup koneksi database
mysqli_close($link);
?>