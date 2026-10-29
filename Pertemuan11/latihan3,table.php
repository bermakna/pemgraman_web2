<?php
$link = mysqli_connect("localhost", "root", "", "lat_dbase") 
        or die("Not able to connect to server");


$sql = "CREATE TABLE tbl_mhs (
        mhsID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(mhsID),
        FirstName varchar(15),
        LastName varchar(15),
        Age int
)";


mysqli_query($link, $sql);

$input = mysqli_query($link, "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Anjar', 'Prabowo', 25)");

if ($input) {
    echo "Tabel tbl_mhs berhasil dibuat dan data berhasil di-input!";
}
?>