
<?php

include 'db.php';

$y = 0;
$ID = $_GET[ 'k' ];
//$ID = $_GET[ 'k' ];


$isEntry = "Delete From sv_Lernende where ID ='$ID'";
mysqli_query( $con, $isEntry );
?>

<?php

$isEntry= "Select * From sv_Lernende Order by ID asc ";

$result = mysqli_query($con, $isEntry);

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
     
        }
        else {

            $Klasse1=$row1['Klasse'];

            if ($x==1) {
                $query2 = "Update sv_LernendeModule Set Modul1='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);

            }if ($x==2) {
                $query2 = "Update sv_LernendeModule Set Modul2='$Klasse1' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";
                mysqli_query($con, $query2);
                
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
           
        }
    }
	
for($z=$x;$z<13;$z++)
{
	$Modul="Modul".$z;

$query2 = "Update sv_LernendeModule Set $Modul='' Where Name='$Name' and Vorname='$Vorname' and EMail='$EMail' ";

                mysqli_query($con, $query2);
			
}




}



?>





    <?php
	
	include "db.php";

   
        $Klassenname =  $_GET['l'];

      


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

            echo '<td><input name="ID1'.$y.'"  id="ID1'.$y.'" style="width: 100px" type="text"  value='.$ID.'  readonly></td>';

            echo '<td><input  name="Nachname1'.$y.'"  id="Nachname1'.$y.'" style="width: 240px" type="text"  value='.$Name.'   ></td>';

            echo '<td><input name="Vorname1'.$y.'"  id="Vorname1'.$y.'" type="text" value='.$Vorname.' style="width: 240px"  ></td>';

            echo '<td><input name="Profil'.$y.'" id="Profil'.$y.'" type="text" style="width: 100px" value='.$Profil.'  ></td>';

            echo '<td><input name="Loginname1'.$y.'" id="Loginname1'.$y.'" type="text" style="width: 240px" value='.$Loginname.'  ></td>';

            echo '<td><input name="EMail1'.$y.'" id="EMail1'.$y.'" type="text" style="width: 300px" value='.$EMail.'  ></td>';
			 
			echo '<td><input name="Delete'.$y.'" onclick="del('.$ID.')" type="button" value="Löschen"   style="width: 150px" ></td>';
			
			echo '<td><input name="Update'.$y.'" onclick="updateSchueler('.$y.')"  type="button" value="Update" style="width: 150px" ></td>';



            echo "</tr>";

            $y=$y+1;

        }

        echo "</tbody>";

        echo "</table>";

        echo '<input name="Klassenname" type="hidden" value="'.$Klassenname.'" /> ';

        echo '<input name="AnzahlSch" type="hidden" value="'.$y.'" /> ';





    



    ?>

 

</body>

</html>

