<?


include 'db.php';
 $isEntry0 = "Select * From sv_LernenderKurs group by KursID  ";




$result0 = mysqli_query( $con, $isEntry0 );


while ( $line0 = mysqli_fetch_array( $result0 ) ) {

 $Kursname=$line0['KursID'];
	
	//echo $Kursname;

   $isEntry = "Select * From sv_AbwesenheitenKompakt where Kursname='$Kursname'  Group by SchuelerID order by Nachname asc ";




$result = mysqli_query( $con, $isEntry );
$events = array();

while ( $line2 = mysqli_fetch_array( $result ) ) {
	$ID = $line2[ 'SchuelerID' ];
	$Vorname = $line2[ 'Vorname' ];
	$Nachname = $line2[ 'Nachname' ];
    
        $isEntry1 = "Select * From sv_AbwesenheitenKompakt where SchuelerID=$ID and Kursname ='$Kursname' Order by Datum asc ";

   

	$result1 = mysqli_query( $con, $isEntry1 );
	$abwges = 0;
	$y = 0;
	$data2 = null;
	while ( $line1 = mysqli_fetch_array( $result1 ) ) {

		${'datac'.$y} = array(
			'Klasse' . $y => $line1[ 'Klasse' ],
			'Datum' . $y => $line1[ 'Datum' ],
			'Kommentar' . $y => $line1[ 'Kommentar' ],
			'KommentVer' . $y => $line1[ 'KommentarVerwaltung' ],
			'Abwesenheitsdauer' . $y => $line1[ 'Abwesenheitsdauer' ],
			'Lehrer' . $y => $line1[ 'Lehrer' ] );
		if ( $y == 0 ) {
			$data2 = $ {
				'datac' . $y
			};
		} else {

			$data2 = array_merge( $data2, $ {
				'datac' . $y
			} );
		}
		$y++;
		$abwges = $abwges + $line1[ 'Abwesenheitsdauer' ];

	}

	$data3 = array(
		'Rows' => $y );
	$data1 = array(
		'SchuelerID' => $ID,
		'Vorname' => $Vorname,
		'Nachname' => $Nachname,
		'AbwesenheitenGesamt' => $abwges );
	
	$data[] = array_merge( $data1, $data2, $data3 );
	
	
		$SchID=$ID;
	
    
	
	$isEntryUpd = "UPDATE sv_LernenderKurs SET Abwesenheiten = '$abwges' where SchuelerID='$SchID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
	
}
}

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