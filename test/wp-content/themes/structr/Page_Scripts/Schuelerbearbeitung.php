<html>



<head>

</head>



<body>



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"

        type="text/javascript"></script><script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>



<script type='text/javascript'>

    <!--

    $(document).ready( function () {

        $('#table_id').DataTable();

    } );



    //-->

</script>



<form action="/DBFuellung/DBFuellungSchuelerbearbeitung.php "method="POST">





    <?php

    if( $_POST['Senden']){





        $Klassenname =  $_POST['klasse1'];

        $AnzahlSch = $_POST['AnzahlSch'];



        echo 'Klassenname: ';

        echo $Klassenname;



        echo '<table id="table_id" class="display">';

        //Schreibe Spaltennamen

        echo "<thead>";

        echo "<tr>";

        echo "<th width=100>".'ID'."</th>";

        echo "<th width=240>".'Nachname'. "</th>";

        echo "<th width= 240>".'Vorname'. "</th>";

        echo "<th width= 100>".'Profil'. "</th>";

        echo "<th width=240>".'Loginname'. "</th>";

        echo "<th width= 300>".'E-Mail'. "</th>";

        echo "</tr>";



        echo "</thead>";



        echo "<tbody>";

        include 'db.php';

        $isEntry = "SELECT ID, Name, Vorname, Loginname, EMail, Profil From sv_Lernende Where Klasse='$Klassenname' Order by Name";

        $result = mysqli_query($con,$isEntry);

        $y=0;



        while( $value= mysqli_fetch_array($result))

        {





            $Name= $value['Name'];

            $Vorname=$value['Vorname'];

            $Loginname=$value['Loginname'];

            $ID=$value['ID'];

            $EMail=$value['EMail'];

            $Profil=$value['Profil'];



            echo "<tr>";

            echo '<td><input name="ID1'.$y.'" style="width: 100px" type="text"  value='.$ID.'  readonly></td>';

            echo '<td><input name="Nachname1'.$y.'" style="width: 240px" type="text"  value='.$Name.'   ></td>';

            echo '<td><input name="Vorname1'.$y.'" type="text" value='.$Vorname.' style="width: 240px"  ></td>';

            echo '<td><input name="Profil'.$y.'" type="text" style="width: 100px" value='.$Profil.'  ></td>';

            echo '<td><input name="Loginname1'.$y.'" type="text" style="width: 240px" value='.$Loginname.'  ></td>';

            echo '<td><input name="EMail1'.$y.'" type="text" style="width: 300px" value='.$EMail.'  ></td>';

            echo "</tr>";

            $y=$y+1;

        }

        echo "</tbody>";

        echo "</table>";

        echo '<input name="Klassenname" type="hidden" value="'.$Klassenname.'" /> ';

        echo '<input name="AnzahlSch" type="hidden" value="'.$y.'" /> ';





    }



    ?>

    <input name="Senden" type="submit" value="Senden" /></form>_____________________________________________________________________________<form action="/klassen-und-lernendenverwaltung/"> <input type="submit" value="Zurück" /></form>



</body>

</html>