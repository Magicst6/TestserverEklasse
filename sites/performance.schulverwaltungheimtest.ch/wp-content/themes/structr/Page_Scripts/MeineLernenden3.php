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

<script>

var	editor1;
	var editor2;
	var table2;
	var table1;
		$(document).ready(function() {
			
			tableshow();
		});
			

	
	function tableshow(){
		
		 var urlParams = new URLSearchParams(window.location.search);
		var Klasse = urlParams.get('q');	
		
		//alert(Kursname);
		
		if (Klasse == ''){
		document.getElementById( "klasse" ).value="";
		}
		if (urlParams.get('q') == ''){
		document.getElementById( "klasse" ).value="";
		}
		if ( Klasse != null){
			document.getElementById( "klasse" ).value=Klasse;
		}
		
	if ( table1 ) {
		table1.destroy();
	}
	
	if ( editor1 ) {
		editor1.destroy();
	}
		loadeditor1(Klasse);
	}
	

  

	function loadeditor1(Klasse){
	
	 // Activate an inline edit on click of a table cell
    /*$('#dtbl1').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor1.inline( this, {
            buttons: { label: '&gt;', fn: function () { this.submit(); } }
        } );
    } );*/
		
		 editor1 = new $.fn.dataTable.Editor( {
		 ajax:{
            url:  "/wp-content/themes/structr/Page_Scripts/getlernendeModuleKw2.php",
            type: 'POST',
            data: {'Klasse':  Klasse
                  
			}
        }, 
        table: "#dtbl1",
        fields: [ {
                label: "ID:",
                name: "sv_LernendeModule.ID",
			    type: "readonly"
            },
			
			{
                label: "Vorname:",
                name: "sv_LernendeModule.Vorname"
            }, {
                label: "Nachname:",
                name: "sv_LernendeModule.Name"
            },  {
                label: "User_ID:",
                name: "sv_LernendeModule.User_ID",
				  type: "readonly"
            },
				{
                label: "Email:",
                name: "sv_LernendeModule.EMail",
			      type: "readonly"
            }, 
				 {
                label: "Profil:",
                name: "sv_LernendeModule.Profil"
					 
            },{
                label: "Loginname:",
                name: "sv_LernendeModule.Loginname",
				  type: "readonly"
            },
				  {
                label: "Modul1:",
                name: "sv_LernendeModule.Modul1",
				 type: "readonly"
            },
				  {
                label: "Modul2:",
                name: "sv_LernendeModule.Modul2"
            },
				 
				  {
                label: "Modul3:",
                name: "sv_LernendeModule.Modul3"
            },
				 
				  {
                label: "Modul4:",
                name: "sv_LernendeModule.Modul4"
            },
				 
				  {
                label: "Modul5:",
                name: "sv_LernendeModule.Modul5"
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
				
				responsive: true,
        dom: "lBfrtip",
				 buttons: [
                {
                extend: 'collection',
                text: 'Export',
                buttons: [
                   'copy',
                    'excel',
                    'csv',
                    'print'
                ]
            } 
            ],
        ajax:{
            url:  "/wp-content/themes/structr/Page_Scripts/getlernendeModuleKw2.php",
            type: 'POST',
            data: {'Klasse': Klasse
                 
			}
        }, 
        order: [[ 1, 'asc' ]],
        columns: [
             {
        className      : 'select-checkbox',
        defaultContent : '',
        data           : '',
        orderable      : false
      },
			 {
        className      : 'details-control',
        defaultContent : '',
        data           : 'cb',
        orderable      : false
      },
			 { data: "sv_LernendeModule.ID" },
            { data: "sv_LernendeModule.Vorname" },
            { data: "sv_LernendeModule.Name" },
            { data: "sv_LernendeModule.User_ID",
			"render": function(data, type, row, meta){
            if(data === '0'){
                data ='nicht registriert';
            }

            return data; }
			},
            { data: "sv_LernendeModule.EMail",  'render': function(data, type, full, meta) {
   return '<a href="mailto:' + data + '?">'+data+'</a>';
  }
		  },
			{ data: "sv_LernendeModule.Profil" },
			{ data: "sv_LernendeModule.Loginname" },
			
			
			{ data:  "sv_LernendeModule.ID",
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
       
				"language": {
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
		
		
		
	
	$('#dtbl1 tbody').on('click', 'td.details-control', function () {
     var tr  = $(this).closest('tr'),
         row = table1.row(tr);
    
     if (row.child.isShown()) {
       tr.next('tr').removeClass('details-row');
       row.child.hide();
       tr.removeClass('shown');
     }
     else {
       row.child(format(row.index())).show();
       tr.next('tr').addClass('details-row');
       tr.addClass('shown');
     }
  });

	
} 


 
	
	function reloadpage1()
{
 	 
var Klasse = document.getElementById( "klasse" ).value;
	

	
	
//U2FsdGVkX18ZUVvShFSES21qHsQEqZXMxQ9zgHy+bu0=

window.location.href= "/meine-schueler?q=" + Klasse;

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
	
	
	function sendMail() {
     var MultiMail='';
		
	  var data = table1.rows({selected:  true}).data();
      
        for (var i=0; i < data.length ;i++){
           
	 	MultiMail= MultiMail + data[i].sv_LernendeModule.EMail+';';
			
           
        }
		//alert (MultiMail);

	window.location.href = "mailto:" +MultiMail;
			
		
}
	
	 function format (ind) {
		 var modul=null;
		 var data = table1.rows().data();
		//alert(data[ind].sv_LernendeModule.Modul1);
	  var i;  
	  var kurs=null;
	  
	  for(i=1; i<10; i++){
		switch(i){
			case 1:		
				modul=data[ind].sv_LernendeModule.Modul1;
				break;
				case 2:		
				 modul=data[ind].sv_LernendeModule.Modul2;
				break;
				case 3:		
				modul=data[ind].sv_LernendeModule.Modul3;
				break;
				case 4:		
				modul=data[ind].sv_LernendeModule.Modul4;
				break;
			    case 5:		
				modul=data[ind].sv_LernendeModule.Modul5;
				break;
				case 6:		
				modul=data[ind].sv_LernendeModule.Modul6;
				break;
			    case 7:		
				modul=data[ind].sv_LernendeModule.Modul7;
				break;
				case 8:		
				modul=data[ind].sv_LernendeModule.Modul8;
				break;
				case 9:		
				modul=data[ind].sv_LernendeModule.Modul9;
				break;
			 
		}
				var Kursdt= modul;
		
		 
		if ((Kursdt)){
	  var z=null;
	 var z= '<div class="details-container"><table cellpadding="5" cellspacing="0" border="0" class="details-table">'
            
		  +'<tr>'+
                  '<td class="title"  width="1%">Modul'+i+':</td>'+
                  '<td  width="12%"">'+Kursdt+'</td>'+
          '</table>'+   
		    '</div>';
		if (kurs==null){
	       kurs=z;
		}
			else kurs=kurs+z;
		  }
		  
  }
	  
	  return kurs;
  }
	
</script>


Lehrperson:

<br>

<?php

include 'db.php';

$isEntry= "Select ID From sv_Lehrpersonen where User_ID=$current_user->ID";

$result = mysqli_query($con, $isEntry);



while( $line2= mysqli_fetch_assoc($result))

{

    $value=$line2['ID'];

    $isEntry= "Select Nachname, Vorname From sv_Lehrpersonen WHERE ID='$value'";

    $result = mysqli_query($con, $isEntry);

    while( $line3= mysqli_fetch_array($result))

    {

        $Name = $line3['Nachname'];

        $Vorname = $line3['Vorname'];



    }


    echo '<input  id="lehrer" name="lehrer" readonly="readonly" type="text" value="'.$Vorname .' '.$Name .' ID:'. $value .'" />' ;

    $Lehrer=$Vorname .' '.$Name .' ID:'. $value;

}

?>

<br><br>



 Klasse:<br>
   
     <select name="klasse" id="klasse" onchange="reloadpage1()" >



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
<button id="sendmail"  onclick="sendMail()">Mail an Auswahl senden</button>
<br><br>
<style>
	 button {
          color: white;
        }
	
	</style>
	<style>
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
  content: '\2b';
}

tr.shown td.details-control:before {
  content: '\2212';
}
	</style>



<table id="dtbl1" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th></th>
				<th>Module</th>
				<th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>User ID</th>
				<th>Email</th>
				<th>Profil</th>
				<th>Loginname</th>
				<th>Übersicht</th>
            </tr>
        </thead>
    </table>

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
		height: 100%; /* Full height */
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




