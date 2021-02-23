<?

include "db.php";
 $value=$_POST['q'];
preg_match("/:(.*)/", $value, $output_array);
$value=$output_array[1];

$sem=$_POST['sem'];

if ($sem){
	$AK=$sem.'_AbwesenheitenKompakt';
	
}
else{
	//$AK='sv_AbwesenheitenKompakt';
}
	$select="Select Kursname,Sum(Abwesenheitsdauer) As Abw from $AK where SchuelerID='$value' Group by SchuelerID ";
	 $isEntryUpd1 = $select;
	




$result1 = mysqli_query( $con, $isEntryUpd1 );


while ( $row = mysqli_fetch_array( $result1 ) ) {
  if ($row["Abw"]>0){
	$output[] = array(
   'Abwesenheit'   => floatval($row["Abw"]),
	  
	
	  'Kursname'  => $row["Kursname"],
	  
  );
  }
}

echo json_encode($output);