<?php

/**

 * Created by PhpStorm.

 * User: stefa

 * Date: 30.11.2018

 * Time: 16:39

 */





include 'db.php';





if(isset($_GET["q"]))

{
  $pruefungsname= $_GET['q'];

    $kursname= $_GET['kursname'];

    $start = $_GET['k'];

    $end = $_GET['g'];

    $kursid= $_GET['kursid'];

    $klasse = $_GET['klasse'];

    $zimmer = $_GET['zimmer'];

    $lehrperson= $_GET['l'];

    $farbe = "#".$_GET['color'];
	
	$gewichtung = $_GET['gewichtung'];

  


    $isEntryLPID= "Select ID From sv_Lehrpersonen Where Nachname='$lehrperson'";

    $resultLPID = mysqli_query($con, $isEntryLPID);



    while( $valueLPID= mysqli_fetch_array($resultLPID))

    {

        $lp_id=$valueLPID['ID'];

        

    }

    if ($lp_id) {

        $query = "INSERT INTO sv_Pruefungen (Pruefungsname,Kursname, Start, Ende, KursID, Klasse, Zimmer, Lehrperson, LP_ID, Farbe, Gewichtung)  VALUES ('$pruefungsname','$kursname', '$start', '$end','$kursid','$klasse','$zimmer','$lehrperson','$lp_id','$farbe','$gewichtung')";

        mysqli_query($con, $query);

        echo "Eintrag hinzugefügt!";

    }

    else {

        echo "Lehrperson nicht erkannt. Bitte Termin erneut eintragen!";

        echo '<meta http-equiv="refresh" content="0; url=https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/InsertUpdateFailed.php" />';





        

    }

}





?>





















































