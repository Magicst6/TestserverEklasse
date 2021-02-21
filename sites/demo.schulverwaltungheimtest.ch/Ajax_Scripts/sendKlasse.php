<?
include 'db.php';
$Lehrperson=  $_GET['k'];
$Klasse=  $_GET['q'];
	
	//echo $Lehrperson;
	 preg_match("/:(.*)/", $Lehrperson, $output_array);
	
	$LID=$output_array[1];
	
	//echo $LID;
	$isKlasse=0;
if ($Lehrperson==''){
			$querydel = "Delete From sv_Klassenlehrer where Klasse='$Klasse'";
            mysqli_query($con, $querydel);
			
		}
	
	else{

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

	}
		

$isEntry4= "Select *  From sv_Lehrpersonen ";

    $result4 = mysqli_query($con, $isEntry4);
    
	while ($row4= mysqli_fetch_array($result4)) {
	$userid1= $row4['User_ID'];
		$user = get_user_by('id', $userid1);
		$user->remove_role('klassenleiter');
	}
	
		
$isEntry5= "Select *  From sv_Klassenlehrer  ";

    $result5 = mysqli_query($con, $isEntry5);
    
	while ($row5= mysqli_fetch_array($result5)) {
	$Lid1= $row5['LP_ID'];
	




$isEntry3= "Select *  From sv_Lehrpersonen where ID='$Lid1' ";

    $result3 = mysqli_query($con, $isEntry3);
    
	while ($row3= mysqli_fetch_array($result3)) {
	$userid= $row3['User_ID'];
	

		
	$user = get_user_by('id', $userid);

$user->add_role('klassenleiter');	
		
	}
	
	}
echo 'Klassenleiter wurde gewechselt auf '.$Lehrperson;
?>