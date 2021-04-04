<?

include "db.php";
 $Kursnme=$_POST['q'];
//$Kursnme='KV1.kun.FS21';
$sem=$_POST['sem'];

if ($sem==''){
$select='Select SchuelerID from sv_NotenKurs where KursID="';
 $sel1=$Kursnme;
		
$sel2= '" Group by SchuelerID';
 $isEntryUpd1 = $select.$sel1.$sel2;
}
else{
	
	$NKArch=$sem.'_NotenKurs';
	
	$select="Select SchuelerID from $NKArch where KursID='$Kursnme' Group by SchuelerID";
 $isEntryUpd1 = $select;
}



$result1 = mysqli_query( $con, $isEntryUpd1 );

$f=-1;
while ( $row = mysqli_fetch_array( $result1 ) ) {
 $sid=$row['SchuelerID'];
	$select1="Select * from sv_LernenderKurs where SchuelerID='$sid' and KursID='$Kursnme'";
	
$result21 = mysqli_query( $con, $select1 );

while ( $row3 = mysqli_fetch_array( $result21 ) ) {
	$Nachname=$row3['Nachname'];
}
	
	$select="Select Note from sv_NotenKurs where SchuelerID='$sid' and KursID='$Kursnme'";
	
$result2 = mysqli_query( $con, $select );
$f++;
$a=0;
while ( $row1 = mysqli_fetch_array( $result2 ) ) {
	$a++;
	$output[$f]['Note'.$a] =    floatval($row1["Note"]);
	  
  
}
	$output[$f]['Nachname'] = $Nachname;
	  
  
}


echo json_encode($output);