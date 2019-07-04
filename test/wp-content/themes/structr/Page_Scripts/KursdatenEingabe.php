<html>

<head>
</head>

<body>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"
        type="text/javascript"></script><script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<?php
$klasse=$_GET['Klasse'];

        include  "db.php";


        $isEntry3= "Select Semesterende From sv_Settings";
        $result3 = mysqli_query($con, $isEntry3);


        while( $line3= mysqli_fetch_assoc($result3))
        {
            $Semesterende=$line3['Semesterende'];
        }

?>
<script type='text/javascript'>
    <!--
    $(document).ready( function () {
        $('#table_id').DataTable();
        <?php
        echo "var str='$klasse';";
        ?>
        if (str == "") {
            document.getElementById("Kursformular").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("Kursformular").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "/Ajax_Scripts/KursdatenEingabe.php?q=" + str+ "&k=" + document.getElementById('enddatum').value, true);
            xmlhttp.send();
        }
        document.getElementById('enddatum').value="<?php echo $Semesterende; ?>";
    } );

    //-->
</script>


<script>
    function getKlasse(str) {

        if (str == "") {
            document.getElementById("Kursformular").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("Kursformular").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "/Ajax_Scripts/KursdatenEingabe.php?q=" + str+ "&k=" + document.getElementById('enddatum').value, true);
            xmlhttp.send();
        }
        document.getElementById('enddatum').value="<?php echo $Semesterende; ?>";
    }
</script>
<?php
        include  "db.php";


        $isEntry3= "Select Semesterende From sv_Settings";
        $result3 = mysqli_query($con, $isEntry3);


        while( $line3= mysqli_fetch_assoc($result3))
        {
            $Semesterende=$line3['Semesterende'];
        }
        ?>

<form action="/DBFuellung/DBFuellungKursformular.php "method="POST">
    <br>
    Falls das Enddatum aller Kurse gleich (z.B. das Semesterende) ist bitte hier eingeben:
    <br>
    <input name="Enddatum" id="enddatum" type="date"  onchange="getKlasse(klasse.value)"  value="<?php echo $Semesterende; ?>" />

    <br>
    <br>
    Bitte hier die Kursdaten vervollständigen, falls noch nicht der Fall. Wenn Sie einen neuen Stundenplan erstellt haben, dann wählen Sie die Klasse aus und ergänzen bitte das Enddatum, den Kursnamen und das Zimmer der Kurse.
    <br>
    <br>
    Klasse wählen:<br />
    <br>
    <select name="klasse" id="klasse" onload="getKlasse(this.value)" onchange="getKlasse(this.value)">

        <?php
        include  "db.php";


        $isEntry= "Select Klasse From sv_Lernende";
        $result1 = mysqli_query($con, $isEntry);
        $resultarr1 = array();
        echo "<option selected='selected'>" . $_GET['Klasse'] . "</option>";

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

    <div id="Kursformular"><b></b></div>
    _______________________________________________________<br>
    <input name="Senden" type="submit" value="Senden" /></form>
