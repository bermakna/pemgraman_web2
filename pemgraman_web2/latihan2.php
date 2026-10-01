<html>
<head>
    <title>Contoh Penggunaan IF</title>
</head>
<body>

    <form method="GET" action="">
        Besar Pembelian : <br><br>
        <input type="text" name="total_beli"><br><br>
        <input type="submit" value="Tentukan Diskon">
    </form>

    <?php
    
    if (isset($_GET['total_beli']) && $_GET['total_beli'] !== '') {
        
        $total_beli = intval($_GET['total_beli']);
        $diskon = 0;

    
        if ($total_beli >= 200000) {
            
        } else if ($total_beli >= 100000) {
            $diskon = 0.05; 
        } else {
            $diskon = 0.01; 
        }

        
        $nominal_diskon = $diskon * $total_beli;

    
        $pembayaran = $total_beli - $nominal_diskon;

        
        printf("Diskon = %s <br>\n", $nominal_diskon);
        printf("Pembayaran = %s <br>\n", $pembayaran);
    }
    ?>
</body>
</html>