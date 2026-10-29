<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$insert1 = mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Karina', 'Suwandi', '29')");

$insert2 = mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Glenn', 'Gandari', '32')");

if ($insert1 && $insert2) {
    echo "Data baru berhasil disisipkan ke dalam tabel!";
}

mysqli_close($con);
?>