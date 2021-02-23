<form action="/wp-content/themes/structr/Page_Scripts/uploadsKlassentermine.php" method="post" enctype="multipart/form-data">

<h3>Klassentermine importieren</h3>	
	
Wählen Sie die Klasse:<br>

    <select name="klasse" id="klasse"  required="required">



<?php



        
  global $current_user;

    get_currentuserinfo();


        include 'db.php';



 $isEntry2= "Select ID From sv_Lehrpersonen where User_ID='$current_user->ID'";

        $result2 = mysqli_query($con,$isEntry2);

		 while( $line3= mysqli_fetch_assoc($result2))

          {
			 $ID=$line3['ID'];
		 }



        $isEntry= "Select Klasse From sv_Klassenlehrer where LP_ID='$ID'";

        $result1 = mysqli_query($con,$isEntry);

        $resultarr1 = array();
         
        echo "<option>-Select-</option>";
		
        while( $line2= mysqli_fetch_assoc($result1))

        {

            $resultarr1[] = $line2['Klasse'];
			
			

        }

        $uniquearr1 = array_unique($resultarr1);

        asort($uniquearr1);





        foreach ($uniquearr1 as $value)

        {

            if ($value == $_GET['klasse']){}

            else

            {
               if ($value){
                echo "<option>" . $value . "</option>";
			   }
            }

        }



        ?>





</select>

    <br>

    Wählen Sie das Semester aus :

    <br>

    <select name="semester" id="semester"  required="required">
<?
		
		$isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
		?>
        <option><?php echo $SemesterkuerzelDB;?></option>

      
    </select>

    <br>

    Wählen Sie eine csv-Datei aus :

    <br>

    <input type="file" name="fileToUpload" id="fileToUpload">

    <input type="submit" value="Upload File" name="submit">

    <br>

    Hier die CSV-Vorlage zum ausfüllen:

    <br>

    <a href="/wp-content/themes/structr/Page_Scripts/EKlasse_Klassentermine_Vorlage.csv" download>

         CSV-Klassenimportvorlage

    </a>

</form>