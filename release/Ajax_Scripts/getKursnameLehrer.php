<?php
include 'db.php';
$Lehrer=$_GET['q'];
preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];

$y=0;

$semester =$_GET['s'];
if ($semester){
$Tab=$semester."_Lehrpersonen";
	$TabKurse=$semester."_Kurse";
}
else {
	$Tab='sv_Lehrpersonen';
	$TabKurse="sv_Kurse";
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


echo "<option>" .'-Select-'. "</option>";
foreach ($uniquearr as $value)
{
    echo "<option>" . $value . "</option>";
}
echo '&nsbp;';
	
}else{
$isEntry= "Select Kurs1, Kurs2, Kurs3, Kurs4, Kurs5, Kurs6, Kurs7, Kurs8, Kurs9,Kurs10,Kurs11,Kurs12,Kurs13,Kurs14,Kurs15,Kurs16 From $Tab Where ID = $Lehrer";
$result = mysqli_query($con,$isEntry);


 echo "<option>" . '-Select-' . "</option>";

while( $line2= mysqli_fetch_array($result))
{
for($x = 1; $x <= 16; $x++)
{

$value = $line2['Kurs'.$x];
if ($value<>"") echo "<option>" . $value . "</option>";

}
}
}
?>
