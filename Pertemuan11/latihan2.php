<?php

$link = mysqli_connect("localhost", "root", "") 
        or die("Not able to connect to server");

$dbname = "lat_dbase";


$cek = mysqli_query($link, "CREATE DATABASE $dbname") 
       or die("Couldn't Create Database: $dbname");

if ($cek) {
    echo "Database $dbname berhasil dibuat";
}
?>