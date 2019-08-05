<?php
include 'db.php';






    $SemesterkuerzelDB = $_GET['k'];

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


  $SemesterkuerzelDB = $_GET['k'].'Change';

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



$query5 = "Update sv_Lehrpersonen Set Kurs1='',Kurs2='',Kurs3='',Kurs4='',Kurs5='',Kurs6='',Kurs7='',Kurs8='',Kurs9='',Kurs10='',Kurs11='',Kurs12='',Kurs13='',Kurs214='',Kurs15='',Kurs16=''";

mysqli_query($con,$query5);


$query5 = "Delete From sv_ZeitenStundenplan";

mysqli_query($con,$query5);

$query5 = "Delete From sv_Kurse";

mysqli_query($con,$query5);

$query5 = "Delete From sv_Kurshistorie";

mysqli_query($con,$query5);

$query5 = "Delete From sv_LernenderKurs";

mysqli_query($con,$query5);

$query5 = "Delete From sv_Noten";

mysqli_query($con,$query5);

$query5 = "Delete From sv_AbwesenheitenKompakt";

mysqli_query($con,$query5);

$query5 = "Delete From sv_AbwesenheitenGesamt";

mysqli_query($con,$query5);

$query5 = "Delete From sv_Pruefungen";

mysqli_query($con,$query5);






	
	?>