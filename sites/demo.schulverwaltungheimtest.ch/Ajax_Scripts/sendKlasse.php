<?
include 'db.php';
$Lehrperson=  $_GET['k'];
$Klasse=  $_GET['q'];
	
	//echo $Lehrperson;
	 preg_match("/:(.*)/", $Lehrperson, $output_array);
	
	$LID=$output_array[1];
	
	//echo $LID;
	$isKlasse=0;		
  $isEntry2= "Select *  From sv_Klassenlehrer where Klasse='$Klasse' ";

    $result2 = mysqli_query($con, $isEntry2);
    
	while ($row2= mysqli_fetch_array($result2)) {
	$isKlasse=true;
	}
	if (!$isKlasse){
	
		$query1 = "INSERT INTO sv_Klassenlehrer (Klasse,LP_ID)  VALUES ('$Klasse', '$LID')";
            mysqli_query($con, $query1);
	}
      else {
		  $q5 = "Update sv_Klassenlehrer Set LP_ID='$LID' Where Klasse='$Klasse' ";
                mysqli_query($con, $q5);
	  }
		
			
		
		
		
	
	
 
echo 'Klassenleiter wurde gewechselt auf '.$Lehrperson;
?>