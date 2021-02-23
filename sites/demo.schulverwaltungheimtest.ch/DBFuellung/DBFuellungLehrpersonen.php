<?php



if ( $_POST[ 'Senden' ] ) {


	$Lehrer = $_POST[ 'lehrer' ];
	preg_match( "/:(.*)/", $Lehrer, $output_array );
	$Lehrer = $output_array[ 1 ];

	if ( $Lehrer == "" ) {
		echo "Bitte alle Felder ausfüllen";
		//echo '<meta http-equiv="Refresh" content="1; url=http://schulverwaltungheimtest.ch/kurselehrpersonen">';

	} else {

		include 'db.php';

		$sql_befehl21 = "UPDATE sv_Kurse SET Lehrperson = ''  where Lehrperson ='$Lehrer' ";

		mysqli_query( $con, $sql_befehl21 );

		$updateKALL = "UPDATE sv_KurseAll SET LP_ID = '', Lehrperson = '' where LP_ID='$Lehrer'	";
		mysqli_query( $con, $updateKALL );
		$sql_befehlDel = "Delete From sv_KurseLehrer where LP_ID='$Lehrer' ";
		mysqli_query( $con, $sql_befehlDel );

		for ( $x = 1; $x <= 30; $x++ ) {
			$Kurs = "Kurs" . "$x";

			$wert = $_POST[ $Kurs ];

			if ( $wert <> '' ) {

				$isEntry2 = "Select *  From sv_KurseLehrer where KursID='$wert' ";

				$result2 = mysqli_query( $con, $isEntry2 );

				while ( $row2 = mysqli_fetch_array( $result2 ) ) {
					$isKurs = true;
				}
				if ( !$isKurs ) {

					$query1 = "INSERT INTO sv_KurseLehrer (KursID,LP_ID)  VALUES ('$wert', '$Lehrer')";
					mysqli_query( $con, $query1 );
				



				$kursaktuell = "Select  Nachname From sv_Lehrpersonen Where ID = '$Lehrer' ";
				$result3 = mysqli_query( $con, $kursaktuell );
				while ( $line = mysqli_fetch_assoc( $result3 ) ) {

					$Lehrperson = $line[ 'Nachname' ];

					$updateKALL1 = "UPDATE sv_KurseAll SET LP_ID = '$Lehrer', Lehrperson = '$Lehrperson'  where KursID ='$wert' ";
					mysqli_query( $con, $updateKALL1 );

				}
			


			$sql_befehl2 = "UPDATE sv_Kurse SET Lehrperson = '$Lehrer'  where KursID ='$wert' ";

			mysqli_query( $con, $sql_befehl2 );

				}else{
					echo "Der Kurs ".$wert." konnte nicht zugewiesen werden.";
				}

			}
		}
	}
}








echo '<script>window.location.href = "\ksdlpsc";</script>';




?>