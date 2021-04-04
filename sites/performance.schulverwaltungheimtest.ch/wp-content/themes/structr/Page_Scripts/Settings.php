<script>
	
   $(document).ready( function () {

       
		showFerien();

    } );


function empty11(){
	
	document.getElementById('f11').value=null;
}
function empty12(){
	
	document.getElementById('f12').value=null;
}
	function empty21(){
	
	document.getElementById('f21').value=null;
}
	function empty22(){
	
	document.getElementById('f22').value=null;
}
	function empty31(){
	
	document.getElementById('f31').value=null;
}
	function empty32(){
	
	document.getElementById('f32').value=null;
}
		function empty41(){
	
	document.getElementById('f41').value=null;
}
	function empty42(){
	
	document.getElementById('f42').value=null;
}
	function empty51(){
	
	document.getElementById('f51').value=null;
}
	function empty52(){
	
	document.getElementById('f52').value=null;
}	
	

	
function loading(){
	
	document.getElementById('loading').style.display="block";
	document.getElementById('loader').style.display="block";
	document.getElementById('loadwarn').style.display="block";
	document.getElementById('Settings').style.display="none";
  // $('button').hide();
  var num = 0;
    for(i=0; i<=100; i++) {
        setTimeout(function() { 
            $('.loading span').html(num+'%');
           
            num++;
          if(num==100){
            $('button').show();
          }
        },i*120);
    };
  
}
		function show_slow_warning() {
			
  document.getElementById('slow_warning').style.display="block";
}
	
	
	function subm(form) {
	
if (confirm("Möchten Sie die Einstellungen wirklich übernehmen?")) {
	
form.submit();
	loading();
}
	}
	
</script>
<?php

include 'db.php';
$isEntry = "SELECT * From sv_Settings";

$result = mysqli_query($con, $isEntry);





while( $value= mysqli_fetch_array($result)) {


    $Semesterkuerzel = $value['Semesterkuerzel'];

    $Semesteranfang = $value['Semesteranfang'];

    $Semesterende = $value['Semesterende'];

    $Ferien1von = $value['Ferien1von'];

    $Ferien1bis = $value['Ferien1bis'];

    $Ferien2von = $value['Ferien2von'];

    $Ferien2bis = $value['Ferien2bis'];

    $Ferien3von = $value['Ferien3von'];

    $Ferien3bis = $value['Ferien3bis'];

    $Ferien4von = $value['Ferien4von'];

    $Ferien4bis = $value['Ferien4bis'];

    $Ferien5von = $value['Ferien5von'];

    $Ferien5bis = $value['Ferien5bis'];
	
	$Klassenbuch = $value['Klassenbuch'];
    
	$Schulname = $value['Schulname'];

    $Schulort = $value['Schulort'];
}

?><body>
	
	

<form action="/DBFuellung/DBFuellungSettings.php" id="Settings"  method="POST">
    <br>
    Bitte hier die entsprechenden Daten eintragen oder modifizieren. Diese Daten sind erforderlich und müssen am Anfang des Semesters eingetragen werden.
    <br>
    <br>
	Schulname:&nbsp; <input type=text name="Schulname" id="Schulname"   value="<?php echo $Schulname;?>"  >&nbsp;&nbsp; Schulort:&nbsp; <input type=text name="Schulort" id="Schulort"   value="<?php echo $Schulort;?>"  >
	<br>
    <br />
    <strong>Semesterkürzel</strong> (bitte für das Frühjahrssemester des aktuellen Jahres(hier
    2019) das Kürzel <strong>FS19</strong> und für das Herbstsemester 2019 das
    Kürzel <strong>WS19</strong> eintragen). Für ein ganzes Schuljahr(2019/2020) das Kürzel <strong>SJ1920</strong> eintragen:<br />
    <br />

  <!--  <select name="Semesterkuerzel" id="Semesterkuerzel"  value="<?php echo $Semesterkuerzel;?>" required="required">
        <option><?php echo $Semesterkuerzel;?></option>
		<option>FS<?php echo date("y")-1;?></option>
		<option>WS<?php echo date("y")-1;?></option>
		<option>FS<?php echo date("y");?></option>
        <option>WS<?php echo date("y");?></option>
        <option>FS<?php echo date("y")+1;?></option>
        <option>WS<?php echo date("y")+1;?></option>
        <option>FS<?php echo date("y")+2;?></option>
        <option>WS<?php echo date("y")+2;?></option>
    </select>-->
	<br><br>
	Aktuelles Semester:<br>
	<input type=text name="Semestershow" id="Semestershow"   value="<?php echo $Semesterkuerzel;?>"  readonly="readonly">
	<br><br>
	<h4>Semester oder Schuljahr wählen</h4> <br>Bitte Dropdown oder Textfeld wählen um das Semester zu wechseln. Bitte beide leer lassen, wenn das Semester oder Schuljahr nicht geändert werden soll! 
	<hr>
	
	Im System befindliche Semester/Schuljahre:<br>
<select id="Semester" name="Semester" onchange="showFerien()">
    <?php

    //Den aktuell eingeloggten Schüler anzeigen

    $isEntry= "Select * From sv_SemesterArchiv";
    $result = mysqli_query($con, $isEntry);
    echo "<option></option>";

    while( $line3= mysqli_fetch_array($result))
    {
	$Semesteranfang=$line3['Semesteranfang'];
	$Semesterende= $line3['Semesterende'];	
    $Semester = $line3['Semesterkuerzel'];
    echo "<option>" . $Semester . "</option>";

    }

    ?>
</select>
	<br><br>
    Neues Semester/Schuljahr anlegen:<br>
	<input type=text name="Semesterkuerzel" id="Semesterkuerzel" value="" onChange="showFerien()">
    <br><br>
    <hr>
   
	
   <script type='text/javascript'>

    <!--

    $(document).ready( function () {

        $('#table_id').DataTable();
		showFerien();

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

         
            xmlhttp.open("GET","/Ajax_Scripts/DelFerien.php?k="+document.getElementById("ID"+str).value + "&sem="+document.getElementById("Semester").value + "&sem1="+document.getElementById("Semesterkuerzel").value + "&semshow="+document.getElementById("Semestershow").value,true);

           xmlhttp.timeout = 2000; // time in milliseconds

xmlhttp.onload = function () {
 showFerien();
};

xmlhttp.ontimeout = function (e) {
  // XMLHttpRequest timed out. Do something here.
};


		
            xmlhttp.send();

        }

		
	
		
	}
	function updateProfil(y){
		
      var r = confirm("Soll der Eintrag  wirklich geändert werden?"   );
       if (r == true) {
 


        

      

            if (window.XMLHttpRequest) {

                // code for IE7+, Firefox, Chrome, Opera, Safari

                xmlhttp = new XMLHttpRequest();

            } else {

                // code for IE6, IE5

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            }

           
		   
		  

            xmlhttp.open("GET","/Ajax_Scripts/UpdateProfil.php?k="+document.getElementById("Profil"+y).value + "&l="+document.getElementById("Beschreibung"+y).value + "&m="+document.getElementById("ID"+y).value + "&sem="+document.getElementById("Semester").value + "&sem1="+document.getElementById("Semesterkuerzel").value,true);

            xmlhttp.timeout = 2000; // time in milliseconds

xmlhttp.onload = function () {
 window.location.href = "/settings";
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

                   

                }

            };
		   
		  xmlhttp
            xmlhttp.open("GET","/Ajax_Scripts/createFerien.php?s="+document.getElementById("Start").value + "&e="+document.getElementById("Ende").value + "&n="+document.getElementById("Name").value + "&sem=" + document.getElementById("Semester").value + "&sem1="+document.getElementById("Semesterkuerzel").value + "&semshow="+document.getElementById("Semestershow").value,true);

		xmlhttp.timeout = 2000; // time in milliseconds

xmlhttp.onload = function () {
 showFerien();
};

xmlhttp.ontimeout = function (e) {
  // XMLHttpRequest timed out. Do something here.
};


		
            xmlhttp.send();


		
	 
		
	
	}
	   
	   
    function showFerien(){

      
document.getElementById('FerienTab').innerHTML = '';
		
       semester=document.getElementById("Semesterkuerzel").value;
		if (semester){
			document.getElementById("Semester").value='';
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

                    document.getElementById("FerienTab").innerHTML = this.responseText;

                }

            };

            xmlhttp.open("GET","/Ajax_Scripts/Ferien.php?sem="+document.getElementById("Semester").value + "&sem1="+document.getElementById("Semesterkuerzel").value + "&semshow="+document.getElementById("Semestershow").value,true);

            xmlhttp.send();

        }

    
		
	


</script>
<br><br>
<h3>Semesterdaten:</h3>
<input id="Fereinbutton" onclick="showFerien()" size="24"  value="Semesterdaten anzeigen" STYLE=" background-color: darkgrey; cursor: pointer" size="10" maxlength="30" readonly>
<div id="FerienTab"></div>

	
	_______________________________________________
	<h4>Klassenbucheinstellungen</h4>
	<? if ($Klassenbuch=="true")
{
	echo '<input type="checkbox" id="Klassenbuch" name="Klassenbuch"  value="true" checked>';
} else{
	echo '<input type="checkbox" id="Klassenbuch" name="Klassenbuch"  value="true" >';
}
	
	?>
	
	 <label for="Klassenbuch"> Das Klassenbuch mit den Kursterminen verknüpfen</label><br>
    <br><br>
    <input name="Senden" id="Senden" type="button" onClick="subm(this.form);" value="Einstellungen übernehmen"   /></form>
<div class="loading" id="loading" style="display:none"><span></span><div class="loader" id="loader" style="display:none"></div></div>
    <div id="loadwarn"  style="display:none" >Die Einstellungen werden übernommen. Bitte warten und auf der Seite bleiben bis das Ladesymbol verschwunden ist... </div> 

	
	
</body>


<script>

	

	 function test() {
       alert();  
		
		 
	 }
	
function dbbackup(){

       
     
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               
            }
        };
        xmlhttp.open("GET","/Ajax_Scripts/dbbackup.php,true);
        xmlhttp.send();
       
    
}
	
	
</script>



<style>


.loading {
  position:relative;
  margin:0 auto;
  width:100px;
  height:100px;
  
}
.loading span{  
  position:absolute;
  top:46%;
  left:44%;
  font-family: 'Helvetica Neue', Helvetica, Roboto, sans-serif;
font-size: 12px;
font-weight: bold;
  
}

.loader{
  width:100px;
  height:100px;
  position: relative;
  background:transparent;
  margin:1% auto;
  border:5px dashed #265573;
  -webkit-border-radius:100%;

  
   animation: spin 12s linear infinite;  
  -webkit-animation: spin 12s linear infinite;
  -moz-animation: spin 12s linear infinite;
  -o-animation: spin 12s linear infinite; 
  
  
  box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
  -webkit-box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
  -moz-box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
  -o-box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
}

.loader:before{
  content:'';
  position:absolute;
  width:70%;
  height:70%;
  border:4px dashed #386D73;
  border-radius:100%;
  top:11%;
  left:11%;

  box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -moz-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -o-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  
   animation: spin 8s linear infinite;  
  -webkit-animation: spin 8s linear infinite;
  -moz-animation: spin 8s linear infinite;
  -o-animation: spin 8s linear infinite;  
  
}

.loader:after{
  content:'';
  position:absolute;
  width:40%;
  height:40%;
  border:3px dashed #81A68A;
  border-radius:100%;
  top:27%;
  left:27%;
  
  box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -moz-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -o-box-shadow: 0 0 10px rgba(0,0,0,0.25);

  animation: spin 3s linear infinite;  
  -webkit-animation: spin 3s linear infinite;
  -moz-animation: spin 3s linear infinite;
  -o-animation: spin 3s linear infinite;  
  
}


@keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}

@-webkit-keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}

@-moz-keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}

@-o-keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}



footer{
  position:fixed;
  bottom:20px;
  text-align:center;
  display:block;
  width:100%;
  color:grey;
  font-family: 'Helvetica Neue', Helvetica, Roboto, sans-serif;
  font-weight:300;
}

footer a{
  text-decoration:none;
  color:rgba(0,0,0,0.8);
}
</style>


</html>
