<?

include "db.php";
 $Kursnme=$_POST['q'];

$sem=$_POST['sem'];


$lkArch=$sem.'_LernenderKurs';
if ($sem==''){
$select='Select Nachname,Abwesenheiten from sv_LernenderKurs where KursID="';
 $sel1=$Kursnme;
		
$sel2= '" ';
 $isEntryUpd1 = $select.$sel1.$sel2;
}


else{
$select='Select Nachname, Abwesenheiten From ';
$sel=' Where KursID="';
 $sel1=$Kursnme;
		
$sel2= '" ';
 $isEntryUpd1 = $select.$lkArch.$sel.$sel1.$sel2;
}


$result1 = mysqli_query( $con, $isEntryUpd1 );


while ( $row = mysqli_fetch_array( $result1 ) ) {
  $output[] = array(
   'Abwesenheit'   => floatval($row["Abwesenheiten"]),
	  
	
	  'Nachname'  => $row["Nachname"],
	  
  );
}

echo json_encode($output);