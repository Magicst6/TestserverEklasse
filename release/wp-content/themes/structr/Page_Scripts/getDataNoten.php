<?

include "db.php";
 $value=$_POST['q'];
//$value=602;

$select='Select KursID from sv_NotenKurs where SchuelerID="';
 $sel1=$value;
		
$sel2= '" Group by KursID';
 $isEntryUpd1 = $select.$sel1.$sel2;
	



$result1 = mysqli_query( $con, $isEntryUpd1 );

$f=-1;
while ( $row = mysqli_fetch_array( $result1 ) ) {
 $kid=$row['KursID'];
	$select="Select Note from sv_NotenKurs where SchuelerID='$value' and KursID='$kid'";
	
$result2 = mysqli_query( $con, $select );
$f++;
$a=0;
while ( $row1 = mysqli_fetch_array( $result2 ) ) {
	$a++;
	$output[$f]['Note'.$a] =    floatval($row1["Note"]);
	  
  
}
	$output[$f]['KursID'] = $kid;
	  
  
}



echo json_encode($output);