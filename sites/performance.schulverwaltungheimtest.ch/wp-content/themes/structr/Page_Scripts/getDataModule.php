<?

include "db.php";

$select='Select Klasse, Count(Klasse)As Schuelerzahl from sv_Lernende where Klasse in (Select Modul1 from sv_LernendeModule where ID="';
 $sel1=$_POST['q'];
$sel2='") or Klasse  in (Select Modul2 from sv_LernendeModule where ID="';
$sel3='") or Klasse in (Select Modul3 from sv_LernendeModule where ID="';
$sel4='") or Klasse in (Select Modul4 from sv_LernendeModule where ID="';	
$sel5='") or Klasse in (Select Modul5 from sv_LernendeModule where ID="';
$sel6='") or Klasse in (Select Modul6 from sv_LernendeModule where ID="';	
$sel7='") or Klasse in (Select Modul7 from sv_LernendeModule where ID="';
$sel8='") or Klasse in (Select Modul8 from sv_LernendeModule where ID="';
$sel9='") or Klasse in (Select Modul9 from sv_LernendeModule where ID="';
$sel10='") or Klasse in (Select Modul10 from sv_LernendeModule where ID="';
$sel11='") or Klasse in (Select Modul11 from sv_LernendeModule where ID="';	
$sel12='") or Klasse in (Select Modul12 from sv_LernendeModule where ID="';

$sel13= '") Group by Klasse';
 $isEntryUpd2 = $select.$sel1.$sel2.$sel1.$sel3.$sel1.$sel4.$sel1.$sel5.$sel1.$sel6.$sel1.$sel7.$sel1.$sel8.$sel1.$sel9.$sel1.$sel10.$sel1.$sel11.$sel1.$sel12.$sel1.$sel13;
	
$result1 = mysqli_query( $con, $isEntryUpd2 );


while ( $row = mysqli_fetch_array( $result1 ) ) {
  $output[] = array(
   'Klasse'   => $row["Klasse"],
   'Schuelerzahl'  => intval($row["Schuelerzahl"])
  );
}

echo json_encode($output);

?>