<form action="/Schuelereingabe" method="post">



<br><br>

    <h2><strong>Klasse erstellen</strong></h2>

    Neue Klasse (Klassenname darf kein Leerzeichen enthalten):<br />

    <br>

    <input name="klasse" type="text"  />

    <br>

    Anzahl Schüler in der Klasse :	<br />

    <br>

    <input name="AnzahlSch1" type="text" /><br />

    <br>&nbsp;

    <input name="Senden" type="submit" value="Weiter" /><br /><hr />

</form>







<form  action="/Schuelereingabe" method="post">

    <br>

    <h2><strong>Klasse erweitern</strong></h2>

    <br>

    Bestehende Klasse wählen:<br />

    <br>

    <select name="klasse" id="klasse" >



        <?php

        include 'db.php';


        $isEntry= "Select Klasse From sv_Lernende";

        $result1 = mysqli_query($con, $isEntry);

        $resultarr1 = array();

        echo "<option>" . $_GET['klasse'] . "</option>";



        while( $line2= mysqli_fetch_assoc($result1))

        {

        $resultarr1[] = $line2['Klasse'];

        }

        $uniquearr1 = array_unique($resultarr1);

        asort($uniquearr1);

        echo "<option>" . '' . "</option>";





        foreach ($uniquearr1 as $value)

        {

        if ($value == $_GET['klasse']){}

        else

        {

        echo "<option>" . $value . "</option>";

        }

        }

        ?>



    </select>

    <br>

    Anzahl Schüler der Klasse hinzufügen:	<br />

    <br>

    <input name="AnzahlSch" type="text" /><br />

    <br>

    <input name="Senden" type="submit" value="Weiter" /><br />



</form>







</body>

<body>



<hr /><form action="/Schuelerbearbeitung" method="post">

    <h2><strong>Bestehende Klasse bearbeiten</strong></h2>

    Klassenname der zu bearbeitenden Klasse:<br />

    <select name="klasse1" id="klasse1" required="required">



        <?php





        $isEntry= "Select Klasse From sv_Lernende";

        $result1 = mysqli_query($con, $isEntry);

        $resultarr1 = array();

        echo "<option>" . $_GET['klasse1'] . "</option>";



        while( $line2= mysqli_fetch_assoc($result1))

        {

        $resultarr1[] = $line2['Klasse'];

        }

        $uniquearr1 = array_unique($resultarr1);

        asort($uniquearr1);





        foreach ($uniquearr1 as $value)

        {

        if ($value == $_GET['klasse1']){}

        else

        {

        echo "<option>" . $value . "</option>";

        }

        }

        ?>



    </select>

    <input name="Senden" type="submit" value="Bearbeiten" /><br />

</form>













