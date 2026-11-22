
<?php

// Cek apakah tombol Submit ditekan
if (isset($_POST['Submit']) && $_POST['Submit'] == "Submit") {

    // Mengambil data dari form
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    // Validasi data kosong
    if (
        empty($id_mahasiswa) ||
        empty($nama) ||
        empty($jurusan) ||
        empty($alamat) ||
        empty($telepon)
    ) {
        echo "<script>
            alert('Data Harap Dilengkapi!');
            window.location='form_input.php';
        </script>";
        exit;
    }

    // Memanggil koneksi database
   include "koneksi-tutor.php";

    // Mengecek apakah NIM sudah digunakan
    $cek = mysqli_prepare(
        $koneksi,
        "SELECT id_mahasiswa FROM mahasiswa
         WHERE id_mahasiswa = ?"
    );

    mysqli_stmt_bind_param($cek, "s", $id_mahasiswa);
    mysqli_stmt_execute($cek);
    mysqli_stmt_store_result($cek);

    if (mysqli_stmt_num_rows($cek) > 0) {

        echo "<script>
            alert('NIM sudah dipakai! Silakan gunakan NIM lain.');
            window.location='form_input.php';
        </script>";
        exit;
    }

    mysqli_stmt_close($cek);

    // Menyimpan data mahasiswa
    $input = mysqli_prepare(
        $koneksi,
        "INSERT INTO mahasiswa
        (id_mahasiswa, nama, jurusan, alamat, telepon)
        VALUES (?, ?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $input,
        "sssss",
        $id_mahasiswa,
        $nama,
        $jurusan,
        $alamat,
        $telepon
    );

    $query_input = mysqli_stmt_execute($input);

    if ($query_input) {

        echo "<script>
            alert('Input Data Mahasiswa Berhasil!');
            window.location='form_input.php';
        </script>";

    } else {

        echo "<script>
            alert('Input Data Mahasiswa Gagal!');
            window.location='form_input.php';
        </script>";

    }

    mysqli_stmt_close($input);
    mysqli_close($koneksi);

} else {

    // Jika halaman dibuka tanpa mengirim form
    header("Location: form_input.php");
    exit;

}

?>
