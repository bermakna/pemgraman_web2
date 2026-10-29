<?php
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// 1. Tentukan jumlah data / record per halaman
$limit = 5;

// 2. Tentukan halaman aktif dari parameter URL (default halaman 1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page > 1) ? ($page * $limit) - $limit : 0;

// 3. Ambil data dengan batasan LIMIT dan OFFSET
$query = "SELECT * FROM tbl_bukutamu ORDER BY id DESC LIMIT $start, $limit";
$result = mysqli_query($con, $query);

// 4. Hitung total seluruh record untuk menentukan jumlah halaman
$result_count = mysqli_query($con, "SELECT COUNT(*) AS total FROM tbl_bukutamu");
$row_count = mysqli_fetch_assoc($result_count);
$total_records = $row_count['total'];
$total_pages = ceil($total_records / $limit);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku Tamu</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .pagination { margin-top: 20px; }
        .pagination a { padding: 8px 12px; margin-right: 5px; border: 1px solid #ddd; text-decoration: none; color: #333; }
        .pagination a.active { background-color: #4CAF50; color: white; border: 1px solid #4CAF50; }
    </style>
</head>
<body>

    <h2>Daftar Buku Tamu (5 Record per Halaman)</h2>
    <a href="buku_tamu.php">&laquo; Tambah Buku Tamu Baru</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>
        <?php 
        $no = $start + 1;
        while ($data = mysqli_fetch_array($result)) { 
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($data['nama']); ?></td>
            <td><?php echo htmlspecialchars($data['email']); ?></td>
            <td><?php echo htmlspecialchars($data['komentar']); ?></td>
            <td><?php echo $data['tanggal']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- Navigasi Pagination -->
    <div class="pagination">
        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
            <a href="tampil_tamu.php?page=<?php echo $i; ?>" class="<?php echo ($page == $i) ? 'active' : ''; ?>">
                <?php echo $i; ?>
            </a>
        <?php } ?>
    </div>

</body>
</html>

<?php
mysqli_close($con);
?>