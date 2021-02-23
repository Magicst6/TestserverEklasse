<? 

include 'db.php'; 

$Lehrer=$_GET['lehrer'];

preg_match("/:(.*)/", $Lehrer, $output_array);
$LP_ID=$output_array[1];
$isEntry= "UPDATE sv_Kurse SET Lehrperson='' where Lehrperson='$LP_ID'";
    mysqli_query($con,$isEntry);
$isEntry= "UPDATE sv_KurseStammdaten SET Lehrer='' where Lehrer='$Lehrer'";
    mysqli_query($con,$isEntry);
$isEntry= "Delete From sv_KurseLehrer where LP_ID='$LP_ID'";
    mysqli_query($con,$isEntry);
$isEntry= "Delete From sv_Klassenlehrer where LP_ID='$LP_ID'";
    mysqli_query($con,$isEntry);

$isEntry= "UPDATE sv_KurseAll SET LP_ID='',Lehrperson='' where LP_ID='$LP_ID'";
    mysqli_query($con,$isEntry);

$isEntry= "Delete  From sv_Lehrpersonen where ID='$LP_ID'";
    mysqli_query($con,$isEntry);

echo "Der Lehrer ".$Lehrer." wurde aus dem System gelöscht.";