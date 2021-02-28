 <?php
  include 'db.php'; 
 $KID=$_GET['q'];
$isEntry= "Delete From sv_Kurse where KursID='$KID'";
    mysqli_query($con,$isEntry);
$isEntry= "Delete From sv_LernenderKurs where KursID='$KID'";
    mysqli_query($con,$isEntry);

$isEntry2 = "SELECT  Klasse From sv_Kurse Group by Klasse";
                $result2 = mysqli_query($con, $isEntry2);

                while ($value1 = mysqli_fetch_array($result2)) {
					
					$Klasse=$value1['Klasse'];
					$Klasse = stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
					
$klasseTab="sv_KurseAll".$Klasse;
					
$isEntry= "Delete From $klasseTab where KursID='$KID'";
    mysqli_query($con,$isEntry);
				}
echo "Kurs ".$KID." gelöscht!";
    ?>