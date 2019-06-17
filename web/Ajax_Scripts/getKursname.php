<?php
include 'db.php';
$q = $_GET['q'];

$isEntry= "Select KursID From sv_Kurse Where Klasse='$q'";
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
$isEntry1= "Select KursID From sv_ExtraKurse Where Klasse='$q'";
$result1 = mysqli_query($con,$isEntry1);
$resultarr1 = array();


while( $line3= mysqli_fetch_assoc($result1))
{
    $resultarr1[] = $line3['KursID'];
}
$uniquearr1 = array_unique($resultarr1);

foreach ($uniquearr1 as $value1) {
    if ($value1 == $_GET['Kursname'])
    {
        echo "<option>" . $_GET['Kursname'] . "</option>";
    }
    else{}

}
foreach ($uniquearr1 as $value1)
{
    echo "<option>" . $value1 . "</option>";
}
echo '&nsbp;';
?>
