

<?
include 'db.php';
/* $isEntry0 = "Select * From sv_LernenderKurs group by KursID  ";




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

 $isEntry0 = "Select * From sv_LernenderKurs group by KursID  ";




$result0 = mysqli_query( $con, $isEntry0 );


while ( $line0 = mysqli_fetch_array( $result0 ) ) {

 $Kursname=$line0['KursID'];
//echo $Kursname;

    $isEntry = "Select * From sv_LernenderKurs where KursID='$Kursname' order by Nachname asc ";




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
          
		$isEntryUpdNull = "UPDATE sv_LernenderKurs SET Note1  = '',Note2  = '',Note3  = '',Note4  = '',Note5  = '',Note6  = '',Note7  = '',Note8  = '',Note9  = '' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpdNull );	

		

        
            
			 
			 $isEntry1 = "Select * From sv_Noten where KursID='$Kursname' and SchuelerID='$ID'   ";
			
			
			
			
       


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

						if ( $NoteAK >= 1  and $GewAK <= 100 and $GewAK > 0   ) {
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
			if ($NoteAK){ 
			switch ($a) {
    case 1:
      $isEntryUpd = "UPDATE sv_LernenderKurs SET Note1  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 2:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note2  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 3:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note3  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
	case 4:
      $isEntryUpd = "UPDATE sv_LernenderKurs SET Note4  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 5:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note5  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 6:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note6  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
	case 7:
      $isEntryUpd = "UPDATE sv_LernenderKurs SET Note7  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 8:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note8  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 9:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note9  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
}
	
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
        $data12=array('empty' => '');
		
		
		$data[] = array_merge( $data0,$data11,$data10,$data12);
			
	}
	

}
}

	


*/

	$schueler=$_GET['q'];				
              
					
				

                      

        



       
 


$schuelerarr=explode(":",$schueler);

$value=$schuelerarr[0];



?>

    

<html>





 
	<?  
	   $schuelerarr=explode(":",$schueler);

$value=$schuelerarr[0];
	   $isEntry1 = "Select * From sv_LernendeModule where ID='$value' ";


	

$result1 = mysqli_query( $con, $isEntry1 );

 
while ( $line1 = mysqli_fetch_array( $result1 ) ) {
	 
	 $Name = $line1['Name'];

        $Vorname = $line1['Vorname'];

     

     $Email = $line1['EMail'];
	
	 $UserID= $line1['User_ID'];
	
	$Profil = $line1['Profil'];
	
	$Schulmail= $line1['SchulMail'];
	
	$Loginname= $line1['Loginname'];
	
	$Winlogin = $line1['WinLogin'];	 


   
   

}
	
	 echo '<h3>Daten des aktuellen Semesters</h3><br><br>';
 
  echo '<h4>'.$Vorname.' '.$Name.'</h4>';
	   
	   
	   if ($schueler<>''){
	   echo '<p1><u><strong>Daten des Schülers: </strong></u></p1>';
	   echo '<br><p><strong>E-Mail Adresse: </strong>'.$Email; 
	   echo '<br><strong>UserID EKlasse: </strong>'.$UserID; 
	   echo '<br><strong>Lernendenprofil: </strong>'. $Profil; 
	   echo '<br><strong>Schulmail: </strong>'. $Schulmail;
	   echo '<p1><u> <br><br><strong>Rechnerdaten: </strong></u></p1><br>';
	   echo '<strong>Loginname: </strong>'.$Loginname;
	   echo '<br><strong>Win-Login: </strong>'.$Winlogin;'</p>';
	   echo '<br>';
		   
		    echo '<br><br>';
		   echo '<u>Profilbild: </u><br>';
	  echo get_avatar($UserID,100);
		   
		   
		   echo '<br><br>';
	  
	  
	   
	
		   
		   
	  
	   }
?>
	
