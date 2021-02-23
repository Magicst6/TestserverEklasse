<?

include "db.php";
 $value=$_POST['q'];
if(!$value){
	$select="Select Nachname,Sum(Abwesenheitsdauer) As Abw from sv_AbwesenheitenKompakt Group by SchuelerID ";
	 $isEntryUpd1 = $select;
}

else{
	$select="Select Nachname,Sum(Abwesenheitsdauer) As Abw from sv_AbwesenheitenKompakt where Kursname='$value' Group by SchuelerID ";
	 $isEntryUpd1 = $select;
	
}



$result1 = mysqli_query( $con, $isEntryUpd1 );


while ( $row = mysqli_fetch_array( $result1 ) ) {
  if ($row["Abw"]>0){
	$output[] = array(
   'Abwesenheit'   => floatval($row["Abw"]),
	  
	
	  'Nachname'  => $row["Nachname"],
	  
  );
  }
}

echo json_encode($output);