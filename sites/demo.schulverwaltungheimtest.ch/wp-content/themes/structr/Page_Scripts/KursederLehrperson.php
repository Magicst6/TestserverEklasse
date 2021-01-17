
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

        xmlhttp.open("GET","/Ajax_Scripts/getKursnameDerLehrperson.php?q="+ document.getElementById('lehrer').value+"&k=" + document.getElementById('kurse').value,true);

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
      
  $isEntry= " 
SELECT Nachname,SUM(CASE WHEN Kurs1 IS NULL or Kurs1 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs2 IS NULL or Kurs2 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs3 IS NULL or Kurs3 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs4 IS NULL or Kurs4 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs5 IS NULL or Kurs5 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs6 IS NULL or Kurs6 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs7 IS NULL or Kurs7 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs8 IS NULL or Kurs8 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs9 IS NULL or Kurs9 ='' THEN 0 ELSE 1 END    
        + CASE WHEN Kurs10 IS NULL or Kurs10 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs11 IS NULL or Kurs11 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs12 IS NULL or Kurs12 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs13 IS NULL or Kurs13 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs14 IS NULL or Kurs14 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs15 IS NULL or Kurs15 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs16 IS NULL or Kurs16 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs17 IS NULL or Kurs17 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs18 IS NULL or Kurs18 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs19 IS NULL or Kurs19 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs20 IS NULL or Kurs20 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs21 IS NULL or Kurs21 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs22 IS NULL or Kurs22 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs23 IS NULL or Kurs23 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs24 IS NULL or Kurs24 ='' THEN 0 ELSE 1 END    
        + CASE WHEN Kurs25 IS NULL or Kurs25 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs26 IS NULL or Kurs26 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs27 IS NULL or Kurs27 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs28 IS NULL or Kurs28 ='' THEN 0 ELSE 1 END
        + CASE WHEN Kurs29 IS NULL or Kurs29 ='' THEN 0 ELSE 1 END                        
        + CASE WHEN Kurs30 IS NULL or Kurs30 ='' THEN 0 ELSE 1 END) AS Kurszahl
FROM sv_Lehrpersonen Group by ID order by Nachname asc";
$result2=	mysqli_query( $con, $isEntry );	
while( $line3= mysqli_fetch_array($result2))

    {



 echo "['".$line3[Nachname]."',".$line3[Kurszahl]." ],";
			
  }
  ?>
]);
		
  // Optional; add a title and set the width and height of the chart
  var options = { title : 'Kurszahl der Lehrer',
          vAxis: {title: 'Kurszahl'},
          hAxis: {title: 'Schüler'},
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
