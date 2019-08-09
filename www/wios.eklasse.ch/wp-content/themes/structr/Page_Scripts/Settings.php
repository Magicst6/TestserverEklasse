<?php

include 'db.php';
$isEntry = "SELECT Semesterkuerzel, Semesteranfang, Semesterende, Ferien1von, Ferien1bis, Ferien2von, Ferien2bis, Ferien3von, Ferien3bis, Ferien4von, Ferien4bis,Ferien5von, Ferien5bis From sv_Settings";

$result = mysqli_query($con, $isEntry);





while( $value= mysqli_fetch_array($result)) {


    $Semesterkuerzel = $value['Semesterkuerzel'];

    $Semesteranfang = $value['Semesteranfang'];

    $Semesterende = $value['Semesterende'];

    $Ferien1von = $value['Ferien1von'];

    $Ferien1bis = $value['Ferien1bis'];

    $Ferien2von = $value['Ferien2von'];

    $Ferien2bis = $value['Ferien2bis'];

    $Ferien3von = $value['Ferien3von'];

    $Ferien3bis = $value['Ferien3bis'];

    $Ferien4von = $value['Ferien4von'];

    $Ferien4bis = $value['Ferien4bis'];

    $Ferien5von = $value['Ferien5von'];

    $Ferien5bis = $value['Ferien5bis'];



}

?>

<body>

<form action="/DBFuellung/DBFuellungSettings.php" method="POST">
    <br>
    Bitte hier die entsprechenden Daten eintragen oder modifizieren. Diese Daten sind erforderlich und müssen am Anfang des Semesters eingetragen werden.
    <br>
    <br><br>
    <br />
    <strong>Semesterkürzel</strong> (bitte für das Frühjahrssemester des aktuellen Jahres(hier
    2019) das Kürzel <strong>FS19</strong> und für das Herbstsemester 2019 das
    Kürzel <strong>WS19</strong> eintragen):<br />
    <br />

    <select name="Semesterkuerzel" id="Semesterkuerzel"  value="<?php echo $Semesterkuerzel;?>" required="required">
        <option><?php echo $Semesterkuerzel;?></option>
        <option>FS<?php echo date("y")+1;?></option>
        <option>WS<?php echo date("y")+1;?></option>
        <option>FS<?php echo date("y")+2;?></option>
        <option>WS<?php echo date("y")+2;?></option>
    </select>
    <br>
    <br />
    <strong>Semesteranfang:</strong>
    <input name="Semesteranfang" type="date" value="<?php echo $Semesteranfang ?>" />
    <br>
    <br>
        <strong>Semesterende:</strong>
    <input name="Semesterende" type="date" value="<?php echo $Semesterende ?>" />
    <br>
    <br><strong>Ferien 1:</strong><br />

    von:
    <input name="Ferien1von" type="date" value="<?php echo $Ferien1von ?>" />
    bis:
    <input name="Ferien1bis" type="date" value="<?php echo $Ferien1bis ?>" />
    <br>
    <br><strong>Ferien 2:</strong><br />

    von:
    <input name="Ferien2von" type="date"  value="<?php echo $Ferien2von ?>"/>
    bis:
    <input name="Ferien2bis" type="date" value="<?php echo $Ferien2bis ?>" />
    <br>
    <br><strong>Ferien 3:</strong><br />

    von:
    <input name="Ferien3von" type="date" value="<?php echo $Ferien3von ?>" />
    bis:
    <input name="Ferien3bis" type="date" value="<?php echo $Ferien3bis ?>" />
    <br>
    <br><strong>Ferien 4:</strong><br />

    von:
    <input name="Ferien4von" type="date" value="<?php echo $Ferien4von ?>" />
    bis:
    <input name="Ferien4bis" type="date" value="<?php echo $Ferien4bis ?>" />
    <br>
    <br><strong>Ferien 5:</strong><br />

    von:
    <input name="Ferien5von" type="date" value="<?php echo $Ferien5von ?>" />
    bis:
    <input name="Ferien5bis" type="date" value="<?php echo $Ferien5bis ?>" />
    <br>
    <br>
    <input name="Senden" type="submit" value="Senden"  /></form>



</body>


</html>
