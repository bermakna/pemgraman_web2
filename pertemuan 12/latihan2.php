<?php

$con = mysqli_connect("localhost", "root", "", "lat_dbase");


if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$sql = "DELETE FROM tbl_mhs WHERE LastName = 'Prabowo'";

if (mysqli_query($con, $sql)) {
    echo "Data berhasil dihapus (Delete Berhasil)!";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
?>