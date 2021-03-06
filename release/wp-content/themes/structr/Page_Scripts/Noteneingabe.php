
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
</head>

<?php
include 'db.php';
 $Kursname=$_GET['Kursname'];
 $Schueler=$_GET['Schueler'];
 
	 preg_match("/:(.*)/", $Schueler, $output_array);
    $SchuelerID=$output_array[1];
?>

    <script type='text/javascript'>
		 function myFunction(){
            var x   = document.querySelector("#Kursname").value;
	
	  
            var y   = document.querySelector("#Schueler").value;
	
            window.location.href = "?&Schueler="+y+"&Kursname="+x;
        }

		
   var editor;
 var table;
	$(document).ready(function() {
		
	
	
	});
		
	function loadeditor(){	
		
    editor = new $.fn.dataTable.Editor( {
        ajax: {
            url: "/wp-content/themes/structr/Page_Scripts/notenvalues.php",
            type: 'POST',
            data: {
              'SchID': document . getElementById( "Schueler" ) . value,
				'KID':  document.getElementById( "Kursname" ).value,
				'UID': 1
			
			}
        }, 
		
        table: ".datatables",
        fields: [ {
			 label: "KursID:",
                name: "KursID",
                type: "readonly",
                def: document.getElementById( "Kursname" ).value
		},		
				  {
			 label: "SchuelerID:",
                name: "SchuelerID",
                type: "readonly",
              
		},			
				 { 
                label: "Name:",
                name: "Name"
            }, {
                label: "Gewichtung:",
                name: "Gewichtung"
            }, {
                label: "Note:",
                name: "Note",
               
            }, {
                label: "Datum:",
                name: "Datum",
				 type: "date"
            }
				
        ],i18n: {
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
            buttons: { label: '&gt;', fn: function () { this.submit();
													  
													  
													  } }
        } );
    } );
		
 
	 
	}
	
		
	
function loadtable(){
		
			table = $( '.datatables' ).DataTable( {


			dom: "Bfrtip",
        ajax:{
            url: "/wp-content/themes/structr/Page_Scripts/notenvalues.php",
            type: 'POST',
            data: {
                  'SchID': document . getElementById( "Schueler" ) . value,
				'KID':  document.getElementById( "Kursname" ).value,
				'UID': 1
				
				
			
			}
        }, 
		
				 columns: [
           
				 {
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
            },


	{
					data: 'Name'
				
				},
					  {
					      data: 'Gewichtung'
						 
				},
					  {
				
						  data: 'Note'
						
				},
					 
					  {
		
						  data: 'Datum'
						 
				}
			],
			select: true,
        buttons: [
            { extend: "create", editor: editor ,text: 'Neue Note' },
            { extend: "edit",   editor: editor,text: 'Note bearbeiten' },
            { extend: "remove", editor: editor,text: 'Note löschen' }
        ],
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
	
}
   
		
	function getSchueler( str ) {

		

		if ( str == "" ) {

			document.getElementById( "Schueler" ).innerHTML = "";

			return;

		} else {

			if ( window.XMLHttpRequest ) {

				// code for IE7+, Firefox, Chrome, Opera, Safari

				xmlhttp = new XMLHttpRequest();

			} else {

				// code for IE6, IE5

				xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

			}

			xmlhttp.onreadystatechange = function () {

				if ( this.readyState == 4 && this.status == 200 ) {

					document.getElementById( "Schueler" ).innerHTML = this.responseText;

				}

			};

			xmlhttp.open( "GET", "/Ajax_Scripts/getSchuelerLernende.php?q=" + document.getElementById( "Kursname" ).value, true );

			xmlhttp.send();

		}

	}
function tableshow() {
	
	if ( table ) {
		table.destroy();
	}
	
	if ( editor ) {
		editor.destroy();
	}
	loadeditor();
	
	
	loadtable();


	var str = document . getElementById( "Schueler" ) . value;
	var patt = /:(.*)/;
	var result = str . match( patt );
		
	editor . field( 'SchuelerID' ) . def( result[ 1 ] );
	editor . field( 'KursID' ) . def( document . getElementById( "Kursname" ) . value );
	editor . submit();

	
	


	
}

  


 
</script>

	

<br><br>
<html>
<body>
	
<em>Hier können Verwaltungsmitarbeiter Noten eintragen </em>
	
	<br><br>
<?php
include 'db.php';


?>
 
    Kursname:<br>
    <select name="Kursname" onchange="getSchueler(this.value)" onload="getSchueler(this.value)" id="Kursname" >

        <?php

        $isEntry= "Select KursID From sv_LernenderKurs order by KursID asc";
        $result = mysqli_query($con,$isEntry, MYSQLI_USE_RESULT);
        $resultarr = array();
            
		

        while( $line2= mysqli_fetch_assoc($result))
        {
            $resultarr[] = $line2['KursID'];
        }
        $uniquearr = array_unique($resultarr);

        foreach ($uniquearr as $value) {
            if ($value == $Kursname)
            {
                echo "<option>" . $Kursname . "</option>";
            }
            else{}

        }
        echo "<option>" .''. "</option>";
        foreach ($uniquearr as $value)
        {
            echo "<option>" . $value . "</option>";
        }

        $isEntry1= "Select KursID From sv_ExtraKurse ";
        $result1 = mysqli_query($con,$isEntry1);
        $resultarr1 = array();


        while( $line3= mysqli_fetch_assoc($result1))
        {
            $resultarr1[] = $line3['KursID'];
        }
        $uniquearr1 = array_unique($resultarr1);

        foreach ($uniquearr1 as $value1) {
            if ($value1 == $Kursname)
            {
                echo "<option>" . $Kursname . "</option>";
            }
            else{}

        }
        foreach ($uniquearr1 as $value1)
        {
            echo "<option>" . $value1 . "</option>";
        }
        echo '&nsbp;';

        ?>


    </select>
<br><br>
    Schüler:<br>
 
<select name="Schueler"   id="Schueler" onChange="tableshow()" >
<?php
	$Tab="sv_LernenderKurs";

$isEntry= "Select SchuelerID From $Tab Where KursID='$Kursname' ";
$result = mysqli_query($con,$isEntry);
$resultarr = array();


while( $line2= mysqli_fetch_assoc($result))
{
    $resultarr[] = $line2['SchuelerID'];
}
$uniquearr = array_unique($resultarr);

echo "<option>" .$Schueler. "</option>";
echo "<option>" .''. "</option>";




        foreach ($uniquearr as $value) {

            $isEntry= "Select Name, Vorname From sv_Lernende WHERE ID='$value'";

            $result = mysqli_query($con, $isEntry);

            while( $line3= mysqli_fetch_array($result))

            {

                $Name = $line3['Name'];

                $Vorname = $line3['Vorname'];



            }

            echo "<option>" . $Vorname .' '. $Name .' ID:'. $value . "</option>";

        }

        
?>

       
    </select><br><br>
	
	


	<html>
		
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
						<th>Name</th>
	                    <th>Gewichtung</th>
						<th>Note</th>
						<th>Datum</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>


		
	</body>
</html>
	

