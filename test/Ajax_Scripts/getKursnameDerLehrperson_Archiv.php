<?php
     include 'db.php';
$Lehrer=$_GET['q'];
$sem=$_GET['k'];
preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];
$LPs=$sem."_Lehrpersonen";
$isEntry = "SELECT Kurs1, Kurs2, Kurs3, Kurs4, Kurs5, Kurs6, Kurs7, Kurs8, Kurs9,Kurs10,Kurs11,Kurs12,Kurs13,Kurs14,Kurs15,Kurs16 From $LPs Where  ID='$Lehrer' ";
$result = mysqli_query($con, $isEntry);
$y=0;

while( $value= mysqli_fetch_array($result))
{

for($x = 1; $x <= 16; $x++)
{

$Kurs = "Kurs"."$x";
$KursValue= $value[$Kurs];
echo '<br/>';
echo $Kurs.': ';
echo '<input Name='.$Kurs.'  id='.$Kurs.' readonly value='.$KursValue.' >';


}

}
?>
