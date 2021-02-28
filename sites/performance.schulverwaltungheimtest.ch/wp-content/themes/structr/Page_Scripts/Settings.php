<script>
	


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
   $('button').hide();
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
$isEntry = "SELECT Semesterkuerzel, Semesteranfang, Semesterende, Ferien1von, Ferien1bis, Ferien2von, Ferien2bis, Ferien3von, Ferien3bis, Ferien4von, Ferien4bis,Ferien5von, Ferien5bis, Klassenbuch From sv_Settings";

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



}

?>

<body>
	
	

<form action="/DBFuellung/DBFuellungSettings.php" id="Settings"  method="POST">
    <br>
    Bitte hier die entsprechenden Daten eintragen oder modifizieren. Diese Daten sind erforderlich und müssen am Anfang des Semesters eingetragen werden.
    <br>
    <br><br>
    <br />
    <strong>Semesterkürzel</strong> (bitte für das Frühjahrssemester des aktuellen Jahres(hier
    2019) das Kürzel <strong>FS19</strong> und für das Herbstsemester 2019 das
    Kürzel <strong>WS19</strong> eintragen):<br />
    <br />

    <select name="Semesterkuerzel" id="Semesterkuerzel"  value="<?php echo $Semesterkuerzel;?>" required="required">
        <option><?php echo $Semesterkuerzel;?></option>
		<option>FS<?php echo date("y")-1;?></option>
		<option>WS<?php echo date("y")-1;?></option>
		<option>FS<?php echo date("y");?></option>
        <option>WS<?php echo date("y");?></option>
        <option>FS<?php echo date("y")+1;?></option>
        <option>WS<?php echo date("y")+1;?></option>
        <option>FS<?php echo date("y")+2;?></option>
        <option>WS<?php echo date("y")+2;?></option>
    </select>
    <br>
    <br />
    <strong>Semesteranfang:</strong>
    <input name="Semesteranfang" type="date" value="<?php echo $Semesteranfang ?>" />
    <br>
    <br>
        <strong>Semesterende:</strong>
    <input name="Semesterende" type="date" value="<?php echo $Semesterende ?>" />
    <br>
    <br><strong>Ferien 1:</strong><br />

    von:
    <input name="Ferien1von" id="f11" type="date" onclick="empty11()" value="<?php echo $Ferien1von ?>" />
    bis:
    <input name="Ferien1bis" id="f12" type="date" onclick="empty12()" value="<?php echo $Ferien1bis ?>" />
    <br>
    <br><strong>Ferien 2:</strong><br />

    von:
    <input name="Ferien2von" id="f21" type="date" onclick="empty21()"  value="<?php echo $Ferien2von ?>"/>
    bis:
    <input name="Ferien2bis" id="f22" type="date" onclick="empty22()" value="<?php echo $Ferien2bis ?>" />
    <br>
    <br><strong>Ferien 3:</strong><br />

    von:
    <input name="Ferien3von" id="f31"type="date" onclick="empty31()" value="<?php echo $Ferien3von ?>" />
    bis:
    <input name="Ferien3bis" id="f32" type="date" onclick="empty32()" value="<?php echo $Ferien3bis ?>" />
    <br>
    <br><strong>Ferien 4:</strong><br />

    von:
    <input name="Ferien4von"  id="f41" type="date" onclick="empty41()" value="<?php echo $Ferien4von ?>" />
    bis:
    <input name="Ferien4bis" id="f42" type="date" onclick="empty42()" value="<?php echo $Ferien4bis ?>" />
    <br>
    <br><strong>Ferien 5:</strong><br />

    von:
    <input name="Ferien5von"  id="f51" type="date" onclick="empty51()" value="<?php echo $Ferien5von ?>" />
    bis:
    <input name="Ferien5bis" id="f52" type="date" onclick="empty52()" value="<?php echo $Ferien5bis ?>" />
    <br><br>
	
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
    <div id="loadwarn"  style="display:none" >Die Einstellungen werden übernmommen. Bitte warten und auf der Seite bleiben bis das Ladesymbol verschwunden ist... </div> 

	
	
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
