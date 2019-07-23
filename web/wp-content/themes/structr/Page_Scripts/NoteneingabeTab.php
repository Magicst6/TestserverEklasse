


<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/syntax/shCore.css">
	<!--	<link rel="stylesheet" type="text/css" href="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/demo.css">-->
	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTables-1.10.19/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" src="/wp-content/themes/structr/Page_Scripts/DataTablesEditor/js/dataTables.editor.min.js"></script>
	<script type="text/javascript" language="javascript" class="init">
  


    <script type='text/javascript'>
   var editor;
 var table;
	$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "/wp-content/themes/structr/Page_Scripts/notenvalues.php",
        table: ".datatables",
        fields: [ {
                label: "Vorname:",
                name: "Vorname"
            }, {
                label: "Nachname:",
                name: "Nachname"
            }, {
                label: "SchülerID:",
                name: "SchülerID"
            }, {
                label: "Name1:",
                name: "Name1"
            }, {
                label: "Gewichtung1:",
                name: "Gewichtung1"
            }, {
                label: "Note1:",
                name: "Note1",
               
            }, {
                label: "Datum1:",
                name: "Datum1",
				 type: "datetime"
            },
				 {
                label: "Name2:",
                name: "Name2"
            }, {
                label: "Gewichtung2:",
                name: "Gewichtun2"
            }, {
                label: "Note2:",
                name: "Note2",
               
            }, {
                label: "Datum2:",
                name: "Datum2",
				 type: "datetime"
            },
				 {
                label: "Name3:",
                name: "Name3"
            }, {
                label: "Gewichtung3:",
                name: "Gewichtung3"
            }, {
                label: "Note3:",
                name: "Note3",
               
            }, {
                label: "Datum3:",
                name: "Datum3",
				 type: "datetime"
            },
				 {
                label: "Name4:",
                name: "Name4"
            }, {
                label: "Gewichtung4:",
                name: "Gewichtung4"
            }, {
                label: "Note4:",
                name: "Note4",
               
            }, {
                label: "Datum4:",
                name: "Datum4",
				 type: "datetime"
            },
				 {
                label: "Name5:",
                name: "Name5"
            }, {
                label: "Gewichtung5:",
                name: "Gewichtung5"
            }, {
                label: "Note5:",
                name: "Note5",
               
            }, {
                label: "Datum5:",
                name: "Datum5",
				 type: "datetime"
            },
				 {
                label: "Name6:",
                name: "Name6"
            }, {
                label: "Gewichtung6:",
                name: "Gewichtung6"
            }, {
                label: "Note6:",
                name: "Note6",
               
            }, {
                label: "Datum6:",
                name: "Datum6",
				 type: "datetime"
            },
				 {
                label: "Name7:",
                name: "Name7"
            }, {
                label: "Gewichtung7:",
                name: "Gewichtung7"
            }, {
                label: "Note7:",
                name: "Note7",
               
            }, {
                label: "Datum7:",
                name: "Datum7",
				 type: "datetime"
            },
				 {
                label: "Name8:",
                name: "Name8"
            }, {
                label: "Gewichtung8:",
                name: "Gewichtung8"
            }, {
                label: "Note8:",
                name: "Note8",
               
            }, {
                label: "Datum8:",
                name: "Datum8",
				 type: "datetime"
            },
				 {
                label: "Name9:",
                name: "Name9"
            }, {
                label: "Gewichtung9:",
                name: "Gewichtung9"
            }, {
                label: "Note9:",
                name: "Note9",
               
            }, {
                label: "Datum9:",
                name: "Datum9",
				 type: "datetime"
            },
        ]
    } );
		
		
		  // Activate an inline edit on click of a table cell
    $('.datatables').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this, {
            buttons: { label: '&gt;', fn: function () { this.submit(); } }
        } );
    } );
		
		
		table = $( '.datatables' ).DataTable( {


			dom: "Bfrtip",
        ajax: "/wp-content/themes/structr/Page_Scripts/notenvalues.php",
			columns: [ {
					data: null
					
				},

				
				{
					data: 'Name1'
				},
					  {
					data: 'Gewichtung1'
				},
					  {
					data: 'Note1'
				},
					 
					  {
					data: 'Datum1'
				}
			],
			select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]

		} );

    
	function getSchueler( str ) {

		location.reload;

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

			xmlhttp.open( "GET", "/Ajax_Scripts/getSchueler.php?q=" + document.getElementById( "Kursname" ).value, true );

			xmlhttp.send();

		}

	}

		
 

 
</script>
<br><br>
<html>
<body>
<em>Hier können Verwaltungsmitarbeiter Noten eintragen </em>
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
 
<select name="Schueler"   id="Schueler" >
<?php
	$Tab="sv_LernenderKurs";

$isEntry= "Select SchülerID From $Tab Where KursID='$Kursname' ";
$result = mysqli_query($con,$isEntry);
$resultarr = array();


while( $line2= mysqli_fetch_assoc($result))
{
    $resultarr[] = $line2['SchülerID'];
}
$uniquearr = array_unique($resultarr);

echo "<option>" .$Schueler. "</option>";
echo "<option>" .'-Select-'. "</option>";




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
<?php

     
    preg_match("/:(.*)/", $Schueler, $output_array);
    $Schueler=$output_array[1];
    if ($Schueler==""){$vr3=0;}
   ?>

	
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
						<th>Note</th>
	                    <th>Gewichtung</th>
						<th>Name</th>
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

