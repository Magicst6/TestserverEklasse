
<?php

include 'db.php';


$ID = $_GET[ 'k' ];
//$ID = $_GET[ 'k' ];
echo $ID;

$isEntry = "Delete From sv_Zimmer where id ='$ID'";
mysqli_query( $con, $isEntry );
?>

