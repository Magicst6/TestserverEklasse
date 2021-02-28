<head>




		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	 <script type = "text/javascript">
         google.charts.load('current', {packages: ['table']});     
      </script>
</head>


<em>Hier werden die Kurse den Lehrpersonen zugeordnet  </em>

<br>

<?php

include 'db.php';


?>





<form action=" /DBFuellung/DBFuellungLehrpersonen.php" method="POST">







<script>

function getKurseDerLehrperson(){

        if (window.XMLHttpRequest) {

            // code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        } else {

            // code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("lernende").innerHTML = this.responseText;

            }

        };

        xmlhttp.open("GET","/Ajax_Scripts/getKursnameLehrperson1.php?q="+ document.getElementById('lehrer').value+"&k=" + document.getElementById('kurse').value,true);

        xmlhttp.send();

    }



//-->

</script>





</body>

</html>

    <br><br>

Lehrperson:

    <br>

<select name="lehrer" onchange="getKurseDerLehrperson()" id="lehrer" >



    <?php



$isEntry= "Select ID From sv_Lehrpersonen ";

$result = mysqli_query($con, $isEntry);

$resultarr = array();





while( $line2= mysqli_fetch_assoc($result))

{

    $resultarr[] = $line2['ID'];

}

$uniquearr = array_unique($resultarr);





echo "<option>" . $_GET['lehrer'] . "</option>";

echo "<option>".''. "</option>";



foreach ($uniquearr as $value) {

    $isEntry= "Select Nachname, Vorname From sv_Lehrpersonen WHERE ID='$value'";

    $result = mysqli_query($con, $isEntry);

    while( $line3= mysqli_fetch_array($result))

    {

        $Name = $line3['Nachname'];

        $Vorname = $line3['Vorname'];



    }

    echo "<option>" . $Vorname .' '. $Name .' ID:'. $value . "</option>";

}

$test="fvjhdkvgdhf";

?>

</select>
<br>
<br>
Anzahl der angezeigten Kurszuordnungen:
<br>
<select name="kurse" onchange="getKurseDerLehrperson()" id="kurse" >

	<option>30</option>
	<option>20</option>
	<option>10</option>
	<option>5</option>

   

</select>


    <br><br>



<div id="lernende"><b>Kurse des Lehrers werden hier aufgelistet...</b></div>



    <br><br>

<input name="Senden" type="submit" value="Senden" />





</form>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
	  
	  ['Nachname', 'Kurszahl'],

  <?  
      
  $isEntry= "SELECT COUNT(KursID) as Kurszahl,sv_Lehrpersonen.Nachname as Nachname  From sv_KurseLehrer INNER JOIN sv_Lehrpersonen ON sv_KurseLehrer.LP_ID = sv_Lehrpersonen.ID Group by LP_ID ";
$result2=	mysqli_query( $con, $isEntry );	
while( $line3= mysqli_fetch_array($result2))

    {
	
  
	
			
  
	 echo "['$line3[Nachname]',".$line3[Kurszahl]." ],";
}
  ?>
]);
		
  // Optional; add a title and set the width and height of the chart
  var options = { title : 'Kurszahl der Lehrer',
          vAxis: {title: 'Kurszahl'},
          hAxis: {title: 'Lehrer'},
          seriesType: 'bars',
          series: {5: {type: 'line'}},
	      width:"95%",
	      height: '300'};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.ColumnChart(document.getElementById('KursChart'));
  chart.draw(data, options);
}
</script>	
<br>
<div id="KursChart"></div>
