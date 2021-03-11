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


$sem=$_GET['s'];
preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];

if ($sem){
	
	$Klterm=$sem."_Klassentermine";
}

else{ 
  $Klterm="sv_Klassentermine";
}

if ($userID==1000000 and $KlasseInput<> 'Allgemeine Termine'){

 
        $isEntry = "Select * From $Klterm Where Klasse='$KlasseInput'";
        $result = mysqli_query($con, $isEntry);
        $events = array();


        while ($line2 = mysqli_fetch_array($result)) {
            $data[] = array(
               'id' => $line2['ID'],
				'lehrperson' => $line2['Lehrperson'],
				'title' => $line2['Eventname'],
				'start' => $line2['Start'],
				'end' => $line2['Ende'],
				'color' => $line2['Farbe'],				
				'zimmer' => $line2['Zimmer'],
				'klasse' => $line2['Klasse'],
			    'Beschreibung' => $line2['Beschreibung'],
				'lehrperson' => $line2['Lehrperson']);

        }
        echo json_encode($data);

}



if ($KlasseInput=='Allgemeine Termine'){

 
        $isEntry = "Select * From $Klterm where Klasse='allgemein' ";
        $result = mysqli_query($con, $isEntry);
        $events = array();


        while ($line2 = mysqli_fetch_array($result)) {
            $data[] = array(
               'id' => $line2['ID'],
				'lehrperson' => $line2['Lehrperson'],
				'title' => $line2['Eventname'],
				'start' => $line2['Start'],
				'end' => $line2['Ende'],
				'color' => $line2['Farbe'],				
				'zimmer' => $line2['Zimmer'],
				'klasse' => $line2['Klasse'],
			    'Beschreibung' => $line2['Beschreibung'],
				'lehrperson' => $line2['Lehrperson']);

        }
        echo json_encode($data);

}

 else{  
 $isEntryLP = "Select Modul1,Modul2,Modul3,Modul4,Modul5,Modul6,Modul7,Modul8,Modul9,Modul10,Modul11,Modul12 From sv_LernendeModule Where User_ID =$userID";
            $resultLP = mysqli_query($con, $isEntryLP);

            while ($line1 = mysqli_fetch_array($resultLP)) {
                for ($x = 1; $x <= 12; $x++) {
                    $Modul = "Modul" . "$x";

                    $wert = $line1[$Modul];
                
                    if ($wert <> "") {
                        $isEntry = "Select * From sv_Klassentermine Where Klasse='$wert' ";
                        $result = mysqli_query($con, $isEntry);


                        while ($line2 = mysqli_fetch_array($result)) {
                            $data[] = array(
                                'id' => $line2['ID'],
				'lehrperson' => $line2['Lehrperson'],
				'title' => $line2['Eventname'],
				'start' => $line2['Start'],
				'end' => $line2['Ende'],
				'color' => $line2['Farbe'],				
				'zimmer' => $line2['Zimmer'],
				'klasse' => $line2['Klasse'],
			    'Beschreibung' => $line2['Beschreibung'],
				'lehrperson' => $line2['Lehrperson']);
                 

                        }

                    }

                }  $isEntry = "Select * From sv_Klassentermine Where Klasse='allgemein' ";
                        $result = mysqli_query($con, $isEntry);


                        while ($line2 = mysqli_fetch_array($result)) {
                            $data[] = array(
                                'id' => $line2['ID'],
				'lehrperson' => $line2['Lehrperson'],
				'title' => $line2['Eventname'],
				'start' => $line2['Start'],
				'end' => $line2['Ende'],
				'color' => $line2['Farbe'],				
				'zimmer' => $line2['Zimmer'],
				'klasse' => $line2['Klasse'],
			    'Beschreibung' => $line2['Beschreibung'],
				'lehrperson' => $line2['Lehrperson']);
				
				
						}
                echo json_encode($data);
            }

        }



?>





