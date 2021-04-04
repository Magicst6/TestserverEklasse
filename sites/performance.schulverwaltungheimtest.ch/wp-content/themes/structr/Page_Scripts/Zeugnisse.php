
	<script>

    function getSchueler(){





        if (window.XMLHttpRequest) {

            // code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        } else {

            // code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("schueler").innerHTML = this.responseText;

            }

        };

        xmlhttp.open("GET","/Ajax_Scripts/getschuelerbyklasse.php?q="+ document.getElementById('klassedrop').value,true);

        xmlhttp.send();

    }
		
		  document.getElementById('Zwischenzeugnis').onclick = function() {
    // access properties using this keyword
    if ( this.checked ) {
        // Returns true if checked
        alert( this.value );
    } else {
        // Returns false if not checked
    }
};
		
function target_popup(form) {
    window.open('', 'formpopup', 'width=400,height=400,resizeable,scrollbars');
    form.target = 'formpopup';
}
		
		
		    function fillfields(){
document.getElementById('Zeugnisdaten').style.display="block";
				
     if (document.getElementById('Zwischenzeugnis').checked	){			

     var str="on";

	 }
				else{
					var str="";
				}

        if (window.XMLHttpRequest) {

            // code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        } else {

            // code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("Zeugnisdaten").innerHTML = this.responseText;

            }

        };

        xmlhttp.open("GET","/Ajax_Scripts/showSchuelerDatenZeugnisse.php?q="+ document.getElementById('klassedrop').value + "&p="+ document.getElementById('schueler').value  + "&c="+ str,true);

        xmlhttp.send();

    }
</script>


<form action="/wp-content/themes/structr/Page_Scripts/DBFuellungZeugnisse.php" id="Zeugnisse" onsubmit="target_popup(this)"  method="POST"  >

<H1>Zeugnisgenerator</H1>


	<input type="checkbox" id="Zwischenzeugnis" name="Zwischenzeugnis"   >

	

	
	
	
	 <label for="Zwischenzeugnis">Es handelt sich um das Zwischenzeugnis</label><br>
    <br>

Klasse:<br>
   
     <select name="klassedrop" id="klassedrop" onchange="getSchueler()" >



        <?php
  global $current_user;

    get_currentuserinfo();


        include 'db.php';



 $isEntry2= "Select ID From sv_Lehrpersonen where User_ID='$current_user->ID'";

        $result2 = mysqli_query($con,$isEntry2);

		 while( $line3= mysqli_fetch_assoc($result2))

          {
			 $ID=$line3['ID'];
		 }



        $isEntry= "Select Klasse From sv_Klassenlehrer where LP_ID='$ID'";

        $result1 = mysqli_query($con,$isEntry);

        $resultarr1 = array();
          if ($_GET['klasse']){
        echo "<option>".$_GET['klasse']."</option>";
		  }
		else{   
        echo "<option></option>";
		}
        while( $line2= mysqli_fetch_assoc($result1))

        {

            $resultarr1[] = $line2['Klasse'];
			
			

        }

        $uniquearr1 = array_unique($resultarr1);

        asort($uniquearr1);


        

        foreach ($uniquearr1 as $value)

        {

            if ($value == $_GET['klasse']){}

            else

            {
               if ($value){
                echo "<option>" . $value . "</option>";
			   }
            }

        }



        ?>



    </select>
<br><br>
Schüler:<br>
<select name="schueler" id="schueler" onchange="fillfields()"></select>



<br><br>


<div id="Zeugnisdaten" class="zd" style="display: none;" ></div>






</form>



<style>

.zd {
width: 900px;
      
      border: 3px solid #ccc;
      background: #eee; 
      margin: auto;
      padding: 15px 25px;
}
	.zd1 {
width: 700px;
     height:950px; 
      border: 3px solid #ccc;
      background: #eee; 
      margin: auto;
      padding: 15px 25px;
}
	

</style>