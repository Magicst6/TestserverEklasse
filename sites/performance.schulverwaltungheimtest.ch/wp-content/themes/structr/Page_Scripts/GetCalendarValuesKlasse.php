<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 30.11.2018
 * Time: 12:09
 */
include 'db.php';
//$Lehrer=$_GET['lehrer'];
//preg_match("/:(.*)/", $Lehrer, $output_array);
//$Lehrer=$output_array[1];

$y=0;
$userID=$_GET['q'];
$KlasseInput=$_GET['k'];
$Lehrer=$_GET['l'];

preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];


    if ($KlasseInput <> "" and $Lehrer == "") {
		
			$Klasse = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $KlasseInput));
					
$klasseTab="sv_KurseAll".$Klasse;
        $isEntry = "Select * From $klasseTab Where Klasse='$KlasseInput'";
        $result = mysqli_query($con, $isEntry);
        $events = array();


        while ($line2 = mysqli_fetch_array($result)) {
            $data[] = array(
                'id' => $line2['ID'],
                'title' => $line2['Kursname'] . " Klasse: " . $line2['Klasse'] . " Zimmer: " . $line2['Zimmer'],
                'start' => $line2['Start'],
                'end' => $line2['Ende'],
                'color' => $line2['Farbe'],
                'zimmer' => $line2['Zimmer'],
                'klasse' => $line2['Klasse'],
                'kursname' => $line2['Kursname'],
                'kursid' => $line2['KursID'],
                'lehrperson' => $line2['Lehrperson']);


        }
        echo json_encode($data);

    }
    
    



?>





