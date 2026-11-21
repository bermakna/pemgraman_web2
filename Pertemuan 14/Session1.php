
<?php

/****************************************************
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah
pertama tanpa spasi di depannya.
*****************************************************/

session_start();

if (isset($_POST['Login'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // periksa login
    if ($user == "rahadian" && $pass == "123") {

        // menciptakan session
        $_SESSION['login'] = $user;

        // menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";

        echo "<h2>Klik <a href='session2.php'>di sini
        (session2.php)</a>
        untuk menuju ke halaman pemeriksaan session</h2>";

    } else {

        echo "<h1>Login Gagal!</h1>";
        echo "<a href='session1.php'>Kembali Login</a>";

    }

} else {

?>

<html>
<head>
    <title>Login Session</title>
</head>

<body>

<h1>Login</h1>

<form action="" method="POST">

    Username:
    <input type="text" name="user"><br><br>

    Password:
    <input type="password" name="pass"><br><br>

    <input type="submit" name="Login" value="Login">

</form>

</body>
</html>

<?php
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Login here...</title>
</head>

<body>

    <form action="" method="post">

        <h2>Login Here...</h2>

        Username :
        <input type="text" name="user">
        <br><br>

        Password :
        <input type="password" name="pass">
        <br><br>

        <input type="submit" name="Login" value="Log In">

    </form>

</body>
</html>
