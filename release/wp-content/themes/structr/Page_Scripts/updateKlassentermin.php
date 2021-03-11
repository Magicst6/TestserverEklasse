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


  $eventname= $_GET['q'];

    

    $start = $_GET['k'];

    $end = $_GET['g'];
	
	
	$id = $_GET['f'];

    $klasse = $_GET['klasse'];

    $zimmer = $_GET['zimmer'];

    $lehrperson= $_GET['l'];

    $farbe = "#".$_GET['color'];
	

	
	$beschreibung = $_GET['Beschreibung'];


   
	


    $datum=date("Y-m-d", strtotime($start));

 //  echo $datum;

    $isEntryLPID= "Select ID From sv_Lehrpersonen Where Nachname='$lehrperson'";

    $resultLPID = mysqli_query($con, $isEntryLPID);



    while( $valueLPID= mysqli_fetch_array($resultLPID))

    {

        $lp_id=$valueLPID['ID'];

    }



if ($lp_id) {
	
	 $isEntry4 = "SELECT  Eventname From sv_Klassentermine where Klasse='$Klasse' and id='$id'";
                $result4 = mysqli_query($con, $isEntry4);

                while ($value4 = mysqli_fetch_array($result4)) {
				 $NamePr = $value4['Pruefungsname'];
                   
				}

		$isEntryNoten= "Select * From sv_Klassentermine Where Klasse='$klasse'";

    $resultNoten = mysqli_query($con, $isEntryNoten);


$isExisting=0;
    while( $valueN= mysqli_fetch_array($resultNoten))

    {
		$Name=$valueN['Eventname'];
		// echo $Name;
	 if (($Name==$pruefungsname) and ($Name!=$NamePr) ){
		
		 $isExisting=1;
	 }	
	}

		if (!$isExisting){

    $query = "UPDATE sv_Klassentermine  SET Eventname='$eventname',  Datum='$datum',  Start='$start', Ende='$end' , Klasse='$klasse', Zimmer='$zimmer',Lehrperson= '$lehrperson', LP_ID='$lp_id', Farbe='$farbe',Beschreibung='$beschreibung'  WHERE id='$id'";

   // echo $query;
			mysqli_query($con, $query);

    echo "<script> alert('Eintrag geändert!');</script>";

	
echo "Termin editiert!";
		}
	else {
			echo "<script> alert('Prüfungsname bereits vorhanden!');</script>";
			echo "Prüfungsname bereits vorhanden!";
		}


}

else {

    echo "Lehrperson nicht erkannt. Bitte Termin erneut ändern!";



}



}



?>