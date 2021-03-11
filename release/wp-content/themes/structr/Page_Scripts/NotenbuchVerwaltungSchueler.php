<head>



	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/syntax/shCore.css">
	<!--	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/demo.css">-->
	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">
		//$(document).ready(function() {
		//	$('#example').DataTable( {
		//		"ajax": "https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php"
		//	} );
		//} );
		//
		//
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

</html> -->

<script>
	var table;
	var table1;
	$( document ).ready( function () {


		//var data= [{"Note":"6","Name":"dsgs","Gewichtung":"0","Datum":"2019-06-16"},{"Note":"2","Name":"dsgs","Gewichtung":"0","Datum":"2019-06-16"},{"Note":"3.7","Name":"dsgs","Gewichtung":"25","Datum":"2019-06-16"}]  ;

		$( '#divTable' ).hide();

		function format( data ) {
			var i;
			var note = null;

			for ( i = 1; i < 10; i++ ) {
				var Notedt = data[ "Note" + i ];
				var Namedt = data[ "Name" + i ];
				var Gewichtungdt = data[ "Gewichtung" + i ];
				var Datumdt = data[ "Datum" + i ];

				if ( ( Notedt ) >= 1 && Notedt <= 100 ) {
					var z = null;
					var z = '<div class="details-container"><table cellpadding="5" cellspacing="0" border="0" class="details-table">'

					+'<tr>' +
					'<td  class="title" width="10%" >Note' + i + ':</td>' +
						'<td  width="12%">' + Notedt + '</td>' +
						'<td class="title"  width="10%" >Notenname:</td>' +
						'<td  width="12%">' + Namedt + '</td>' +
						'<td class="title"  width="10%" >Gewichtung:</td>' +
						'<td  width="12%">' + Gewichtungdt + '</td>' +
						'<td class="title"  width="10%" >Datum:</td>' +
						'<td  width="12%">' + Datumdt + '</td></tr>' +


						'</table>' +


						'</div>';
					if ( note == null ) {
						note = z;
					} else note = note + z;
				}

			}

			return note;
		};


		function format1( data ) {
			var i;
			var abw = null;

			for ( i = 0; i < data.Rows; i++ ) {

				var Datumdt = data[ "Datum" + i ];
				var Klassedt = data[ "Klasse" + i ];
				var Kommentardt = data[ "Kommentar" + i ];
				var KommentVerdt = data[ "KommentVer" + i ];
				var Abwesenheitsdauerdt = data[ "Abwesenheitsdauer" + i ];
				var Lehrerdt = data[ "Lehrer" + i ];


				var z = null;
				var z = '<div class="details-container"><table cellpadding="5" cellspacing="0" border="0" class="details-table">'

				+'<tr>' +
			'<td class="title"  width="7%">Klasse:</td>' +
				'<td  width="10%">' + Klassedt + '</td></tr>' +
					'<td class="title"  width="7%">Datum:</td>' +
					'<td width="10%">' + Datumdt + '</td></tr>' +
					'<td class="title"  width="7%">Kommentar:</td>' +
					'<td>' + Kommentardt + '</td></tr>' +
					'<td class="title"  width="7%">KmntVerw:</td>' +
					'<td>' + KommentVerdt + '</td></tr>' +
					'<td class="title"  width="7%">DauerAbw:</td>' +
					'<td  width="10%">' + Abwesenheitsdauerdt + '</td></tr>' +
					'<td class="title" width="7%">Lehrer:</td>' +
					'<td  width="10%">' + Lehrerdt + '</td></tr>' +
					'</table>' +


					'::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::</div>';
				if ( abw == null ) {
					abw = z;
				} else abw = abw + z;
			}



			return abw;
		};


		var new_url = "/wp-content/themes/structr/Page_Scripts/GetNotenValuesSchuelerVerw.php?l=" + document.getElementById( "schueler" ).value+ "&s=" + document.getElementById( "semester" ).value;
		var new_url1 = "/wp-content/themes/structr/Page_Scripts/GetAbwValuesSchuelerVerw.php?l=" + document.getElementById( "schueler" ).value+ "&s=" + document.getElementById( "semester" ).value;

     $.fn.dataTable.ext.errMode = 'throw';

		table = $( '.datatables' ).DataTable( {


			ajax: {

				url: new_url,

				dataSrc: ""

			},
			columns: [ {
					className: 'details-control',
					defaultContent: '',
					data: null,
					orderable: false
				},

				{
					data: 'Kursname'
				}, {
					data: 'Notenschnitt'
				}
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
		table1 = $( '.datatables1' ).DataTable( {


			ajax: {

				url: new_url1,

				dataSrc: ""

			},
			columns: [ {
					className: 'details-control',
					defaultContent: '',
					data: null,
					orderable: false
				},

				{
					data: 'Kursname'
				}, {
					data: 'AbwesenheitenGesamt'
				}
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

		$( '.datatables tbody' ).on( 'click', 'td.details-control', function () {
			var tr = $( this ).closest( 'tr' ),
				row = table.row( tr );

			if ( row.child.isShown() ) {
				tr.next( 'tr' ).removeClass( 'details-row' );
				row.child.hide();
				tr.removeClass( 'shown' );
			} else {
				row.child( format( row.data() ) ).show();
				tr.next( 'tr' ).addClass( 'details-row' );
				tr.addClass( 'shown' );
			}
		} );

		$( '.datatables1 tbody' ).on( 'click', 'td.details-control', function () {
			var tr = $( this ).closest( 'tr' ),
				row = table1.row( tr );

			if ( row.child.isShown() ) {
				tr.next( 'tr' ).removeClass( 'details-row' );
				row.child.hide();
				tr.removeClass( 'shown' );
			} else {
				row.child( format1( row.data() ) ).show();
				tr.next( 'tr' ).addClass( 'details-row' );
				tr.addClass( 'shown' );
			}
		} );


	} );

	function tableshow() {
		var new_url2 = "/wp-content/themes/structr/Page_Scripts/GetNotenValuesSchuelerVerw.php?l=" + document.getElementById( "schueler" ).value + "&s=" + document.getElementById( "semester" ).value;
	var new_url1 = "/wp-content/themes/structr/Page_Scripts/GetAbwValuesSchuelerVerw.php?l=" + document.getElementById( "schueler" ).value+ "&s=" + document.getElementById( "semester" ).value;
        table.clear()
            .draw();
		table.ajax.url( new_url2 ).load();
		
		table1.clear()
            .draw();
		table1.ajax.url( new_url1 ).load();
	}
</script>


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
	
	.iconSettings,
	td.details-control:before,
	tr.shown td.details-control:before {
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
<script>
	function getKursname() {



		

		
			if ( window.XMLHttpRequest ) {

				// code for IE7+, Firefox, Chrome, Opera, Safari

				xmlhttp = new XMLHttpRequest();

			} else {

				// code for IE6, IE5

				xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

			}

			xmlhttp.onreadystatechange = function () {

				if ( this.readyState == 4 && this.status == 200 ) {

					document.getElementById( "Kursname" ).innerHTML = this.responseText;

				}

			};

			xmlhttp.open( "GET", "/Ajax_Scripts/getKursnameAllAll.php?s="+ document.getElementById( "semester" ).value , true );

			xmlhttp.send();

		}

	





	function checkKurs( str ) {

		if ( str == "" ) {

			alert( 'Bitte einen Kurs auswählen' )

			return;

		}

	}


    function getSchueler(){





        if (window.XMLHttpRequest) {

            // code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        } else {

            // code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("schueler").innerHTML = this.responseText;

            }

        };

        xmlhttp.open("GET","/Ajax_Scripts/getSchueler.php?q="+ document.getElementById('Kursname').value + "&s="  +  document.getElementById('semester').value,true);

        xmlhttp.send();

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

$heute = date( "Y-m-d" );



?>

<br><br>

Wählen Sie das Semester aus :
<br>
<select name="semester" id="semester" onchange="getKursname()"  required="required">
   <?php

    //Den aktuell eingeloggten Schüler anzeigen

    $isEntry= "Select Semesterkuerzel From sv_SemesterArchiv";
    $result = mysqli_query($con, $isEntry);
    echo "<option>". $_GET['Semester']. "</option>";

    while( $line3= mysqli_fetch_array($result))
    {
    $Semester = $line3['Semesterkuerzel'];
    echo "<option>" . $Semester . "</option>";

    }

    ?>
</select>

<br><br>




    Kursname:<br>
    <select name="Kursname" onchange="getSchueler()"  id="Kursname" >

       
    </select>


<br><br> Schüler:



 <?

					
              
					
					echo '<br><select name="schueler" id="schueler" onchange="tableshow()">';



        



       
 echo '</select>';




?>


<h1>Noten des Schülers</h1>


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
						<th>Kursname</th>
						<th>Notenschnitt</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>
<br><br>
<h1>Abwesenheiten des Schülers</h1>


<div class="container">
	<div class="row">
		<form class="col-md4"></form>
	</div>
	<div class="row">
		<div class="col md12">
			<table class="table table-striped table-hover datatables1">
				<thead>
					<tr>
						<th></th>
						<th>Kursname</th>
						<th>Abwesenheiten Gesamt</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>


<style>
	body {
		font-family: "Dosis", "Helvetica Neue", sans-serif;
		color: #232323;
	}
	
	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>