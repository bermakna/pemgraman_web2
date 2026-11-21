
<?php

session_start();

if (isset($_SESSION['login'])) {

    echo "<h1>Anda berhasil masuk ke halaman pemeriksaan session</h1>";

    echo "<h2>Selamat datang, " .
         htmlspecialchars($_SESSION['login']) .
         "</h2>";

} else {

    echo "<h1>Anda belum LOGIN!</h1>";

    echo "<a href='session1.php'>Silakan Login</a>";

}

?>



<?php

/***************************************************
Halaman ini merupakan contoh halaman pemeriksaan
session. Pemeriksaan session biasanya dilakukan jika
suatu halaman memiliki akses terbatas. Misalnya harus
login terlebih dahulu.
****************************************************/

session_start();

// pemeriksaan session
if (isset($_SESSION['login'])) {

    // jika sudah login

    // menampilkan isi session
    echo "<h1>Selamat Datang " . $_SESSION['login'] . "</h1>";

    echo "<h2>Anda berhasil masuk ke halaman session2.php</h2>";

    echo "<a href='logout.php'>Logout</a>";

} else {

    // jika belum login
    echo "<h1>Maaf, Anda belum LOGIN!</h1>";

    echo "<a href='session1.php'>Silakan Login di sini</a>";

}

?>



<?php

/***************************************************

Halaman ini merupakan contoh halaman pemeriksaan
session. Pemeriksaan session biasanya dilakukan jika
suatu halaman memiliki akses terbatas. Misalnya harus
login terlebih dahulu.

****************************************************/

session_start();

// pemeriksaan session

if (isset($_SESSION['login'])) {

    // jika sudah login

    // menampilkan isi session
    echo "<h1>Selamat Datang " . $_SESSION['login'] . "</h1>";

    echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah login</h2>";

    echo "<h2>Klik <a href='session3.php'>di sini
    (session3.php)</a> untuk LOGOUT</h2>";

} else {

    // session belum ada artinya belum login

    die("Anda belum login! Anda tidak berhak masuk ke halaman
    ini. Silahkan login <a href='session1.php'>di sini</a>");

}

?>
