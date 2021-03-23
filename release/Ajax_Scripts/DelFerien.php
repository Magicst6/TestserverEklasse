

<?php

include 'db.php';


$ID = $_GET[ 'k' ];
//$ID = $_GET[ 'k' ];

echo "";

 $sems=$_GET['semshow'];
  $sem=$_GET['sem'];

  $sem1=$_GET['sem1'];
  if ($sem1){
	  $sem=$sem1;
  }
 if (!$sem1 && !$sem) $sem=$sems;
 $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
	$semkl=$sem."_Klassentermine";

			if ($SemesterkuerzelDB==$sem || !$SemesterkuerzelDB){     
		   $isEntry = "Delete From sv_Klassentermine where ID ='$ID'";
			}
            else{
				$isEntry = "Delete From $semkl where ID ='$ID'";
			}


mysqli_query( $con, $isEntry );
?>

