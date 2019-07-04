<em>Hier können Verwaltungsmitarbeiter Noten eintragen </em>
<?php
$con = @mysqli_connect('9b1qp.myd.infomaniak.com', "9b1qp_heimmart", "St1180!!ST");

if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
//echo 'Connected to MySQL';
$verbunden=mysqli_select_db($con, "9b1qp_heimmart_test");
if($verbunden)
//echo('DB-Verbindung hergestellt! ');
    $dummy=1;
else
    die('DB-Verbindung fehlgeschlagen! ');
$KN= $_GET['Kursname'];
if ($KN==""){$vr2=5;}
else {$vr2=4;}
?>


    &nbsp;


    <script type='text/javascript'>
        <!--
        function myFunction1(){
            var x   = document.querySelector("#Kursname").value;
            var y   = document.querySelector("#Schueler").value;

            window.location.href = "noteneingabe-1?&Schueler="+y+"&Kursname="+x;
        }

        function myFunction(){
            var x   = document.querySelector("#Kursname").value;
            var y   = document.querySelector("#Schueler").value;

            window.location.href = "noteneingabe-1?&Schueler="+y+"&Kursname="+x;
        }


    </script>-->


<br><br>
    Kursname:<br>
    <select name="Kursname" onchange="myFunction1()" id="Kursname" >

        <?php

        $isEntry= "Select KursID From sv_LernenderKurs";
        $result = mysqli_query($con,$isEntry, MYSQLI_USE_RESULT);
        $resultarr = array();


        while( $line2= mysqli_fetch_assoc($result))
        {
            $resultarr[] = $line2['KursID'];
        }
        $uniquearr = array_unique($resultarr);

        foreach ($uniquearr as $value) {
            if ($value == $_GET['Kursname'])
            {
                echo "<option>" . $_GET['Kursname'] . "</option>";
            }
            else{}

        }
        echo "<option>" .''. "</option>";
        foreach ($uniquearr as $value)
        {
            echo "<option>" . $value . "</option>";
        }

        $isEntry1= "Select KursID From sv_ExtraKurse ";
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


    </select>
<br><br>
    Schüler:<br>
    <select name="Schueler" onchange="myFunction()" id="Schueler" >

        <?php
        $Kursname=$_GET['Kursname'];
        $isEntry= "Select SchülerID From sv_LernenderKurs WHERE KursID='$Kursname' Order By Nachname ASC";
        $result = mysqli_query($con, $isEntry);
        $resultarr = array();


        while( $line2= mysqli_fetch_assoc($result))
        {
            $resultarr[] = $line2['SchülerID'];
        }
        $uniquearr = array_unique($resultarr);


        echo "<option>" . $_GET['Schueler'] . "</option>";
        echo "<option>".''. "</option>";

        foreach ($uniquearr as $value) {
            $isEntry= "Select Nachname, Vorname From sv_LernenderKurs WHERE SchülerID='$value' Order By Nachname ASC";
            $result = mysqli_query($con, $isEntry);
            while( $line3= mysqli_fetch_array($result))
            {
                $Name = $line3['Nachname'];
                $Vorname = $line3['Vorname'];

            }
            echo "<option>" . $Vorname .' '. $Name .' ID:'. $value . "</option>";
        }
        ?>
    </select><br><br>
    <?php
    $Schueler=$_GET['Schueler'];
    preg_match("/:(.*)/", $Schueler, $output_array);
    $Schueler=$output_array[1];
    if ($Schueler==""){$vr3=0;}
    else {$vr3= $Schueler;}
    $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
    $result = mysqli_query($con, $isEntry);
    $y=0;

    while( $value= mysqli_fetch_array($result))
    {
          $g=1;
        for($x = 1; $x <= 9; $x++)
        {

            $Note = "Note"."$x";
            $NoteValue= $value[$Note];
            $Name = "Name"."$x";
            $NameValue= $value[$Name];
            $Gewichtung = "Gewichtung"."$x";
            $GewValue= $value[$Gewichtung];
            $Datum = "Datum"."$x";
            $DatumValue= $value[$Datum];

              if (($NoteValue<>0 or $NoteValue<>null) and $NameValue<>null and $DatumValue<>null and $GewValue<>null ) {

                  $g++;

                  echo '<br/>';

                  if ($Note == "Note1") {
                      echo "  ---  Note 1:  ";
                      echo "<strong>" . $NoteValue . "</strong>";
                  } else {
                      echo " ---   " . $Note . ":  ";
                      echo "<strong>" . $NoteValue . "</strong>";
                  }

                  echo " ---Name :  ";
                  echo "<strong>" . $NameValue . "</strong>";


                  echo "  ---Gewichtung:  ";
                  echo "<strong>" . $GewValue . "</strong>";


                  echo "   ---Datum:  ";
                  echo "<strong>" . $DatumValue . "</strong>";

                  echo "   " . '<button id="myBtn' . $x . '">Note bearbeiten</button><br/>';

              }
        }
if ($g<10) {
    echo '<br><br><br><button id="myBtn' . $g . '">Note hinzufügen</button>';
}

    }
    mysqli_close($con);
    ?>





<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {}

        /* The Modal (background) */
        .modal{
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 40%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        button {
          color: white;
        }

    </style>
</head>
<body>


<!-- The Modal -->
<div id="myModal1" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <form action="/DBFuellung/DBFuellungLernenderKurs.php "method="POST">


            <?php
            $Schueler=$_GET['Schueler'];
            preg_match("/:(.*)/", $Schueler, $output_array);
            $Schueler=$output_array[1];
            $Kursname=$_GET['Kursname'];

            include "db.php";
            $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
            $result = mysqli_query($con, $isEntry);
            $y=0;

            while( $value= mysqli_fetch_array($result)) {


                $Note = "Note1";
                $NoteValue = $value[$Note];
                $Name = "Name1";
                $NameValue = $value[$Name];
                $Gewichtung = "Gewichtung1";
                $GewValue = $value[$Gewichtung];
                $Datum = "Datum1";
                $DatumValue = $value[$Datum];
            }
           ?>
            <input name="Kursname" type="hidden" value="<?php echo $Kursname; ?>" />
            <input name="Schueler" type="hidden" value="<?php echo $Schueler; ?>" />
            <input name="count" type="hidden" value="1" />
            <p>Bitte hier die Note eintragen..</p>
            
			Note1:<br>
            <input name="Note1m" type="Text" value="<?php echo $NoteValue; ?>" required="required" />
            <br><br>
			Name:<br>
            <input name="Name1m" type="Text" value="<?php echo $NameValue; ?>" required="required" />
            <br><br>
			Gewichtung(in % ->100 = 100%):<br>
            <input name="Gewichtung1m" type="number" value="<?php echo $GewValue; ?>" required="required" />
            <br><br>
			Datum:<br>
            <input name="Datum1m" type="date" value="<?php echo $DatumValue; ?>" required="required" />
             <br><br>
            <input name="Speichern" type="submit" value="Senden" />

        <span class="close" id="span1">&times;</span>


        </form>
    </div>

</div>

<div id="myModal2" class="modal">

    <!-- Modal content -->
    <!-- Modal content -->
    <div class="modal-content">
        <form action="/DBFuellung/DBFuellungLernenderKurs.php "method="POST">

            <?php

            $Schueler=$_GET['Schueler'];
            preg_match("/:(.*)/", $Schueler, $output_array);
            $Schueler=$output_array[1];
            $Kursname=$_GET['Kursname'];

            include "db.php";
            $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
            $result = mysqli_query($con, $isEntry);
            $y=0;

            while( $value= mysqli_fetch_array($result)) {


                $Note = "Note2";
                $NoteValue = $value[$Note];
                $Name = "Name2";
                $NameValue = $value[$Name];
                $Gewichtung = "Gewichtung2";
                $GewValue = $value[$Gewichtung];
                $Datum = "Datum2";
                $DatumValue = $value[$Datum];
            }
            ?>
            <input name="Kursname" type="hidden" value="<?php echo $Kursname; ?>" />
            <input name="Schueler" type="hidden" value="<?php echo $Schueler; ?>" />
            <input name="count" type="hidden" value="2" />
            <p>Bitte hier die Note eintragen..</p>
           Note2:<br>
            <input name="Note2m" type="Text" value="<?php echo $NoteValue; ?>" required="required" />
            <br><br>
			Name:<br>
            <input name="Name2m" type="Text" value="<?php echo $NameValue; ?>" required="required" />
            <br><br>
			Gewichtung(in % ->100 = 100%):<br>
            <input name="Gewichtung2m" type="number" value="<?php echo $GewValue; ?>" required="required" />
            <br><br>
			Datum:<br>
            <input name="Datum2m" type="date" value="<?php echo $DatumValue; ?>" required="required" />
             <br><br>
            <input name="Speichern" type="submit" value="Senden" />
			
            <span class="close" id="span2">&times;</span>


        </form>
    </div>
</div>


<div id="myModal3" class="modal">

    <!-- Modal content -->
    <!-- Modal content -->
    <div class="modal-content">
        <form action="/DBFuellung/DBFuellungLernenderKurs.php "method="POST">

            <?php

            $Schueler=$_GET['Schueler'];
            preg_match("/:(.*)/", $Schueler, $output_array);
            $Schueler=$output_array[1];
            $Kursname=$_GET['Kursname'];

            include "db.php";
            $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
            $result = mysqli_query($con, $isEntry);
            $y=0;

            while( $value= mysqli_fetch_array($result)) {


                $Note = "Note3";
                $NoteValue = $value[$Note];
                $Name = "Name3";
                $NameValue = $value[$Name];
                $Gewichtung = "Gewichtung3";
                $GewValue = $value[$Gewichtung];
                $Datum = "Datum3";
                $DatumValue = $value[$Datum];
            }
            ?>
            <input name="Kursname" type="hidden" value="<?php echo $Kursname; ?>" />
            <input name="Schueler" type="hidden" value="<?php echo $Schueler; ?>" />
            <input name="count" type="hidden" value="3" />
            <p>Bitte hier die Note eintragen..</p>
           Note3:<br>
            <input name="Note3m" type="Text" value="<?php echo $NoteValue; ?>" required="required" />
            <br><br>
			Name:<br>
            <input name="Name3m" type="Text" value="<?php echo $NameValue; ?>" required="required" />
            <br><br>
			Gewichtung(in % ->100 = 100%):<br>
            <input name="Gewichtung3m" type="number" value="<?php echo $GewValue; ?>" required="required" />
            <br><br>
			Datum:<br>
            <input name="Datum3m" type="date" value="<?php echo $DatumValue; ?>" required="required" />
             <br><br>
            <input name="Speichern" type="submit" value="Senden" />

            <span class="close" id="span3">&times;</span>


        </form>
    </div>
</div>

<div id="myModal4" class="modal">

    <!-- Modal content -->
    <!-- Modal content -->
    <div class="modal-content">
        <form action="/DBFuellung/DBFuellungLernenderKurs.php "method="POST">

            <?php

            $Schueler=$_GET['Schueler'];
            preg_match("/:(.*)/", $Schueler, $output_array);
            $Schueler=$output_array[1];
            $Kursname=$_GET['Kursname'];

            include "db.php";
            $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
            $result = mysqli_query($con, $isEntry);
            $y=0;

            while( $value= mysqli_fetch_array($result)) {


                $Note = "Note4";
                $NoteValue = $value[$Note];
                $Name = "Name4";
                $NameValue = $value[$Name];
                $Gewichtung = "Gewichtung4";
                $GewValue = $value[$Gewichtung];
                $Datum = "Datum4";
                $DatumValue = $value[$Datum];
            }
            ?>
            <input name="Kursname" type="hidden" value="<?php echo $Kursname; ?>" />
            <input name="Schueler" type="hidden" value="<?php echo $Schueler; ?>" />
            <input name="count" type="hidden" value="4" />
            <p>Bitte hier die Note eintragen..</p>
           Note4:<br>
            <input name="Note4m" type="Text" value="<?php echo $NoteValue; ?>" required="required" />
            <br><br>
			Name:<br>
            <input name="Name4m" type="Text" value="<?php echo $NameValue; ?>" required="required" />
            <br><br>
			Gewichtung(in % ->100 = 100%):<br>
            <input name="Gewichtung4m" type="number" value="<?php echo $GewValue; ?>" required="required" />
            <br><br>
			Datum:<br>
            <input name="Datum4m" type="date" value="<?php echo $DatumValue; ?>" required="required" />
             <br><br>
            <input name="Speichern" type="submit" value="Senden" />
            <span class="close" id="span4">&times;</span>


        </form>
    </div>
</div>
<div id="myModal5" class="modal">

    <!-- Modal content -->
    <!-- Modal content -->
    <div class="modal-content">
        <form action="/DBFuellung/DBFuellungLernenderKurs.php "method="POST">

            <?php

            $Schueler=$_GET['Schueler'];
            preg_match("/:(.*)/", $Schueler, $output_array);
            $Schueler=$output_array[1];
            $Kursname=$_GET['Kursname'];

            include "db.php";
            $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
            $result = mysqli_query($con, $isEntry);
            $y=0;

            while( $value= mysqli_fetch_array($result)) {


                $Note = "Note5";
                $NoteValue = $value[$Note];
                $Name = "Name5";
                $NameValue = $value[$Name];
                $Gewichtung = "Gewichtung5";
                $GewValue = $value[$Gewichtung];
                $Datum = "Datum5";
                $DatumValue = $value[$Datum];
            }
            ?>
            <input name="Kursname" type="hidden" value="<?php echo $Kursname; ?>" />
            <input name="Schueler" type="hidden" value="<?php echo $Schueler; ?>" />
            <input name="count" type="hidden" value="5" />
            <p>Bitte hier die Note eintragen..</p>
           Note5:<br>
            <input name="Note5m" type="Text" value="<?php echo $NoteValue; ?>" required="required" />
            <br><br>
			Name:<br>
            <input name="Name5m" type="Text" value="<?php echo $NameValue; ?>" required="required" />
            <br><br>
			Gewichtung(in % ->100 = 100%):<br>
            <input name="Gewichtun51m" type="number" value="<?php echo $GewValue; ?>" required="required" />
            <br><br>
			Datum:<br>
            <input name="Datum5m" type="date" value="<?php echo $DatumValue; ?>" required="required" />
             <br><br>
            <input name="Speichern" type="submit" value="Senden" />

            <span class="close" id="span5">&times;</span>


        </form>
    </div>
</div>

<div id="myModal6" class="modal">

    <!-- Modal content -->
    <!-- Modal content -->
    <div class="modal-content">
        <form action="/DBFuellung/DBFuellungLernenderKurs.php "method="POST">

            <?php

            $Schueler=$_GET['Schueler'];
            preg_match("/:(.*)/", $Schueler, $output_array);
            $Schueler=$output_array[1];
            $Kursname=$_GET['Kursname'];

            include "db.php";
            $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
            $result = mysqli_query($con, $isEntry);
            $y=0;

            while( $value= mysqli_fetch_array($result)) {


                $Note = "Note6";
                $NoteValue = $value[$Note];
                $Name = "Name6";
                $NameValue = $value[$Name];
                $Gewichtung = "Gewichtung6";
                $GewValue = $value[$Gewichtung];
                $Datum = "Datum6";
                $DatumValue = $value[$Datum];
            }
            ?>
            <input name="Kursname" type="hidden" value="<?php echo $Kursname; ?>" />
            <input name="Schueler" type="hidden" value="<?php echo $Schueler; ?>" />
            <input name="count" type="hidden" value="6" />
            <p>Bitte hier die Note eintragen..</p>
           Note6:<br>
            <input name="Note6m" type="Text" value="<?php echo $NoteValue; ?>" required="required" />
            <br><br>
			Name:<br>
            <input name="Name6m" type="Text" value="<?php echo $NameValue; ?>" required="required" />
            <br><br>
			Gewichtung(in % ->100 = 100%):<br>
            <input name="Gewichtung6m" type="number" value="<?php echo $GewValue; ?>" required="required" />
            <br><br>
			Datum:<br>
            <input name="Datum6m" type="date" value="<?php echo $DatumValue; ?>" required="required" />
             <br><br>
            <input name="Speichern" type="submit" value="Senden" />

            <span class="close" id="span6">&times;</span>


        </form>
    </div>
</div>



<div id="myModal7" class="modal">

    <!-- Modal content -->
    <!-- Modal content -->
    <div class="modal-content">
        <form action="/DBFuellung/DBFuellungLernenderKurs.php "method="POST">

            <?php

            $Schueler=$_GET['Schueler'];
            preg_match("/:(.*)/", $Schueler, $output_array);
            $Schueler=$output_array[1];
            $Kursname=$_GET['Kursname'];

            include "db.php";
            $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
            $result = mysqli_query($con, $isEntry);
            $y=0;

            while( $value= mysqli_fetch_array($result)) {


                $Note = "Note7";
                $NoteValue = $value[$Note];
                $Name = "Name7";
                $NameValue = $value[$Name];
                $Gewichtung = "Gewichtung7";
                $GewValue = $value[$Gewichtung];
                $Datum = "Datum7";
                $DatumValue = $value[$Datum];
            }
            ?>
            <input name="Kursname" type="hidden" value="<?php echo $Kursname; ?>" />
            <input name="Schueler" type="hidden" value="<?php echo $Schueler; ?>" />
            <input name="count" type="hidden" value="7" />
            <p>Bitte hier die Note eintragen..</p>
           Note7:<br>
            <input name="Note7m" type="Text" value="<?php echo $NoteValue; ?>" required="required" />
            <br><br>
			Name:<br>
            <input name="Name7m" type="Text" value="<?php echo $NameValue; ?>" required="required" />
            <br><br>
			Gewichtung(in % ->100 = 100%):<br>
            <input name="Gewichtung7m" type="number" value="<?php echo $GewValue; ?>" required="required" />
            <br><br>
			Datum:<br>
            <input name="Datum7m" type="date" value="<?php echo $DatumValue; ?>" required="required" />
             <br><br>
            <input name="Speichern" type="submit" value="Senden" />
            <span class="close" id="span7">&times;</span>


        </form>
    </div>
</div>

<div id="myModal8" class="modal">

    <!-- Modal content -->
    <!-- Modal content -->
    <div class="modal-content">
        <form action="/DBFuellung/DBFuellungLernenderKurs.php "method="POST">

            <?php

            $Schueler=$_GET['Schueler'];
            preg_match("/:(.*)/", $Schueler, $output_array);
            $Schueler=$output_array[1];
            $Kursname=$_GET['Kursname'];

            include "db.php";
            $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
            $result = mysqli_query($con, $isEntry);
            $y=0;

            while( $value= mysqli_fetch_array($result)) {


                $Note = "Note8";
                $NoteValue = $value[$Note];
                $Name = "Name8";
                $NameValue = $value[$Name];
                $Gewichtung = "Gewichtung8";
                $GewValue = $value[$Gewichtung];
                $Datum = "Datum8";
                $DatumValue = $value[$Datum];
            }
            ?>
            <input name="Kursname" type="hidden" value="<?php echo $Kursname; ?>" />
            <input name="Schueler" type="hidden" value="<?php echo $Schueler; ?>" />
            <input name="count" type="hidden" value="8" />
            <p>Bitte hier die Note eintragen..</p>
           Note8:<br>
            <input name="Note8m" type="Text" value="<?php echo $NoteValue; ?>" required="required" />
            <br><br>
			Name:<br>
            <input name="Name8m" type="Text" value="<?php echo $NameValue; ?>" required="required" />
            <br><br>
			Gewichtung(in % ->100 = 100%):<br>
            <input name="Gewichtung8m" type="number" value="<?php echo $GewValue; ?>" required="required" />
            <br><br>
			Datum:<br>
            <input name="Datum8m" type="date" value="<?php echo $DatumValue; ?>" required="required" />
             <br><br>
            <input name="Speichern" type="submit" value="Senden" />

            <span class="close" id="span8">&times;</span>


        </form>
    </div>
</div>

<div id="myModal9" class="modal">

    <!-- Modal content -->
    <!-- Modal content -->
    <div class="modal-content">
        <form action="/DBFuellung/DBFuellungLernenderKurs.php "method="POST">

            <?php

            $Schueler=$_GET['Schueler'];
            preg_match("/:(.*)/", $Schueler, $output_array);
            $Schueler=$output_array[1];
            $Kursname=$_GET['Kursname'];

            include "db.php";
            $isEntry = "SELECT * From sv_LernenderKurs Where KursID='$Kursname' AND SchülerID='$Schueler' ";
            $result = mysqli_query($con, $isEntry);
            $y=0;

            while( $value= mysqli_fetch_array($result)) {


                $Note = "Note9";
                $NoteValue = $value[$Note];
                $Name = "Name9";
                $NameValue = $value[$Name];
                $Gewichtung = "Gewichtung9";
                $GewValue = $value[$Gewichtung];
                $Datum = "Datum9";
                $DatumValue = $value[$Datum];
            }
            ?>
            <input name="Kursname" type="hidden" value="<?php echo $Kursname; ?>" />
            <input name="Schueler" type="hidden" value="<?php echo $Schueler; ?>" />
            <input name="count" type="hidden" value="9" />
            <p>Bitte hier die Note eintragen..</p>
           Note9:<br>
            <input name="Note9m" type="Text" value="<?php echo $NoteValue; ?>" required="required" />
            <br><br>
			Name:<br>
            <input name="Name9m" type="Text" value="<?php echo $NameValue; ?>" required="required" />
            <br><br>
			Gewichtung(in % ->100 = 100%):<br>
            <input name="Gewichtung9m" type="number" value="<?php echo $GewValue; ?>" required="required" />
            <br><br>
			Datum:<br>
            <input name="Datum9m" type="date" value="<?php echo $DatumValue; ?>" required="required" />
             <br><br>
            <input name="Speichern" type="submit" value="Senden" />
            <span class="close" id="span9">&times;</span>


        </form>
    </div>
</div>



<script>
    // Get the modal
    var modal1 = document.getElementById("myModal1");

    // Get the button that opens the modal
    var btn1 = document.getElementById("myBtn1");

    // Get the <span> element that closes the modal
    var span1 = document.getElementById("span1");

    // When the user clicks the button, open the modal
    btn1.onclick = function() {
        modal1.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
        modal1.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal1.style.display = "none";
        }
    }

    var modal2 = document.getElementById("myModal2");

    // Get the button that opens the modal
    var btn2 = document.getElementById("myBtn2");

    // Get the <span> element that closes the modal
    var span2 = document.getElementById("span2");

    // When the user clicks the button, open the modal
    btn2.onclick = function() {
        modal2.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span2.onclick = function() {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal2.style.display = "none";
        }
    }


    var modal3 = document.getElementById("myModal3");

    // Get the button that opens the modal
    var btn3 = document.getElementById("myBtn3");

    // Get the <span> element that closes the modal
    var span3 = document.getElementById("span3");

    // When the user clicks the button, open the modal
    btn3.onclick = function() {
        modal3.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span3.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal3.style.display = "none";
        }
    }

    var modal4 = document.getElementById("myModal4");

    // Get the button that opens the modal
    var btn4 = document.getElementById("myBtn4");

    // Get the <span> element that closes the modal
    var span4 = document.getElementById("span4");

    // When the user clicks the button, open the modal
    btn4.onclick = function() {
        modal4.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span4.onclick = function() {
        modal4.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal4.style.display = "none";
        }
    }

    var modal5 = document.getElementById("myModal5");

    // Get the button that opens the modal
    var btn5 = document.getElementById("myBtn5");

    // Get the <span> element that closes the modal
    var span5 = document.getElementById("span5");

    // When the user clicks the button, open the modal
    btn5.onclick = function() {
        modal5.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span5.onclick = function() {
        modal5.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal5.style.display = "none";
        }
    }

    var modal6 = document.getElementById("myModal6");

    // Get the button that opens the modal
    var btn6 = document.getElementById("myBtn6");

    // Get the <span> element that closes the modal
    var span6 = document.getElementById("span6");

    // When the user clicks the button, open the modal
    btn6.onclick = function() {
        modal6.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span6.onclick = function() {
        modal6.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal6.style.display = "none";
        }
    }

    var modal7 = document.getElementById("myModal7");

    // Get the button that opens the modal
    var btn7 = document.getElementById("myBtn7");

    // Get the <span> element that closes the modal
    var span7 = document.getElementById("span7");

    // When the user clicks the button, open the modal
    btn7.onclick = function() {
        modal7.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span7.onclick = function() {
        modal7.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal7.style.display = "none";
        }
    }

    var modal8 = document.getElementById("myModal8");

    // Get the button that opens the modal
    var btn8 = document.getElementById("myBtn8");

    // Get the <span> element that closes the modal
    var span8 = document.getElementById("span8");

    // When the user clicks the button, open the modal
    btn8.onclick = function() {
        modal8.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span8.onclick = function() {
        modal8.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal8.style.display = "none";
        }
    }

    var modal9 = document.getElementById("myModal9");

    // Get the button that opens the modal
    var btn9 = document.getElementById("myBtn9");

    // Get the <span> element that closes the modal
    var span9 = document.getElementById("span9");

    // When the user clicks the button, open the modal
    btn9.onclick = function() {
        modal9.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span9.onclick = function() {
        modal9.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal9.style.display = "none";
        }
    }



</script>

</body>
</html>




