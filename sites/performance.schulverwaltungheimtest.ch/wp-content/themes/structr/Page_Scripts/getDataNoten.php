<?

include "db.php";
 $value=$_POST['q'];


$select='Select KursID, Note1,Note2, Note3,Note4, Note5, Note6, Note7,Note8, Note9 from sv_LernenderKurs where SchuelerID="';
 $sel1=$value;
		
$sel2= '" Group by KursID';
 $isEntryUpd1 = $select.$sel1.$sel2;
	



$result1 = mysqli_query( $con, $isEntryUpd1 );


while ( $row = mysqli_fetch_array( $result1 ) ) {
  $output[] = array(
   'Note1'   => floatval($row["Note1"]),
	  'Note2'   => floatval($row["Note2"]),
	  'Note3'   => floatval($row["Note3"]),
	  'Note4'   =>floatval($row["Note4"]),
	  'Note5'   => floatval($row["Note5"]),
	  'Note6'   => floatval($row["Note6"]),
	  'Note7'   => floatval($row["Note7"]),
	  'Note8'   => floatval($row["Note8"]),
	  'Note9'   => floatval($row["Note9"]),
	
	  'KursID'  => $row["KursID"],
	  
  );
}

echo json_encode($output);