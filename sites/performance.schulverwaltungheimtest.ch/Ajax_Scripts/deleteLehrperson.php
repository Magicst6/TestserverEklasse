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

$isEntry2 = "SELECT  Klasse From sv_Kurse Group by Klasse";
                $result2 = mysqli_query($con, $isEntry2);

                while ($value1 = mysqli_fetch_array($result2)) {
					
					$Klasse=$value1['Klasse'];
					$Klasse = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
					
$klasseTab="sv_KurseAll".$Klasse;
					

$isEntry= "UPDATE $klasseTab SET LP_ID='',Lehrperson='' where LP_ID='$LP_ID'";
    mysqli_query($con,$isEntry);
				}
$isEntry= "Delete  From sv_Lehrpersonen where ID='$LP_ID'";
    mysqli_query($con,$isEntry);

echo "Der Lehrer ".$Lehrer." wurde aus dem System gelöscht.";