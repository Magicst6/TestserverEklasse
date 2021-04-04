<?php
include 'db.php';

 $sems=$_GET['semshow'];
  $sem=$_GET['sem'];

  $sem1=$_GET['sem1'];
  if ($sem1){
	  $sem=$sem1;
  }
 if (!$sem1 && !$sem) $sem=$sems;
 $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
	$semkl=$sem."_Klassentermine";

		
$isEntry4 = "Select * From sv_SemesterArchiv where Semesterkuerzel='$sem'";
    $result4 = mysqli_query($con, $isEntry4);

    while ($value4 = mysqli_fetch_array($result4)) {
		$Semesteranfang=$value4['Semesteranfang'];
		$Semesterende=$value4['Semesterende'];

	}
        echo    "<br><br><strong>Semesteranfang:</strong>";
   echo '<input name="Semesteranfang" type="date" value="'.$Semesteranfang.'" /><br><br>';
   
   echo     '<strong>Semesterende:</strong>';
   echo  '<input name="Semesterende" type="date" value="'.$Semesterende.'" /><br><br>';
   
         echo '<h1>Ferien und Feiertage</h1>';    

			echo '<table id="table_id" class="display" width="50%">';

			//Schreibe Spaltennamen

			echo "<thead>";

			echo "<tr>";
		    
		   echo "<th width=200>".'Name'."</th>";

			echo "<th width=200>".'Start'."</th>";

			echo "<th width=200>".'Ende'. "</th>";
            
            echo "<th width=60>".''."</th>";

			echo "<th width=60>".''. "</th>";

			

			echo "</tr>";



			echo "</thead>";
 
            echo "<tbody>";

 $y=0;
	if ($SemesterkuerzelDB==$sem || !$SemesterkuerzelDB){     
		   $isEntry = "SELECT * From sv_Klassentermine where Kommentar='Ferien' order by Start asc";
			}
            else{
				$isEntry = "SELECT * From $semkl where Kommentar='Ferien' order by Start asc";
			}
		
			$result = mysqli_query($con,$isEntry);

			while( $value= mysqli_fetch_array($result))

			{
				$Start=$value['Start'];
				$ID=$value['ID'];
				$Name=$value['Eventname'];
				$Ende=$value['Ende'];
                 	$Start=date("Y-m-d", strtotime($Start));
				
				$Ende=date("Y-m-d", strtotime($Ende));

				echo "<tr>";

				echo '<input name="ID'.$y.'"  id="ID'.$y.'" style="width: 200px" type="hidden"  value="'.$ID.'"  >';
			echo '<td><input name="Name'.$y.'"  id="Name'.$y.'" style="width: 200px" type="text"  value="'.$Name.'"  ></td>';
		echo '<td><input name="Start'.$y.'"  id="'.$y.'" style="width: 200px" type="date"  value="'.$Start.'"  ></td>';
        echo '<td><input name="Ende'.$y.'"  id="Beschreibung'.$y.'" style="width: 200px" type="date"  value="'.$Ende.'"  ></td>';
				echo '<td><input name="Delete'.$y.'" onclick="del('.$y.')" type="button" value="Löschen"   style="width: 120px" ></td>';
			
			


				echo "</tr>";
				
				 $y=$y+1;


			

			}


				echo "<tr>";

		echo '<td><input name="Name"  id="Name" style="width: 200px" type="text"  value=""  ></td>';
		   echo '<td><input name="Start"  id="Start" style="width: 200px" type="date"  value=""  ></td>';
        echo '<td><input name="Ende"  id="Ende" style="width: 200px" type="date"  value=""  ></td>';
		echo '<td><input name="Anlegen" onclick="create()" type="button" value="Erstellen"   style="width:120px" ></td>';
			
			


				echo "</tr>";

            echo "</tbody>";

			echo "</table>";
				

?>
