<?php
include 'db.php';


    $Lehrperson=$_GET['q'];
    preg_match("/:(.*)/", $Lehrperson, $output_array);
    $LehrpersonID=$output_array[1];

    $Loginname=$_GET['h'];
    preg_match("/(.*) (.*) (.*):(.*)/", $Loginname, $output_array);
    $LoginnameID=$output_array[4];
    $LoginnameReal=$output_array[1];
    $LoginnameMail=$output_array[2];





    $sql_befehl = "Update  sv_Lernende Set Loginname='$LoginnameReal', User_ID='$LoginnameID', EMAIL='$LoginnameMail' Where ID='$LehrpersonID' ";
    //echo $sql_befehl5;
    if  (""== $LehrpersonID)  {
        //echo "Fehler: Eintrag unvollständig. ";
    }
    else {
        mysqli_query($con,$sql_befehl);
        echo "   Aktualisierung wurde ausgeführt!";
        echo '<script language="javascript">';
        echo 'alert("Login zugeordnet!")';
        echo '</script>';

    }
$test;

mysqli_close($con);
?>