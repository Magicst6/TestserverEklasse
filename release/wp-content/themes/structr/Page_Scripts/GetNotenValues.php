<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 30.11.2018
 * Time: 12:09
 */
include 'db.php';
//$Lehrer=$_GET['lehrer'];
//preg_match("/:(.*)/", $Lehrer, $output_array);
//$Lehrer=$output_array[1];

$y=0;
$Kursname=$_GET['q'];
$KlasseInput=$_GET['k'];
$Lehrer=$_GET['l'];

preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];




				


    $isEntry = "Select * From sv_LernenderKurs where KursID='$Kursname' order by Nachname asc ";
    $result = mysqli_query($con, $isEntry);
    $events = array();
if ($Kursname<>"-Select-"){
	
	

    while ($line2 = mysqli_fetch_array($result)) {
		$Notenschnitt=null;
		$Notegesamt=0;	
		$c=0;
		for ( $b = 1; $b < 10; $b++ ) {
					$Dateb = "Datum" . $b;
					$Noteb = "Note" . $b;
					$Gewb = "Gewichtung" . $b;
					$Nameb = "Name" . $b;
						$DatumAK = $line2[ $Dateb ];
						$NameAK = $line2[ $Nameb ];
						$GewAK = $line2[ $Gewb ];
						$NoteAK = $line2[ $Noteb ];



						//Schreibe Spaltennamen

						if ( $NoteAK >= 1 and $NoteAK <= 6 and $GewAK <= 100 and $GewAK > 0 and $DatumAK <> null and $NameAK <> null ) {
							$Notegesamt = $Notegesamt + ( $NoteAK * $GewAK / 100 );
							$c = $c + $GewAK / 100;
						}
						}
		if ($c>0){
		$Notenschnitt=$Notegesamt/$c;
		}
		$data[] = array(
			'Notenschnitt' => $Notenschnitt,
		  'Vorname' => $line2['Vorname'],
			 'Nachname' => $line2['Nachname'],
			 'IDSchueler' => $line2['SchülerID'],
           	'Datum1' => $line2['Datum1' ],
		    'Name1' => $line2[ 'Name1' ],
		  'Gewichtung1' => $line2[ 'Gewichtung1' ],
			'Note1' => $line2[ 'Note1' ],
		'Datum2' => $line2['Datum2' ],
		    'Name2' => $line2[ 'Name2' ],
		  'Gewichtung2' => $line2[ 'Gewichtung2' ],
			'Note2' => $line2[ 'Note2' ],
		'Datum3' => $line2['Datum3' ],
		    'Name3' => $line2[ 'Name3' ],
		  'Gewichtung3' => $line2[ 'Gewichtung3' ],
			'Note3' => $line2[ 'Note3' ],
		'Datum4' => $line2['Datum4' ],
		    'Name4' => $line2[ 'Name4' ],
		  'Gewichtung4' => $line2[ 'Gewichtung4' ],
			'Note4' => $line2[ 'Note4' ],
		'Datum5' => $line2['Datum5' ],
		    'Name5' => $line2[ 'Name5' ],
		  'Gewichtung5' => $line2[ 'Gewichtung5' ],
			'Note5' => $line2[ 'Note5' ],
		'Datum6' => $line2['Datum6' ],
		    'Name6' => $line2[ 'Name6' ],
		  'Gewichtung6' => $line2[ 'Gewichtung6' ],
			'Note6' => $line2[ 'Note6' ],
		'Datum7' => $line2['Datum7' ],
		    'Name7' => $line2[ 'Name7' ],
		  'Gewichtung7' => $line2[ 'Gewichtung7' ],
			'Note7' => $line2[ 'Note7' ],
		'Datum8' => $line2['Datum8' ],
		    'Name8' => $line2[ 'Name8' ],
		  'Gewichtung8' => $line2[ 'Gewichtung8' ],
			'Note8' => $line2[ 'Note8' ],
		'Datum9' => $line2['Datum9' ],
		    'Name9' => $line2[ 'Name9' ],
		  'Gewichtung9' => $line2[ 'Gewichtung9' ],
			'Note9' => $line2[ 'Note9' ]);
	
    }
		
}
	

	echo json_encode($data);



