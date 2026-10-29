<!DOCTYPE html>
<html>
<head>
    <title>Form Buku Tamu</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 100px; }
        input[type="text"], input[type="email"], textarea { width: 300px; padding: 5px; }
    </style>
</head>
<body>

    <h2>Buku Tamu (Guest Book)</h2>
    <form action="simpan_tamu.php" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required />
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required />
        </div>
        <div class="form-group">
            <label>Komentar:</label>
            <textarea name="komentar" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label></label>
            <input type="submit" value="Kirim Pesan" />
        </div>
    </form>
    
    <p><a href="tampil_tamu.php">Lihat Daftar Buku Tamu</a></p>

</body>
</html>