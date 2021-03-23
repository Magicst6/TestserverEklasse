<<div class="loading"><span></span><div class="loader"></div></div>

<br/><br/>
<button>Replay</button>


<footer><br/>
  Created by Roodper and
  <a target="_blank" href="http://geekben.com">GeekBen</a></footer>
<script>
	
$(document).ready(function() {
    
    loading();
  
  $('button').click(function(){
   loading();
  });
  
  
});

function loading(){
   $('button').hide();
  var num = 0;
    for(i=0; i<=100; i++) {
        setTimeout(function() { 
            $('.loading span').html(num+'%');
           
            num++;
          if(num==100){
            $('button').show();
          }
        },i*120);
    };
  
}
	</script>

<style>
	
body{
  text-align:center; 
  margin:100px auto; 
  background:#f1f1f1
}

.loading {
  position:relative;
  margin:0 auto;
  width:100px;
  height:100px;
  
}
.loading span{  
  position:absolute;
  top:46%;
  left:44%;
  font-family: 'Helvetica Neue', Helvetica, Roboto, sans-serif;
font-size: 12px;
font-weight: bold;
  
}

.loader{
  width:100px;
  height:100px;
  position: relative;
  background:transparent;
  margin:1% auto;
  border:5px dashed #265573;
  -webkit-border-radius:100%;

  
   animation: spin 12s linear infinite;  
  -webkit-animation: spin 12s linear infinite;
  -moz-animation: spin 12s linear infinite;
  -o-animation: spin 12s linear infinite; 
  
  
  box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
  -webkit-box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
  -moz-box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
  -o-box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
}

.loader:before{
  content:'';
  position:absolute;
  width:70%;
  height:70%;
  border:4px dashed #386D73;
  border-radius:100%;
  top:11%;
  left:11%;

  box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -moz-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -o-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  
   animation: spin 8s linear infinite;  
  -webkit-animation: spin 8s linear infinite;
  -moz-animation: spin 8s linear infinite;
  -o-animation: spin 8s linear infinite;  
  
}

.loader:after{
  content:'';
  position:absolute;
  width:40%;
  height:40%;
  border:3px dashed #81A68A;
  border-radius:100%;
  top:27%;
  left:27%;
  
  box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -moz-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -o-box-shadow: 0 0 10px rgba(0,0,0,0.25);

  animation: spin 3s linear infinite;  
  -webkit-animation: spin 3s linear infinite;
  -moz-animation: spin 3s linear infinite;
  -o-animation: spin 3s linear infinite;  
  
}


@keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}

@-webkit-keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}

@-moz-keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}

@-o-keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}



footer{
  position:fixed;
  bottom:20px;
  text-align:center;
  display:block;
  width:100%;
  color:grey;
  font-family: 'Helvetica Neue', Helvetica, Roboto, sans-serif;
  font-weight:300;
}

footer a{
  text-decoration:none;
  color:rgba(0,0,0,0.8);
}
</style>


<?php


include 'db.php';

 $Schulname = $_POST['Schulname'];
 $Schulort = $_POST['Schulort'];
    $Semesterkuerzel = $_POST['Semesterkuerzel'];
if (!$Semesterkuerzel){
	
    $Semesterkuerzel = $_POST['Semester'];
}
if (!$Semesterkuerzel)
{
	$Semesterkuerzel = $_POST['Semestershow'];
}
    $Semesteranfang = $_POST['Semesteranfang'];
    $Semesterende = $_POST['Semesterende'];
   
    $Klassenbuch = $_POST['Klassenbuch'];

echo $Klassenbuch;
$isnotentered=0;
 $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
	if (!$SemesterkuerzelDB){
		$isnotentered=1;
		$SemesterkuerzelDB=$Semesterkuerzel;
	}
echo $Semesterkuerzel;
		
		$Sem_Zeiten= $SemesterkuerzelDB.'_Zeiten';

$query40 = "DROP TABLE $Sem_Zeiten";

mysqli_query($con,$query40);



$query41 = "CREATE TABLE $Sem_Zeiten LIKE sv_Zeiten";

mysqli_query($con,$query41);

$query42 = "INSERT INTO $Sem_Zeiten SELECT * FROM sv_Zeiten";

mysqli_query($con,$query42);
		
	
			$Sem_Zeugnisse= $SemesterkuerzelDB.'_Zeugnisse';

$query16 = "DROP TABLE $Sem_Zeugnisse";

mysqli_query($con,$query16);



$query26 = "CREATE TABLE $Sem_Zeugnisse LIKE sv_Zeugnisse";

mysqli_query($con,$query26);

$query36 = "INSERT INTO $Sem_Zeugnisse SELECT * FROM sv_Zeugnisse";

mysqli_query($con,$query36);

		
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
		

	$Sem_NotenKurs= $SemesterkuerzelDB.'_NotenKurs';

$query10 = "DROP TABLE $Sem_NotenKurs";

mysqli_query($con,$query10);



$query20 = "CREATE TABLE $Sem_NotenKurs LIKE sv_NotenKurs";

mysqli_query($con,$query20);

$query30 = "INSERT INTO $Sem_NotenKurs SELECT * FROM sv_NotenKurs";

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

	

echo $Ferien1von;
    $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
    if ($SemesterkuerzelDB <> '' && !$isnotentered) {
        $sql_befehl2 = "UPDATE sv_Settings SET Semesterkuerzel='$Semesterkuerzel', Semesteranfang='$Semesteranfang', Semesterende='$Semesterende', Ferien1von='$Ferien1von', Ferien1bis='$Ferien1bis', Ferien2von='$Ferien2von', Ferien2bis='$Ferien2bis', Ferien3von='$Ferien3von', Ferien3bis='$Ferien3bis',Ferien5von='$Ferien4von', Ferien5bis='$Ferien4bis', Ferien5von='$Ferien5von', Ferien5bis='$Ferien5bis', Klassenbuch='$Klassenbuch', Schulname='$Schulname', Schulort='$Schulort'";
    } else {
        $sql_befehl2 = "INSERT INTO sv_Settings (Semesterkuerzel, Semesteranfang, Semesterende, Ferien1von, Ferien1bis, Ferien2von, Ferien2bis, Ferien3von, Ferien3bis, Ferien4von, Ferien4bis,Ferien5von, Ferien5bis,Klassenbuch,Schulname,Schulort) VALUES ('$Semesterkuerzel', '$Semesteranfang','$Semesterende', '$Ferien1von', '$Ferien1bis', '$Ferien2von', '$Ferien2bis','$Ferien3von', '$Ferien3bis','$Ferien4von', '$Ferien4bis', '$Ferien5von', '$Ferien5bis', '$Klassenbuch','$Schulname','$Schulort')";
    }



    mysqli_query($con, $sql_befehl2);

$isEntry1 = "SELECT  Klasse From sv_Kurse Group by Klasse";
                $result1 = mysqli_query($con, $isEntry1);

                while ($value1 = mysqli_fetch_array($result1)) {
					
					$Klasse=$value1['Klasse'];
					$Klasse = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
		if ($Klasse){			
$klasseTab="sv_KurseAll".$Klasse;




    $sql_befehl_del = "Drop Table $klasseTab";



// In die DB-Tabelle eintragen

    mysqli_query($con, $sql_befehl_del);
				}
				}


$isEntrytbl = "SELECT  Klasse From sv_Lernende Group by Klasse";
                $resulttbl = mysqli_query($con, $isEntrytbl);

                while ($valuetbl = mysqli_fetch_array($resulttbl)) {
					
					$Klasse=$valuetbl['Klasse'];
					$Klasse =stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
					if ($Klasse){
$klasseTab="sv_KurseAll".$Klasse;
$crtbl="	CREATE TABLE $klasseTab (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Kursname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `Tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Start` datetime DEFAULT NULL,
  `Ende` datetime DEFAULT NULL,
  `Lektionen` int(11) DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zimmer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZI_ID` int(11) DEFAULT NULL,
  `Lehrperson` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LP_ID` int(11) DEFAULT NULL,
  `Farbe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Startdatum` date DEFAULT NULL,
  `Enddatum` date DEFAULT NULL,
  `Stundenplan` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
mysqli_query($con, $crtbl);
					}
					}


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

 $sql_befehl3 = "Update sv_SemesterArchiv  SET Semesteranfang= '$Semesteranfang',Semesterende='$Semesterende' where Semesterkuerzel='$SemesterkuerzelDBnew' ";
        mysqli_query($con, $sql_befehl3);

if (!$isFilled)
	
{
    $sql_befehl2 = "INSERT INTO sv_SemesterArchiv (Semesterkuerzel,Semesteranfang,Semesterende) VALUES ('$SemesterkuerzelDBnew','$Semesteranfang','$Semesterende')";
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

	
		$Sem_Zeugnisse= $Semesterkuerzel.'_Zeugnisse';



$query1 = "Delete From sv_Zeugnisse";

mysqli_query($con,$query1);

$query5 = "INSERT INTO sv_Zeugnisse SELECT * FROM $Sem_Zeugnisse";

mysqli_query($con,$query5);
		
	
	
	$Sem_Pruefungen= $Semesterkuerzel.'_Pruefungen';



$query1 = "Delete From sv_Pruefungen";

mysqli_query($con,$query1);

$query5 = "INSERT INTO sv_Pruefungen SELECT * FROM $Sem_Pruefungen";

mysqli_query($con,$query5);
		

$Sem_Klassentermine= $Semesterkuerzel.'_Klassentermine';
		
$query16 = "Delete From sv_Klassentermine";

mysqli_query($con,$query16);

$query56 = "INSERT INTO sv_Klassentermine SELECT * FROM $Sem_Klassentermine1";

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
	


$Sem_Klassenlehrer= $Semesterkuerzel.'_Klassenlehrer';

$query12 = "Delete From sv_Klassenlehrer";

mysqli_query($con,$query12);




$query32 = "INSERT INTO sv_Klassenlehrer  SELECT * FROM $Sem_Klassenlehrer";

mysqli_query($con,$query32);	
	
	
	


	
	
	
	
	
	
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
		


$Sem_KurseLehrer= $Semesterkuerzel.'_NotenKurs';
	
	

$query13 = "Delete From sv_NotenKurs";

mysqli_query($con,$query13);





$query33 = "INSERT INTO sv_NotenKurs  SELECT * FROM $Sem_NotenKurs ";

mysqli_query($con,$query33);
	
	
	$Sem_KurseStammdaten= $Semesterkuerzel.'_KurseStammdaten';
		
$query16 = "Delete From sv_KurseStammdaten";

mysqli_query($con,$query16);

$query56 = "INSERT INTO sv_KurseStammdaten SELECT * FROM $Sem_KurseStammdaten";

mysqli_query($con,$query56);
		

}


$Sem_Klassentermine= $Semesterkuerzel.'_Klassentermine';
		
$query16 = "Delete From sv_Klassentermine";

mysqli_query($con,$query16);

$query56 = "INSERT INTO sv_Klassentermine SELECT * FROM $Sem_Klassentermine";

mysqli_query($con,$query56);
		
	
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


$isEntryStundenplan= "Select * From sv_KurseAll ";

    $resultStundenplan = mysqli_query($con, $isEntryStundenplan);



    while( $valueStundenplan= mysqli_fetch_array($resultStundenplan)) {
		
		$KursID = $valueStundenplan['KursID'];

        $Tag = $valueStundenplan['Tag'];

        $Klasse = $valueStundenplan['Klasse'];

        $Zimmer= $valueStundenplan['Zimmer'];

        $Kursname = $valueStundenplan['Kursname'];

        $Start = $valueStundenplan['Start'];

        $End = $valueStundenplan['Ende'];

       

        $Farbe=$valueStundenplan['Farbe'];
		
		$Lehrperson=$valueStundenplan['Lehrperson'];
		
		$LP_ID=$valueStundenplan['LP_ID'];
		
		$Datum=$valueStundenplan['Datum'];
		
		
$Klasse1 = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
					$klasseTab="sv_KurseAll".$Klasse1;
					
                    $sql_befehl = "INSERT INTO $klasseTab (Kursname, KursID, Tag, Klasse, LP_ID,Datum, Start, Ende, Lehrperson,Farbe,Zimmer, Stundenplan ) VALUES ('$Kursname','$KursID','$Tag','$Klasse','$LP_ID','$Datum','$Start','$End','$Lehrperson','$Farbe','$Zimmer', 0 )";

		               mysqli_query($con, $sql_befehl);
	}


 $isEntryStundenplan= "Select * From sv_Kurse where Stundenplan=1";

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
		$Klasse1 = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
		
		$klasseTab="sv_KurseAll".$Klasse1;

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

            $isEntry = "Select * From $klasseTab";

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



                $isEntryLPKurse = "SELECT * From sv_KurseLehrer where KursID='$KursID'  ";

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
					

			$Klasse1 = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
					$klasseTab="sv_KurseAll".$Klasse1;
					
                    $sql_befehl = "INSERT INTO $klasseTab (Kursname, KursID, Tag, Klasse, LP_ID,Datum, Start, Ende, Lehrperson,Farbe,Zimmer, Stundenplan ) VALUES ('$Kursname','$KursID','$Tag','$Klasse','$LP_ID','$Datum','$Start','$End','$Lehrperson','$Farbe','$Zimmer', 1)";



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

                    $isEntrySet = "Select * From sv_Klassentermine where Kommentar='Ferien'";

                    $resultSet = mysqli_query($con, $isEntrySet);


                    while ($valueSet = mysqli_fetch_array($resultSet)) {

						 if (($Start>=$valueSet['Start'] and $Start<=$valueSet['Ende'])){
						
                       /* if (($Start>=$valueSet['Ferien1von'] and $Start<=$valueSet['Ferien1bis']) or ($Start>=$valueSet['Ferien2von'] and $Start<=$valueSet['Ferien2bis']) or ($Start>=$valueSet['Ferien3von'] and $Start<=$valueSet['Ferien3bis']) or ($Start>=$valueSet['Ferien4von'] and $Start<=$valueSet['Ferien4bis']) or ($Start>=$valueSet['Ferien5von'] and $Start<=$valueSet['Ferien5bis'])) {
*/

                            $isExisting = true;

                        }//     echo "line already existing";

                    }

                    $End = date('Y-m-d H:i:s', strtotime($Start . '+45 minutes'));

                    $isEntry = "Select * From $klasseTab";

                    $result = mysqli_query($con, $isEntry);



                    while ($value = mysqli_fetch_array($result)) {

                        if (($value['Start'] == $Start) and ($value['Ende'] == $End) and ($value['KursID'] == $KursID)) {

                            $isExisting = true;


                        }
                    }







                    if (!$isExisting) {
						
						
			$Klasse1 = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
					$klasseTab="sv_KurseAll".$Klasse1;

                        $sql_befehl = "INSERT INTO $klasseTab (Kursname,KursID, Tag, Klasse, LP_ID,Datum, Start, Ende, Lehrperson,Farbe,Zimmer,Stundenplan ) VALUES ('$Kursname','$KursID','$Tag','$Klasse','$LP_ID','$Datum','$Start','$End','$Lehrperson','$Farbe','$Zimmer',1)";





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


