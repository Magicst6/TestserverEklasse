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

<?
include 'db.php';
 $isEntry0 = "Select * From sv_LernenderKurs group by KursID  ";




$result0 = mysqli_query( $con, $isEntry0 );


while ( $line0 = mysqli_fetch_array( $result0 ) ) {

 $Kursname=$line0['KursID'];
	
	//echo $Kursname;

   $isEntry = "Select * From sv_AbwesenheitenKompakt where Kursname='$Kursname'  Group by SchuelerID order by Nachname asc ";




$result = mysqli_query( $con, $isEntry );
$events = array();

while ( $line2 = mysqli_fetch_array( $result ) ) {
	$ID = $line2[ 'SchuelerID' ];
	$Vorname = $line2[ 'Vorname' ];
	$Nachname = $line2[ 'Nachname' ];
    
        $isEntry1 = "Select * From sv_AbwesenheitenKompakt where SchuelerID=$ID and Kursname ='$Kursname' Order by Datum asc ";

   

	$result1 = mysqli_query( $con, $isEntry1 );
	$abwges = 0;
	$y = 0;
	$data2 = null;
	while ( $line1 = mysqli_fetch_array( $result1 ) ) {

		${'datac'.$y} = array(
			'Klasse' . $y => $line1[ 'Klasse' ],
			'Datum' . $y => $line1[ 'Datum' ],
			'Kommentar' . $y => $line1[ 'Kommentar' ],
			'KommentVer' . $y => $line1[ 'KommentarVerwaltung' ],
			'Abwesenheitsdauer' . $y => $line1[ 'Abwesenheitsdauer' ],
			'Lehrer' . $y => $line1[ 'Lehrer' ] );
		if ( $y == 0 ) {
			$data2 = $ {
				'datac' . $y
			};
		} else {

			$data2 = array_merge( $data2, $ {
				'datac' . $y
			} );
		}
		$y++;
		$abwges = $abwges + $line1[ 'Abwesenheitsdauer' ];

	}

	$data3 = array(
		'Rows' => $y );
	$data1 = array(
		'SchuelerID' => $ID,
		'Vorname' => $Vorname,
		'Nachname' => $Nachname,
		'AbwesenheitenGesamt' => $abwges );
	
	$data[] = array_merge( $data1, $data2, $data3 );
	

		$SchID=$ID;
	

	
	$isEntryUpd = "UPDATE sv_LernenderKurs SET Abwesenheiten = '$abwges' where SchuelerID='$SchID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	

}
}

 $isEntry0 = "Select * From sv_LernenderKurs group by KursID  ";




$result0 = mysqli_query( $con, $isEntry0 );


while ( $line0 = mysqli_fetch_array( $result0 ) ) {

 $Kursname=$line0['KursID'];
//echo $Kursname;

    $isEntry = "Select * From sv_LernenderKurs where KursID='$Kursname' order by Nachname asc ";




    $result = mysqli_query($con, $isEntry);
    $events = array();
if ($Kursname<>""){
	
	$Notenschnitt=null;
		$Notegesamt=0;	
$c=0;
	
	$a=0;
    while ($line1 = mysqli_fetch_array($result)) {
		$ID=$line1['SchuelerID'];
		
		$data0 = array(
			
		  'Vorname' => $line1['Vorname'],
			 'Nachname' => $line1['Nachname'],
			 'IDSchueler' => $line1['SchuelerID']
			);
          
		$isEntryUpdNull = "UPDATE sv_LernenderKurs SET Note1  = '',Note2  = '',Note3  = '',Note4  = '',Note5  = '',Note6  = '',Note7  = '',Note8  = '',Note9  = '' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpdNull );	

		

        
            
			 
			 $isEntry1 = "Select * From sv_Noten where KursID='$Kursname' and SchuelerID='$ID'   ";
			
			
			
			
       


    $result1 = mysqli_query($con, $isEntry1);
    $events = array();

	
	$Notenschnitt=null;
		$Notegesamt=0;	
$c=0;
	
	$a=0;
		$data11 = null;
		
		
		
    while ($line2 = mysqli_fetch_array($result1)) {
		
		
	
		if ($a<9){
		
				
		$a++;
					$Dateb = "Datum"; 
					$Noteb = "Note";
					$Gewb = "Gewichtung";
					$Nameb = "Name";
						$DatumAK = $line2[ $Dateb ];
						$NameAK = $line2[ $Nameb ];
						$GewAK = $line2[ $Gewb ];
						$NoteAK = $line2[ $Noteb ];



						//Schreibe Spaltennamen

						if ( $NoteAK >= 1  and $GewAK <= 100 and $GewAK > 0   ) {
							$Notegesamt = $Notegesamt + ( $NoteAK * $GewAK / 100 );
							$c = $c + $GewAK / 100;
						}
						
		
		
			
			${"data".$a}=array(
           	'Datum'.$a => $line2['Datum' ],
		    'Name'.$a => $line2[ 'Name' ],
		  'Gewichtung'.$a => $line2[ 'Gewichtung' ],
			'Note'.$a => $line2[ 'Note' ]);
			
			if ( $a == 1 ) {
			$data11 = $ {
				'data' . $a
			};
		} else {

			$data11 = array_merge( $data11, $ {
				'data' . $a
			} );
		}
			if ($NoteAK){ 
			switch ($a) {
    case 1:
      $isEntryUpd = "UPDATE sv_LernenderKurs SET Note1  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 2:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note2  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 3:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note3  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
	case 4:
      $isEntryUpd = "UPDATE sv_LernenderKurs SET Note4  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 5:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note5  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 6:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note6  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
	case 7:
      $isEntryUpd = "UPDATE sv_LernenderKurs SET Note7  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 8:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note8  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
    case 9:
       $isEntryUpd = "UPDATE sv_LernenderKurs SET Note9  = '$NoteAK' where SchuelerID='$ID' and KursID ='$Kursname'";
	mysqli_query( $con, $isEntryUpd );	
        break;
}
	
		}
		
    }
	}
		
			do {
				$a++;
				${"data".$a}=array(
           	'Datum'.$a => null,
		    'Name'.$a => null,
		  'Gewichtung'.$a => null,
			'Note'.$a => null);
			
			if ( $a == 1 ) {
			$data11 = $ {
				'data' . $a
			};
		} else {

			$data11 = array_merge( $data11, $ {
				'data' . $a
			} );
		}
			}while ($a<=9);
		

		if ($c>0){
		$Notenschnitt=$Notegesamt/$c;
			$Notenschnitt=round($Notenschnitt, 2);
		}
		$data10=array('Notenschnitt' => $Notenschnitt);
        $data12=array('empty' => '');
		
		
		$data[] = array_merge( $data0,$data11,$data10,$data12);
			
	}
	

}
}
?>
	




<?
include 'db.php';
 
	

    global $current_user;

    get_currentuserinfo();


// $current_user->ID;
   

$isEntry= "Select * From sv_LernendeModule where User_ID=$current_user->ID";

$result = mysqli_query($con, $isEntry);



while( $line2= mysqli_fetch_array($result))

{

    $value=$line2['ID'];



    $isEntry1= "Select Name, Vorname From sv_LernendeModule WHERE ID='$value'";

    $result1 = mysqli_query($con, $isEntry1);

    while( $line3= mysqli_fetch_array($result1))

    {

        $Name = $line3['Name'];

        $Vorname = $line3['Vorname'];



    }










    echo '<input  id="lehrer" name="lehrer" readonly="readonly" type="text" value="'.$Vorname .' '.$Name .' ID:'. $value .'" />' ;

    $Lehrer=$Vorname .' '.$Name .' ID:'. $value;

}

?>
<script>
	
		$(document).ready(function() {
	 
			
			var id = "<? echo $value;?>";
		
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

	
   

	
		




       
	
	

    });
	

	
	
</script>

	  

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


	<br>
	<br>

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