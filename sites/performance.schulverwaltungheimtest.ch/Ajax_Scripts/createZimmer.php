<?php
include 'db.php';




$Zimmer = $_GET[ 'k' ];
$Beschreibung = $_GET[ 'l' ];



		 $isdouble=0;
			
		   $isEntry21= "Select Name From sv_Zimmer";

            $result21 = mysqli_query($con, $isEntry21);

            while( $line31= mysqli_fetch_array($result21))

            {

                $Z = $line31['Name'];

                if ($z==$Zimmer)
				{
					$isdouble=1;
				}



            }

if ($isdouble==0){
$isEntry= "Insert Into sv_Zimmer (Name,Beschreibung) VALUES ('$Zimmer','$Beschreibung') ";
 mysqli_query( $con, $isEntry);
}
else echo "Das Zimmer gibt es bereits. Bitte ein anderes wählen.";







        
?>

        

