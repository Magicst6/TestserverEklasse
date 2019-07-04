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

				if ( ( Notedt ) >= 1 && Notedt <= 6 ) {
					var z = null;
					var z = '<div class="details-container"><table cellpadding="5" cellspacing="0" border="0" class="details-table">'

					+'<tr>' +
					'<td class="title">Note' + i + ':</td>' +
						'<td>' + Notedt + '</td>' +
						'<td class="title">Notenname:</td>' +
						'<td>' + Namedt + '</td>' +
						'<td class="title">Gewichtung:</td>' +
						'<td>' + Gewichtungdt + '</td>' +
						'<td class="title">Datum:</td>' +
						'<td>' + Datumdt + '</td></tr>' +

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
				'<td class="title">Klasse:</td>' +
				'<td>' + Klassedt + '</td></tr>' +
					'<td class="title">Datum:</td>' +
					'<td>' + Datumdt + '</td></tr>' +
					'<td class="title">Kommentar:</td>' +
					'<td>' + Kommentardt + '</td></tr>' +
					'<td class="title">KmntVerw:</td>' +
					'<td>' + KommentVerdt + '</td></tr>' +
					'<td class="title">DauerAbw:</td>' +
					'<td>' + Abwesenheitsdauerdt + '</td></tr>' +
					'<td class="title">Lehrer:</td>' +
					'<td>' + Lehrerdt + '</td></tr>' +

					'</table>' +


					'::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::</div>';
				if ( abw == null ) {
					abw = z;
				} else abw = abw + z;
			}



			return abw;
		};


		var new_url = "/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=" + document.getElementById( "Kursname" ).value;
		var new_url1 = "/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=" + document.getElementById( "Kursname" ).value;


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
					data: 'IDSchueler'
				},
					  {
					data: 'Nachname'
				},
					  {
					data: 'Vorname'
				},
					  {
					data: 'Notenschnitt'
				}
			],

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
					data: 'SchuelerID'
				},
					  {
					data: 'Nachname'
				},
					  {
					data: 'Vorname'
				},
					  {
					data: 'AbwesenheitenGesamt'
				}
			],


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
		var new_url3 = "/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=" + document.getElementById( "Kursname" ).value;
		var new_url4 = "/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=" + document.getElementById( "Kursname" ).value;


		table.ajax.url( new_url3 ).load();
		table1.ajax.url( new_url4 ).load();
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
	





	function checkKurs( str ) {

		if ( str == "-Select-" ) {

			alert( 'Bitte einen Kurs auswählen' )

			return;

		}

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

Lehrperson:

<br>

<?php



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

<br><br>
Kursname:
<br>
 
<select id="Kursname" name="Kursname" required="required"  onchange="tableshow()">

    <?php

    include 'db.php';

    

    preg_match("/:(.*)/", $Lehrer, $output_array);

    $Lehrer=$output_array[1];



    $y=0;







    $isEntry= "Select Kurs1, Kurs2, Kurs3, Kurs4, Kurs5, Kurs6, Kurs7, Kurs8, Kurs9,Kurs10,Kurs11,Kurs12,Kurs13,Kurs14,Kurs15,Kurs16 From sv_Lehrpersonen Where ID = $Lehrer";

    $result = mysqli_query($con,$isEntry);





    echo "<option>" . '-Select-' . "</option>";



    while( $line2= mysqli_fetch_array($result))

    {

        for($x = 1; $x <= 16; $x++)

        {



            $value = $line2['Kurs'.$x];

            if ($value<>"") echo "<option>" . $value . "</option>";



        }

    }

    ?>
</select>


<br><br>

<h1>Noten</h1>


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
						<th>ID</th>
	                    <th>Nachname</th>
						<th>Vorname</th>											 
						<th>Notenschnitt</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>
<br><br>
<h1>Abwesenheiten</h1>


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
						<th>ID</th>
	                    <th>Nachname</th>
						<th>Vorname</th>
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