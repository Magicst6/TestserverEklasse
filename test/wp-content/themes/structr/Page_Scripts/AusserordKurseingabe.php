<em>Hier können Kurse erstellt werden, die nicht im Stundenplan der Klasse erscheinen. </em>







<form action="/DBFuellung/DBFuellungKurse.php" method="post">

    <br><br>

    <strong>Kurs1</strong>

    <br>

    Klasse:

    <br>

    <select name="Klasse"  id="Klasse" >



        <?php

        include 'db.php';



        $isEntry= "Select Klasse From sv_Lernende";

        $result1 = mysqli_query($con, $isEntry);

        $resultarr1 = array();



        while( $line2= mysqli_fetch_assoc($result1))

        {

        $resultarr1[] = $line2['Klasse'];

        }

        $uniquearr1 = array_unique($resultarr1);

        asort($uniquearr1);

        echo "<option>" .'' . "</option>";





        foreach ($uniquearr1 as $value)

        {

        echo "<option>" . $value . "</option>";



        }

        ?>



    </select>



    <br />

    Kurs:

    <br>

    <input name="Kursname" type="text" /><br />

    <br>

    Kurskürzel:

    <br>

    <input name="Kuerzel" type="text" /><br />

    <br>

    Tag:

    <br>

    <select name="Tag">

        <option>Montag</option>

        <option>Dienstag</option>

        <option>Mittwoch</option>

        <option>Donnerstag</option>

        <option>Freitag</option>

        <option>Samstag</option>



    </select>

    <br>

    Startzeit:

    <br>

    <input name="Startzeit" type="time" /><br />

    <br>

    Endzeit:

    <br>

    <input name="Endzeit" type="time" /><br />

    <br>

    Datum:

    <br>

    <input name="Datum" type="Date" /><br />

    <br>

    <br>

    Wählen Sie das Semester aus :

    <br>

    <select name="semester" id="semester"  required="required">

        <option>FS<?php echo date("y");?></option>

        <option>WS<?php echo date("y");?></option>

        <option>FS<?php echo date("y")-1;?></option>

        <option>WS<?php echo date("y")-1;?></option>

        <option>FS<?php echo date("y")+1;?></option>

        <option>WS<?php echo date("y")+1;?></option>

    </select>

    <br>

    Lektionen:

    <br>

    <input name="Lektionen" type="text" /><br />

    <br>

    Zimmer:

    <br>

    <input name="Zimmer" type="text" /><br />

    <br>

    Zimmer ID:

    <br>

    <input name="ZI_ID" type="text" /><br />

    <br>

    Lehrperson:

    <br>

    <input name="Lehrperson" type="text" /><br />

    <br>

    Lehrperson ID:

    <br>

    <input name="LP_ID" type="text" /><br />

    <br>

    <br><br>

    <input name="Senden" type="submit" value="Senden" />

</form>





</body>



</html>

