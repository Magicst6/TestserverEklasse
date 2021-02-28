<?php
include 'db.php';
$Lehrer=$_GET['q'];
preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];

$y=0;

$semester =$_GET['s'];





$isEntry = "Select * From sv_Settings ";
$result = mysqli_query($con, $isEntry);

while ($line1 = mysqli_fetch_array($result)) {

    $semDB=$line1['Semesterkuerzel'];

}

if ($semester==$semDB or $semester==null){
    $Tab='sv_KurseLehrer';
    $TabKurse="sv_Kurse";

} else{


    $Tab=$semester."_KurseLehrer";
    $TabKurse=$semester."_Kurse";
}


if ($_GET['q']=="Alle")
{
	
	$isEntry= "Select KursID From $TabKurse order by KursID asc ";
$result = mysqli_query($con,$isEntry);
$resultarr = array();


while( $line2= mysqli_fetch_assoc($result))
{
    $resultarr[] = $line2['KursID'];
}
$uniquearr = array_unique($resultarr);


echo "<option>" .''. "</option>";
foreach ($uniquearr as $value)
{
    echo "<option>" . $value . "</option>";
}
echo '&nsbp;';
	
}else{
$isEntry= "Select KursID From $Tab Where LP_ID = '$Lehrer'";
$result = mysqli_query($con,$isEntry);


 echo "<option>" . '' . "</option>";
	

while( $line2= mysqli_fetch_array($result))
{
	


$value = $line2['KursID'];
if ($value<>"") echo "<option>" . $value . "</option>";


}
}
?>
