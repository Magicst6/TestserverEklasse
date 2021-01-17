<?

include "db.php";
 $Kursnme=$_POST['q'];

$sem=$_POST['sem'];

if ($sem==''){
$select='Select Nachname, Note1,Note2, Note3,Note4, Note5, Note6, Note7,Note8, Note9 from sv_LernenderKurs where KursID="';
 $sel1=$Kursnme;
		
$sel2= '" ';
 $isEntryUpd1 = $select.$sel1.$sel2;
}
else{
$lkArch=$sem.'_LernenderKurs';

$select='Select Nachname, Note1, Note2,Note3, Note4, Note5, Note6, Note7, Note8, Note9 From ';
$sel=' Where KursID="';
$sel1=$Kursnme;
$sel2= '" ';
 $isEntryUpd1 = $select.$lkArch.$sel.$sel1.$sel2 ;
	

}


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
	
	  'Nachname'  => $row["Nachname"],
	  
  );
}

echo json_encode($output);