

<?php
include 'db.php';
if ($_POST['Senden']) {
    $Anzahl = $_POST['Schueler'];
    $Pruefungsname= $_POST['title'];
    $Kursname = $_POST['kursid'];
    $Datum = $_POST['startdate'];
    $Gewicht=$_POST['gewicht'];
    $Comment=$_POST['Comment'];
	
	
	
	 $sql_befehl0 = "Update sv_Pruefungen Set Kommentar='$Comment' where Pruefungsname='$Pruefungsname' and Datum='$Datum' and KursID='$Kursname'";
    mysqli_query($con, $sql_befehl0);
                    echo "Eintrag hinzugefügt.";

        for ($x = 0; $x < $Anzahl; $x++) {
            $y = $x + 1;

            $ID = $_POST[$y];
			echo $ID;
            $isEntry = "SELECT  Vorname, Name ,Klasse From sv_Lernende Where ID='$ID'";
            $result = mysqli_query($con, $isEntry);
          
            while ($value = mysqli_fetch_array($result)) {
                $Vorname = $value['Vorname'];
                $Nachname = $value['Name'];
                $Klassenname = $value['Klasse'];
            }
           
            $u = "Note" . "$y";
            echo $u;
            $Note = $_POST[$u];
            echo $Note;
//Daten in DB speichern
            if ( $Note <> 0) {
                 $Update = 0;
                for ($b = 1; $b < 10; $b++){
                    $Dateb = "Datum" . $b;
                    $Noteb = "Note" . $b;
                    $Gewb = "Gewichtung" . $b;
                    $Nameb = "Name" . $b;
                $isEntry1 = "SELECT  $Dateb,$Nameb From sv_LernenderKurs where KursID='$Kursname' and SchülerID='$ID' ";
                $result1 = mysqli_query($con, $isEntry1);

                while ($value1 = mysqli_fetch_array($result1)) {

                
                    $IDAK = $value1['SchülerID'];
                    $DatumAK = $value1['Dateb'];
                    $NameAK = $value1['Nameb'];
                    echo $NameAK;
                    if ( ($Datum == $DatumAK) and ($Pruefungsname == $NameAK)) {
						   $sql_befehl = "UPDATE sv_LernenderKurs SET $Noteb='$Note' Where KursID='$Kursname' and Datum.$b='$Datum' and SchülerID='$ID' ";
                        $Update = 1;
                    }
                }
                }
                if ($Update == 0) {
					
                    $c = 0;
                    for ($a = 1; $a < 10; $a++) {
                        $d = 0;
                        $DatCheck = "Datum" . $a;
                        $NoteCheck = "Note" . $a;
                        $GewCheck = "Gewichtung" . $a;
                        $NameCheck = "Name" . $a;

                        $isEntry1 = "SELECT $DatCheck,$NameCheck,$NoteCheck,$GewCheck From sv_LernenderKurs where KursID='$Kursname' and SchülerID='$ID'";
                        $result1 = mysqli_query($con, $isEntry1);
                        while ($value1 = mysqli_fetch_array($result1)) {
                          
                            if ((($value1[$DatCheck] == null ) or ($value1[$DatCheck] == $Datum)) and  (($value1[$NameCheck] == null ) or ($value1[$NameCheck] == $Pruefungsname)) and ($c == 0)) {

                                $sql_befehl = "Update sv_LernenderKurs Set $NoteCheck='$Note', $DatCheck='$Datum', $GewCheck='$Gewicht',$NameCheck='$Pruefungsname' where KursID='$Kursname' and SchülerID='$ID' ";
                              
                                $c++;

                            }
                        }

                    }
                }

//echo $sql_befehl1;
               
                if (("" == $Klassenname) OR ("" == $Kursname) OR ("" == $Datum)) {
                    echo "Fehler: Eintrag unvollständig. Bitte neu beginnen!";
//echo '<meta http-equiv="refresh" content="0; url=/klassenbuch-der-lehrpersonen-ajax" />';
                } else {
                    mysqli_query($con, $sql_befehl);
                    echo "Eintrag hinzugefügt.";

                }


        }
    }
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>
<!--<meta http-equiv="refresh" content="0; url=/klassenbuch-der-lehrpersonen"/>
&nbsp;
