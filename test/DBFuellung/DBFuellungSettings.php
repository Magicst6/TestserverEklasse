<?php
$con = @mysqli_connect('9b1qp.myd.infomaniak.com', "9b1qp_heimmart", "St1180!!ST");

if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
//echo 'Connected to MySQL';
$verbunden = mysqli_select_db($con, "9b1qp_heimmart_test");
if ($verbunden)
    echo('');
else
    die('DB-Verbindung fehlgeschlagen! ');
if ($_POST['Senden']) {
    $Semesterkuerzel = $_POST['Semesterkuerzel'];

    $Semesteranfang = $_POST['Semesteranfang'];
    $Semesterende = $_POST['Semesterende'];
    $Ferien1von = $_POST['Ferien1von'];
    $Ferien1bis = $_POST['Ferien1bis'];
    $Ferien2von = $_POST['Ferien2von'];
    $Ferien2bis = $_POST['Ferien2bis'];
    $Ferien3von = $_POST['Ferien3von'];
    $Ferien3bis = $_POST['Ferien3bis'];
    $Ferien4von = $_POST['Ferien4von'];
    $Ferien4bis = $_POST['Ferien4bis'];
    $Ferien5von = $_POST['Ferien5von'];
    $Ferien5bis = $_POST['Ferien5bis'];

echo $Ferien1von;
    $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
    if ($SemesterkuerzelDB <> '') {
        $sql_befehl2 = "UPDATE sv_Settings SET Semesterkuerzel='$Semesterkuerzel', Semesteranfang='$Semesteranfang', Semesterende='$Semesterende', Ferien1von='$Ferien1von', Ferien1bis='$Ferien1bis', Ferien2von='$Ferien2von', Ferien2bis='$Ferien2bis', Ferien3von='$Ferien3von', Ferien3bis='$Ferien3bis',Ferien5von='$Ferien4von', Ferien5bis='$Ferien4bis', Ferien5von='$Ferien5von', Ferien5bis='$Ferien5bis'";
    } else {
        $sql_befehl2 = "INSERT INTO sv_Settings (Semesterkuerzel, Semesteranfang, Semesterende, Ferien1von, Ferien1bis, Ferien2von, Ferien2bis, Ferien3von, Ferien3bis, Ferien4von, Ferien4bis,Ferien5von, Ferien5bis) VALUES ('$Semesterkuerzel', '$Semesteranfang','$Semesterende', '$Ferien1von', '$Ferien1bis', '$Ferien2von', '$Ferien2bis','$Ferien3von', '$Ferien3bis','$Ferien4von', '$Ferien4bis', '$Ferien5von', '$Ferien5bis')";
    }

    mysqli_query($con, $sql_befehl2);

    $sql_befehl_del = "Delete From sv_KurseAll where Stundenplan = 1 ";



// In die DB-Tabelle eintragen

    mysqli_query($con, $sql_befehl_del);

    $isEntryStundenplan= "Select * From sv_Kurse where Stundenplan = 1 ";

    $resultStundenplan = mysqli_query($con, $isEntryStundenplan);







    while( $valueStundenplan= mysqli_fetch_array($resultStundenplan)) {

        $KursID = $valueStundenplan['KursID'];

        $Tag = $valueStundenplan['Tag'];

        $Klasse = $valueStundenplan['Klasse'];

        $Zimmer= $valueStundenplan['Zimmer'];

        $Kursname = $valueStundenplan['Kursname'];

        $Startdatum = $valueStundenplan['Startdatum'];

        $Enddatum = $valueStundenplan['Enddatum'];

        $Uhr=$valueStundenplan['Uhrzeit'];

        $Farbe=$valueStundenplan['Farbe'];

        $time= null;

        if ($Uhr== '815')

        {

            $time= "08:15:00";

        }

        else if ($Uhr== '905')

        {

            $time= "09:05:00";

        }

        else if ($Uhr== '1010')

        {

            $time= "10:10:00";

        }

        else if ($Uhr== '1100')

        {

            $time= "11:00:00";

        }

        else if ($Uhr== '1145')

        {

            $time= "11:45:00";

        }

        else if ($Uhr== '1315')

        {

            $time= "13:15:00";

        }

        else if ($Uhr== '1405')

        {

            $time= "14:05:00";

        }

        else if ($Uhr== '1510')

        {

            $time= "15:10:00";

        }

        else if ($Uhr== '1600')

        {

            $time= "16:00:00";

        }



        else if ($Uhr== '1645')

        {

            $time= "16:45:00";

        }

        else $time=$Uhr.":00";

        // echo $time;

        if ($time<>null) {



            $Datum = date('Y-m-d', strtotime($Startdatum));

            $Start = date('Y-m-d H:i:s', strtotime($Startdatum . " " . $time));



            $End = date('Y-m-d H:i:s', strtotime($Start . '+45 minutes'));

            $isEntry = "Select * From sv_KurseAll";

            $result = mysqli_query($con, $isEntry);

            $isExisting = false;

            while ($value = mysqli_fetch_array($result)) {

                if (($value['Start'] == $Start) and ($value['Ende'] == $End) and ($value['KursID'] == $KursID)) {

                    $isExisting = true;

                    // echo "line already existing";

                }



            }

            if ($Enddatum == '0000-00-00' || $Enddatum == null || $Enddatum=="") {

                //    echo "Enddatum fehlt. Bitte eintragen!')";

            } else {



                $isEntryLPKurse = "SELECT Kurs1, Kurs2, Kurs3, Kurs4, Kurs5, Kurs6, Kurs7, Kurs8, Kurs9,Kurs10,Kurs11,Kurs12,Kurs13,Kurs14,Kurs15,Kurs16,ID, Nachname From sv_Lehrpersonen  ";

                $result = mysqli_query($con, $isEntryLPKurse);



                $LP_ID=0;

                $Lehrperson="";

                while( $value= mysqli_fetch_array($result))

                {

                    $isEntryCreated=false;

                    $isKursExisting=false;

                    for($x = 1; $x <= 16; $x++) {



                        $Kurs = "Kurs" . "$x";



                        $KursValue = $value[$Kurs];

                        if ($KursValue == $KursID) {

                            $LP_ID = $value['ID'];

                            $Lehrperson = $value['Nachname'];

                        }







                    }



                }



                if (!$isExisting) {

                    $sql_befehl = "INSERT INTO sv_KurseAll (Kursname, KursID, Tag, Klasse, LP_ID,Datum, Start, Ende, Lehrperson,Farbe,Zimmer, Stundenplan ) VALUES ('$Kursname','$KursID','$Tag','$Klasse','$LP_ID','$Datum','$Start','$End','$Lehrperson','$Farbe','$Zimmer', 1)";



// In die DB-Tabelle eintragen

                    mysqli_query($con, $sql_befehl);

                }

                $y = 0;





                if  ($Startdatum<$Enddatum) {

                    $datetime1 = date_create($Startdatum);

                    $datetime2 = date_create($Enddatum);

                    $interval = date_diff($datetime1, $datetime2);

                    $days = $interval->format('%R%a days');

                    $weeks = intval($days / 7);

                    //  echo $weeks;

                    $y = $weeks;



                }
                echo "test";
                for ($x = 0; $x < $y; $x++) {

                    $isExisting = false;

                    $Datum = date('Y-m-d', strtotime($Datum . ' + 7 days'));

                    $Start = date('Y-m-d H:i:s', strtotime($Start . ' + 7 days'));

                    $isEntrySet = "Select Ferien1von,Ferien1bis,Ferien2von,Ferien2bis,Ferien3von,Ferien3bis,Ferien4von,Ferien4bis,Ferien5von,Ferien5bis From sv_Settings";

                    $resultSet = mysqli_query($con, $isEntrySet);


                    while ($valueSet = mysqli_fetch_array($resultSet)) {

                        if (($Start>=$valueSet['Ferien1von'] and $Start<=$valueSet['Ferien1bis']) or ($Start>=$valueSet['Ferien2von'] and $Start<=$valueSet['Ferien2bis']) or ($Start>=$valueSet['Ferien3von'] and $Start<=$valueSet['Ferien3bis']) or ($Start>=$valueSet['Ferien4von'] and $Start<=$valueSet['Ferien4bis']) or ($Start>=$valueSet['Ferien5von'] and $Start<=$valueSet['Ferien5bis'])) {


                            $isExisting = true;

                        }//     echo "line already existing";

                    }

                    $End = date('Y-m-d H:i:s', strtotime($Start . '+45 minutes'));

                    $isEntry = "Select * From sv_KurseAll";

                    $result = mysqli_query($con, $isEntry);



                    while ($value = mysqli_fetch_array($result)) {

                        if (($value['Start'] == $Start) and ($value['Ende'] == $End) and ($value['KursID'] == $KursID)) {

                            $isExisting = true;


                        }
                    }







                    if (!$isExisting) {

                        $sql_befehl = "INSERT INTO sv_KurseAll (Kursname,KursID, Tag, Klasse, LP_ID,Datum, Start, Ende, Lehrperson,Farbe,Zimmer,Stundenplan ) VALUES ('$Kursname','$KursID','$Tag','$Klasse','$LP_ID','$Datum','$Start','$End','$Lehrperson','$Farbe','$Zimmer',1)";





// In die DB-Tabelle eintragen

                        mysqli_query($con, $sql_befehl);

                    }

                }

            }

            $Enddatum = null;





        }

    }


}
?>
<meta http-equiv="refresh" content="5; URL=/settings/">
