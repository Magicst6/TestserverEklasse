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
var editor; // use a global for the submit and return data rendering in the examples
 var table;
var	editor1;
	var editor2;
	var table2;
	var table1;
		$(document).ready(function() {
			loadeditor();
			
		});
			

	
	function loadeditor(){
    editor1 = new $.fn.dataTable.Editor( {
		 ajax:{
            url:  "/wp-content/themes/structr/Page_Scripts/getKlassenEdit.php",
            type: 'POST',
            data: {
                 
			}
        }, 
        table: "#dtbl",
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
            }, {
                label: "Klasse:",
                name: "Klasse",
			    type: "readonly"
            }, {
                label: "User_ID:",
                name: "User_ID",
				  type: "readonly"
            },
				{
                label: "Email:",
                name: "EMail",
					  type: "readonly"
            }, {
                label: "Loginname:",
                name: "Loginname",
				  type: "readonly"
            },
				 {
                label: "Profil:",
                name: "Profil"
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
	editor1.on( 'edit', function ( e, json, data ) {
    
	if ( window.XMLHttpRequest ) {

				// code for IE7+, Firefox, Chrome, Opera, Safari

				xmlhttp = new XMLHttpRequest();

			} else {

				// code for IE6, IE5

				xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

			}


			
			xmlhttp.open( "GET", "/Ajax_Scripts/updateLernendeModule.php",true );

			xmlhttp.send();
} );
	editor1.on( 'create', function ( e, json, data ) {
    
	if ( window.XMLHttpRequest ) {

				// code for IE7+, Firefox, Chrome, Opera, Safari

				xmlhttp = new XMLHttpRequest();

			} else {

				// code for IE6, IE5

				xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

			}


			
			xmlhttp.open( "GET", "/Ajax_Scripts/updateLernendeModule.php",true );

			xmlhttp.send();
} );
	
	editor1.on( 'remove', function ( e, json, data ) {
    alert();
	if ( window.XMLHttpRequest ) {

				// code for IE7+, Firefox, Chrome, Opera, Safari

				xmlhttp = new XMLHttpRequest();

			} else {

				// code for IE6, IE5

				xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

			}


			
			xmlhttp.open( "GET", "/Ajax_Scripts/updateLernendeModule.php",true );

			xmlhttp.send();
} );
 
   /* // Activate an inline edit on click of a table cell
    $('#dtbl').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this, {
            buttons: { label: '&gt;', fn: function () { this.submit(); } }
        } );
    } );
		
	*/
 
   table1= $('#dtbl').DataTable( {
        dom: "lBfrtip",
        ajax:{
            url:  "/wp-content/themes/structr/Page_Scripts/getKlassenEdit.php",
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
			{ data: "Klasse" },
            { data: "User_ID" },
            { data: "EMail" },
            { data: "Loginname" },
			{ data: "Profil" }
          
        ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        buttons: [
          
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


	
	function tableshow() {
	
	if ( table1 ) {
		table.destroy();
	}
	
	if ( editor1 ) {
		editor.destroy();
	}
	
	
	
	
	loadeditor();


	
		
	
	
	editor1 . submit();

	

	
}
</script>


<style>
	 button {
          color: white;
        }
	</style>




<br><br>



<table id="dtbl" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th></th>
				<th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
				<th>Klasse</th>
                <th>User ID</th>
                <th>Email</th>
                <th>Loginname</th>
				<th>Profil</th>
            </tr>
        </thead>
    </table>


	

	

	
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


