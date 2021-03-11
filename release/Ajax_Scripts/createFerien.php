<?php
include 'db.php';

$Start =$_GET['s'];
$Ende =$_GET['e'];
$Name =$_GET['n'];


  $sem=$_GET['sem'];

  $sem1=$_GET['sem1'];
  if ($sem1){
	  $sem=$sem1;
  }
 $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
	$semkl=$sem."_Klassentermine";

			if ($SemesterkuerzelDB==$sem || !$SemesterkuerzelDB){     
		   $isEntry= "Insert Into sv_Klassentermine (Eventname,Start,Ende,Kommentar,Klasse) VALUES ('$Name','$Start','$Ende','Ferien','allgemein') ";
			}
            else{
				$isEntry= "Insert Into $semkl (Eventname,Start,Ende,Kommentar,Klasse) VALUES ('$Name','$Start','$Ende','Ferien','allgemein') ";
			}

 mysqli_query($con,$isEntry);

        
?>
