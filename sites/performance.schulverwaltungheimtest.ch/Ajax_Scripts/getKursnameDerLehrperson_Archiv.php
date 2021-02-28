<?php
     include 'db.php';
$Lehrer=$_GET['q'];
$sem=$_GET['k'];
$Kurse=$_GET['l'];
preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];
$LPs=$sem."_KurseLehrer";
$isEntry = "SELECT KursID From $LPs Where  LP_ID='$Lehrer' ";
$result = mysqli_query($con, $isEntry);
$y=0;

$x=0;

while( $value= mysqli_fetch_array($result))
{
$x++;	
$Kurs = "Kurs"."$x";

echo '<br/>';
echo $Kurs.': ';
$KursValue= $value['KursID'];
echo '<input Name='.$Kurs.'  id='.$Kurs.' readonly value='.$KursValue.' >';


}


?>
