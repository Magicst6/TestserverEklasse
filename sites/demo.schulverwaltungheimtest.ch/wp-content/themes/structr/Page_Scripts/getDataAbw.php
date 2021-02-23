<?

include "db.php";
 $value=$_POST['q'];

if ($value){

$select='Select KursID,Abwesenheiten from sv_LernenderKurs where SchuelerID="';
 $sel1=$value;
		
$sel2= '" Group by KursID';
 $isEntryUpd1 = $select.$sel1.$sel2;
}

else {
	$select="Select KursID,Abwesenheiten from sv_LernenderKurs";
	 $isEntryUpd1 = $select;
}



$result1 = mysqli_query( $con, $isEntryUpd1 );


while ( $row = mysqli_fetch_array( $result1 ) ) {
  $output[] = array(
   'Abwesenheit'   => floatval($row["Abwesenheiten"]),
	  
	
	  'KursID'  => $row["KursID"],
	  
  );
}

echo json_encode($output);