<?php
echo "Bilangan Pertama : ";
echo $A;
echo "<br>";
echo "Bilangan Kedua : ";
echo $B;
echo "<br><br>";

echo "Hasil Penjumlahan 2 buah bilangan ";
echo "<br>";
$jumlahbil = jumlah($A, $B);
printf("Penjumlahan antara : %d + %d = %d", $A, $B, $jumlahbil);

echo "<br><br>";

echo "Hasil Pengurangan 2 buah bilangan ";
echo "<br>";
$kurangbil = kurang($A, $B);
printf("Pengurangan antara : %d - %d = %d", $A, $B, $kurangbil);

echo "<br><br>";

echo "Hasil Perkalian 2 buah bilangan ";
echo "<br>";
?>