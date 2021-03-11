<script type='text/javascript'>

    <!--

    $(document).ready( function () {

        $('#table_id').DataTable();

    } );



    //-->
	
	function del(str){

      var r = confirm("Soll der Eintrag wirklich gelöscht werden?");
       if (r == true) {
 


        
        

            if (window.XMLHttpRequest) {

                // code for IE7+, Firefox, Chrome, Opera, Safari

                xmlhttp = new XMLHttpRequest();

            } else {

                // code for IE6, IE5

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            }

         
            xmlhttp.open("GET","/Ajax_Scripts/DelZimmer.php?k="+document.getElementById("ID"+str).value,true);

           xmlhttp.timeout = 2000; // time in milliseconds

xmlhttp.onload = function () {
 window.location.href = "/zimmerstammdaten";
};

xmlhttp.ontimeout = function (e) {
  // XMLHttpRequest timed out. Do something here.
};


		
            xmlhttp.send();

        }

		
	
		
	}
	function updateKursST(y){
	var str=	document.getElementById("farbe"+y).value;
		var farbe=str.slice(1);
      var r = confirm("Soll der Eintrag  wirklich geändert werden?"   );
       if (r == true) {
 


        

      

            if (window.XMLHttpRequest) {

                // code for IE7+, Firefox, Chrome, Opera, Safari

                xmlhttp = new XMLHttpRequest();

            } else {

                // code for IE6, IE5

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            } xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("farbediv").innerHTML = this.responseText;
            }
        };

           
		   
		  

            xmlhttp.open("GET","/Ajax_Scripts/UpdateKursST.php?k="+document.getElementById("Kursname"+y).value + "&l="+document.getElementById("KursKuerzel"+y).value + "&m="+document.getElementById("ID"+y).value+ "&f="+farbe + "&z="+document.getElementById("Zimmer"+y).value+ "&lp="+document.getElementById("Lehrer"+y).value + "&p="+document.getElementById("Profil"+y).value,true);

            xmlhttp.timeout = 4000; // time in milliseconds

xmlhttp.onload = function () {
window.location.href = "/zimmerstammdaten";
};

xmlhttp.ontimeout = function (e) {
  // XMLHttpRequest timed out. Do something here.
};


		
            xmlhttp.send();


        }

		
	}
	
	function create(){
		
      

        

      

            if (window.XMLHttpRequest) {

                // code for IE7+, Firefox, Chrome, Opera, Safari

                xmlhttp = new XMLHttpRequest();

            } else {

                // code for IE6, IE5

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            }

            xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {

                     document.getElementById("farbediv").innerHTML = this.responseText;

                }

            };
		   
		  xmlhttp
            xmlhttp.open("GET","/Ajax_Scripts/createZimmer.php?k="+document.getElementById("Zimmer").value + "&l="+document.getElementById("Beschreibung").value,true);

		xmlhttp.timeout = 4000; // time in milliseconds

xmlhttp.onload = function () {
 window.location.href = "/zimmerstammdaten";
};

xmlhttp.ontimeout = function (e) {
  // XMLHttpRequest timed out. Do something here.
};


		
            xmlhttp.send();


		
	 
		
	
	}
		
	


</script>
Bitte hier die Zimmernummer aller benutzten Räume eingeben:<br>

<div id="farbediv"></div>

<?php
include 'db.php';

			      $isEntry = "SELECT * From sv_Zimmer Order by ID";
			 
		
			$result = mysqli_query($con,$isEntry);

			echo '<table id="table_id" class="display" width="50%">';

			//Schreibe Spaltennamen

			echo "<thead>";

			echo "<tr>";

		

			

	       echo "<th width=200>".'Zimmer'. "</th>";
 echo "<th width=200>".'Beschreibung'. "</th>";
            
            echo "<th width=60>".''."</th>";

			
			

			echo "</tr>";



			echo "</thead>";
 
            echo "<tbody>";

 $y=0;

			while( $value= mysqli_fetch_array($result))

			{
				$Beschreibung=$value['Beschreibung'];
				$Name=$value['Name'];
				$ID=$value['id'];
				
				



				echo "<tr>";

				echo '<input name="ID'.$y.'"  id="ID'.$y.'" style="width: 80px" type="hidden"  value="'.$ID.'"  >';
		echo '<td><input name="Zimmer'.$y.'"  id="Zimmer'.$y.'" style="width: 200px" type="text"  value="'.$Name.'"  ></td>';
        echo '<td><input name="Beschreibung'.$y.'"  id="Beschreibung'.$y.'" style="width: 200px" type="text"  value="'.$Beschreibung.'"  ></td>';
				

				
			
				echo '<td><input name="Delete'.$y.'" onclick="del('.$y.')" type="button" value="Löschen"   style="width: 120px" ></td>';
			
			


				echo "</tr>";
				
				 $y=$y+1;


			

			}


				echo "<tr>";


        echo '<td><input name="Zimmer"  id="Zimmer" style="width: 200px" type="text"  value=""  ></td>';
 echo '<td><input name="Beschreibung""  id="Beschreibung" style="width: 200px" type="text"  value=""  ></td>';
		echo '<td><input name="Anlegen" onclick="create()" type="button" value="Erstellen"   style="width:120px" ></td>';
			
			


				echo "</tr>";

            echo "</tbody>";

			echo "</table>";
				

?>

