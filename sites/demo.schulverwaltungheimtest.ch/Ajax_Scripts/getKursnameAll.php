<?php
include 'db.php';
$q = $_GET['q'];
$semester =$_GET['s'];
$isEntry2 = "Select Semesterkuerzel From sv_Settings";
$result2 = mysqli_query($con, $isEntry2);

while ($value3 = mysqli_fetch_array($result2)) {
    $SemesterkuerzelDBnew = $value3['Semesterkuerzel'];
}
if ($semester<>$SemesterkuerzelDBnew){
$Tab=$semester."_Kurse";
}
else $Tab = "sv_Kurse";
$isEntry= "Select KursID From $Tab order by KursID asc ";
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

?>
