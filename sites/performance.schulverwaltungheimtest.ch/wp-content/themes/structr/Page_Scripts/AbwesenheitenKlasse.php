
<html>


	
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
	
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>


	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	 <script type = "text/javascript">
         google.charts.load('current', {packages: ['table']});     
      </script>
	
	<script type="text/javascript" language="javascript" class="init">
	</script>
</head>

<!--
			<div class="demo-html width=50%"></div>
			<table id="example" class="display" style="width:50%">
				<thead>
					<tr>
						<th>Note</th>
						<th>Name</th>
						<th>Gewichtung</th>
						<th>Datum</th>
					</tr>
				</thead>
				
			</table>
			
</html>-->
	
	<script>
	
  var editor; // use a global for the submit and return data rendering in the examples
 var table2;
	var table1;
	var table;
		function showTable() {
			
			tableshow();
			drawAbw();
		}
		
		
  function loadtable(){
    


    editor = new $.fn.dataTable.Editor( {
        ajax: { url: "/wp-content/themes/structr/Page_Scripts/getAbwEdit.php",
            type: 'POST',
            data: {
                  
				
				'kid': document . getElementById( "Kursnm" ) . value 
				
				
			}
        },
		  language: {
            "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
        },
        table: ".datatables",
        fields: [ 
               
			
			 {
                label: "Klasse:",
                name: "Klasse"
            },
			{
                label: "Kursname:",
                name: "Kursname"
            }, {
                label: "Datum:",
                name: "Datum",
				type: "date"
            },
			{
                label: "Kommentar:",
                name: "Kommentar"
            }, {
                label: "KommentVerw:",
                name: "KommentVerw"
            },
			{
                label: "Abwesenheitsdauer:",
                name: "Abwesenheitsdauer"
            }, {
                label: "Nachname:",
                name: "Nachname"
            },
			 {
               label: "Vorname:",
                name: "Vorname"
			 }
			, {
                label: "Lehrer:",
                name: "Lehrer"
            },
			 {
               label: "Entschuldigt:",
                name: "Entschuldigt"
			 }
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
    $('.datatables').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this, {
            buttons: { label: '&gt;', fn: function () { this.submit(); } }
        } );
    } );
  $.fn.dataTable.ext.errMode = 'throw';
     table2 = $('.datatables').DataTable( {
		   "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
        },
        dom: "lBfrtip",
        ajax:     { 
			url: "/wp-content/themes/structr/Page_Scripts/getAbwEdit.php",
            type: 'POST',
            data: {
                  
				'kid': document . getElementById( "Kursnm" ) . value 
			
			
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
			
			{ data: "Klasse"},
			{ data: "Kursname"},
			{ data: "Datum"},
			{ data: "Kommentar"},
			{ data: "KommentVerw"},
			{ data: "Abwesenheitsdauer"},
			{ data: "Nachname"},
			{ data: "Vorname"},
			{ data: "Lehrer"},
			{ data: "Entschuldigt"}
           
          
        ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        buttons: [
            { extend: "create", editor: editor, text:"Neue Abwesenheit" },
            { extend: "edit",   editor: editor, text:"Abwesenheit bearbeiten" },
            { extend: "remove", editor: editor, text:"Abwesenheit löschen" }
        ]
    } );

 
        }
 
//  $('.datatables tbody').on('click', 'td.details-control', function () {
//     var tr  = $(this).closest('tr'),
//         row = table.row(tr);
//    
//     if (row.child.isShown()) {
//       tr.next('tr').removeClass('details-row');
//       row.child.hide();
//       tr.removeClass('shown');
//     }
//     else {
//       row.child(format(row.data())).show();
//       tr.next('tr').addClass('details-row');
//       tr.addClass('shown');
//     }
//  });
 



		




   
//	table1.ajax.url( new_url1 ).load();
		
		


</script>
<form action=" /DBFuellung/DBFuellungAbwEngb.php" method="POST">

<?php
include 'db.php';



$heute=date("Y-m-d");

?>
<br>
Klasse:
<br>
<select name="klasse" onchange="getKursname(klasse.value)" id="klasse" required="required">

<?php


$isEntry= "Select Klasse From sv_Lernende";
$result1 = mysqli_query($con, $isEntry);
$resultarr1 = array();


while( $line2= mysqli_fetch_assoc($result1))
{
  $resultarr1[] = $line2['Klasse'];
}
$uniquearr1 = array_unique($resultarr1);
asort($uniquearr1);
echo "<option>" . '' . "</option>";


foreach ($uniquearr1 as $value)
{
echo "<option>" . $value . "</option>";

}


?>

</select>
<br><br>
Kursname:
<br>
<select name="Kursnm" id="Kursnm" onchange="dfunc(this.value)" required="required" ></select>
<br><br>
Aktuelles Datum:
<br>
<input style="width: 145px;" name="date" id="date" type="date" value=<?php echo $heute;?>  onchange="testdate(this.value)"  required="required" />

<br><br>
<div id="lernende"><b>Person info will be listed here...</b></div>





<input name="Senden" type="submit" value="Senden" />


</form>


	
	
	</html>
	<style>/*
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
*/	</style>
<script>
	function getKursname(str){
if (str == "") {
        document.getElementById("Kursnm").innerHTML = "";
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
                document.getElementById("Kursnm").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","/Ajax_Scripts/getKursname.php?q="+str,true);
        xmlhttp.send();
        test('');
    }
}
function test(str){
		
			
		
		
    if (str == "" || str == "") {
        document.getElementById("lernende").innerHTML = "";
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
                document.getElementById("lernende").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","/Ajax_Scripts/showlernende.php?q="+str+"&k="+document.getElementById("klasse").value+"&h="+document.getElementById("date").value,true);
        xmlhttp.send();
    }
}
function testdate(str){
if (str == "") {
        document.getElementById("lernende").innerHTML = "";
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
                document.getElementById("lernende").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","/Ajax_Scripts/showlernende.php?q="+document.getElementById("Kursnm").value+"&k="+document.getElementById("klasse").value+"&h="+str,true);
        xmlhttp.send();
    }
}

 function tableshow(){
	

        if ( table2 ) {
            table2.destroy();
        }
	 if ( editor ) {
           editor.destroy();
        }





        loadtable();

 }

    function checkKurs(str){

        if (str == "") {

          alert('Bitte einen Kurs auswählen')

            return;

        }

    }
	
		function dfunc(str) {
  showTable();
  test(str);
}

</script>

<?php

include 'db.php';



global $current_user;

get_currentuserinfo();



/* echo 'Username: ' . $current_user-&gt;user_login . "\n";

echo 'User email: ' . $current_user-&gt;user_email . "\n";

echo 'User level: ' . $current_user-&gt;user_level . "\n";

echo 'User first name: ' . $current_user-&gt;user_firstname . "\n";

echo 'User last name: ' . $current_user-&gt;user_lastname . "\n";

echo 'User display name: ' . $current_user-&gt;display_name . "\n";

echo 'User ID: ' . $current_user-&gt;ID . "\n";



*/

$heute=date("Y-m-d");



?>

<br><br>





<br><br>



<br><br>

<h1>Abwesenheitsübersicht</h1>
<div class="container">
  <div class="row">
    <form class="col-md4"></form>
  </div>
  <div class="row">
    <div class="col md12">
      <table class="table table-striped table-hover datatables">
        <thead>
          <tr>
            <th></th>
            <th>Klasse</th>
            <th>Kursname</th>
			<th>Datum</th>
	        <th>Kommentar</th>
			  <th>KommentVerw</th>
            <th>Abwesenheitsdauer</th>
			<th>Nachname</th>
	        <th>Vorname</th>
		    <th>Lehrer</th>
			  <th>Entschuldigt</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>

<div id="abwchart"></div>
</form>&nbsp;
<style>
	 button {
          color: white;
        }
	</style>
<script>
	function drawAbw(){
	  $.ajax({
        url:"/wp-content/themes/structr/Page_Scripts/getDataAbw1.php",
        method:"POST",
        data:{q:document.getElementById("Kursnm").value},
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
    data.addColumn('string', 'Nachname');
    data.addColumn('number', 'Abwesenheiten');
				
			
    $.each(jsonData, function(i, jsonData){
        var Nachname = jsonData.Nachname;
        var Abwesenheit = jsonData.Abwesenheit;
		
        data.addRows([[Nachname,Abwesenheit]]);
    });
  var options = {
          title : 'Abwesenheiten der Schüler',
          vAxis: {title: 'Abwesenheiten(Lektionen)'},
          hAxis: {title: 'Nachname'},
          seriesType: 'bars',
          series: {5: {type: 'line'}},
	      width:"95%",
	      height: '300'
        };

        var chart4 = new google.visualization.ColumnChart(document.getElementById('abwchart'));
        chart4.draw(data, options);
      }
		
	}
</script>


