<?

include "db.php";
 $value=$_POST['q'];



$select='Select Vorname,Nachname,KursID from sv_Kurse inner join sv_Lehrpersonen ON sv_Kurse.Lehrperson=sv_Lehrpersonen.ID where Lehrperson in (Select ID from sv_Lehrpersonen where 
Kurs1 in (Select KursID from sv_LernenderKurs where SchuelerID="';
 $sel1=$value;
$sel2='") or  Kurs2 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel3='") or Kurs3 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel4='") or  Kurs4 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel5='") or Kurs5 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel6='") or  Kurs6 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel7='") or Kurs7 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel8='") or  Kurs8 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel9='") or Kurs9 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel10='") or  Kurs2 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel11='") or Kurs11 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel12='") or  Kurs12 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel13='") or Kurs13 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel14='") or  Kurs14 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel15='") or Kurs15 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel16='") or  Kurs16 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel17='") or Kurs17 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel18='") or  Kurs18 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel19='") or Kurs19 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel20='") or  Kurs20 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel21='") or Kurs21 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel22='") or  Kurs22 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel23='") or Kurs23 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel24='") or  Kurs24 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$se253='") or Kurs25 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel26='") or  Kurs26 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel27='") or Kurs27 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel28='") or  Kurs28 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel29='") or Kurs29 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel30='") or  Kurs30 in (Select KursID from sv_LernenderKurs where SchuelerID="';
$sel31='")) and KursID in (Select KursID from sv_LernenderKurs where SchuelerID="';




$sel32= '") Group by KursID';


 $isEntryUpd1=$select.$sel1.$sel2.$sel1.$sel3.$sel1.$sel4.$sel1.$sel5.$sel1.$sel6.$sel1.$sel7.$sel1.$sel8.$sel1.$sel9.$sel1.$sel10.$sel1.$sel11.$sel1.$sel12.$sel1.$sel13.$sel1.$sel14.$sel1.$sel15.$sel1.$sel16.$sel1.$sel17.$sel1.$sel18.$sel1.$sel19.$sel1.$sel20.$sel1.$sel21.$sel1.$sel22.$sel1.$sel23.$sel1.$sel24.$sel1.$sel25.$sel1.$sel26.$sel1.$sel27.$sel1.$sel28.$sel1.$sel29.$sel1.$sel30.$sel1.$sel31.$sel1.$sel32; 



$result1 = mysqli_query( $con, $isEntryUpd1 );


while ( $row = mysqli_fetch_array( $result1 ) ) {
  $output[] = array(
   'Nachname'   => $row["Nachname"],
   'Vorname'  => $row["Vorname"],
	  'KursID'  => $row["KursID"]	   
  );
}

echo json_encode($output);