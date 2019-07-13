<script> function insert(z){
		if (document.getElementById("klasse").value != ""){
		if (document.getElementById("AnzahlSch").value!="")
			{
			
document.getElementById("add").style.visibility = "hidden"; 
		document.getElementById("add1").style.visibility = "hidden"; 
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

                    document.getElementById("schuelerdiv").innerHTML = this.responseText;

                }

            };

            xmlhttp.open("GET","/Ajax_Scripts/addLernende.php?k="+ document.getElementById("AnzahlSch").value + "&l="+ z,true);

            xmlhttp.send();
		}
		else alert('die zu erstellende Klasse hat keinen Namen!');
        }

	function insert1(z){
			if (document.getElementById("klasse1").value !=""){
		if (document.getElementById("AnzahlSch2").value!="")
			{
			
document.getElementById("add").style.visibility = "hidden"; 
		document.getElementById("add1").style.visibility = "hidden"; 
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

                    document.getElementById("schuelerdiv1").innerHTML = this.responseText;

                }

            };

            xmlhttp.open("GET","/Ajax_Scripts/addLernendetoClass.php?k="+ document.getElementById("AnzahlSch2").value + "&l="+ z+ "&m="+document.getElementById("klasse1").value,true);

            xmlhttp.send();

        }
		else alert('Bitte wählen Sie eine Klasse aus!');
	}

	function edit(){
		
		

            if (window.XMLHttpRequest) {

                // code for IE7+, Firefox, Chrome, Opera, Safari

                xmlhttp = new XMLHttpRequest();

            } else {

                // code for IE6, IE5

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            }

            xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("schuelerdiv3").innerHTML = this.responseText;

                }

            };

            xmlhttp.open("GET","/Ajax_Scripts/schuelerbearbeiten.php?k="+document.getElementById("klasse2").value,true);

            xmlhttp.send();

        }
 	function del(str){

      var r = confirm("Soll der Schüler mit der ID "+str+"  wirklich gelöscht werden?");
       if (r == true) {
 


        if (str == "") {

            document.getElementById("del").innerHTML = "";

            return;

        } else {

            if (window.XMLHttpRequest) {

                // code for IE7+, Firefox, Chrome, Opera, Safari

                xmlhttp = new XMLHttpRequest();

            } else {

                // code for IE6, IE5

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            }

            xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("schuelerdiv3").innerHTML = this.responseText;

                }

            };

            xmlhttp.open("GET","/Ajax_Scripts/DelSchueler.php?k="+str+"&l="+document.getElementById("klasse2").value,true);

            xmlhttp.send();

        }

		
	}
		
	}
	function updateSchueler(y){
		
      var r = confirm("Soll der Eintrag  wirklich geändert werden?");
       if (r == true) {
 


        

      

            if (window.XMLHttpRequest) {

                // code for IE7+, Firefox, Chrome, Opera, Safari

                xmlhttp = new XMLHttpRequest();

            } else {

                // code for IE6, IE5

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            }

            xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("schuelerdiv3").innerHTML = this.responseText;

                }

            };
		   
		  

            xmlhttp.open("GET","/Ajax_Scripts/UpdateSchueler.php?k="+document.getElementById("ID1"+y).value + "&l="+document.getElementById("Nachname1"+y).value +  "&m="+document.getElementById("Vorname1"+y).value+  "&n="+document.getElementById("Profil"+y).value+  "&o="+document.getElementById("Loginname1"+y).value+ "&p="+ document.getElementById("EMail1"+y).value +"&q="+document.getElementById("klasse2").value,true);

            xmlhttp.send();

        }

	}
	function resetklasse(){
		document.getElementById("klasse").value = ""; 
	}
	

</script>





    <h2><strong>Klasse erstellen</strong></h2>

   
	
<button type="button" id="myBtn1" >Klasse erstellen</button>

  <h2><strong>Klasse erweitern</strong></h2>

<button type="button" id="myBtn2" >Klasse erweitern</button>

  <h2><strong>Klasse bearbeiten</strong></h2>

<button type="button" id="myBtn3" >Klasse bearbeiten</button>
	

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {}

        /* The Modal (background) */
        .modal{
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
		.modal1{
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }


        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 1200px;
        }
		
		.modal-content1 {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 1400px;
        }


        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        button {
          color: white;
        }

    </style>
</head>
<body>

        

<div id="myModal1" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
     
    <form action="/DBFuellung/DBFuellungSchuelereingabe.php "method="POST">
         <h2><strong>Klasse erstellen</strong></h2>

    <br>


        <?php
        include 'db.php';
       
            
           
           
           
                $isEntry = "SELECT ID From sv_Lernende";
                $result = mysqli_query($con, $isEntry);
                $y=0;

                while( $value= mysqli_fetch_array($result))
                {
                    $z=$value['ID'];
                }
		echo '<br>Neue Klasse (Klassenname darf kein Leerzeichen enthalten):<br><input name="klasse" id="klasse" required="reqiured"  /><br><br>';
                    echo 'Anzahl der hinzuzufügenden Schüler:<br>';
				echo '<input name="AnzahlSch" id="AnzahlSch" value="" required="reqiured">';
				 echo '<br><br><input type="button" name="add" id="add" value="Schüler hinzufügen" onclick="insert('.$z.')"><br><br>';
               echo '_______________________________________________________________________________________________________________________________________________________________________________________<br><br>';
              echo '<div id="schuelerdiv"></div>';
             
 
?>
		<input name="Senden" type="submit" value="Weiter" /></form><br /><hr />
		 <span class="close" id="span1">&times;</span>
		</div>
		
		</div>

<div id="myModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
     
    <form action="/DBFuellung/DBFuellungSchuelereingabeErw.php "method="POST">
        <h2><strong>Klasse erweitern</strong></h2>

    <br>

    Bestehende Klasse wählen:<br />

    <br>

    <select name="klasse1" id="klasse1"  required="reqiured" >



        <?php

        include 'db.php';


        $isEntry= "Select Klasse From sv_Lernende";

        $result1 = mysqli_query($con, $isEntry);

        $resultarr1 = array();

        echo "<option></option>";



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

        <?php
        include 'db.php';
       
            
           
           
           
                $isEntry = "SELECT ID From sv_Lernende";
                $result = mysqli_query($con, $isEntry);
                $y=0;

                while( $value= mysqli_fetch_array($result))
                {
                    $z2=$value['ID'];
                }
		
                    echo '<br><br>Anzahl der hinzuzufügenden Schüler:<br>';
				echo '<input name="AnzahlSch2" id="AnzahlSch2" value="" required="reqiured">';
				 echo '<br><br><input type="button" name="add1" id="add1" value="Schüler hinzufügen" onclick="insert1('.$z2.')"><br><br>';
               echo '_______________________________________________________________________________________________________________________________________________________________________________________<br><br>';
              echo '<div id="schuelerdiv1"></div>';
             
 
?>
		<input name="Senden" type="submit" value="Weiter" /></form><br /><hr />
		 <span class="close" id="span2">&times;</span>
		</div>
		
		</div>


	<div id="myModal3" class="modal1">

    <!-- Modal content -->
    <div class="modal-content1">
     
    
        <h2><strong>Klasse bearbeiten</strong></h2>

    <br>

    zu bearbeitende Klasse wählen:<br />

    <br>

    <select name="klasse2" id="klasse2" onchange="edit()" >



        <?php

        include 'db.php';


        $isEntry= "Select Klasse From sv_Lernende";

        $result1 = mysqli_query($con, $isEntry);

        $resultarr1 = array();

        echo "<option></option>";



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

        <?php
        include 'db.php';
       
            
           
           
           
				
               echo '_______________________________________________________________________________________________________________________________________________________________________________________<br><br>';
              echo '<div id="schuelerdiv3"></div>';
             
 
?>
		
		 <span class="close" id="span3">&times;</span>
		</div>
		
		</div>

<script>
    // Get the modal
       

		document.getElementById("myBtn"+1).onclick = function() {
			document.getElementById("myModal"+1).style.display = "block"; 
		}
   // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal"+1)) {
         document.getElementById("myModal"+1).style.display = "none";
			document.getElementById("add").style.visibility = "visible"; 
			document.getElementById("add1").style.visibility = "visible"; 
			
        }
    }
	
	 //When the user clicks on <span> (x), close the modal
     document.getElementById("span"+1).onclick = function() {
       document.getElementById("myModal"+1).style.display = "none";
		 document.getElementById("add").style.visibility = "visible"; 
		 document.getElementById("add1").style.visibility = "visible"; 
		 
    }
		  
	    

		document.getElementById("myBtn"+2).onclick = function() {
			document.getElementById("myModal"+2).style.display = "block"; 
		}
   // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal"+2)) {
         document.getElementById("myModal"+2).style.display = "none";
			document.getElementById("add").style.visibility = "visible"; 
			document.getElementById("add1").style.visibility = "visible"; 
			
			
        }
    }
	
	 //When the user clicks on <span> (x), close the modal
     document.getElementById("span"+2).onclick = function() {
       document.getElementById("myModal"+2).style.display = "none";
		 document.getElementById("add").style.visibility = "visible"; 
		 document.getElementById("add1").style.visibility = "visible"; 
		 
    }
	
	 
	 
		document.getElementById("myBtn"+3).onclick = function() {
			document.getElementById("myModal"+3).style.display = "block"; 
		}
   // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal"+3) || event.target == document.getElementById("myModal"+2)|| event.target == document.getElementById("myModal"+1)  ) {
         document.getElementById("myModal"+3).style.display = "none";
		
			document.getElementById("myModal"+2).style.display = "none";
		
		document.getElementById("myModal"+1).style.display = "none";
				document.getElementById("add").style.visibility = "visible"; 
			document.getElementById("add1").style.visibility = "visible"; 
			
		
		}
        
    }
	
	 //When the user clicks on <span> (x), close the modal
     document.getElementById("span"+3).onclick = function() {
       document.getElementById("myModal"+3).style.display = "none";
		
		 
    }

		</script>   










   
  
   

























