<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>
<! Menentukan Form Input>
<form >
Masukkan Bilangan Pertama  :  <br>
<input type="text" name="A" size=10> <br>
Masukkan Bilangan Kedua :  <br>
<input type="text" name="B" size=10> <br>
<input type="submit" value="hitung">
</form>
<!membandingkan 2 buah bilangan yang diinput>
<?
  $a=$_post["A"];
  $b=$_post["B"];
  Function jumlah($A,$B)
    {    $jumlahbil=$A + $B;
       Return $jumlahbil;
 }
   Function kurang($A,$B)
    {       $kurangbil=$A - $B;
       Return $kurangbil;
    
    }


 }
   Function kali($A,$B)
    {
       $kalibil=$A * $B;
       Return $kalibil;
    }
   Function bagi($A,$B)
    {
       $bagibil=$A / $B;
       Return $bagibil;
    }
Echo "<br>";

