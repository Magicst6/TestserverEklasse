<head>




		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	 <script type = "text/javascript">
         google.charts.load('current', {packages: ['table']});     
      </script>
</head>

<?
include 'db.php';
 
	
?>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart7);

// Draw the chart and set the chart values
function drawChart7() {
  var data = google.visualization.arrayToDataTable([
	  
	  ['Name', 'Module'],

  <?  
      
  $isEntry= "   SELECT Name,SUM(CASE WHEN Modul1 IS NULL or Modul1 ='' THEN 0 ELSE 1 END
        + CASE WHEN Modul2 IS NULL or Modul2 ='' THEN 0 ELSE 1 END
        + CASE WHEN Modul3 IS NULL or Modul3 ='' THEN 0 ELSE 1 END
        + CASE WHEN Modul4 IS NULL or Modul4 ='' THEN 0 ELSE 1 END
        + CASE WHEN Modul5 IS NULL or Modul5 ='' THEN 0 ELSE 1 END
		+ CASE WHEN Modul6 IS NULL or Modul6 ='' THEN 0 ELSE 1 END
        + CASE WHEN Modul7 IS NULL or Modul7 ='' THEN 0 ELSE 1 END
        + CASE WHEN Modul8 IS NULL or Modul8 ='' THEN 0 ELSE 1 END
        + CASE WHEN Modul9 IS NULL or Modul9 ='' THEN 0 ELSE 1 END
		+ CASE WHEN Modul10 IS NULL or Modul10 ='' THEN 0 ELSE 1 END
        + CASE WHEN Modul11 IS NULL or Modul11 ='' THEN 0 ELSE 1 END
        + CASE WHEN Modul12 IS NULL or Modul12 ='' THEN 0 ELSE 1 END) AS Modulzahl
FROM sv_LernendeModule Group by ID Order by Name asc";
$result2=	mysqli_query( $con, $isEntry );	
while( $line3= mysqli_fetch_array($result2))

    {



 echo "['".$line3[Name]."',".$line3[Modulzahl]." ],";
			
  }
  ?>
]);
		
  // Optional; add a title and set the width and height of the chart
  var options = { title : 'Modulzahl der Schüler',
          vAxis: {title: 'Modulzahl'},
          hAxis: {title: 'Schüler'},
          seriesType: 'bars',
          series: {5: {type: 'line'}},
	      width:"95%",
	      height: '300'};

  // Display the chart inside the <div> element with id="piechart"
  var chart7 = new google.visualization.ColumnChart(document.getElementById('ModChart'));
  chart7.draw(data, options);
}
</script>	
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart8);

// Draw the chart and set the chart values
function drawChart8() {
  var data = google.visualization.arrayToDataTable([
	  
	  ['Klasse', 'Schülerzahl'],

  <?  
      
  $isEntry= " Select Klasse, Count(Klasse) As Schuelerzahl from sv_Lernende Group by Klasse";
$result2=	mysqli_query( $con, $isEntry );	
while( $line3= mysqli_fetch_array($result2))

    {



 echo "['".$line3[Klasse]."',".$line3[Schuelerzahl]." ],";
			
  }
  ?>
]);
		
  // Optional; add a title and set the width and height of the chart
  var options = { title : 'Anzahl der Schüler pro Klasse',
          vAxis: {title: 'Schülerzahl'},
          hAxis: {title: 'Klasse'},
          seriesType: 'bars',
          series: {5: {type: 'line'}},
	      width:"95%",
	      height: '300'};

  // Display the chart inside the <div> element with id="piechart"
  var chart8 = new google.visualization.ColumnChart(document.getElementById('SchuelerChart'));
  chart8.draw(data, options);
}
</script>	

	

	<div id="SchuelerChart"></div>


