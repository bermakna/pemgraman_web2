<html>
<head>
    <title>Penggunaan Switch - Case</title>
</head>
<body>
    Hari ini : 
    <?php
    
    $nama_hari = date("l");

    switch ($nama_hari) {
        case "Sunday":
            print("Minggu <br>");
            print("Waktu untuk istirahat");
            break;
        case "Monday":
            print("Senin <br>");
            print("Meeting awal minggu jam 08.00");
            break;
        case "Tuesday":
            print("Selasa <br>");
            print("Pembukaan Workshop Diklat");
            break;
        case "Wednesday":
            print("Rabu <br>");
            print("Hari produktif untuk ngoding");
            break;
        case "Thursday":
            print("Kamis <br>");
            print("Evaluasi progres mingguan");
            break;
        case "Friday":
            print("Jumat <br>");
            print("Kerja bakti dan persiapan weekend");
            break;
        case "Saturday":
            print("Sabtu <br>");
            print("Waktu santai atau libur");
            break;
        default:
            print("Hari tidak dikenali");
            break;
    }
    ?>
</body>
</html>