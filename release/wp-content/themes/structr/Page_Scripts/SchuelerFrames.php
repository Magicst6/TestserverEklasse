<head>

<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTablesEditor/css/editor.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTablesEditor/css/editor.dataTables.min.css">
	
	


	<!--	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/demo.css">-->
	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTablesEditor/js/dataTables.editor.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
	
	
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.0/js/buttons.print.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	 <script type = "text/javascript">
         google.charts.load('current', {packages: ['table']});     
      </script>
	<script type="text/javascript" language="javascript" class="init">
	</script>
</head>



<html>




<script>
	
		function getSchueler(str){
	var strspl = str.split(":");
			
			var id = strspl[1];
			
			
		if ( window.XMLHttpRequest ) {

			// code for IE7+, Firefox, Chrome, Opera, Safari

			xmlhttp = new XMLHttpRequest();

		} else {

			// code for IE6, IE5

			xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

		}

		xmlhttp.onreadystatechange = function () {

			if ( this.readyState == 4 && this.status == 200 ) {

				document.getElementById( "schueleruebersicht" ).innerHTML = this.responseText;

			}

		};

		xmlhttp.open( "GET", "/Ajax_Scripts/schueleruebersicht.php?q=" + id, true );

		xmlhttp.send();


			  $.ajax({
        url:"/wp-content/themes/structr/Page_Scripts/getDataModule.php",
        method:"POST",
        data:{q:id},
        dataType:"JSON",
        success:function(data)
        {
           drawChart(data);
        }
    });
			  $.ajax({
        url:"/wp-content/themes/structr/Page_Scripts/getDataPruefungen.php",
        method:"POST",
        data:{q:id},
        dataType:"JSON",
        success:function(data)
        {
           drawChart1(data);
        }
    });
		
		
			  $.ajax({
        url:"/wp-content/themes/structr/Page_Scripts/getDataLehrer.php",
        method:"POST",
        data:{q:id},
        dataType:"JSON",
        success:function(data)
        {
           drawChart2(data);
        }
    });
			  $.ajax({
        url:"/wp-content/themes/structr/Page_Scripts/getDataNoten.php",
        method:"POST",
        data:{q:id},
        dataType:"JSON",
        success:function(data)
        {
           drawChart3(data);
        }
    });
			  $.ajax({
        url:"/wp-content/themes/structr/Page_Scripts/getDataAbw.php",
        method:"POST",
        data:{q:id},
        dataType:"JSON",
        success:function(data)
        {
           drawChart4(data);
        }
    });
		
		
		// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart4);
			
			function drawChart4(chart_data) {
		 var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'KursID');
    data.addColumn('number', 'Abwesenheiten');
				
			
    $.each(jsonData, function(i, jsonData){
        var KursID = jsonData.KursID;
        var Abwesenheit = jsonData.Abwesenheit;
		
        data.addRows([[KursID,Abwesenheit]]);
    });
  var options = {
          title : 'Abwesenheiten des Schülers',
          vAxis: {title: 'Abwesenheiten(Lektionen)'},
          hAxis: {title: 'KursID'},
          seriesType: 'bars',
          series: {5: {type: 'line'}},
	      width:"95%",
	      height: '300'
        };

        var chart4 = new google.visualization.ColumnChart(document.getElementById('abwchart'));
        chart4.draw(data, options);
      }

		
		// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart3);
			
			function drawChart3(chart_data) {
		 var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'KursID');
    data.addColumn('number', 'Note1');
				data.addColumn('number', 'Note2');
				data.addColumn('number', 'Note3');
				data.addColumn('number', 'Note4');
				data.addColumn('number', 'Note5');
				data.addColumn('number', 'Note6');
				data.addColumn('number', 'Note7');
				data.addColumn('number', 'Note8');
				data.addColumn('number', 'Note9');
			
    $.each(jsonData, function(i, jsonData){
        var KursID = jsonData.KursID;
        var Note1 = jsonData.Note1;
		var Note2 = jsonData.Note2;
		var Note3 = jsonData.Note3;
		var Note4 = jsonData.Note4;
		var Note5 = jsonData.Note5;
		var Note6 = jsonData.Note6;
		var Note7 = jsonData.Note7;
		var Note8 = jsonData.Note8;
		var Note9 = jsonData.Note9;
        data.addRows([[KursID,Note1,Note2,Note3,Note4,Note5,Note6,Note7,Note8,Note9]]);
    });
  var options = {
          title : 'Noten des Schülers',
          vAxis: {title: 'Note'},
          hAxis: {title: 'KursID'},
          seriesType: 'bars',
          series: {5: {type: 'line'}},
	      width:"95%",
	      height: '300'
        };

        var chart3 = new google.visualization.ComboChart(document.getElementById('notenchart'));
        chart3.draw(data, options);
      }

			
			// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
			
			function drawChart(chart_data) {
		 var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Klasse');
    data.addColumn('number', 'Schuelerzahl');
    $.each(jsonData, function(i, jsonData){
        var Klasse = jsonData.Klasse;
        var Schuelerzahl = jsonData.Schuelerzahl;
        data.addRows([[Klasse, Schuelerzahl]]);
    });
    var options = {'title':'Module des Schülers(Anzahl der Schüler im Modul)', 'width':"90%", 'height':"500",is3D:true};

				
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('PieChart'));
  chart.draw(data, options);
}

		google.charts.load('current', {'packages':['Table']});
google.charts.setOnLoadCallback(drawChart1);
		function drawChart1(chart_data) {
		 var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Pruefungsdatum');
    data.addColumn('string', 'Pruefungsname');
			 data.addColumn('string', 'Start');
    data.addColumn('string', 'Ende');
			 data.addColumn('string', 'Zimmer');
    data.addColumn('number', 'Gewichtung');
			 data.addColumn('string', 'KursID');
    data.addColumn('string', 'Kommentar');
    $.each(jsonData, function(i, jsonData){
        var Pruefungsdatum = jsonData.Pruefungsdatum;
        var Pruefungsname  = jsonData.Pruefungsname;
		var Start = jsonData.Start;
        var Ende = jsonData.Ende;
		var Zimmer = jsonData.Zimmer;
        var Gewichtung = jsonData.Gewichtung;
		var KursID = jsonData.KursID;
        var Kommentar = jsonData.Kommentar;
        data.addRows([[Pruefungsdatum, Pruefungsname,Start,Ende,Zimmer,Gewichtung,KursID,Kommentar]]);
    });
    var options = {
               showRowNumber: true,
               width: '100%', 
               height: '100%'
            };
                  
            // Instantiate and draw the chart.
            var chart1 = new google.visualization.Table(document.getElementById('pruefungen'));
            chart1.draw(data, options);
}
		
	google.charts.load('current', {'packages':['Table']});
google.charts.setOnLoadCallback(drawChart2);
		function drawChart2(chart_data) {
		 var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Nachname');
    data.addColumn('string', 'Vorname');
		
			 data.addColumn('string', 'KursID');
   
    $.each(jsonData, function(i, jsonData){
        var Nachname = jsonData.Nachname;
        var Vorname  = jsonData.Vorname;
		var KursID = jsonData.KursID;
        data.addRows([[Nachname,Vorname,KursID]]);
    });
    var options = {
               showRowNumber: true,
               width: '100%', 
               height: '100%'
            };
                  
            // Instantiate and draw the chart.
            var chart2 = new google.visualization.Table(document.getElementById('lehrertab'));
            chart2.draw(data, options);
}		

	
   

	
		




       
	
	

    }
	

	
	
</script>



<div class="first-column">
    <?
	include 'db.php';
	
echo "<br><br><strong>Schüler:<strong>";
	
$isEntry0 = "Select * From sv_LernendeModule order by Name ASC ";


$schueler=$_GET['q'];		

$result0 = mysqli_query( $con, $isEntry0 );

 echo '<select class="link"  id="schueler" name="schueler" readonly="readonly"  onchange="getSchueler(this.value)" value="">' ;
	echo '<option></option>' ;

while ( $line0 = mysqli_fetch_array( $result0 ) ) {
	 
	 $Name = $line0['Name'];

        $Vorname = $line0['Vorname'];

       $value = $line0['ID'];

     $Email = $line0['EMail'];
	
	 $UserID= $line0['User_ID'];
	
	$Profil = $line0['Profil'];
	
	$Schulmail= $line0['SchulMail'];
	
	$Loginname= $line0['Loginname'];
	
	$Winlogin = $line0['WinLogin'];	 


    echo '<option>'.$Vorname .' '.$Name .' ID:'. $value .'</option>' ;

   

}
	echo '</select>';
	 ?>
  
	</div>
	<div class="second-column">   
	  <div id=schueleruebersicht></div>


			<br>
			<h3>Klassen(Module)</h3>


			<div id="PieChart"></div>




			<br>
			<h3>Prüfungen</h3>

			<div id="pruefungen"></div>

			<br><br>
			<h3>Lehrer</h3><br>

			<div id="lehrertab"></div>



			<div id="notenchart"></div>


			<div id="abwchart"></div>

 
	</div>
   
	
	
<style>
        body {}

	     .first-column {
  width: 10%;
			 height: auto;
  float: left;
}

.second-column {
  width: 80%;
	height: auto;
  float: right;
}
	p {
  font-size: 16px;
		font-style:normal;
}
	p1 {
  font-size: 18px;
		font-style:normal;
		
}
	
	
        button {
          color: white;
        }
    </style>