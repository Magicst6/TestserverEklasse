<?php
include 'db.php';

$Start =$_GET['s'];
$Ende =$_GET['e'];
$Name =$_GET['n'];
 $sems=$_GET['semshow'];

  $sem=$_GET['sem'];

  $sem1=$_GET['sem1'];
  if ($sem1){
	  $sem=$sem1;
  }
if (!$sem && !$sem1) $sem=$sems;
 $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
 $isEntry3 = "Select Semesterkuerzel From sv_SemesterArchiv";
    $result3 = mysqli_query($con, $isEntry3);
$isNotinArch=false;
    while ($value4 = mysqli_fetch_array($result3)) {
	
		$SemesterkuerzelArch = $value4['Semesterkuerzel'];
		if ($SemesterkuerzelArch==$sem ) $isinArch=true;
	}

	$semkl=$sem."_Klassentermine";
               
			if ($SemesterkuerzelDB==$sem || !$SemesterkuerzelDB){     
		   $isEntry= "Insert Into sv_Klassentermine (Eventname,Start,Ende,Kommentar,Klasse) VALUES ('$Name','$Start','$Ende','Ferien','allgemein') ";
			}
           else  if (!$isinArch){
					
		

$query40 = "DROP TABLE $semkl";

mysqli_query($con,$query40);



$query41 = "CREATE TABLE $semkl LIKE sv_Klassentermine";
				
mysqli_query($con,$query41);
			
$isEntry= "Insert Into $semkl (Eventname,Start,Ende,Kommentar,Klasse) VALUES ('$Name','$Start','$Ende','Ferien','allgemein') ";
				
			}
            else{
				$isEntry= "Insert Into $semkl (Eventname,Start,Ende,Kommentar,Klasse) VALUES ('$Name','$Start','$Ende','Ferien','allgemein') ";
			}

     
 mysqli_query($con,$isEntry);

        
?>
