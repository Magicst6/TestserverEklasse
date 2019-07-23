<style type="text/css">
    .auto-style1 {
        background-color: red;
    }
    .auto-style2 {
        color: black;
        background-color: ;
        font-size: large;

    }
</style>
<form action=" /DBFuellung/DBFuellungNoten.php" method="POST">

<?php
include 'db.php';
$Klasse= $_GET['f'];
$Kursnme= $_GET['g'];
$datum=$_GET['h'];
?>

 <fieldset>

            <label for="Title">Prüfungsname:</label>

            <br>

            <input type="text" name="title" id="title" value="<?php echo $_GET['i'];?>" width="400px" readonly  >

            <br>

            <label for="start">Startdatum und Zeit:</label>

            <br>

            <input type="date" name="startdate" id="startdate" value="<?php echo $_GET['h'];?>"  class="text ui-widget-content ui-corner-all" readonly>

            <input type="time" name="starttime" id="starttime" value="<?php echo $_GET['j'];?>"  class="text ui-widget-content ui-corner-all" readonly>

            <br>

          <label for="end">Enddatum und Zeit:</label>
          <br>


     <input type="date" name="enddate" id="enddate" value="<?php echo $_GET['k'];?>" class="text ui-widget-content ui-corner-all" readonly>

            <input type="time" name="endtime" id="endtime" value="<?php echo $_GET['l'];?>" class="text ui-widget-content ui-corner-all" readonly>

            <br>

     <label for="gewicht">Gewichtung:</label>

     <br>

     <input type="text" name="gewicht" id="gewicht" value="<?php echo $_GET['e'];?>" class="text ui-widget-content ui-corner-all" readonly>

     <br>

            <label for="kursid">KursID:</label>

            <br>

            <input type="text" name="kursid" id="kursid" value="<?php echo $_GET['g'];?>" class="text ui-widget-content ui-corner-all" readonly >

            <br>

            <label for="kursname">Kursname:</label>

            <br>

            <input type="text" name="kursname" id="kursname" value="<?php echo $_GET['n'];?>" class="text ui-widget-content ui-corner-all" readonly>

            <br>

            <label for="klasse">Klasse:</label>

            <br>

            <input type="text" name="klasse" id="klasse" value="<?php echo $_GET['f'];?>" class="text ui-widget-content ui-corner-all" readonly >

            <br>

            <label for="zimmer">Zimmer:</label>

            <br>

            <input type="text" name="zimmer" id="zimmer" value="<?php echo $_GET['m'];?>" class="text ui-widget-content ui-corner-all" readonly >

            <br>

            <label for="lehrperson">Lehrperson:</label>

            <br>

            <input type="text" name="lehrperson" id="lehrperson" value="<?php echo $_GET['o'];?>" class="text ui-widget-content ui-corner-all" readonly >

            <br>


            <input type="hidden" name="farbe" id="farbe" value="<?php echo $_GET['p'];?>" class="text ui-widget-content ui-corner-all" readonly >

            <!-- Allow form submission with keyboard without duplicating the dialog button -->

            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">



        </fieldset>
	<?php
	 $Pruefungsname=$_GET['i'];
	  $isEntry = "SELECT Kommentar,Gewichtung From sv_Pruefungen Where Pruefungsname='$Pruefungsname' and Datum='$datum' and KursID='$Kursnme' ";
    $result = mysqli_query($con, $isEntry);
    $y = 0;
    while ($value1 = mysqli_fetch_array($result)) {
		$Comment=$value1['Kommentar'];
	}
	?>
	 Kommentar zur Prüfung:
     <textarea name="Comment"><?php echo $Comment;?></textarea>
<?php
if ($Kursnme<>'' && $Kursnme<>"-Select-") {
    
    echo '<br>';


    echo "<br><br><br>"."Bitte unten die Noten der Schüler eintragen";

    echo '<br>';

    $isEntry = "SELECT Name, Vorname, ID,Profil  From sv_LernendeModule Where Modul1='$Klasse' or Modul2='$Klasse' or Modul3='$Klasse' or Modul4='$Klasse' or Modul5='$Klasse' or Modul6='$Klasse' or Modul7='$Klasse' or Modul8='$Klasse' or Modul9='$Klasse' or Modul10='$Klasse' or Modul11='$Klasse' or Modul12='$Klasse'  Order By Name asc";
    $result = mysqli_query($con, $isEntry);
    $y = 0;
    while ($value1 = mysqli_fetch_array($result)) {
        $isfilled = 0;
        $Vorname = $value1['Vorname'];
        $Name = $value1['Name'];
        $ID = $value1['ID'];
        $Profil = $value1['Profil'];




            $isEntry1 = "SELECT Note, Datum,SchuelerID From sv_Noten Where Name='$Pruefungsname' and KursID='$Kursnme' and SchuelerID='$ID'  ";

            $result1 = mysqli_query($con, $isEntry1);

            while ($value2 = mysqli_fetch_array($result1)) {

                if  ($value2['Datum'] == $datum) {

                    $y++;
                    $u = "Note" . "$y";
                    echo '<br>';
                    echo '<label for=' . $ID . '><b>' . $Vorname . ' ' . $Name . '   </b></label>';
                    echo '<input type="hidden" name=' . $y . ' value=' . $ID . '><br>';
                    echo '<br>';
                    echo 'Note:';
                    echo '<br>';
                    echo '<input name=' . $u . ' type="number" value=' . $value2['Note'] . ' min="0" max="6" required="required">';
                    echo '<br>';
                    echo '<br>';
                    echo '<hr>';
                    $isfilled = 1;
                }
            }

          


            if ($isfilled == 0) {
                $y++;

                $u = "Note" . "$y";
                echo '<br>';
                echo '<label for=' . $ID . '><b>' . $Vorname . ' ' . $Name . '   </b></label>';
                echo '<input type="hidden" name=' . $y . ' value=' . $ID . '><br>';
                echo '<br>';
                echo 'Note:';
                echo '<br>';
                echo '<input name=' . $u . ' type="number" value="" min="0" max="6">';
                echo '<br>';

                echo '<br>';
                echo '<hr>';

            }
            echo '<input name="Schueler" id="Schueler" type="hidden" value=' . $y . ' />';
        }
    }

mysqli_close($con);

?>

    <input name="Senden" type="submit" value="Senden" onclick="checkKurs(Kursnm.value)" />
