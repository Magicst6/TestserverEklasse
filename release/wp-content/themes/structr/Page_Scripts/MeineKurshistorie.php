
<html>
<head>

	
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/syntax/shCore.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<!--	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/demo.css">-->
	<style type="text/css" class="init">
	
	</style>
	
	
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init"></script>
	
		<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	
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
	 var table;
		var table1;

$(document).ready(function() {


        //var data= [{"Note":"6","Name":"dsgs","Gewichtung":"0","Datum":"2019-06-16"},{"Note":"2","Name":"dsgs","Gewichtung":"0","Datum":"2019-06-16"},{"Note":"3.7","Name":"dsgs","Gewichtung":"25","Datum":"2019-06-16"}]  ;


        // function format (data) {
//	  var i;  
//	  var note=null;
//	  
//	  for(i=1; i<10; i++){
//		var Notedt= data["Note"+i];
//		var  Namedt=data["Name"+i];
//		var  Gewichtungdt= data["Gewichtung"+i];
//		var  Datumdt=data["Datum"+i];
//		 
//		if ((Notedt)>1 && Notedt<=6){
//	  var z=null;
//	 var z= '<div class="details-container"><table cellpadding="5" cellspacing="0" border="0" class="details-table">'
//            
//		  +'<tr>'+
//                  '<td class="title">Note'+i+':</td>'+
//                  '<td>'+Notedt+'</td>'+
//		     '<td class="title">Notenname:</td>'+
//		  '<td>'+Namedt+'</td>'+
//		    '<td class="title">Gewichtung:</td>'+
//		   '<td>'+Gewichtungdt+'</td>'+
//		   '<td class="title">Datum:</td>'+
//		   '<td>'+Datumdt+'</td></tr>'+
//			 
//          '</table>'+
//     
//
//		    '</div>';
//		if (note==null){
//	       note=z;
//		}
//			else note=note+z;
//		  }
//		  
//  }
//	  
//	  return note;
//  };
//  
         var new_url1 = "/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrersem.php?l=" + document.getElementById("lehrer").value +"&s=" + document.getElementById("Semester").value;

        table1 = $('.datatables1').DataTable({

            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],


            ajax: {

                url: new_url1,

                dataSrc: ""

            },
            columns: [
                {
                    //className      : 'details-control',
                    data: 'ID',

                    orderable: false
                },

                {data: 'Stattgefunden'},
                {data: 'Datum'},
                {data: 'KursID'},
                {data: 'Lehrer'},
                {data: 'Kommentar'},
                {data: 'Lektionen'}


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


        });

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



    });





	function loadtable(){

    
    var new_url1 = "/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrersem.php?l=" + document.getElementById("lehrer").value +"&s=" + document.getElementById("Semester").value;


     table1 = $('.datatables1').DataTable({

         dom: 'lBfrtip',
         buttons: [
             'copy', 'csv', 'excel', 'pdf', 'print'
         ],


         ajax: {

             url: new_url1,

             dataSrc: ""

         },
         columns : [
             {
                 //className      : 'details-control',
                 data : 'ID',

                 orderable      : false
             },

             {data : 'Stattgefunden'},
             {data : 'Datum'},
             {data : 'KursID'},
             {data : 'Lehrer'},
             {data : 'Kommentar'},
             {data : 'Lektionen'}



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


     });

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



     }

function tableshow(){
		
	var new_url1 = "/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrersem.php?l=" + document.getElementById("lehrer").value +"&s=" + document.getElementById("Semester").value;

   

    if ( table1 ) {
        table1.destroy();
    }



    loadtable();
                    
		
	
	//table1.ajax.url( new_url1 ).load();
}		
		
		
	</script>
	
	

	
	
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

	
  <h4>Meine Kurshistorie</h4>




<?php

global $current_user;

get_currentuserinfo();

include 'db.php';

$isEntry2 = "Select Semesterkuerzel From sv_Settings";
$result2 = mysqli_query($con, $isEntry2);

while ($value3 = mysqli_fetch_array($result2)) {
    $SemesterkuerzelDBnew = $value3['Semesterkuerzel'];
}




?>





  


Semester/Schuljahr:<br>
<select id="Semester" name="Semester" onchange="tableshow()">
    <?php

    //Den aktuell eingeloggten Schüler anzeigen

    $isEntry= "Select Semesterkuerzel From sv_SemesterArchiv";
    $result = mysqli_query($con, $isEntry);
    echo "<option>".  $SemesterkuerzelDBnew. "</option>";

    while( $line3= mysqli_fetch_array($result))
    {
    $Semester = $line3['Semesterkuerzel'];
		if ($Semester!= $SemesterkuerzelDBnew){
			
    echo "<option>" . $Semester . "</option>";

		}
    }

    ?>
</select>
<br><br>

<h1>Kurshistorie</h1>

<div class="container">
  <div class="row">
    <form class="col-md4"></form>
  </div>
  <div class="row">
    <div class="col md12">
      <table class="table table-striped table-hover datatables1">
        <thead>
          <tr>
            <th>ID</th>
            <th>Stattgefunden</th>
			<th>Datum</th>
	        <th>KursID</th>
			  <th>Lehrer</th>
            <th>Kommentar</th>
			<th>Lektionen</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>
 
<br><br>





</form>&nbsp;

<style>

    body {
        font-family:"Dosis", "Helvetica Neue", sans-serif;
        color:#232323;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

</style>


