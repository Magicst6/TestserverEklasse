

<?php
$con = @mysqli_connect('9b1qp.myd.infomaniak.com', "9b1qp_heimmart", "St1180!!ST");

if (!$con) {
echo "Error: " . mysqli_connect_error();
exit();
}
//echo 'Connected to MySQL';
$verbunden=mysqli_select_db($con, "9b1qp_heimmart_test");
if($verbunden)
echo('');
else
die('DB-Verbindung fehlgeschlagen! ');
//Input-Felder in Tabelle eintragen(außer die Termine der Veranstaltung
if( $_POST['Senden']) {
    ;
    $Klassenname = $_POST['klasse'];
    $Semester = $_POST['semester'];
    

    $DelZeiten = "Delete From sv_ZeitenStundenplan where Klasse ='$Klassenname'";
    mysqli_query($con, $DelZeiten);


        for ($y = 1; $y < 7; $y++) {
            $Uhr = array(9);
            switch ($y) {
                case 1:
                    $Tag = 'Montag';
                    break;
                case 2:
                    $Tag = 'Dienstag';
                    break;
                case 3:
                    $Tag = 'Mittwoch';
                    break;
                case 4:
                    $Tag = 'Donnerstag';
                    break;
                case 5:
                    $Tag = 'Freitag';
                    break;
                case 6:
                    $Tag = 'Samstag';
                    break;
            }
            for ($x = 1; $x < 11; $x++) {

                $Startdatum = $_POST['Date' . $x . $y];

                $UhrVal = $Uhr[$x - 1] = $_POST['Uhr' . $x . $y];
                $Date1 = new Datetime($Startdatum);
                $Datum1 = $Date1->format('Y-m-d');
                $Kursname0 = strtolower($_POST['Text' . $x . $y]);
                $Color = $_POST['color' . $x . $y];

                if ($Kursname0 <> "") {



                    if (!$Year) {
                        $Year = substr($Startdatum, 2, 2);
                    }

                    $Kursname = $Klassenname . '.' . $Kursname0 . '.' . $Semester;

                    if ((!$Startdatum) and ($Kursname0)) {

                        echo '<script language="javascript">';
                        echo 'alert("Kein Startdatum angegeben! Bitte zurück gehen und es eintragen.")';
                        echo '</script>';

                    } else if (($Startdatum <> "") and ($Kursname0 <> "")) {


//Daten in DB speichern
                        $isEntry2 = "Select KursID From sv_Kurse where Uhrzeit='$UhrVal' and Tag='$Tag' and KursID='$Kursname' ";
                        $result2 = mysqli_query($con, $isEntry2);

                        if (mysqli_num_rows($result2)==0)
                        {

                          //  $sql_befehl1 = "INSERT INTO sv_Kurse (KursID, Klasse, Uhrzeit, Tag, Startdatum, Farbe) VALUES ('$Kursname', '$Klassenname', '$UhrVal', '$Tag','$Datum1','$Color')";

                         //   mysqli_query($con, $sql_befehl1);
                        }else{
                            $sql_befehl2 = "UPDATE sv_Kurse SET KursID='$Kursname' , Startdatum='$Datum1', Farbe='$Color' Where Tag='$Tag' and Uhrzeit='$UhrVal' ";

                         //  mysqli_query($con, $sql_befehl2);
                        }
                        
                        unset($Kursname0);
                        unset($Kursname);
                        unset($Datum1);
                        unset($Startdatum);

                    }
                }
            }

            $sql_befehl2 = "INSERT INTO sv_ZeitenStundenplan ( Klasse, Uhrzeit1,Uhrzeit2,Uhrzeit3,Uhrzeit4,Uhrzeit5,Uhrzeit6,Uhrzeit7,Uhrzeit8,Uhrzeit9,Uhrzeit10,Tag) VALUES ('$Klassenname', '$Uhr[0]','$Uhr[1]','$Uhr[2]','$Uhr[3]','$Uhr[4]','$Uhr[5]','$Uhr[6]','$Uhr[7]','$Uhr[8]','$Uhr[9]', '$Tag')";
            mysqli_query($con, $sql_befehl2);

        }


    $isEntry2 = "Select Kurs1, Kurs2, Kurs3, Kurs4, Kurs5, Kurs6, Kurs7, Kurs8, Kurs9,Kurs10,Kurs11,Kurs12,Kurs13,Kurs14,Kurs15,Kurs16,Nachname,ID From sv_Lehrpersonen  ";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        for ($y = 1; $y <= 16; $y++) {
            $Kurs1 = "Kurs" . "$y";
            $dbwert = $value3[$Kurs1];
            $LP_ID=$value3['ID'];
          //  $sql_befehl2 = "UPDATE sv_Kurse SET Lehrperson = '$ID'  where KursID ='$dbwert' ";
            mysqli_query($con, $sql_befehl2);
        }

    }
}
?>

<?php
$con = @mysqli_connect('9b1qp.myd.infomaniak.com', "9b1qp_heimmart", "St1180!!ST");

if (!$con) {
echo "Error: " . mysqli_connect_error();
exit();
}
//echo 'Connected to MySQL';
$verbunden=mysqli_select_db($con, "9b1qp_heimmart_test");
if($verbunden)
//echo('DB-Verbindung hergestellt! ');
$dummy=1;
else
die('DB-Verbindung fehlgeschlagen! ');

$isEntry= "Select KursID, Klasse From sv_Kurse";
$result1 = mysqli_query($con, $isEntry);
while( $row5= mysqli_fetch_array($result1))
{

$Klasse =  $row5['Klasse'];
$Kursname =  $row5['KursID'];

$dontFill=0;
$isEntry3= "Select KursID From sv_LernenderKurs";
$result3 = mysqli_query($con, $isEntry3);
$resultarr3 = array();

while( $row3= mysqli_fetch_assoc($result3))
{
$resultarr3[] = $row3['KursID'];
}

$uniquearr3 = array_unique($resultarr3);
asort($uniquearr3);

foreach ($uniquearr3 as $value) {
if ($value==$Kursname)
{
$dontFill=1;
}
}


    $isEntry2= "Select Name, Vorname, ID, Profil From sv_LernendeModule Where Modul1='$Klasse' or Modul2='$Klasse' or Modul3='$Klasse' or Modul4='$Klasse' or Modul5='$Klasse' or Modul6='$Klasse' or Modul7='$Klasse' or Modul8='$Klasse' or Modul9='$Klasse' or Modul10='$Klasse' or Modul11='$Klasse' or Modul12='$Klasse' ";


$result2 = mysqli_query($con, $isEntry2);

while ($row2 = mysqli_fetch_array($result2)) {
$dontFill=0;
$SchuelerID= $row2['ID'];
$Vorname= $row2['Vorname'];
$Nachname= $row2['Name'];
$Profil1= $row2['Profil'];

preg_match("/.fz./", $Kursname, $output_array1);
$KursnameReg=$output_array1[0];
preg_match("/e/", $Profil1, $output_array2);
$ProfilReg=$output_array2[0];
preg_match("/.itplus./", $Kursname, $output_array3);
$KursnameReg1=$output_array3[0];
preg_match("/it/", $Profil1, $output_array4);
$ProfilReg1=$output_array4[0];
if ((($KursnameReg=='.fz.') and ($ProfilReg=='e')) or (($KursnameReg<>'.fz.') and ($KursnameReg1<>'.itplus.')) or (($KursnameReg1=='.itplus.') and ($ProfilReg1=='it'))) {

$isEntry4= "Select SchülerID, Vorname, Nachname, KursID From sv_LernenderKurs";
$result4 = mysqli_query($con, $isEntry4);

while ($row4 = mysqli_fetch_array($result4)) {
$ID= $row4['SchülerID'];
$KursnameAbw =  $row4['KursID'];
$VornameAbw= $row4['Vorname'];
$NachnameAbw= $row4['Nachname'];

if ( ($SchuelerID==$ID) and ($Kursname==$KursnameAbw) and (($Vorname<>$VornameAbw) or ($Nachname<>$NachnameAbw) ))
{
$sql_befehl = "Update sv_LernenderKurs SET Vorname='$Vorname', Nachname='$Nachname' Where SchülerID='$ID' and KursID='$Kursname'";
mysqli_query($con, $sql_befehl);
//echo "Eintrag hinzugefügt!";
$dontFill=1;
}







if ( ($SchuelerID==$ID) and ($Kursname==$KursnameAbw) and  ($Vorname==$VornameAbw) and ($Nachname==$NachnameAbw) )
{
$dontFill=1;
}
}

if ($dontFill == 0){
$sql_befehl = "INSERT INTO sv_LernenderKurs (KursID, SchülerID, Klasse, Vorname, Nachname) VALUES ('$Kursname', '$SchuelerID', '$Klasse', '$Vorname','$Nachname')";
mysqli_query($con, $sql_befehl);
//echo "Eintrag hinzugefügt!";
}

}
}
}

$isEntry= "Select KursID, Klasse From sv_ExtraKurse ";
$result1 = mysqli_query($con, $isEntry);
while( $row5= mysqli_fetch_array($result1))
{

$Klasse =  $row5['Klasse'];
$Kursname =  $row5['KursID'];

$dontFill=0;
$isEntry3= "Select KursID From sv_LernenderKurs";
$result3 = mysqli_query($con, $isEntry3);
$resultarr3 = array();

while( $row3= mysqli_fetch_assoc($result3))
{
$resultarr3[] = $row3['KursID'];
}

$uniquearr3 = array_unique($resultarr3);
asort($uniquearr3);

foreach ($uniquearr3 as $value) {
if ($value==$Kursname)
{
$dontFill=1;
}
}


$isEntry2= "Select Name, Vorname, ID, Profil From sv_LernendeModule Where Modul1='$Klasse' or Modul2='$Klasse' or Modul3='$Klasse' or Modul4='$Klasse' or Modul5='$Klasse' or Modul6='$Klasse' or Modul7='$Klasse' or Modul8='$Klasse' or Modul9='$Klasse' or Modul10='$Klasse' or Modul11='$Klasse' or Modul12='$Klasse' ";

$result2 = mysqli_query($con, $isEntry2);

while ($row2 = mysqli_fetch_array($result2)) {
$dontFill=0;
$SchuelerID= $row2['ID'];
$Vorname= $row2['Vorname'];
$Nachname= $row2['Name'];
$Profil1= $row2['Profil'];
preg_match("/.fz./", $Kursname, $output_array1);
$KursnameReg=$output_array1[0];
preg_match("/e/", $Profil1, $output_array2);
$ProfilReg=$output_array2[0];
preg_match("/.itplus./", $Kursname, $output_array3);
$KursnameReg1=$output_array3[0];
preg_match("/it/", $Profil1, $output_array4);
$ProfilReg1=$output_array4[0];
if ((($KursnameReg=='.fz.') and ($ProfilReg=='e')) or (($KursnameReg<>'.fz.') and ($KursnameReg1<>'.itplus.')) or (($KursnameReg1=='.itplus.') and ($ProfilReg1=='it'))) {

$isEntry4= "Select SchülerID, Vorname, Nachname, KursID From sv_LernenderKurs";
$result4 = mysqli_query($con, $isEntry4);

while ($row4 = mysqli_fetch_array($result4)) {
$ID= $row4['SchülerID'];
$KursnameAbw =  $row4['KursID'];
$VornameAbw= $row4['Vorname'];
$NachnameAbw= $row4['Nachname'];

if ( ($SchuelerID==$ID) and ($Kursname==$KursnameAbw) and (($Vorname<>$VornameAbw) or ($Nachname<>$NachnameAbw) ))
{
$sql_befehl = "Update sv_LernenderKurs SET Vorname='$Vorname', Nachname='$Nachname' Where SchülerID='$ID' and KursID='$Kursname'";
mysqli_query($con, $sql_befehl);
//echo "Eintrag hinzugefügt!";
$dontFill=1;
}







if ( ($SchuelerID==$ID) and ($Kursname==$KursnameAbw) and  ($Vorname==$VornameAbw) and ($Nachname==$NachnameAbw) )
{
$dontFill=1;
}
}

if ($dontFill == 0){
$sql_befehl = "INSERT INTO sv_LernenderKurs (KursID, SchülerID, Klasse, Vorname, Nachname) VALUES ('$Kursname', '$SchuelerID', '$Klasse', '$Vorname','$Nachname')";
mysqli_query($con, $sql_befehl);
//echo "Eintrag hinzugefügt!";
}

}

}
}
header('Location: https://schulverwaltungheimtest.ch/kursformular?Klasse='.$Klassenname); exit;

?>



