<head>

<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/syntax/shCore.css">
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
	<script type="text/javascript" language="javascript" class="init">
	</script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	 <script type = "text/javascript">
         google.charts.load('current', {packages: ['table']});     
      </script>
</head>

<script>

var	editor1;
	var editor2;
	var table2;
	var table1;
		$(document).ready(function() {
			
			loadeditor1();
		});
			

	
	



	function loadeditor1(){
	
	 // Activate an inline edit on click of a table cell
    /*$('#dtbl1').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor1.inline( this, {
            buttons: { label: '&gt;', fn: function () { this.submit(); } }
        } );
    } );*/
		
		 editor1 = new $.fn.dataTable.Editor( {
		 ajax:{
            url:  "/wp-content/themes/structr/Page_Scripts/getlernendeModuleKw.php",
            type: 'POST',
            data: {
                  
			}
        }, 
        table: "#dtbl1",
        fields: [ {
                label: "ID:",
                name: "ID",
			    type: "readonly"
            },
			
			{
                label: "Vorname:",
                name: "Vorname"
            }, {
                label: "Nachname:",
                name: "Name"
            },  {
                label: "User_ID:",
                name: "User_ID",
				  type: "readonly"
            },
				{
                label: "Email:",
                name: "EMail",
			      type: "readonly"
            }, 
				 {
                label: "Profil:",
                name: "Profil"
					 
            },{
                label: "Loginname:",
                name: "Loginname",
				  type: "readonly"
            },
				  {
                label: "Modul1:",
                name: "Modul1",
				 type: "readonly"
            },
				  {
                label: "Modul2:",
                name: "Modul2"
            },
				 
				  {
                label: "Modul3:",
                name: "Modul3"
            },
				 
				  {
                label: "Modul4:",
                name: "Modul4"
            },
				 
				  {
                label: "Modul5:",
                name: "Modul5"
            },
				 
				  {
                label: "Modul6:",
                name: "Modul6"
            },
				 
				  {
                label: "Modul7:",
                name: "Modul7"
            },
				  {
                label: "Modul8:",
                name: "Modul8"
            },
				 
				  {
                label: "Modul9:",
                name: "Modul9"
            },
				 
				 
				 
        ],
			  i18n: {
            remove: {
                button: "Löschen",
                title:  "Eintrag löschen",
                submit: "Endgültig Löschen",
                confirm: {
                    _: 'Sind Sie sicher, dass Sie die %d ausgwählten Zeilen löschen wollen?',
                    1: 'Sind Sie sicher, dass Sie die ausgewählte Zeile löschen wollen?'
                }
            },
            edit: {
                button: "Bearbeiten",
                title:  "Eintrag bearbeiten",
                submit: "Änderungen speichern"
            },
            create: {
                button: "Neuer Eintrag",
                title:  "Neuen Eintrag anlegen",
                submit: "Neuen Eintrag speichern"
            },
            datetime: {
                    previous: 'Zurück',
                    next:     'Weiter',
                    months:   [ 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember' ],
                    weekdays: [ 'So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa' ],
                    amPm:     [ 'am', 'pm' ],
                    unknown:  '-'
            },
            error: {            
                    system: "Ein Systemfehler ist aufgetreten (<a target=\"_blank\" href=\"//datatables.net/tn/12\">Für mehr Informationen</a>)."
            },
            multi: {
                    title: "Mehrere Werte",         
                    info: "Die ausgewählten Elemente enthalten verschiedene Werte für das Feld. Um alle Elemente für diess Feld auf den gleichen Wert zu setzen, klicken Sie bitte hier. Ansonsten werden die Elemente ihren jeweiligen Wert behalten.",
                    restore: "Änderungen rückgängig machen",
                    noMulti: "Dieses Feld kann einzeln bearbeitet werden, aber nicht als Teil einer Gruppe."
            },
        }      
    } );
  // Activate an inline edit on click of a table cell
   /* $('#dtbl1').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor1.inline( this, {
            buttons: { label: '&gt;', fn: function () { this.submit(); } }
        } );
    } );*/
		
			table1= $('#dtbl1').DataTable( {
        dom: "lBfrtip",
        ajax:{
            url:  "/wp-content/themes/structr/Page_Scripts/getlernendeModuleKw.php",
            type: 'POST',
            data: {
                 
			}
        }, 
        order: [[ 1, 'asc' ]],
        columns: [
            {
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
            },
			 { data: "ID" },
            { data: "Vorname" },
            { data: "Name" },
            { data: "User_ID",
			"render": function(data, type, row, meta){
            if(data === '0'){
                data ='nicht registriert';
            }

            return data; }
			},
            { data: "EMail",  'render': function(data, type, full, meta) {
   return '<a href="mailto:' + data + '?">'+data+'</a>';
  }
		  },
			{ data: "Profil" },
			{ data: "Loginname" },
			{ data: "Modul1" },
			{ data: "Modul2" },
			{ data: "Modul3" },
			{ data: "Modul4" },
			{ data: "Modul5" },
			{ data: "Modul6" },
			{ data: "Modul7" },
			{ data: "Modul8" },
			{ data: "Modul9" },
			{ data:  "ID",
         "render": function(data, type, row, meta){
            if(type === 'display'){
                data = '<button onclick=showoverview('+data+')>Schülerdaten</button>';
            }

            return data; }
			}
          
        ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        buttons: [
           
        ], "language": {
            "decimal": ",",
            "thousands": ".",
            "info": "Anzeige _START_ bis _END_ von _TOTAL_ Einträgen",
            "infoEmpty": "Keine Einträge",
            "infoPostFix": "",
            "infoFiltered": "(gefiltert aus insgesamt _MAX_ Einträgen)",
            "loadingRecords": "keine Daten vorhanden...",
            "lengthMenu": "Anzeigen von _MENU_ Einträgen",
            "paginate": {
                "first": "Erste",
                "last": "Letzte",
                "next": "Nächste",
                "previous": "Zurück"
            },
            "processing": "Verarbeitung läuft ...",
            "search": "Suche:",
            "searchPlaceholder": "Suchbegriff",
            "zeroRecords": "Keine Daten! Bitte ändern Sie Ihren Suchbegriff.",
            "emptyTable": "Keine Daten vorhanden",
            "aria": {
                "sortAscending":  ": aktivieren, um Spalte aufsteigend zu sortieren",
                "sortDescending": ": aktivieren, um Spalte absteigend zu sortieren"
            },
            //only works for built-in buttons, not for custom buttons
            "buttons": {
                "create": "Neu",
                "edit": "Ändern",
                "remove": "Löschen",
                "copy": "Kopieren",
                "csv": "CSV-Datei",
                "excel": "Excel-Tabelle",
                "pdf": "PDF-Dokument",
                "print": "Drucken",
                "colvis": "Spalten Auswahl",
                "collection": "Auswahl",
                "upload": "Datei auswählen...."
            },
            "select": {
                "rows": {
                    _: '%d Zeilen ausgewählt',
                    0: 'Zeile anklicken um auszuwählen',
                    1: 'Eine Zeile ausgewählt'
                }
            }
        }            
    } );
		
	}

	function showoverview(id){
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

		document.getElementById( "myModal" ).style.display = "block";


		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function ( event ) {
			if ( event.target == document.getElementById( "myModal" ) ) {
				document.getElementById( "myModal" ).style.display = "none";


			}
		}

		//When the user clicks on <span> (x), close the modal
		document.getElementById( "span" ).onclick = function () {
			document.getElementById( "myModal" ).style.display = "none";
		
		}

	

	}
	
</script>


<style>
	 button {
          color: white;
        }
	</style>




<table id="dtbl1" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th></th>
				<th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>User ID</th>
				<th>Email</th>
				<th>Profil</th>
				<th>Loginname</th>
				<th>Modul1</th>
				<th>Modul2</th>
				<th>Modul3</th>
				<th>Modul4</th>
				<th>Modul5</th>
				<th>Modul6</th>
				<th>Modul7</th>
				<th>Modul8</th>
				<th>Modul9</th>
				<th>Übersicht</th>
            </tr>
        </thead>
    </table>

<br><br>


<br><br>

	
<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">




		<div class="container">
			

            <div id=schueleruebersicht></div>
               
          
	  <br><h3>Klassen(Module)</h3>


	<div id="PieChart"></div>



	   
	 <br><h3>Prüfungen</h3>
			
<div id="pruefungen"></div>
 
<br><br><h3>Lehrer</h3><br>

<div id="lehrertab"></div>
	

			
	<div id="notenchart"></div>
			
						
	<div id="abwchart"></div>



		<span class="close" id="span">&times;</span>





	</div>

</div>
	
</div>
	
<style>
	
	.navbar-fixed-top {visibility:hidden; display:none;}
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
<style>
body {}
	
	.Name {
		font-style: bold;
		font-size: 23px;
	}
	
	.inp {
		width: 300px;
		border: 0;
	}
	
	.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0, 0, 0); /* Fallback color */
		background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
	}
	
	.modal1 {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: auto; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0, 0, 0); /* Fallback color */
		background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
	}
	
	/* Modal Content */
	.modal-content {
		background-color: #fefefe;
		margin: auto;
		padding: 20px;
		border: 1px solid #888;
		width: 1200px;
		height:auto;
	}
	
	.modal-content1 {
		background-color: #fefefe;
		margin: auto;
		padding: 20px;
		border: 1px solid #888;
		width: 1200px;
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
	
	/*
.container {
  margin-top: 15px;
}
.container .details-row td {
  padding: 0;
  margin: 0;
}

.details-container {
  width: 100%;
  height: 100%;
  background-color: #FFF;
  padding-top: 5px;
}

.details-table {
  width: 100%;
  background-color: #FFF;
  margin: 5px;
}

.title {
  font-weight: bold;
}

.iconSettings, td.details-control:before, tr.shown td.details-control:before {
  margin-top: 5px;
  margin-bottom: 10px;
  font-size: 12px;
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
}

td.details-control {
  cursor: pointer;
  text-align: center;
}
td.details-control:before {
  content: /*'\2b'*/;
}
/*
tr.shown td.details-control:before {
  content: '\2212';
}
*/
</style>
