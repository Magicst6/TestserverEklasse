

<em>Hier werden die Kurse den Lehrpersonen zugeordnet  </em>

<br>

<?php

include 'db.php';


?>





<form action=" /DBFuellung/DBFuellungLehrpersonen.php" method="POST">







<script>

function getKurseDerLehrperson(str){

    if (str == "") {

        document.getElementById("lernende").innerHTML = "";

        return;

    } else {

        if (window.XMLHttpRequest) {

            // code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        } else {

            // code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("lernende").innerHTML = this.responseText;

            }

        };

        xmlhttp.open("GET","/Ajax_Scripts/getKursnameDerLehrperson.php?q="+str,true);

        xmlhttp.send();

    }

}

//-->

</script>





</body>

</html>

    <br><br>

Lehrperson:

    <br>

<select name="lehrer" onchange="getKurseDerLehrperson(this.value)" id="lehrer" >



    <?php



$isEntry= "Select ID From sv_Lehrpersonen ";

$result = mysqli_query($con, $isEntry);

$resultarr = array();





while( $line2= mysqli_fetch_assoc($result))

{

    $resultarr[] = $line2['ID'];

}

$uniquearr = array_unique($resultarr);





echo "<option>" . $_GET['lehrer'] . "</option>";

echo "<option>".''. "</option>";



foreach ($uniquearr as $value) {

    $isEntry= "Select Nachname, Vorname From sv_Lehrpersonen WHERE ID='$value'";

    $result = mysqli_query($con, $isEntry);

    while( $line3= mysqli_fetch_array($result))

    {

        $Name = $line3['Nachname'];

        $Vorname = $line3['Vorname'];



    }

    echo "<option>" . $Vorname .' '. $Name .' ID:'. $value . "</option>";

}

$test="fvjhdkvgdhf";

?>

</select>

    <br><br>



<div id="lernende"><b>Kurse des Lehrers werden hier aufgelistet...</b></div>



    <br><br>

<input name="Senden" type="submit" value="Senden" />





</form>