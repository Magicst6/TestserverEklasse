<?php
$con = @mysqli_connect('9b1qp.myd.infomaniak.com', "9b1qp_testEkl", "testEklasse!!");

if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
//echo 'Connected to MySQL';
$verbunden=mysqli_select_db($con, "9b1qp_testEklasse");
if($verbunden)
//echo('DB-Verbindung hergestellt! ');
    $dummy=1;
else
    die('DB-Verbindung fehlgeschlagen! ');

?>