
<?php
include 'db.php';


    $Semesterkuerzel = $_POST['Semesterkuerzel'];
echo $Semesterkuerzel;
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
    $Klassenbuch = $_POST['Klassenbuch'];

echo $Klassenbuch;

 $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
	
if ($SemesterkuerzelDB==$Semesterkuerzel){
	
	
}
	else{
		
		
		$Sem_Zeiten= $SemesterkuerzelDB.'_Zeiten';

$query40 = "DROP TABLE $Sem_Zeiten";

mysqli_query($con,$query40);



$query41 = "CREATE TABLE $Sem_Zeiten LIKE sv_Zeiten";

mysqli_query($con,$query41);

$query42 = "INSERT INTO $Sem_Zeiten SELECT * FROM sv_Zeiten";

mysqli_query($con,$query42);
		
		
		
			$Sem_KurseStammdaten= $SemesterkuerzelDB.'_KurseStammdaten';

$query16 = "DROP TABLE $Sem_KurseStammdaten";

mysqli_query($con,$query16);



$query26 = "CREATE TABLE $Sem_KurseStammdaten LIKE sv_KurseStammdaten";

mysqli_query($con,$query26);

$query36 = "INSERT INTO $Sem_KurseStammdaten SELECT * FROM sv_KurseStammdaten";

mysqli_query($con,$query36);
		
		
			$Sem_Klassentermine= $SemesterkuerzelDB.'_Klassentermine';

$query15 = "DROP TABLE $Sem_Klassentermine";

mysqli_query($con,$query15);



$query25 = "CREATE TABLE $Sem_Klassentermine LIKE sv_Klassentermine";

mysqli_query($con,$query25);

$query35 = "INSERT INTO $Sem_Klassentermine SELECT * FROM sv_Klassentermine";

mysqli_query($con,$query35);
		
		
			$Sem_KurseLehrer1= $SemesterkuerzelDB.'_KurseLehrer';

$query10 = "DROP TABLE $Sem_KurseLehrer1";

mysqli_query($con,$query10);



$query20 = "CREATE TABLE $Sem_KurseLehrer1 LIKE sv_KurseLehrer";

mysqli_query($con,$query20);

$query30 = "INSERT INTO $Sem_KurseLehrer1 SELECT * FROM sv_KurseLehrer";

mysqli_query($con,$query30);
		
		
		$Sem_Klassenlehrer1= $SemesterkuerzelDB.'_Klassenlehrer';

$query11 = "DROP TABLE $Sem_Klassenlehrer1";

mysqli_query($con,$query11);



$query21 = "CREATE TABLE $Sem_Klassenlehrer1 LIKE sv_Klassenlehrer";

mysqli_query($con,$query21);

$query31 = "INSERT INTO $Sem_Klassenlehrer1 SELECT * FROM sv_Klassenlehrer";

mysqli_query($con,$query31);
		
		
$Sem_lernende= $SemesterkuerzelDB.'_Lernende';

$query = "DROP TABLE $Sem_lernende";

mysqli_query($con,$query);



$query1 = "CREATE TABLE $Sem_lernende LIKE sv_Lernende";

mysqli_query($con,$query1);

$query2 = "INSERT INTO $Sem_lernende SELECT * FROM sv_Lernende";

mysqli_query($con,$query2);

$Sem_lernendeModule= $SemesterkuerzelDB.'_LernendeModule';

$query3 = "DROP TABLE $Sem_lernendeModule";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_lernendeModule LIKE sv_LernendeModule";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_lernendeModule SELECT * FROM sv_LernendeModule";

mysqli_query($con,$query5);


$Sem_AbwesenheitenGesamt= $SemesterkuerzelDB.'_AbwesenheitenGesamt';

$query3 = "DROP TABLE $Sem_AbwesenheitenGesamt";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_AbwesenheitenGesamt LIKE sv_AbwesenheitenGesamt";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_AbwesenheitenGesamt SELECT * FROM sv_AbwesenheitenGesamt";

mysqli_query($con,$query5);


$Sem_AbwesenheitenKompakt= $SemesterkuerzelDB.'_AbwesenheitenKompakt';

$query3 = "DROP TABLE $Sem_AbwesenheitenKompakt";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_AbwesenheitenKompakt LIKE sv_AbwesenheitenKompakt";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_AbwesenheitenKompakt SELECT * FROM sv_AbwesenheitenKompakt";

mysqli_query($con,$query5);


$Sem_Kurse= $SemesterkuerzelDB.'_Kurse';

$query3 = "DROP TABLE $Sem_Kurse";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Kurse LIKE sv_Kurse";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Kurse SELECT * FROM sv_Kurse";

mysqli_query($con,$query5);


$Sem_Kurshistorie= $SemesterkuerzelDB.'_Kurshistorie';

$query3 = "DROP TABLE $Sem_Kurshistorie";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Kurshistorie LIKE sv_Kurshistorie";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Kurshistorie SELECT * FROM sv_Kurshistorie";

mysqli_query($con,$query5);



$Sem_Lehrpersonen= $SemesterkuerzelDB.'_Lehrpersonen';

$query3 = "DROP TABLE $Sem_Lehrpersonen";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Lehrpersonen LIKE sv_Lehrpersonen";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Lehrpersonen SELECT * FROM sv_Lehrpersonen";

mysqli_query($con,$query5);


$Sem_LernenderKurs= $SemesterkuerzelDB.'_LernenderKurs';

$query3 = "DROP TABLE $Sem_LernenderKurs";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_LernenderKurs LIKE sv_LernenderKurs";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_LernenderKurs SELECT * FROM sv_LernenderKurs";

mysqli_query($con,$query5);


$Sem_ZeitenStundenplan= $SemesterkuerzelDB.'_ZeitenStundenplan';

$query3 = "DROP TABLE $Sem_ZeitenStundenplan";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_ZeitenStundenplan LIKE sv_ZeitenStundenplan";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_ZeitenStundenplan SELECT * FROM sv_ZeitenStundenplan";

mysqli_query($con,$query5);



$Sem_Pruefungen= $SemesterkuerzelDB.'_Pruefungen';

$query3 = "DROP TABLE $Sem_Pruefungen";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Pruefungen LIKE sv_Pruefungen";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Pruefungen SELECT * FROM sv_Pruefungen";

mysqli_query($con,$query5);


$Sem_Noten= $SemesterkuerzelDB.'_Noten';

$query3 = "DROP TABLE $Sem_Noten";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Noten LIKE sv_Noten";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Noten SELECT * FROM sv_Noten";

mysqli_query($con,$query5);


$Sem_RecLernende= $SemesterkuerzelDB.'_RecoverLernende';

$query3 = "DROP TABLE $Sem_RecLernende";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_RecLernende LIKE sv_RecoverLernende";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_RecLernende SELECT * FROM sv_RecoverLernende";

mysqli_query($con,$query5);

$Sem_Rechner= $SemesterkuerzelDB.'_Rechner';

$query3 = "DROP TABLE $Sem_Rechner";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Rechner LIKE sv_Rechner";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Rechner SELECT * FROM sv_Rechner";

mysqli_query($con,$query5);
		

$Sem_Profile= $SemesterkuerzelDB.'_Profile';

$query3 = "DROP TABLE $Sem_Profile";

mysqli_query($con,$query3);
		
		
$query6 = "CREATE TABLE $Sem_Profile LIKE sv_Profile";

mysqli_query($con,$query6);

$query7 = "INSERT INTO $Sem_Profile SELECT * FROM sv_Profile";

mysqli_query($con,$query7);



$Sem_Users= $SemesterkuerzelDB.'_users';

$query3 = "DROP TABLE $Sem_Users";

mysqli_query($con1,$query3);



$query4 = "CREATE TABLE $Sem_Users LIKE sv_users";

mysqli_query($con1,$query4);

$query5 = "INSERT INTO $Sem_Users SELECT * FROM sv_users";

mysqli_query($con1,$query5);

	}

echo $Ferien1von;
    $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
    if ($SemesterkuerzelDB <> '') {
        $sql_befehl2 = "UPDATE sv_Settings SET Semesterkuerzel='$Semesterkuerzel', Semesteranfang='$Semesteranfang', Semesterende='$Semesterende', Ferien1von='$Ferien1von', Ferien1bis='$Ferien1bis', Ferien2von='$Ferien2von', Ferien2bis='$Ferien2bis', Ferien3von='$Ferien3von', Ferien3bis='$Ferien3bis',Ferien5von='$Ferien4von', Ferien5bis='$Ferien4bis', Ferien5von='$Ferien5von', Ferien5bis='$Ferien5bis', Klassenbuch='$Klassenbuch'";
    } else {
        $sql_befehl2 = "INSERT INTO sv_Settings (Semesterkuerzel, Semesteranfang, Semesterende, Ferien1von, Ferien1bis, Ferien2von, Ferien2bis, Ferien3von, Ferien3bis, Ferien4von, Ferien4bis,Ferien5von, Ferien5bis,Klassenbuch) VALUES ('$Semesterkuerzel', '$Semesteranfang','$Semesterende', '$Ferien1von', '$Ferien1bis', '$Ferien2von', '$Ferien2bis','$Ferien3von', '$Ferien3bis','$Ferien4von', '$Ferien4bis', '$Ferien5von', '$Ferien5bis', '$Klassenbuch')";
    }

    mysqli_query($con, $sql_befehl2);

    $sql_befehl_del = "Delete From sv_KurseAll where Stundenplan = 1 ";



// In die DB-Tabelle eintragen

    mysqli_query($con, $sql_befehl_del);

   


$con = @mysqli_connect(DB_HOST, DB_USER_EKL, DB_PASSWORD_EKL);

if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
//echo 'Connected to MySQL';
$verbunden=mysqli_select_db($con, DB_NAME_EKL);
if($verbunden)
//echo('DB-Verbindung hergestellt! ');
    $dummy=1;
else
    die('DB-Verbindung fehlgeschlagen! ');




$con1 = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$con1) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
//echo 'Connected to MySQL';
$verbunden=mysqli_select_db($con1, DB_NAME);
if($verbunden)
//echo('DB-Verbindung hergestellt! ');
    $dummy=1;
else
    die('DB-Verbindung fehlgeschlagen! ');


$isEntry2 = "Select Semesterkuerzel From sv_Settings";
$result2 = mysqli_query($con, $isEntry2);

while ($value3 = mysqli_fetch_array($result2)) {
    $SemesterkuerzelDBnew = $value3['Semesterkuerzel'];
}


$isEntry2 = "Select Semesterkuerzel From sv_SemesterArchiv";
$result2 = mysqli_query($con, $isEntry2);
$isFilled = false;
while ($value3 = mysqli_fetch_array($result2)) {
    $SemesterkuerzelDBArchiv = $value3['Semesterkuerzel'];

    if ($SemesterkuerzelDBnew == $SemesterkuerzelDBArchiv) {
        $isFilled = true;
    }
}
if (!$isFilled)
	
{
    
	$sql_befehl2 = "INSERT INTO sv_SemesterArchiv (Semesterkuerzel) VALUES ('$SemesterkuerzelDBnew')";
        mysqli_query($con, $sql_befehl2);
	$query1 = "Delete From sv_Pruefungen";

mysqli_query($con,$query1);

$query1 = "Delete From sv_AbwesenheitenKompakt";

mysqli_query($con,$query1);

$query1 = "Delete From sv_Kurshistorie";

mysqli_query($con,$query1);
	
	$query1 = "Delete From sv_Kurse";

mysqli_query($con,$query1);
	
	$query1 = "Delete From sv_LernenderKurs";

mysqli_query($con,$query1);

$query1 = "UPDATE sv_Lehrpersonen SET Kurs1 = '',Kurs2 = '',Kurs3 = '',Kurs4 = '',Kurs5 = '',Kurs6 = '',Kurs7 = '',Kurs8 = '',Kurs9 = '',Kurs10 = '',Kurs11 = '',Kurs12 = '',Kurs13 = '',Kurs14 = '',Kurs15 = '',Kurs16 = '',Kurs17 = '',Kurs18 = '',Kurs19 = '',Kurs20 = '',Kurs21 = '',Kurs22 = '',Kurs23 = '',Kurs24 = '',Kurs25 = '',Kurs26 = '',Kurs27 = '',Kurs28 = '',Kurs29 = '',Kurs30 = ''";

mysqli_query($con,$query1);
	
	
}

else{
	
	if ($SemesterkuerzelDB==$Semesterkuerzel){

	
}
	else{
	$Sem_Pruefungen= $Semesterkuerzel.'_Pruefungen';



$query1 = "Delete From sv_Pruefungen";

mysqli_query($con,$query1);

$query5 = "INSERT INTO sv_Pruefungen SELECT * FROM $Sem_Pruefungen";

mysqli_query($con,$query5);
		

$Sem_Klassentermine= $Semesterkuerzel.'_Klassentermine';
		
$query16 = "Delete From sv_Klassentermine";

mysqli_query($con,$query16);

$query56 = "INSERT INTO sv_Klassentermine SELECT * FROM $Sem_Klassentermine";

mysqli_query($con,$query56);
		
	
	
$Sem_AbwesenheitenKompakt= $Semesterkuerzel.'_AbwesenheitenKompakt';

$query1 = "Delete From sv_AbwesenheitenKompakt";

mysqli_query($con,$query1);

$query5 = "INSERT INTO sv_AbwesenheitenKompakt  SELECT * FROM $Sem_AbwesenheitenKompakt";

mysqli_query($con,$query5);


$Sem_Kurse= $Semesterkuerzel.'_Kurse';

	$query1 = "Delete From sv_Kurse";

mysqli_query($con,$query1);

$query5 = "INSERT INTO sv_Kurse  SELECT * FROM $Sem_Kurse";

mysqli_query($con,$query5);


$Sem_Kurshistorie= $Semesterkuerzel.'_Kurshistorie';

$query1 = "Delete From sv_Kurshistorie";

mysqli_query($con,$query1);

$query5 = "INSERT INTO sv_Kurshistorie SELECT * FROM  $Sem_Kurshistorie";

mysqli_query($con,$query5);



$Sem_Lehrpersonen= $Semesterkuerzel.'_Lehrpersonen';

	
	$query1 = "Delete From sv_Lehrpersonen";


mysqli_query($con,$query1);
	

$query5 = "INSERT INTO sv_Lehrpersonen SELECT * FROM $Sem_Lehrpersonen ";

mysqli_query($con,$query5);


$Sem_LernenderKurs= $Semesterkuerzel.'_LernenderKurs';

	$query1 = "Delete From sv_LernenderKurs";

mysqli_query($con,$query1);

$query5 = "INSERT INTO sv_LernenderKurs SELECT * FROM  $Sem_LernenderKurs";

mysqli_query($con,$query5);


$Sem_ZeitenStundenplan= $Semesterkuerzel.'_ZeitenStundenplan';

	$query1 = "Delete From sv_ZeitenStundenplan";

mysqli_query($con,$query1);

$query5 = "INSERT INTO sv_ZeitenStundenplan SELECT * FROM  $Sem_ZeitenStundenplan";

mysqli_query($con,$query5);	
	
}

$Sem_Klassenlehrer= $Semesterkuerzel.'_Klassenlehrer';

$query12 = "Delete From sv_Klassenlehrer";

mysqli_query($con,$query12);




$query32 = "INSERT INTO sv_Klassenlehrer  SELECT * FROM $Sem_Klassenlehrer";

mysqli_query($con,$query32);	
	
	
	
			$Sem_KurseStammdaten= $Semesterkuerzel.'_KurseStammdaten';

$query18 = "Delete From sv_KurseStammdaten";

mysqli_query($con,$query18);





$query38 = "INSERT INTO sv_KurseStammdaten  SELECT * FROM $Sem_KurseStammdaten ";

mysqli_query($con,$query38);

	
	
	
	
	
	
	$Sem_Zeiten= $Semesterkuerzel.'_Zeiten';

$query19 = "Delete From sv_Zeiten";

mysqli_query($con,$query19);





$query39 = "INSERT INTO sv_Zeiten  SELECT * FROM $Sem_Zeiten ";

mysqli_query($con,$query39);

	
	
	
	$Sem_KurseLehrer= $Semesterkuerzel.'_KurseLehrer';
	
	

$query13 = "Delete From sv_KurseLehrer";

mysqli_query($con,$query13);





$query33 = "INSERT INTO sv_KurseLehrer  SELECT * FROM $Sem_KurseLehrer ";

mysqli_query($con,$query33);
		
			
	
	
	
$Sem_lernende= $Semesterkuerzel.'_Lernende';

$query = "DROP TABLE $Sem_lernende";

mysqli_query($con,$query);



$query1 = "CREATE TABLE $Sem_lernende LIKE sv_Lernende";

mysqli_query($con,$query1);

$query2 = "INSERT INTO $Sem_lernende SELECT * FROM sv_Lernende";

mysqli_query($con,$query2);

$Sem_lernendeModule= $Semesterkuerzel.'_LernendeModule';

$query3 = "DROP TABLE $Sem_lernendeModule";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_lernendeModule LIKE sv_LernendeModule";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_lernendeModule SELECT * FROM sv_LernendeModule";

mysqli_query($con,$query5);


$Sem_AbwesenheitenGesamt= $Semesterkuerzel.'_AbwesenheitenGesamt';

$query3 = "DROP TABLE $Sem_AbwesenheitenGesamt";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_AbwesenheitenGesamt LIKE sv_AbwesenheitenGesamt";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_AbwesenheitenGesamt SELECT * FROM sv_AbwesenheitenGesamt";

mysqli_query($con,$query5);


$Sem_AbwesenheitenKompakt= $Semesterkuerzel.'_AbwesenheitenKompakt';

$query3 = "DROP TABLE $Sem_AbwesenheitenKompakt";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_AbwesenheitenKompakt LIKE sv_AbwesenheitenKompakt";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_AbwesenheitenKompakt SELECT * FROM sv_AbwesenheitenKompakt";

mysqli_query($con,$query5);


$Sem_Kurse= $Semesterkuerzel.'_Kurse';

$query3 = "DROP TABLE $Sem_Kurse";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Kurse LIKE sv_Kurse";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Kurse SELECT * FROM sv_Kurse";

mysqli_query($con,$query5);


$Sem_Kurshistorie= $Semesterkuerzel.'_Kurshistorie';

$query3 = "DROP TABLE $Sem_Kurshistorie";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Kurshistorie LIKE sv_Kurshistorie";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Kurshistorie SELECT * FROM sv_Kurshistorie";

mysqli_query($con,$query5);



$Sem_Lehrpersonen= $Semesterkuerzel.'_Lehrpersonen';

$query3 = "DROP TABLE $Sem_Lehrpersonen";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Lehrpersonen LIKE sv_Lehrpersonen";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Lehrpersonen SELECT * FROM sv_Lehrpersonen";

mysqli_query($con,$query5);


$Sem_LernenderKurs= $Semesterkuerzel.'_LernenderKurs';

$query3 = "DROP TABLE $Sem_LernenderKurs";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_LernenderKurs LIKE sv_LernenderKurs";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_LernenderKurs SELECT * FROM sv_LernenderKurs";

mysqli_query($con,$query5);


$Sem_ZeitenStundenplan= $Semesterkuerzel.'_ZeitenStundenplan';

$query3 = "DROP TABLE $Sem_ZeitenStundenplan";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_ZeitenStundenplan LIKE sv_ZeitenStundenplan";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_ZeitenStundenplan SELECT * FROM sv_ZeitenStundenplan";

mysqli_query($con,$query5);



$Sem_Pruefungen= $Semesterkuerzel.'_Pruefungen';

$query3 = "DROP TABLE $Sem_Pruefungen";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Pruefungen LIKE sv_Pruefungen";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Pruefungen SELECT * FROM sv_Pruefungen";

mysqli_query($con,$query5);


$Sem_Noten= $Semesterkuerzel.'_Noten';

$query3 = "DROP TABLE $Sem_Noten";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Noten LIKE sv_Noten";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Noten SELECT * FROM sv_Noten";

mysqli_query($con,$query5);


$Sem_RecLernende= $Semesterkuerzel.'_RecoverLernende';

$query3 = "DROP TABLE $Sem_RecLernende";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_RecLernende LIKE sv_RecoverLernende";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_RecLernende SELECT * FROM sv_RecoverLernende";

mysqli_query($con,$query5);

$Sem_Rechner= $Semesterkuerzel.'_Rechner';

$query3 = "DROP TABLE $Sem_Rechner";

mysqli_query($con,$query3);



$query4 = "CREATE TABLE $Sem_Rechner LIKE sv_Rechner";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Rechner SELECT * FROM sv_Rechner";

mysqli_query($con,$query5);
	
	
$Sem_Profile= $Semesterkuerzel.'_Profile';

$query3 = "DROP TABLE $Sem_Profile";

mysqli_query($con,$query3);	

$query4 = "CREATE TABLE $Sem_Profile LIKE sv_Profile";

mysqli_query($con,$query4);

$query5 = "INSERT INTO $Sem_Profile SELECT * FROM sv_Profile";

mysqli_query($con,$query5);


$Sem_Users= $Semesterkuerzel.'_users';

$query3 = "DROP TABLE $Sem_Users";

mysqli_query($con1,$query3);



$query4 = "CREATE TABLE $Sem_Users LIKE sv_users";

mysqli_query($con1,$query4);

$query5 = "INSERT INTO $Sem_Users SELECT * FROM sv_users";

mysqli_query($con1,$query5);
}
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



                $isEntryLPKurse = "SELECT * From sv_KurseLehrer  ";

                $result = mysqli_query($con, $isEntryLPKurse);



                $LP_ID=0;

                $Lehrperson="";

                while( $value= mysqli_fetch_array($result))

                {

                    $isEntryCreated=false;

                    $isKursExisting=false;

                   
						$KursValue = $value[ 'KursID' ];

						if ( $KursValue == $KursID ) {

							$LP_ID = $value[ 'LP_ID' ];


							$isEntry3 = "SELECT Nachname,Vorname From sv_Lehrpersonen where ID='$LP_ID' ";
							$result3 = mysqli_query( $con, $isEntry3 );

							while ( $value3 = mysqli_fetch_array( $result3 ) ) {
                                 $Lehrperson=$value3['Nachname'];
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


header('Location:'.$_SERVER['HTTP_REFERER']);
?>


