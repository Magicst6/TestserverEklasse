
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


    <script type='text/javascript'>
		
		
   var editor;
 var table;
	$(document).ready(function() {
		
	
	
	});
		
	function loadeditor(){	
		
    editor = new $.fn.dataTable.Editor( {
        ajax: {
            url: "/wp-content/themes/structr/Page_Scripts/pruefungenvalues.php",
            type: 'POST',
            data: {
             
				'KID':  document.getElementById( "Kursname" ).value
				
			
			}
        }, 
		
        table: ".datatables",
        fields: [
			
			{
			 label: "Pruefungsname:",
                name: "Pruefungsname"
                
		},		
			{
			 label: "KursID:",
                name: "KursID",
                def: document.getElementById( "Kursname" ).value
		}, {
                label: "Datum:",
                name: "Datum",
				 type: "date"
            },	 {
                label: "Start(Format: YYYY-MM-DD HH:mm:ss):",
                name: "Start",
				 
				
            }	
			, {
                label: "Ende(Format: YYYY-MM-DD HH:mm:ss):",
                name: "Ende",
				
                
            },	  {
			 label: "Klasse:",
                name: "Klasse",
               
              
		},			
				 { 
                label: "Lehrperson:",
                name: "Lehrperson"
            }, {
                label: "Lehrperson ID:",
                name: "LP_ID"
            }, {
                label: "Zimmer:",
                name: "Zimmer"
               
            }, {
                label: "Gewichtung:",
                name: "Gewichtung"
               
            }, {
                label: "Kommentar:",
                name: "Kommentar"
               
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
            buttons: { label: '&gt;', fn: function () { this.submit();
													  
													  
													  } }
        } );
    } );
		
 
	 
	}
	
		
	
function loadtable(){
		
			table = $( '.datatables' ).DataTable( {


			dom: "lBfrtip",
        ajax:{
            url: "/wp-content/themes/structr/Page_Scripts/pruefungenvalues.php",
            type: 'POST',
            data: {
				'KID':  document.getElementById( "Kursname" ).value
				
				
			
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
                className: 'details-control1',
                defaultContent: '',
                data: null,
                orderable: false,
                title:' Noten Bearbeiten'


            },

	{
	
					data: 'Pruefungsname'
				
				},
					  {
					      data: 'KursID'
						 
				},
					  {
				
						  data: 'Datum'
						
				},
					 
					  {
		
						  data: 'Start'
						 
				},{
		
						  data: 'Ende'
						 
				},
					  {
					      data: 'Klasse'
						 
				},
					  {
				
						  data: 'Lehrperson'
						
				},
					 
					  {
		
						  data: 'LP_ID'
						 
				},
					  {
					      data: 'Zimmer'
						 
				},
					  {
				
						  data: 'Gewichtung'
						
				},
					 
					  {
		
						  data: 'Kommentar'
						 
				}
					 
			],
			select: true,
				order: [[ 4, "desc" ]],
        buttons: [
            { extend: "create", editor: editor ,text: 'Neue Prüfung' },
            { extend: "edit",   editor: editor,text: 'Prüfung  bearbeiten' },
            { extend: "remove", editor: editor,text: 'Prüfung löschen' }
        ],"language": {
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
	
	
    $( '.datatables tbody' ).on( 'click', 'td.details-control1', function () {
        var tr = $( this ).closest( 'tr' ),
            row = table.row( tr );



        row.child( neueNote( row.data() ) ).show();
        tr.next( 'tr' ).addClass( 'details-row' );
        tr.addClass( 'shown' );


    } );
	
}
 function neueNote( data ) {
			 document.getElementById("Pruefunglb1").value=data['Pruefungsname'];
				document.getElementById("Kurslb1").value = data['KursID']; 

			 document.getElementById("Datumlb1").value=data['Datum'];
			document.getElementById("Gewichtunglb1").value=data['Gewichtung'];
		
	 
	 	 if (window.XMLHttpRequest) {

                        // code for IE7+, Firefox, Chrome, Opera, Safari

                        xmlhttp = new XMLHttpRequest();

                    } else {

                        // code for IE6, IE5

                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

                    }

                    xmlhttp.onreadystatechange = function () {

                        if (this.readyState == 4 && this.status == 200) {

                            document.getElementById("Noten").innerHTML = this.responseText;

                        }

                    };



                    xmlhttp.open("GET", "/Ajax_Scripts/showschuelernotenliste.php?f=" + data['Klasse'] +  "&e=" + data['Gewichtung'] + "&g=" + data['KursID'] +"&h=" + data['Datum'] +"&i=" + data['Pruefungsname']  + "&k=" + data['Ende'] + "&n=" + data['Start'] + "&m=" + data['Zimmer'] +  "&o=" + data['Lehrperson'], true);

                    xmlhttp.send();
	document.getElementById("myModal2").style.display = "block"; 
	 
   // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal2")) {
 
			document.getElementById("myModal2").style.display = "none";
			 document.getElementById("Pruefunglb1").value = "";
	 document.getElementById("Kurslb1").value = "";
	 document.getElementById("Gewichtunglb1").value = "";
	 document.getElementById("Datumlb1").value = "";
			
			      }
    }
	
	 //When the user clicks on <span> (x), close the modal
     document.getElementById("span2").onclick = function() {
       document.getElementById("myModal2").style.display = "none";
	document.getElementById("Pruefunglb1").value = "";
	 document.getElementById("Kurslb1").value = "";
	 document.getElementById("Gewichtunglb1").value = "";
	 document.getElementById("Datumlb1").value = "";
			
		 
		
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



	editor . field( 'KursID' ) . def( document . getElementById( "Kursname" ) . value );
	editor . submit();

	
	


	
}

		function tableshow1(str) {
	
	if ( table ) {
		table.destroy();
	}
	
	if ( editor ) {
		editor.destroy();
	}
	loadeditor();
	
	
	loadtable();



	editor . field( 'KursID' ) . def( document . getElementById( "Kursname" ) . value );
	editor . submit();

	
	
 showtable(str);

	
}

  

function showtable(str) {
	
	

		
		

            if (window.XMLHttpRequest) {

                // code for IE7+, Firefox, Chrome, Opera, Safari

                xmlhttp = new XMLHttpRequest();

            } else {

                // code for IE6, IE5

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            }

            xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("tabpruefungen").innerHTML = this.responseText;

                }

            };

            xmlhttp.open("GET","/Ajax_Scripts/showtable.php?k="+str,true);

            xmlhttp.send();

        }
	

 
 
</script>

	


<html>
<body>
	
<em>Hier können Verwaltungsmitarbeiter Noten für Prüfungen eintragen </em>
	
	<br><br>
<?php
include 'db.php';


?>
 
    Kursname:<br>
    <select name="Kursname" onchange="tableshow1(this.value)"  id="Kursname" >

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
		 echo "<option></option>";
        echo "<option>Alle</option>";
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
   

        

	


	<html>
		
		</script>


<style>
	#tooltip {
  position: absolute;
  z-index: 1001;
  display: none;
  border: 2px solid #ebebeb;
  border-radius: 5px;
  padding: 10px;
  background-color: #fff;
}
	
div.DTE div.DTE_Body div.DTE_Field {
    padding: 0.7em 0 0 0;
}
div.DTE div.DTE_Body div.DTE_Field > label {
    float: none;
    clear: both;
    width: 100%;
}
div.DTE div.DTE_Body div.DTE_Field > div.DTE_Field_Input {
    float: none;
    clear: both;
    width: 100%;
}

div.DTE div.DTE_Header,
div.DTE div.DTE_Footer {
    background-color: transparent;
    border-color: black
}

div.DTE div.DTE_Header {
    height: 60px;
}

p.start-editing,
p.add-new {
    text-align: center;
    font-size: 1.4em;
    line-height: 1.4em;
}


p.start-editing {
    padding-top: 7em;
}

#container {
    display: flex;
    align-items: stretch;
}

#table-container {
    box-sizing: border-box;
    width: 55%;
    padding: 0 1em;
}

#form-container {
    box-sizing: border-box;
    width: 45%;
    padding: 0 1em;
}


	
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

	.iconSettings,
	td.details-control1:before,
	tr.shown td.details-control1:before {
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
	
	td.details-control1 {
		cursor: pointer;
		text-align: center;
	}
	
	td.details-control1:before {
		content: '✎';
	}
	
	tr.shown td.details-control1:before {
		content: '✎';
	}
	
	
	
		.iconSettings,
	td.details-control2:before,
	tr.shown td.details-control2:before {
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
	
	td.details-control2 {
		cursor: pointer;
		text-align: center;
	}
	
	td.details-control2:before {
		content: url(/plussmall.png);
	}
	
	tr.shown td.details-control2:before {
		content: url(/plussmall.png);
	}

</style>
	
<style>
        body {}

        .modal{
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
		.modal1{
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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
            width: 1400px;
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
    </style>
<div id="myModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
     

Prüfungsname:     <input id="Pruefunglb1" readonly>                       
Kurs:        <input id="Kurslb1" readonly><br><br>
Datum:        <input id="Datumlb1" readonly><br><br>
Gewichtung:        <input id="Gewichtunglb1" readonly><br><br>

            
            <p>Bitte hier die Noten eintragen (erst nach Prüfungsdatum möglich)...</p>
		   
		   <div id="Noten"></div>
            
			
           

        <span class="close" onclick="reload.location()"  id="span2">&times;</span>


        
    </div>

</div>


<div class="container">
	<div class="row">
		<form class="col-md4"></form>
	</div>
	<div class="row">
		<div class="col md12">
			<table class="table table-striped table-hover datatables" width=1500px>
				<thead>
					<tr>	
						<th></th>
						<th></th>
						<th>Pruefungsname</th>
	                    <th>KursID</th>
						<th>Datum</th>
						<th>Start</th>
						<th>Ende</th>
	                    <th>Klasse</th>
						<th>Lehrperson</th>
						<th>Lehrperson ID</th>
						<th>Zimmer</th>
	                    <th>Gewichtung</th>
						<th>Kommentar</th>
						
						
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>

<div id="tabpruefungen"></div>
		
	</body>
</html>
<script>
	
function myFunction3(str) {
	  
  if (str.value.indexOf(",")>0)
    {
	 x = str.value;
  	 y = x.replace(",", ".");				  
     alert( 'Bitte "." statt "," verwenden!');
	 str.value=y;				  															 
	}
}
	</script>
	

