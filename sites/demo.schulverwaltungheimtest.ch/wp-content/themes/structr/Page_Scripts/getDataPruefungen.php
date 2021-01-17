<?

include "db.php";
 $value=$_POST['q'];

$isEntryPr="Select Pruefungsname,Datum As Prüfungsdatum, Start,Ende,Zimmer,Gewichtung,KursID,Kommentar from sv_Pruefungen where KursID  in (Select KursID from sv_LernenderKurs where SchuelerID='$value')";
 $is=0;
$result=mysqli_query( $con, $isEntryPr );
 while( $line2= mysqli_fetch_array($result))
 {
	 $is=1;
 }



if ($is==1){

$selecty='Select Datum As Pruefungsdatum,Pruefungsname, Start,Ende,Zimmer,Gewichtung,KursID,Kommentar from sv_Pruefungen where KursID  in (Select KursID from sv_LernenderKurs where SchuelerID="';
 $sel1=$_POST['q'];
		
$sely2= '") order by Datum';
 $isEntryUpd2 = $selecty.$sel1.$sely2;
	
}
else{
	$selecty='Select Meldung from sv_text';

 $isEntryUpd2 = $selecty;
	
}



$result1 = mysqli_query( $con, $isEntryUpd2 );


while ( $row = mysqli_fetch_array( $result1 ) ) {
  $output[] = array(
   'Pruefungsdatum'   => $row["Pruefungsdatum"],
   'Pruefungsname'  => $row["Pruefungsname"],
	 'Start'   => $row["Start"],
   'Ende'  => $row["Ende"],
	   'Zimmer'   => $row["Zimmer"],
   'Gewichtung'  => intval($row["Gewichtung"]),
	  'KursID'  => $row["KursID"],
	   'Kommentar'   => $row["Kommentar"],
  );
}

echo json_encode($output);