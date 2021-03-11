  <? include 'db.php';
$Lehrer=$_GET['q'];
$Kurse=$_GET['k'];
preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];
$isEntry2= "Select *  From sv_KurseLehrer where LP_ID='$Lehrer' ";

    $result2 = mysqli_query($con, $isEntry2);
    
	while ($row2= mysqli_fetch_array($result2)) {
		
		$KursID1[]=$row2['KursID'];
	}
for($x = 1; $x <= $Kurse; $x++)
{

$Kurs = "Kurs"."$x";

	echo '<br>';
	echo $Kurs.': ';
	echo '<select Name='.$Kurs.'  id='.$Kurs.' >';	
	
	    echo "<option>" . $KursID1[$x-1] . "</option>";
	
		echo "<option>" . '' . "</option>";
		$isEntry1= "Select KursID From sv_Kurse Group by KursID asc";
        $result1 = mysqli_query($con,$isEntry1);
		while ($row3= mysqli_fetch_array($result1)) {
		$KursID=$row3['KursID'];
			echo "<option>" . $KursID . "</option>";
		}
		
		echo '</select><br/>';
	}
	
	
	
