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
$Kursname='wi-nov18-w.M192.FS19';
$KlasseInput=$_GET['k'];
$Lehrer=$_GET['l'];
$semester='FS19';


$lkArch=$semester."_LernenderKurs";
$notenArch=$semester."_Noten";

$isEntry = "Select * From sv_Settings ";
$result = mysqli_query($con, $isEntry);

    while ($line1 = mysqli_fetch_array($result)) {

        $semDB=$line1['Semesterkuerzel'];

    }

preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];

if ($semester==$semDB){
    $isEntry = "Select * From sv_LernenderKurs where KursID='$Kursname' order by Nachname asc ";

} else{

    $isEntry = "Select * From $lkArch where KursID='$Kursname' order by Nachname asc ";

}


    $result = mysqli_query($con, $isEntry);
    $events = array();
if ($Kursname<>""){
	
	$Notenschnitt=null;
		$Notegesamt=0;	
$c=0;
	
	$a=0;
    while ($line1 = mysqli_fetch_array($result)) {
		$ID=$line1['SchuelerID'];
		
		$data0 = array(
			
		  'Vorname' => $line1['Vorname'],
			 'Nachname' => $line1['Nachname'],
			 'IDSchueler' => $line1['SchuelerID']
			);


        if ($semester==$semDB){
            $isEntry1 = "Select * From sv_Noten where KursID='$Kursname' and SchuelerID='$ID'  ";
        } else{

            $isEntry1 = "Select * From $notenArch where KursID='$Kursname' and SchuelerID='$ID'  ";
        }


    $result1 = mysqli_query($con, $isEntry1);
    $events = array();

	
	$Notenschnitt=null;
		$Notegesamt=0;	
$c=0;
	
	$a=0;
		$data11 = null;
    while ($line2 = mysqli_fetch_array($result1)) {
		if ($a<9){
		$a++;
		
					$Dateb = "Datum"; 
					$Noteb = "Note";
					$Gewb = "Gewichtung";
					$Nameb = "Name";
						$DatumAK = $line2[ $Dateb ];
						$NameAK = $line2[ $Nameb ];
						$GewAK = $line2[ $Gewb ];
						$NoteAK = $line2[ $Noteb ];



						//Schreibe Spaltennamen

						if ( $NoteAK >= 1  and $GewAK <= 100 and $GewAK > 0  and $NameAK <> null ) {
							$Notegesamt = $Notegesamt + ( $NoteAK * $GewAK / 100 );
							$c = $c + $GewAK / 100;
						}
						
		
		
			
			${"data".$a}=array(
           	'Datum'.$a => $line2['Datum' ],
		    'Name'.$a => $line2[ 'Name' ],
		  'Gewichtung'.$a => $line2[ 'Gewichtung' ],
			'Note'.$a => $line2[ 'Note' ]);
			
			if ( $a == 1 ) {
			$data11 = $ {
				'data' . $a
			};
		} else {

			$data11 = array_merge( $data11, $ {
				'data' . $a
			} );
		}
		
		}
		
    }
		
			do {
				$a++;
				${"data".$a}=array(
           	'Datum'.$a => null,
		    'Name'.$a => null,
		  'Gewichtung'.$a => null,
			'Note'.$a => null);
			
			if ( $a == 1 ) {
			$data11 = $ {
				'data' . $a
			};
		} else {

			$data11 = array_merge( $data11, $ {
				'data' . $a
			} );
		}
			}while ($a<=9);
		

		if ($c>0){
		$Notenschnitt=$Notegesamt/$c;
			$Notenschnitt=round($Notenschnitt, 2);
		}
		$data10=array('Notenschnitt' => $Notenschnitt);
		
		
		$data[] = array_merge( $data0,$data11,$data10);
			
	}

}


	echo json_encode($data);



