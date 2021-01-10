<form action="http://schulverwaltungheimtest.ch/datenbankbefuellung-schuelereingabe "method="POST">

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

<?php



include 'db.php';

echo '<br>';

$Kursnme=$_GET['q'];

$isEntry5 = "SELECT Klasse From sv_LernenderKurs Where KursID='$Kursnme' Order by Nachname";

$result5 = mysqli_query($con, $isEntry5);

$y=0;

while( $value5= mysqli_fetch_array($result5))

{

    $isfilled=0;

    $Klasse=$value5['Klasse'];

}

preg_match("/.fz./", $Kursnme, $output_array1);

$KursnameReg=$output_array1[0];

preg_match("/.itplus./", $Kursnme, $output_array3);

$KursnameReg1=$output_array3[0];
	
preg_match("/.it./", $Kursnme, $output_array3);

$KursnameReg2=$output_array3[0];

if ($KursnameReg=='.fz.')  {

    $hvr1="'%e%'";

    $hvr2="0";



}



if (($KursnameReg1=='.itplus.') or  ($KursnameReg2=='.it.')) {

    $hvr2="'%it%'";

    $hvr1="0";



}

if (($KursnameReg<>'.fz.') and ($KursnameReg1<>'.itplus.') and ($KursnameReg2<>'.it.'))

{

    $hvr2='1';

    $hvr1='1';

}

if (($KursnameReg=='.fz.') and (($KursnameReg1=='.itplus.') or  ($KursnameReg2=='.it.')))

{

    $hvr1="'%e%'";

    $hvr2="'%it%'";

}





$isEntry1 = "SELECT sv_Lernende.ID,

       sv_Lernende.Name,

       sv_Lernende.Vorname,

       sv_Lernende.Klasse,

       sv_Lernende.Loginname,

       sv_Lernende.EMail,

       sv_Lernende.User_ID,

       sv_Lernende.Profil

FROM sv_Lernende where (sv_Lernende.Profil like $hvr1 or sv_Lernende.Profil like $hvr2 or $hvr1='1')  and (sv_Lernende.Klasse = '$Klasse')";

$result1 = mysqli_query($con, $isEntry1);







echo '<table id="table_id" style="hidden" class="display">';

echo "<thead>";

echo "<tr>";

//Schreibe Spaltennamen



echo "<th width=100>".'Name'."</th>";

echo "<th width= 240>".'Vorname'. "</th>";

echo "<th width=240>".'Klasse'. "</th>";

echo "<th width=240>".'Loginname'. "</th>";

echo "<th width= 240>".'Email'. "</th>";

echo "<th width=300>".'User_ID'. "</th>";

echo "<th width=300>".'Profil'. "</th>";

echo "</tr>";

echo "</thead>";

echo "<tbody>";

unset($data);

while ($value = mysqli_fetch_assoc($result1)) {



    $data[]=$value;

    $Name= $value['Name'];

    $Vorname=$value['Vorname'];

    $Loginname=$value['Loginname'];

    $User_ID=$value['User_ID'];

    $EMail=$value['EMail'];

    $Profil=$value['Profil'];

    $Klasse=$value['Klasse'];

    echo "<tr>";

    echo '<td>'.$Name.' </td>';

    echo '<td>'.$Vorname.' </td>';

    echo '<td>'.$Klasse.'  </td>';



    echo '<td>'.$Loginname.'</td>';

    echo '<td>'.$EMail.'</td>';

    echo '<td>'.$User_ID.'</td>';

    echo '<td>'.$Profil.'</td>';

    echo "</tr>";





}







echo "</tbody>";



echo "</table>";

unlink("data.json");

$handle = fopen ("data.json", w);

fwrite ($handle, json_encode($data));

fclose ($handle);

?>



</form>







