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
  $eventname= $_GET['q'];
 
    

    $start = $_GET['k'].":00";

    $end = $_GET['g'].":00";

    
 echo $end;
    $klasse = $_GET['klasse'];

    $zimmer = $_GET['zimmer'];

    $lehrperson= $_GET['l'];

    $farbe = "#".$_GET['color'];
	
	echo $farbe;
	
	echo $klasse;
	
	$beschreibung = $_GET['Beschreibung'];
	
	$datum=date("Y-m-d", strtotime($start));

	
    $isEntryLPID= "Select ID From sv_Lehrpersonen Where Nachname='$lehrperson'";

    $resultLPID = mysqli_query($con, $isEntryLPID);



    while( $valueLPID= mysqli_fetch_array($resultLPID))

    {

        $lp_id=$valueLPID['ID'];

        

    }

    if ($lp_id) {
		
		$isEntryNoten= "Select * From sv_Klassentermine Where Klasse='$klasse'";

    $resultNoten = mysqli_query($con, $isEntryNoten);


$isExisting=0;
    while( $valueN= mysqli_fetch_array($resultNoten))

    {
		$Name=$valueN['Eventname'];
		// echo $Name;
	 if ($Name==$eventname){
		
		 $isExisting=1;
	 }	
	}

		if (!$isExisting){
			

        $query = "INSERT INTO sv_Klassentermine (Eventname,Datum, Start, Ende,Klasse, Zimmer, Lehrperson, LP_ID, Farbe,Beschreibung)  VALUES ('$eventname','$datum','$start','$end','$klasse','$zimmer','$lehrperson','$lp_id','$farbe','$beschreibung')";
  echo $query;
       
			mysqli_query($con, $query);

        echo "Eintrag hinzugefügt!";
		}
		else {
			
			echo "Terminname bereits vorhanden!";
		}
    }

    else {

        echo "Lehrperson nicht erkannt. Bitte Termin erneut eintragen!";

        echo '<meta http-equiv="refresh" content="0; url=/wp-content/themes/structr/Page_Scripts/InsertUpdateFailed.php" />';





        

    }

}





?>





















































