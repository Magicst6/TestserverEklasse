<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 30.11.2018
 * Time: 16:39
 */


//delete.php

if(isset($_GET["f"]))
{

    include 'db.php';
    $id = $_GET['f'];
	$Klasse = $_GET['c'];
$Klasse = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
$klasseTab="sv_KurseAll".$Klasse;



 $query = "DELETE from $klasseTab WHERE ID='$id'";

    mysqli_query($con,$query);
}

?>




















