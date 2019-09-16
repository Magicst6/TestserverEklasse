<?php
$con = @mysqli_connect('heimmart.mysql.db.internal', "heimmart_test", "Tab_12_3");

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
//echo 'Connected to MySQL';


$verbunden=mysqli_select_db($con, "heimmart_klingmobile");
if($verbunden)
echo '';
else
die('DB-Verbindung fehlgeschlagen! ');

    ?>