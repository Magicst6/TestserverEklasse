<?php

$Klasse=$_POST['klasseupl'];

$Semester=$_POST['semester'];

$target_dir = "Uploads/";

$target_file = $target_dir . basename(date("d.m.Y-H:i:s",time()).$_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

echo $target_file;

// Check if file already exists

if (file_exists($target_file)) {

    echo "Sorry, file already exists.";

    $uploadOk = 0;

}

// Check file size

if ($_FILES["fileToUpload"]["size"] > 500000) {

    echo "Sorry, your file is too large.";

    $uploadOk = 0;

}

// Allow certain file formats

if($FileType != "csv" ) {

    echo "Sorry, only CSV files are allowed.";

    $uploadOk = 0;

}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file

} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";

    } else {

        echo "Sorry, there was an error uploading your file.";

    }



   include 'db.php';



    /**

     * Created by PhpStorm.

     * User: stefa

     * Date: 03.11.2018

     * Time: 16:46

     */



// CSV-Datei in eine DB-Tabelle einlesen



// CSV-Datei einlesen

    $csvInhalt = file($target_file, FILE_SKIP_EMPTY_LINES);



    $daten = [];

    $trennzeichen = ";";

    $x = 0;

	
    foreach ($csvInhalt as $inhalt) {

        if ($x > 0) {

			
            
			// Die Anzahl der Spalten anpassen

            list($spalte0,$spalte1, $spalte2, $spalte3, $spalte4, $spalte5, $spalte6, $spalte7) = explode($trennzeichen, $inhalt);

            $Eventname = $spalte0;
			
		
echo $spalte1;
             $spalte1= str_replace('.', '-', $spalte1);

			echo $spalte1;
			
            	$datum=date("Y-m-d", strtotime($spalte1));

                $Start = date('Y-m-d H:i:s',strtotime($spalte1));
           echo $Start;
               

                $Ende = date('Y-m-d H:i:s',strtotime($spalte2));

               echo $Start;

                $Zimmer = $spalte3;

              

                $Lehrperson = $spalte4;

                $LP_ID = $spalte5;
			
				 $Farbe = $spalte6;

                $Beschreibung = $spalte7;
			


       
		


                $isEntry = "Select * From sv_Klassentermine";

                $result = mysqli_query($con, $isEntry);

                $isExisting = false;

                $isWrongTeacherName = false;

                while ($value = mysqli_fetch_array($result)) {

                    if (($value['Zimmer'] == $Zimmer) and ($value['Start'] == $Start) and ($value['Ende'] == $Ende)  and ($value['Eventname'] == $Eventname)) {

                        $isExisting = true;

                        echo "line already existing";

                    }



                }



               
             
                // Daten hinzufügen (Anzahl der Spalten anpassen)

//    $daten[] = "('" . $spalte1 . "','" . $spalte2 . "','" . $spalte3 . "','" . $spalte4 . "','" . $spalte5 . "','" . $spalte6 . "','" . $spalte7 . "','" . $spalte8 . "','" . $spalte9 . "','" . $spalte10 . "','" . $spalte11 . "','" . $spalte12 . "')" . chr(13);

                if (!$isExisting) {

                    $sql_befehl = "INSERT INTO sv_Klassentermine (Eventname,Datum,Start, Ende, Klasse, Zimmer,Lehrperson,LP_ID,Farbe,Beschreibung) VALUES ('$Eventname','$datum','$Start','$Ende','$Klasse','$Zimmer','$Lehrperson','$LP_ID','$Farbe','$Beschreibung')";

echo $sql_befehl;



// In die DB-Tabelle eintragen

                    mysqli_query($con, $sql_befehl);

                }



              



// Verbindung zur Datenbank aufbauen





// SQL-String zusammensetzen

// Die Anzahl der Spalten und Namen anpassen

//$sql_befehl = "INSERT INTO `sv_KurseAll` ($head1, $head2, $head3, $head4,$head5, $head6, $head7, $head8, $head9) VALUES" . implode(",", $daten) . ";";



// In die DB-Tabelle eintragen

//mysqli_query($con,$sql_befehl);







                    }
   $x++;
                

            

        }

     
}
    





echo '<meta http-equiv="refresh" content="0; url=/termine-der-klassen" />';



?>



