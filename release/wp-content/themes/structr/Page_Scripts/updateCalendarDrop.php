<?php

/**

 * Created by PhpStorm.

 * User: stefa

 * Date: 30.11.2018

 * Time: 16:39

 */

include 'db.php';





if(isset($_GET["f"]))

{

    

    $start = $_GET['k'];

    $end = $_GET['g'];

    $id = $_GET['f'];

    $datum=date("Y-m-d", strtotime($start));

 $Klasse = $_GET['c'];

$Klasse = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
$klasseTab="sv_KurseAll".$Klasse;




        $query = "UPDATE $klasseTab  SET  Start='$start', Ende='$end' ,Datum='$datum'  WHERE id='$id'";

        mysqli_query($con, $query);

        echo "Eintrag geändert!";



}



?>