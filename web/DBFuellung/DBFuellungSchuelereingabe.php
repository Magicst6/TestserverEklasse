&nbsp;

&nbsp;

&nbsp;

<?php
include 'db.php';
if( $_POST['Senden'])
{
    $AnzahlSch = $_POST['AnzahlSch'];
    $AnzahlSch1 = $_POST['AnzahlSch1'];
    if ($AnzahlSch==''){$AnzahlSch=$AnzahlSch1;}
    $Klasse=  $_POST['Klassenname'];
    for($x = 0; $x < $AnzahlSch; $x++)
    {
        $Vorname =  $_POST['Vorname'.$x];
        $Nachname = $_POST['Nachname'.$x];
        $EMail = $_POST['EMail'.$x];
        $Loginname = $_POST['Loginname'.$x];
        $Profil= $_POST['Profil'.$x];



//Daten in DB speichern
        $sql_befehl = "INSERT INTO sv_Lernende (Name, Vorname, Klasse, Loginname, EMail, Profil) VALUES ('$Nachname', '$Vorname', '$Klasse', '$Loginname', '$EMail', '$Profil' )";
//echo $sql_befehl1;
        if (("" == $Vorname) OR (""== $Nachname) ) {
            echo "Fehler: Eintrag unvollständig. Bitte neu beginnen!";
//echo '<meta http-equiv="refresh" content="0; url=http://wios.eklasse.ch/Klassenverwaltung" />';

        }
        else {
            mysqli_query($con,$sql_befehl);
//echo "Eintrag hinzugefügt.";
            echo '<meta http-equiv="refresh" content="0; url=https://schulverwaltungheimtest.ch/lernende" />';


        }
    }
}
?>
<?php

$isEntry= "Select * From sv_Lernende Order by ID asc ";

$result = mysqli_query($con, $isEntry);
echo "test1";
while ($row = mysqli_fetch_array($result)) {
    $Name=$row['Name'];
    $Vorname=$row['Vorname'];
    $Profil=$row['Profil'];
    $Klasse=$row['Klasse'];
    $EMail=$row['EMail'];
    $UserID=$row['User_ID'];
    $ID=$row['ID'];
    $isEntry4= "Select ID  From sv_LernendeModule";

    $result4 = mysqli_query($con, $isEntry4);
    while ($row4= mysqli_fetch_array($result4)) {
        if ($ID==$row4['ID'])
        {
            $query4 = "Update sv_LernendeModule Set Name='$Name' , Vorname='$Vorname' , EMail='$EMail', User_ID='$UserID', Profil='$Profil' Where ID='$ID' ";
            mysqli_query($con, $query4);
        }
    }
$x=1;
    $isEntry1= "Select *  From sv_Lernende Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail'";

    $result1 = mysqli_query($con, $isEntry1);
    
    while ($row1= mysqli_fetch_array($result1)) {
        echo "test";
        $isEntry2= "Select *  From sv_LernendeModule Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail'";

        $result2 = mysqli_query($con, $isEntry2);
        $ID2="";
        while ($row2= mysqli_fetch_array($result2)) {
            $ID2=$row2['ID'];
        }

        if ($x==1 and $ID2=="") {
            $Klasse1=$row1['Klasse'];
            $query1 = "INSERT INTO sv_LernendeModule (Name, Vorname,EMail,Profil,User_ID,ID,Modul1)  VALUES ('$Name', '$Vorname', '$EMail','$Profil','$UserID','$ID','$Klasse1')";
            mysqli_query($con, $query1);
            $x++;
            echo "Insert";
        }
        else {

            $Klasse1=$row1['Klasse'];

            if ($x==1) {
                $query2 = "Update sv_LernendeModule Set Modul1='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);

            }if ($x==2) {
                $query2 = "Update sv_LernendeModule Set Modul2='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
                echo "fvbnfn";
            }if ($x==3) {
                $query2 = "Update sv_LernendeModule Set Modul3='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }if ($x==4) {
                $query2 = "Update sv_LernendeModule Set Modul4='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }if ($x==5) {
                $query2 = "Update sv_LernendeModule Set Modul5='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }if ($x==6) {
                $query2 = "Update sv_LernendeModule Set Modul6='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }if ($x==7) {
                $query2 = "Update sv_LernendeModule Set Modul7='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }if ($x==8) {
                $query2 = "Update sv_LernendeModule Set Modul8='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }if ($x==9) {
                $query2 = "Update sv_LernendeModule Set Modul9='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }if ($x==10) {
                $query2 = "Update sv_LernendeModule Set Modul10='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }if ($x==11) {
                $query2 = "Update sv_LernendeModule Set Modul11='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }if ($x==12) {
                $query2 = "Update sv_LernendeModule Set Modul12='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
            }
            $x++;
            echo "Update";
        }
    }




}

?>

<?php

$isEntry= "Select KursID, Klasse From sv_Kurse";
$result1 = mysqli_query($con, $isEntry);
while( $row5= mysqli_fetch_array($result1))
{

    $Klasse =  $row5['Klasse'];
    $Kursname =  $row5['KursID'];

    $dontFill=0;
    $isEntry3= "Select KursID From sv_LernenderKurs";
    $result3 = mysqli_query($con, $isEntry3);
    $resultarr3 = array();

    while( $row3= mysqli_fetch_assoc($result3))
    {
        $resultarr3[] = $row3['KursID'];
    }

    $uniquearr3 = array_unique($resultarr3);
    asort($uniquearr3);

    foreach ($uniquearr3 as $value) {
        if ($value==$Kursname)
        {
            $dontFill=1;
        }
    }


    $isEntry2= "Select Name, Vorname, ID, Profil From sv_LernendeModule Where Modul1='$Klasse' or Modul2='$Klasse' or Modul3='$Klasse' or Modul4='$Klasse' or Modul5='$Klasse' or Modul6='$Klasse' or Modul7='$Klasse' or Modul8='$Klasse' or Modul9='$Klasse' or Modul10='$Klasse' or Modul11='$Klasse' or Modul12='$Klasse' ";


    $result2 = mysqli_query($con, $isEntry2);

    while ($row2 = mysqli_fetch_array($result2)) {
        $dontFill=0;
        $SchuelerID= $row2['ID'];
        $Vorname= $row2['Vorname'];
        $Nachname= $row2['Name'];
        $Profil1= $row2['Profil'];

        preg_match("/.fz./", $Kursname, $output_array1);
        $KursnameReg=$output_array1[0];
        preg_match("/e/", $Profil1, $output_array2);
        $ProfilReg=$output_array2[0];
        preg_match("/.itplus./", $Kursname, $output_array3);
        $KursnameReg1=$output_array3[0];
        preg_match("/it/", $Profil1, $output_array4);
        $ProfilReg1=$output_array4[0];
        if ((($KursnameReg=='.fz.') and ($ProfilReg=='e')) or (($KursnameReg<>'.fz.') and ($KursnameReg1<>'.itplus.')) or (($KursnameReg1=='.itplus.') and ($ProfilReg1=='it'))) {

            $isEntry4= "Select SchülerID, Vorname, Nachname, KursID From sv_LernenderKurs";
            $result4 = mysqli_query($con, $isEntry4);

            while ($row4 = mysqli_fetch_array($result4)) {
                $ID1= $row4['SchülerID'];
                $KursnameAbw =  $row4['KursID'];
                $VornameAbw= $row4['Vorname'];
                $NachnameAbw= $row4['Nachname'];

                if ( ($SchuelerID==$ID1) and ($Kursname==$KursnameAbw) and (($Vorname<>$VornameAbw) or ($Nachname<>$NachnameAbw) ))
                {
                    $sql_befehl = "Update sv_LernenderKurs SET Vorname='$Vorname', Nachname='$Nachname' Where SchülerID='$ID1' and KursID='$Kursname'";
                    mysqli_query($con, $sql_befehl);
//echo "Eintrag hinzugefügt!";
                    $dontFill=1;
                }







                if ( ($SchuelerID==$ID1) and ($Kursname==$KursnameAbw) and  ($Vorname==$VornameAbw) and ($Nachname==$NachnameAbw) )
                {
                    $dontFill=1;
                }
            }

            if ($dontFill == 0 and strpos($Kursname, $Klasse) !== false){
                $sql_befehl = "INSERT INTO sv_LernenderKurs (KursID, SchülerID, Klasse, Vorname, Nachname) VALUES ('$Kursname', '$SchuelerID', '$Klasse', '$Vorname','$Nachname')";
                mysqli_query($con, $sql_befehl);
//echo "Eintrag hinzugefügt!";
            }

        }
    }
}


?>

<meta http-equiv="refresh" content="5; URL=https://schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung/">
<form action="https://schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung/"> <input type="submit" value="Zurück" /></form>

&nbsp;

&nbsp;