<!DOCTYPE html>

<html>



<?php
include "db.php";

global $current_user;

get_currentuserinfo();



?>
<script src="https://cdn.tiny.cloud/1/p4y59yu91l1ttdi8h066ovomyunbzi9p44zqccnlmn9ly5ge/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<input id="kidhidden" type="hidden">

<input id="farbehid" type="hidden">

<script>
	
	
	if (window.innerWidth<800){
		var wdth=350;
	}
	else var wdth=600;
	
	//alert(wdth);
	function getKursname( str ) {

		if ( str == "" ) {

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
					document.getElementById( "kursid" ).innerHTML = this.responseText;
				}
			};
			xmlhttp.open( "GET", "/Ajax_Scripts/getKursnamewthoutselect.php?q=" + str, true );
			xmlhttp.send();

		}
	}

	function getKursnamepre( str ) {

		if ( str == "" ) {

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
					document.getElementById( "kursid" ).innerHTML = this.responseText;
				}
			};
			xmlhttp.open( "GET", "/Ajax_Scripts/getKursnamewthoutselect.php?q=" + str + "&k=" + document.getElementById( 'kursid' ).value, true );
			xmlhttp.send();

		}
	}

	function reload() {

		var x = document.querySelector( "#klassedrop" ).value;

		var y = document.querySelector( "#Lehrpersondrop" ).value;

		window.location.href = "/pruefungen-verwaltung?&klasse=" + x + "&Lehrpersondr=" + y;

	}

	function getcolor( str1 ) {


		if ( window.XMLHttpRequest ) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
		}
		xmlhttp.onreadystatechange = function () {
			if ( this.readyState == 4 && this.status == 200 ) {
				document.getElementById( "farbediv" ).innerHTML = this.responseText;
			}
		};
		xmlhttp.open( "GET", "/Ajax_Scripts/getcolorAK.php?q=" + str1 + "&c=" + document.getElementById( 'farbehid' ).value.substring( 1, 7 ), true );
		xmlhttp.send();

	}



	function reload() {

		var x = document.querySelector( "#klassedrop" ).value;

		var y = document.querySelector( "#Lehrperson" ).value;

		window.location.href = "/deine-termine?&klasse=" + x + "&Lehrperson=" + y;

	}
</script>

<script>
	tinymce.init( {
		readonly: 0,
		selector: '#lernziele1',
		height: 600
	} );
</script>

<input type="hidden" name="curruser" id="curruser" value="<?php echo $current_user->ID ?>" class="text ui-widget-content ui-corner-all" readonly>


<body>

	<br><br>
	<h3>Prüfungskalender</h3>

	<?php



	$isEntry = "Select ID From sv_Lehrpersonen where User_ID=$current_user->ID";

	$result = mysqli_query( $con, $isEntry );



	while ( $line2 = mysqli_fetch_assoc( $result ) )

	{

		$value = $line2[ 'ID' ];



		$isEntry = "Select Nachname, Vorname From sv_Lehrpersonen WHERE ID='$value'";

		$result = mysqli_query( $con, $isEntry );

		while ( $line3 = mysqli_fetch_array( $result ) )

		{

			$Name = $line3[ 'Nachname' ];

			$Vorname = $line3[ 'Vorname' ];



		}







		echo '<form action=" /DBFuellung/DBFuellungKlbu.php" method="POST">';



		echo '<input  id="lehrer" class="ninput" name="lehrer" readonly="readonly" type="hidden" value="' . $Vorname . ' ' . $Name . ' ID:' . $value . '" />';

		$Lehrer = $Vorname . ' ' . $Name . ' ID:' . $value;

	}

	$IDLP = $value;

	?>



	<!-- </br>Klasse:<br>

    <select name="klassedrop" id="klassedrop" onchange="reload()" >



        <?php

/*

        $con = @mysqli_connect('heimmart.mysql.db.internal', "heimmart_test", "Tab_12_3");



        if (!$con) {

            echo "Error: " . mysqli_connect_error();

            exit();

        }

        //echo 'Connected to MySQL';





        $verbunden=mysqli_select_db($con, "heimmart_klingmobile");

        if($verbunden)

            echo '';

        else

            die('DB-Verbindung fehlgeschlagen! ');







        $isEntry= "Select Klasse From sv_Lernende";

        $result1 = mysqli_query($con,$isEntry);

        $resultarr1 = array();

        echo "<option>".$_GET['klasse']."</option>";

        echo "<option></option>";

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

                echo "<option>" . $value . "</option>";

            }

        }



        */?>



    </select>

    <br>

    Lehrperson:

    <br>

    <select name="Lehrperson"  id="Lehrperson" onchange="reload()"   >



        <?php

/*        $isEntry= "Select * From sv_Lehrpersonen Order By Nachname ASC";

        $result = mysqli_query($con, $isEntry);



        echo "<option>".$_GET['Lehrperson']."</option>";

        echo "<option></option>";

        while( $line2= mysqli_fetch_array($result))

        {

            $ID = $line2['ID'];

            $Name = $line2['Nachname'];

            $Vorname = $line2['Vorname'];





            echo "<option>" . $Name.' '. $Vorname .' ID:'. $ID. "</option>";

        }

        */?>





    </select>-->

	<script>
		function showCalendar() {



			var calendar = $( '#calendar' ).fullCalendar( {

				editable: false,

				defaultView: 'listMonth',

				header: {

					left: 'prev,next today',

					center: 'title',

					right: 'month,agendaWeek,agendaDay,listMonth'

				},

				navLinks: true, // can click day/week names to navigate views

				editable: false,

				locale: 'de',

				theme: 'jquery-ui',

				eventLimit: true, // allow "more" link when too many events

				events: "/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=" + document.getElementById( 'curruser' ).value,

				eventTextColor: 'black',

				selectable: true,

				selectHelper: true,

				select: function ( startev, endev, allDay ) {





					var dialog, form,



						// From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29

						tips = $( ".validateTips" );



					startevdate = $.fullCalendar.formatDate( startev, "YYYY-MM-DD" );

					endevdate = $.fullCalendar.formatDate( endev, "YYYY-MM-DD" );

					startevtime = $.fullCalendar.formatDate( startev, "HH:mm:ss" );

					endevtime = $.fullCalendar.formatDate( endev, "HH:mm:ss" );

					startdatepicker = startevdate;

					enddatepicker = endevdate;

					starttimepicker = startevtime;

					endtimepicker = endevtime;









					dialog = $( "#dialog-form" ).dialog( {



						autoOpen: false,

						height: 800,

						width: wdth,

						modal: true,
						
						
						
						left:0,
						
						top:0,





						open: function () {

							document.getElementById( 'startdate' ).value = startdatepicker;

							document.getElementById( 'enddate' ).value = enddatepicker;

							document.getElementById( 'starttime' ).value = starttimepicker;

							document.getElementById( 'endtime' ).value = endtimepicker;

							document.getElementById( 'title' ).value = "";

							document.getElementById( 'zimmer' ).value = "";

							document.getElementById( 'kursid' ).value = "";

							document.getElementById( 'klasse' ).value = "";

							document.getElementById( 'lehrperson' ).value = "";

							document.getElementById( 'farbe' ).value = "";

							document.getElementById( 'gewicht' ).value = "";

						},



						buttons: {

							/*"Speichern":function()  {



                                title = $("#title"),

                                    startCustdate = $("#startdate"),

                                    endCustdate = $("#enddate"),

                                    startCusttime = $("#starttime"),

                                    endCusttime = $("#endtime"),

                                    allFields = $([]).add(title).add(startCustdate).add(endCustdate).add(startCusttime).add(endCusttime);





                                var valid = true;

                                allFields.removeClass("ui-state-error");



                                $("#users tbody").append("<tr>" +

                                    "<td>" + title.val() + "</td>" +

                                    "<td>" + startCustdate.val() + "</td>" +

                                    "<td>" + endCustdate.val() + "</td>" +

                                    "<td>" + startCusttime.val() + "</td>" +

                                    "<td>" + endCusttime.val() + "</td>" +

                                    "</tr>");





                                if (window.XMLHttpRequest) {

                                    // code for IE7+, Firefox, Chrome, Opera, Safari

                                    xmlhttp = new XMLHttpRequest();

                                } else {

                                    // code for IE6, IE5

                                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

                                }

                                xmlhttp.onreadystatechange = function () {

                                    if (this.readyState == 4 && this.status == 200) {

                                        document.getElementById("respond").innerHTML = this.responseText;

                                    }

                                };





                                xmlhttp.open("GET", "/wp-content/themes/structr/Page_Scripts/insertCalendar.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val()+ "&klasse=" + document.getElementById('klasse').value + "&kursid=" + document.getElementById('kursid').value + "&kursname=" + document.getElementById('kursname').value + "&farbe=" + document.getElementById('farbe').value + "&zimmer=" + document.getElementById('zimmer').value+ "&lehrperson=" + document.getElementById('lehrperson').value, true);

                                xmlhttp.send();



                                dialog.dialog("close");







                                calendar.fullCalendar('refetchEvents');

                            },

*/

							Cancel: function () {

								dialog.dialog( "close" );

								calendar.fullCalendar( 'refetchEvents' );

							},





						},

						close: function () {

							calendar.fullCalendar( 'refetchEvents' );



						}

					} );





					// dialog.dialog("open");



				},









				editable: false,

				eventResize: function ( event ) {

					var start = $.fullCalendar.formatDate( event.start, "Y-MM-DD HH:mm:ss" );

					var end = $.fullCalendar.formatDate( event.end, "Y-MM-DD HH:mm:ss" );

					var title = event.title;

					var id = event.id;

					var color = event.color;

					if ( window.XMLHttpRequest ) {

						// code for IE7+, Firefox, Chrome, Opera, Safari

						xmlhttp = new XMLHttpRequest();

					} else {

						// code for IE6, IE5

						xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

					}

					xmlhttp.onreadystatechange = function () {

						if ( this.readyState == 4 && this.status == 200 ) {

							document.getElementById( "respond" ).innerHTML = this.responseText;

						}

					};



					xmlhttp.open( "GET", "/wp-content/themes/structr/Page_Scripts/updateCalendarDrop.php?k=" + start + "&g=" + end + "&f=" + id, true );

					xmlhttp.send();

					calendar.fullCalendar( 'refetchEvents' );

					alert( 'Event Update' );









				},



				eventDrop: function ( event )

				{

					var start = $.fullCalendar.formatDate( event.start, "Y-MM-DD HH:mm:ss" );

					var end = $.fullCalendar.formatDate( event.end, "Y-MM-DD HH:mm:ss" );

					var title = event.title;

					var id = event.id;



					if ( window.XMLHttpRequest ) {

						// code for IE7+, Firefox, Chrome, Opera, Safari

						xmlhttp = new XMLHttpRequest();

					} else {

						// code for IE6, IE5

						xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

					}

					xmlhttp.onreadystatechange = function () {

						if ( this.readyState == 4 && this.status == 200 ) {

							document.getElementById( "respond" ).innerHTML = this.responseText;

						}

					};



					xmlhttp.open( "GET", "/wp-content/themes/structr/Page_Scripts/updateCalendarDrop.php?k=" + start + "&g=" + end + "&f=" + id, true );

					xmlhttp.send();

					calendar.fullCalendar( 'refetchEvents' );

					alert( "Event Updated" );

				},









				eventClick: function ( event )

				{



					doConfirm( "Was möchten Sie tun?", function yes() {
							// Save it!
                              // alert(event.kursid);

							var dialog1, form,

								dialog1 = $( "#dialog-form1" ).dialog( {


									autoOpen: false,

									height: 800,

									width: wdth,

									modal: true,

                                     top: 0,
									
									left:0,



									open: function () {
                                         
									//	alert(event.klasse);

										var startdate = $.fullCalendar.formatDate( event.start, "YYYY-MM-DD" );

										
										var enddate = $.fullCalendar.formatDate( event.end, "YYYY-MM-DD" );

										var starttime = $.fullCalendar.formatDate( event.start, "HH:mm:ss" );

										var endtime = $.fullCalendar.formatDate( event.end, "HH:mm:ss" );

									//	var id = event.ID;
										
										

										document.getElementById( 'startdate' ).value = startdate;

										document.getElementById( 'enddate' ).value = enddate;

										document.getElementById( 'starttime' ).value = starttime;

										document.getElementById( 'endtime' ).value = endtime;

										document.getElementById( 'title' ).value = event.title;

										document.getElementById( 'zimmer' ).value = event.zimmer;



										document.getElementById( 'kursid' ).value = event.kursid;

										document.getElementById( 'klasse' ).value = event.klasse;

										document.getElementById( 'lehrperson' ).value = event.lehrperson;

									//	document.getElementById( 'farbe' ).value = event.color;

										document.getElementById( 'gewicht' ).value = event.gewichtung;


										if ( window.XMLHttpRequest ) {

											// code for IE7+, Firefox, Chrome, Opera, Safari

											xmlhttp = new XMLHttpRequest();

										} else {

											// code for IE6, IE5

											xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

										}

										xmlhttp.onreadystatechange = function () {

											if ( this.readyState == 4 && this.status == 200 ) {

												document.getElementById( "dialog-form1" ).innerHTML = this.responseText;

											}

										};


										xmlhttp.open( "GET", "/Ajax_Scripts/showschuelernoten.php?f=" + event.klasse + "&e=" + event.gewichtung + "&g=" + event.kursid + "&h=" + startdate + "&i=" + event.title + "&j=" + starttime + "&k=" + enddate + "&l=" + endtime + "&m=" + event.zimmer + "&n=" + event.kursname + "&o=" + event.lehrperson + "&p=" + event.color, true );

										xmlhttp.send();

									},



									/*buttons: {

									    "Speichern": function(){



									        title = $("#title");

									        startCustdate = $("#startdate");

									        endCustdate = $("#enddate");

									        startCusttime = $("#starttime");

									        endCusttime = $("#endtime");

									        allFields = $([]).add(title).add(startCustdate).add(endCustdate).add(startCusttime).add(endCusttime);





									        var valid = true;

									        allFields.removeClass("ui-state-error");



									        $("#users tbody").append("<tr>" +

									            "<td>" + title.val() + "</td>" +

									            "<td>" + startCustdate.val() + "</td>" +

									            "<td>" + endCustdate.val() + "</td>" +

									            "<td>" + startCusttime.val() + "</td>" +

									            "<td>" + endCusttime.val() + "</td>" +

									            "</tr>");





									        if (window.XMLHttpRequest) {

									            // code for IE7+, Firefox, Chrome, Opera, Safari

									            xmlhttp = new XMLHttpRequest();

									        } else {

									            // code for IE6, IE5

									            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

									        }

									        xmlhttp.onreadystatechange = function () {

									            if (this.readyState == 4 && this.status == 200) {

									                document.getElementById("respond").innerHTML = this.responseText;

									            }

									        };





									        xmlhttp.open("GET", "/wp-content/themes/structr/Page_Scripts/updateCalendar.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val()+"&f=" + event.id + "&klasse=" + document.getElementById('klasse').value + "&kursid=" + document.getElementById('kursid').value + "&kursname=" + document.getElementById('kursname').value + "&farbe=" + document.getElementById('farbe').value + "&zimmer=" + document.getElementById('zimmer').value+ "&lehrperson=" + document.getElementById('lehrperson').value, true);

									        xmlhttp.send();



									        dialog.dialog("close");







									        calendar.fullCalendar('refetchEvents');

									    },

									    "Löschen":function(){

									        if(confirm("Are you sure you want to remove it?")) {

									            var id = event.id;

									            if (window.XMLHttpRequest) {

									                // code for IE7+, Firefox, Chrome, Opera, Safari

									                xmlhttp = new XMLHttpRequest();

									            } else {

									                // code for IE6, IE5

									                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

									            }

									            xmlhttp.onreadystatechange = function () {

									                if (this.readyState == 4 && this.status == 200) {

									                    document.getElementById("respond").innerHTML = this.responseText;

									                }

									            };



									            xmlhttp.open("GET", "/wp-content/themes/structr/Page_Scripts/deleteCalendar.php?f=" + id, true);

									            xmlhttp.send();

									            calendar.fullCalendar('refetchEvents');

									            alert("Event Removed");

									        }

									    },

									    Cancel: function () {

									        dialog.dialog("close");

									    },





									},*/

									close: function () {

										calendar.fullCalendar( 'refetchEvents' );

										   dialog1.dialog("close");
										//document.getElementById( "dialog-form1" ).innerHTML = '';
									}

								} );

							form = dialog1.find( "form" ).on( "submit", function ( event ) {

								event.preventDefault();

							} );

							dialog1.dialog( "open" );

						}, function no()

						{
							var dialog, form,

								dialog = $( "#dialog-form" ).dialog( {



									autoOpen: false,

									height: 800,

									width: wdth,

									modal: true,

                                    top:0,
									
									left:0,
									



									open: function () {

										var startdate = $.fullCalendar.formatDate( event.start, "Y-MM-DD" );

										var enddate = $.fullCalendar.formatDate( event.end, "Y-MM-DD" );

										var starttime = $.fullCalendar.formatDate( event.start, "HH:mm:ss" );

										var endtime = $.fullCalendar.formatDate( event.end, "HH:mm:ss" );

										var id = event.ID;




										document.getElementById( 'kursid1' ).value = event.kursid;

										document.getElementById( 'gewicht1' ).value = event.gewichtung;

										document.getElementById( 'startdate1' ).value = startdate;

										document.getElementById( 'enddate1' ).value = enddate;

										document.getElementById( 'starttime1' ).value = starttime;

										document.getElementById( 'endtime1' ).value = endtime;

										document.getElementById( 'title1' ).value = event.title;

										document.getElementById( 'zimmer1' ).value = event.zimmer;



										var text1 = event.lernziele;
										var text1 = event.lernziele;
										text1 = text1.replace( /!^/g, '\r' );
										text1 = text1.replace( /~!/g, '\n' );
										text1 = text1.replace( /§§§/g, '&' );
										text1 = text1.replace( /!!!!!/g, '+' );
										text1 = text1.replace( /\|\|\|\|\|/g, '#' );




										tinymce.get( 'lernziele1' ).setContent( text1 );




										document.getElementById( 'farbehid' ).value = event.color;

										getcolor( event.kursid );




										document.getElementById( 'lehrperson1' ).value = event.lehrperson;



										document.getElementById( 'farbe' ).value = event.color;


									},

									eventColor: event.color,


									buttons: {

										"Speichern": function () {


											if ( document.getElementById( 'startdate1' ).value == "" || document.getElementById( 'enddate1' ).value == "" || document.getElementById( 'starttime1' ).value == "" || document.getElementById( 'endtime1' ).value == "" ) {
												alert( 'bitte Startzeitpunkt und Endzeitpunkt eingeben!!' );
											} else {

												title = $( "#title1" );

												startCustdate = $( "#startdate1" );

												endCustdate = $( "#enddate1" );

												startCusttime = $( "#starttime1" );

												endCusttime = $( "#endtime1" );

												allFields = $( [] ).add( title ).add( startCustdate ).add( endCustdate ).add( startCusttime ).add( endCusttime );





												var valid = true;

												allFields.removeClass( "ui-state-error" );



												$( "#users tbody" ).append( "<tr>" +

													"<td>" + title.val() + "</td>" +

													"<td>" + startCustdate.val() + "</td>" +

													"<td>" + endCustdate.val() + "</td>" +

													"<td>" + startCusttime.val() + "</td>" +

													"<td>" + endCusttime.val() + "</td>" +

													"</tr>" );





												if ( window.XMLHttpRequest ) {

													// code for IE7+, Firefox, Chrome, Opera, Safari

													xmlhttp = new XMLHttpRequest();

												} else {

													// code for IE6, IE5

													xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

												}

												xmlhttp.onreadystatechange = function () {

													if ( this.readyState == 4 && this.status == 200 ) {

														document.getElementById( "respond" ).innerHTML = this.responseText;

													}

												};

												var text = tinyMCE.activeEditor.getContent();
												text = text.replace( /\r/g, '!^' );
												text = text.replace( /\n/g, '~!' );
												text = text.replace( /&/g, '§§§' );
												text = text.replace( /\+/g, '!!!!!' );

												text = text.replace( /#/g, '|||||' );



												xmlhttp.open( "GET", "/wp-content/themes/structr/Page_Scripts/updatePrueftermin.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val() + "&f=" + event.id + "&kursid=" + document.getElementById( 'kursid1' ).value + "&zimmer=" + document.getElementById( 'zimmer1' ).value + "&l=" + document.getElementById( 'lehrperson1' ).value + "&color=" + document.getElementById( 'farbe' ).value.substring( 1, 7 ) + "&gewichtung=" + document.getElementById( 'gewicht1' ).value + "&lernziele=" + text, true );

												xmlhttp.send();
  alert( "Prüfungsdaten gespeichert - Bitte Statusmeldung unten beachten!" );


												dialog.dialog( "close" );






												calendar.fullCalendar( 'refetchEvents' );
											}

											//rl();
										},

										"Löschen": function () {

											if ( confirm( "Are you sure you want to remove it?" ) ) {

												var id = event.id;

												if ( window.XMLHttpRequest ) {

													// code for IE7+, Firefox, Chrome, Opera, Safari

													xmlhttp = new XMLHttpRequest();

												} else {

													// code for IE6, IE5

													xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

												}

												xmlhttp.onreadystatechange = function () {

													if ( this.readyState == 4 && this.status == 200 ) {

														document.getElementById( "respond" ).innerHTML = this.responseText;

													}

												};



												xmlhttp.open( "GET", "/wp-content/themes/structr/Page_Scripts/deletePrueftermin.php?f=" + id, true );

												xmlhttp.send();

												calendar.fullCalendar( 'refetchEvents' );

												alert( "Event Removed" );
												dialog.dialog( "close" );

											}
											
										},

										Cancel: function () {

											dialog.dialog( "close" );

											calendar.fullCalendar( 'refetchEvents' );

										},





									},

									close: function () {

										calendar.fullCalendar( 'refetchEvents' );

									}

								} );

							form = dialog.find( "form" ).on( "submit", function ( event ) {

								event.preventDefault();

							} );

							dialog.dialog( "open" );


						} );

				},

			} );

		}


		function rl() {

			location.reload();
		}


		function pruefungerfassen() {





			var dialog, form,



				// From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29

				tips = $( ".validateTips" );









			dialog = $( "#dialog-form" ).dialog( {



				autoOpen: false,

				height: 800,
               
				width: wdth,

				modal: true,
                 
				top:0,
				left:0,




				open: function () {

					document.getElementById( 'startdate1' ).value = "";

					document.getElementById( 'enddate1' ).value = "";

					document.getElementById( 'starttime1' ).value = "";
					1
					document.getElementById( 'endtime1' ).value = "";

					document.getElementById( 'title1' ).value = "";

					document.getElementById( 'zimmer1' ).value = "";

					document.getElementById( 'lernziele1' ).value = "";

					document.getElementById( 'kursid1' ).value = "";



					document.getElementById( 'lehrperson1' ).value = <?php echo $Name; ?>;
					document.getElementById( 'gewicht1' ).value = "";

					document.getElementById( 'farbe' ).value = "";

				},



				buttons: {

					"Speichern": function () {

						if ( document.getElementById( 'startdate1' ).value == "" || document.getElementById( 'enddate1' ).value == "" || document.getElementById( 'starttime1' ).value == "" || document.getElementById( 'endtime1' ).value == "" ) {
							alert( 'bitte Startzeitpunkt und Endzeitpunkt eingeben!!' );
						} else {



							title = $( "#title1" ),

								startCustdate = $( "#startdate1" ),

								endCustdate = $( "#enddate1" ),

								startCusttime = $( "#starttime1" ),

								endCusttime = $( "#endtime1" ),

								allFields = $( [] ).add( title ).add( startCustdate ).add( endCustdate ).add( startCusttime ).add( endCusttime );





							var valid = true;

							allFields.removeClass( "ui-state-error" );



							$( "#users tbody" ).append( "<tr>" +

								"<td>" + title.val() + "</td>" +

								"<td>" + startCustdate.val() + "</td>" +

								"<td>" + endCustdate.val() + "</td>" +

								"<td>" + startCusttime.val() + "</td>" +

								"<td>" + endCusttime.val() + "</td>" +

								"</tr>" );





							if ( window.XMLHttpRequest ) {

								// code for IE7+, Firefox, Chrome, Opera, Safari

								xmlhttp = new XMLHttpRequest();

							} else {

								// code for IE6, IE5

								xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

							}

							xmlhttp.onreadystatechange = function () {

								if ( this.readyState == 4 && this.status == 200 ) {

									document.getElementById( "respond" ).innerHTML = this.responseText;

								}

							};



							var text = tinyMCE.activeEditor.getContent();
							text = text.replace( /\r/g, '!^' );
							text = text.replace( /\n/g, '~!' );
							text = text.replace( /&/g, '§§§' );
							text = text.replace( /\+/g, '!!!!!' );

							text = text.replace( /#/g, '|||||' );

							xmlhttp.open( "GET", "/wp-content/themes/structr/Page_Scripts/insertPrueftermin.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val() + "&kursid=" + document.getElementById( 'kursid1' ).value + "&color=" + document.getElementById( 'farbe' ).value.substring( 1, 7 ) + "&zimmer=" + document.getElementById( 'zimmer1' ).value + "&l=" + document.getElementById( 'lehrperson1' ).value + "&gewichtung=" + document.getElementById( 'gewicht1' ).value + "&lernziele=" + text, true );

							xmlhttp.send();

                           alert( "Prüfungsdaten erfasst - bitte Statusmeldung beachten!!" );

							dialog.dialog( "close" );




                              


						
							return;
							
							

						}

						
					},



					Cancel: function () {

						dialog.dialog( "close" );

						//	 calendar.fullCalendar('refetchEvents');

						return;
						
						

					},





				},

				close: function () {

					// calendar.fullCalendar('refetchEvents');
					 
                   
					return;

				}

			} );


         



			dialog.dialog( "open" );

	
		};
		
		
		function pruefungedit(data)	{

							var dialog, form,

								dialog = $( "#dialog-form" ).dialog( {



									autoOpen: false,

									height: 800,

									width:wdth,

									modal: true,
									
									top:0,
									
									left: 0,
									
								

                                   



									open: function () {

									/*	var startdate = $.fullCalendar.formatDate( event.start, "Y-MM-DD" );

										var enddate = $.fullCalendar.formatDate( event.end, "Y-MM-DD" );

										var starttime = $.fullCalendar.formatDate( event.start, "HH:mm:ss" );

										var endtime = $.fullCalendar.formatDate( event.end, "HH:mm:ss" );

									*/	var id =data['ID'];
										
										

                                                   
                      

										document.getElementById( 'kursid1' ).value =data['KursID'];

										document.getElementById( 'gewicht1' ).value = data['Gewichtung'];

										document.getElementById( 'startdate1' ).value = data['Start'].substring(0,10);

										document.getElementById( 'enddate1' ).value = data['Ende'].substring(0,10);

										document.getElementById( 'starttime1' ).value = data['Start'].substring(11,16);

										document.getElementById( 'endtime1' ).value = data['Ende'].substring(11,16);

										document.getElementById( 'title1' ).value = data['Pruefungsname'];

										document.getElementById( 'zimmer1' ).value = data['Zimmer'];



										var text1 = data['Lernziele'];
										
										text1 = text1.replace( /!^/g, '\r' );
										text1 = text1.replace( /~!/g, '\n' );
										text1 = text1.replace( /§§§/g, '&' );
										text1 = text1.replace( /!!!!!/g, '+' );
										text1 = text1.replace( /\|\|\|\|\|/g, '#' );




										tinymce.get( 'lernziele1' ).setContent( text1 );




										document.getElementById( 'farbehid' ).value = data['Farbe'];

										getcolor( data['KursID'] );




										document.getElementById( 'lehrperson1' ).value = data['Lehrperson'];



										document.getElementById( 'farbe' ).value =data['Farbe'];


									},

									

									buttons: {

										"Speichern": function () {


											if ( document.getElementById( 'startdate1' ).value == "" || document.getElementById( 'enddate1' ).value == "" || document.getElementById( 'starttime1' ).value == "" || document.getElementById( 'endtime1' ).value == "" ) {
												alert( 'bitte Startzeitpunkt und Endzeitpunkt eingeben!!' );
											} else {

												title = $( "#title1" );

												startCustdate = $( "#startdate1" );

												endCustdate = $( "#enddate1" );

												startCusttime = $( "#starttime1" );

												endCusttime = $( "#endtime1" );

												allFields = $( [] ).add( title ).add( startCustdate ).add( endCustdate ).add( startCusttime ).add( endCusttime );





												var valid = true;

												allFields.removeClass( "ui-state-error" );



												$( "#users tbody" ).append( "<tr>" +

													"<td>" + title.val() + "</td>" +

													"<td>" + startCustdate.val() + "</td>" +

													"<td>" + endCustdate.val() + "</td>" +

													"<td>" + startCusttime.val() + "</td>" +

													"<td>" + endCusttime.val() + "</td>" +

													"</tr>" );





												if ( window.XMLHttpRequest ) {

													// code for IE7+, Firefox, Chrome, Opera, Safari

													xmlhttp = new XMLHttpRequest();

												} else {

													// code for IE6, IE5

													xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

												}

												xmlhttp.onreadystatechange = function () {

													if ( this.readyState == 4 && this.status == 200 ) {

														document.getElementById( "respond" ).innerHTML = this.responseText;

													}

												};

												var text = tinyMCE.activeEditor.getContent();
												text = text.replace( /\r/g, '!^' );
												text = text.replace( /\n/g, '~!' );
												text = text.replace( /&/g, '§§§' );
												text = text.replace( /\+/g, '!!!!!' );

												text = text.replace( /#/g, '|||||' );



												xmlhttp.open( "GET", "/wp-content/themes/structr/Page_Scripts/updatePrueftermin.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val() + "&f=" + data['ID'] + "&kursid=" + document.getElementById( 'kursid1' ).value + "&zimmer=" + document.getElementById( 'zimmer1' ).value + "&l=" + document.getElementById( 'lehrperson1' ).value + "&color=" + document.getElementById( 'farbe' ).value.substring( 1, 7 ) + "&gewichtung=" + document.getElementById( 'gewicht1' ).value + "&lernziele=" + text, true );

												xmlhttp.send();



												dialog.dialog( "close" );

                                                  alert( "Prüfungsdaten gespeichert" );




												
											}

											rl();
										},

										"Löschen": function () {

											if ( confirm( "Are you sure you want to remove it?" ) ) {

												var id = event.id;

												if ( window.XMLHttpRequest ) {

													// code for IE7+, Firefox, Chrome, Opera, Safari

													xmlhttp = new XMLHttpRequest();

												} else {

													// code for IE6, IE5

													xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

												}

												xmlhttp.onreadystatechange = function () {

													if ( this.readyState == 4 && this.status == 200 ) {

														document.getElementById( "respond" ).innerHTML = this.responseText;

													}

												};



												xmlhttp.open( "GET", "/wp-content/themes/structr/Page_Scripts/deletePrueftermin.php?f=" + data['ID'], true );

												xmlhttp.send();

												
												alert( "Event Removed" );
												dialog.dialog( "close" );

											}
											rl();
										},

										Cancel: function () {

											dialog.dialog( "close" );

										

										},





									},

									close: function () {

									

									}

								} );

							
							dialog.dialog( "open" );


						}
	</script>









	<br><br>

	<style>
		body {
			margin: 40px 10px;
			padding: 0;
			font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
			font-size: 14px;
		}
		
		#calendar {
			max-width: 900px;
			margin: 0 auto;
		}

	</style>





	<script>
		function checkKurs( str ) {

			if ( str == "-Select-" ) {

				alert( 'Bitte einen Kurs auswählen' )

				return;

			}

			window.reload.location();
		}



		function addUser() {



			title = $( "#title" ),

				startCustdate = $( "#startdate" ),

				endCustdate = $( "#enddate" ),

				startCusttime = $( "#starttime" ),

				endCusttime = $( "#endtime" ),

				allFields = $( [] ).add( title ).add( startCustdate ).add( endCustdate ).add( startCusttime ).add( endCusttime );





			var valid = true;

			allFields.removeClass( "ui-state-error" );



			$( "#users tbody" ).append( "<tr>" +

				"<td>" + title.val() + "</td>" +

				"<td>" + startCustdate.val() + "</td>" +

				"<td>" + endCustdate.val() + "</td>" +

				"<td>" + startCusttime.val() + "</td>" +

				"<td>" + endCusttime.val() + "</td>" +

				"</tr>" );





			if ( window.XMLHttpRequest ) {

				// code for IE7+, Firefox, Chrome, Opera, Safari

				xmlhttp = new XMLHttpRequest();

			} else {

				// code for IE6, IE5

				xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

			}

			xmlhttp.onreadystatechange = function () {

				if ( this.readyState == 4 && this.status == 200 ) {

					document.getElementById( "respond" ).innerHTML = this.responseText;

				}

			};





			xmlhttp.open( "GET", "/wp-content/themes/structr/Page_Scripts/insertCalendar.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val() + "&klasse=" + document.getElementById( 'klasse' ).value + "&kursid=" + document.getElementById( 'kursid' ).value + "&farbe=" + document.getElementById( 'farbe' ).value + "&zimmer=" + document.getElementById( 'zimmer' ).value + "&lehrperson=" + document.getElementById( 'lehrperson' ).value, true );

			xmlhttp.send();



			dialog.dialog( "close" );





			alert( "Added Successfully" );

		}

		$( function () {

			var dialog, form,



				// From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29



				tips = $( ".validateTips" );





			function addUser() {







				dialog.dialog( "close" );





			}

              

			dialog = $( "#dialog-form" ).dialog( {

				autoOpen: false,

				height: 900,

				width: wdth,

				modal: true,

				buttons: {





				},



			} );









		} );
	</script>



	<script>
		$( function () {



			$( 'input[type=datetime-local]' ).datepicker( {

					dateFormat: 'YYYY-MM-DD HH:mm:ss'

				}

			);



		} );
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {}
			.fc-list-item-title:hover{
  background:lightgrey;
		 cursor: pointer;
}
		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 5; /* Sit on top */
			padding-top: 400px; /* Location of the box */
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
			  width: 85%;
    padding: 25px;
	background: #FFF;
	max-width: 600px;
    margin: 70px auto;
	position: relative;
	border-radius: 8px;
	box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
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
		
		table.timecard {
			margin: auto;
			width: 100%;
			border-collapse: collapse;
			border: 1px solid #fff; /*for older IE*/
			border-style: hidden;
		}
		
		table.timecard caption {
			background-color: #3356FB;
			color: #fff;
			font-size: large;
			font-weight: normal;
			letter-spacing: .3em;
		}
		
		table.timecard thead th {
			padding: 8px;
			background-color: #8DCBFF;
			font-size: large;
		}
		
		table.timecard thead th#thDay {
			width: 40%;
		}
		
		table.timecard thead th#thRegular,
		table.timecard thead th#thOvertime,
		table.timecard thead th#thTotal {
			width: 20%;
		}
		
		table.timecard th,
		table.timecard td {
			padding: 3px;
			border-width: 1px;
			border-style: solid;
			border-color: #3356FB #ccc;
		}
		
		table.timecard td {
			text-align: right;
		}
		
		table.timecard tbody th {
			text-align: left;
			font-weight: normal;
		}
		
		table.timecard tfoot {
			font-weight: bold;
			font-size: large;
			background-color: #687886;
			color: #fff;
		}
		
		table.timecard tr.even {
			background-color: #fde9d9;
		}
		
		input[type=text],
		select {
			width: 200px;
			padding: 0px 0px;
			margin: 0px 0;
			display: inline-block;
			border: epx solid #FFFFFF;
			border-radius: 4px;
		}

	</style>






	<div id="dialog-form1" title="Prüfungsfenster" class="dnone">



		<table class="timecard" border="0">
			<caption>
				Prüfungsdaten
			</caption>
			<tbody>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Prüfungsname:</td>
					<td colspan="2"><input type="text" name="title" id="title" value="<?php echo $_GET['i'];?>" width="400px" readonly>
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Kurs:</td>
					<td colspan="2"><input type="text" name="kursid" id="kursid" value="<?php echo $_GET['g'];?>" class="text ui-widget-content ui-corner-all" readonly>
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Startdatum und Zeit:</td>

					<td><input type="date" name="startdate" id="startdate" value="<?php echo $_GET['h'];?>" class="text ui-widget-content ui-corner-all" readonly>
					</td>
					</td>
					<td><input type="time" name="starttime" id="starttime" value="<?php echo $_GET['j'];?>" class="text ui-widget-content ui-corner-all" readonly>
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Enddatum und Zeit:</td>
					<td><input type="date" name="enddate" id="enddate" value="<?php echo $_GET['k'];?>" class="text ui-widget-content ui-corner-all" readonly>
					</td>
					<td><input type="time" name="endtime" id="endtime" value="<?php echo $_GET['l'];?>" class="text ui-widget-content ui-corner-all" readonly>
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Gewichtung:</td>
					<td><input type="text" name="gewicht" id="gewicht" value="<?php echo $_GET['e'];?>" class="text ui-widget-content ui-corner-all" readonly>
					</td>
					<td style="padding-left: 5px;padding-bottom:3px; font-size: 10px;">Wert 1 entspricht einfacher Gewichtung</td>
				</tr>

			</tbody>
		</table>

		<table class="timecard" border="0">
			<caption>
				Ort und Aufsicht
			</caption>
			<tbody>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Zimmer:</td>
					<td> <input type="text" name="zimmer" id="zimmer" value="<?php echo $_GET['m'];?>" class="text ui-widget-content ui-corner-all" readonly>
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Lehrperson:</td>
					<td><input type="text" name="lehrperson" id="lehrperson" value="<?php echo $_GET['o'];?>" class="text ui-widget-content ui-corner-all" readonly>
					</td>

				</tr>


			</tbody>
		</table>
		<!--
<table class="timecard"  border="0">
  <caption>
    Lernziele
  </caption>
  <tbody>
    <tr>
      <td><input type="textarea" name="lernziele" id="lernziele" value="" class="text ui-widget-content ui-corner-all" ></td>
      
    </tr>

   
  </tbody>
</table>

   
		

        


-->




		<fieldset>



			<input type="hidden" name="gewicht" id="gewicht" value="" class="text ui-widget-content ui-corner-all" readonly>



			<input type="hidden" name="kursid" id="kursid" value="" class="text ui-widget-content ui-corner-all" readonly>





			<input type="text" name="kursname" id="kursname" value="" class="text ui-widget-content ui-corner-all" readonly>




			<input type="hidden" name="klasse" id="klasse" value="" class="text ui-widget-content ui-corner-all" readonly>





			<input type="hidden" name="zimmer" id="zimmer" value="" class="text ui-widget-content ui-corner-all" readonly>





			<input type="hidden" name="lehrperson" id="lehrperson" value="" class="text ui-widget-content ui-corner-all" readonly>

			<br>




			<input type="hidden" name="farbe" id="farbe1" value="" class="text ui-widget-content ui-corner-all" readonly>



		</fieldset>






	</div>


	<div id="dialog-form"  title="Prüfungsdaten">



		<table class="timecard" border="0">
			<caption>
				Prüfungsdaten
			</caption>
			<tbody>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Prüfungsname:</td>
					<td colspan="2"><input type="text" name="title" id="title1" value="<?php echo $_GET['i'];?>" width="400px">
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Kurs:</td>
					<td colspan="2"><select type="text" name="kursid" id="kursid1" value="<?php echo $_GET['g'];?>" onChange="getcolor(this.value)" class="text ui-widget-content ui-corner-all">
	
						
	<?
	/*
	$isEntrylp = "Select Kurs1, Kurs2, Kurs3, Kurs4, Kurs5, Kurs6, Kurs7, Kurs8, Kurs9,Kurs10,Kurs11,Kurs12,Kurs13,Kurs14,Kurs15,Kurs16,Kurs17, Kurs18, Kurs19, Kurs20, Kurs21, Kurs22, Kurs23, Kurs24, Kurs25,Kurs26,Kurs27,Kurs28,Kurs29,Kurs30 From sv_Lehrpersonen Where ID = '$IDLP'";
	$resultlp = mysqli_query( $con, $isEntrylp );


	echo "<option>" . '-Select-' . "</option>";

	while ( $linelp = mysqli_fetch_array( $resultlp ) ) {
		for ( $x = 1; $x <= 16; $x++ ) {

			$valuelp = $linelp[ 'Kurs' . $x ];
			if ( $valuelp <> "" )echo "<option>" . $valuelp . "</option>";

		}
	}*/
						    
    $isEntry= "Select KursID From sv_KurseLehrer Where LP_ID = '$IDLP'";

    $result = mysqli_query($con,$isEntry);





    echo "<option>" . '-Select-' . "</option>";



    while( $line2= mysqli_fetch_array($result))

    {

        

            $value = $line2['KursID'];

            if ($value<>"") echo "<option>" . $value . "</option>";



        

    }


	?>
		  </select>
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Startdatum und Zeit:</td>

					<td><input type="date" name="startdate" id="startdate1" value="<?php echo $_GET['h'];?>" class="text ui-widget-content ui-corner-all">
					</td>
					</td>
					<td><input type="time" name="starttime" id="starttime1" value="<?php echo $_GET['j'];?>" class="text ui-widget-content ui-corner-all">
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Enddatum und Zeit:</td>
					<td><input type="date" name="enddate" id="enddate1" value="<?php echo $_GET['k'];?>" class="text ui-widget-content ui-corner-all">
					</td>
					<td><input type="time" name="endtime" id="endtime1" value="<?php echo $_GET['l'];?>" class="text ui-widget-content ui-corner-all">
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Gewichtung:</td>
					<td><input type="text" name="gewicht" id="gewicht1" value="<?php echo $_GET['e'];?>" class="text ui-widget-content ui-corner-all">
					</td>
					<td style="padding-left: 5px;padding-bottom:3px; font-size: 10px;">Wert 1 entspricht einfacher Gewichtung</td>
				</tr>

			</tbody>
		</table>

		<table class="timecard" border="0">
			<caption>
				Ort und Aufsicht
			</caption>
			<tbody>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Zimmer:</td>
					<td> <input type="text" name="zimmer" id="zimmer1" value="<?php echo $_GET['m'];?>" class="text ui-widget-content ui-corner-all">
					</td>
				</tr>
				<tr>
					<td style="width: 150px; font-size: 12px; font-weight: bold;">Lehrperson:</td>
					<td><input type="text" name="lehrperson" id="lehrperson1" class="text ui-widget-content ui-corner-all" readonly value="<?php echo $Name; ?>">






			</tbody>
		</table>

		<table class="timecard" border="0">
			<caption>
				Lernziele
			</caption>
			<tbody>
				<tr>
					<td><textarea id="lernziele1"></textarea>
					</td>

				</tr>


			</tbody>
		</table>


		<label for="farbe">Farbe:</label>

		<br>
		<div id="farbediv"></div>

		</fieldset>


		</form>

	</div>




	<?php



	include 'db.php';



	$today = date( "Y-m-d" );

	//$delOlder = "Delete  From sv_KurseAll Where Datum < '$today' ";

	//mysqli_query( $con, $delOlder );



	?>

	<input name="myBtn1" id="myBtn1" type="button" value="Mail versenden"/><br><br>

	<div id="myModal1" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			Wenn Sie sich Ihre Termine für den Outlook Kalender zusenden lassen möchten, geben Sie hier Ihre Mailadresse an. Klicken Sie dann "Mail versenden" und es wird eine Mail an die eingegebene Adresse gesendet. Es wird dann eine Datei im Anhang der Mail sein, mit der alle Ihre Termine durch Öffnen der Datei automatisch in den Outlook Kalender eingetragen werden.
			<br>
			<br>Bitte die Mailadresse eingeben: <input name="Mail" type="email" id="Mail"/> <input name="Button1" type="button" value="Mail versenden" onclick="Mail()"/>

			<br><br><br>
			<div id='status'></div>

			<span class="close" id="span1">&times;</span>



		</div>

	</div>

	<div id="confirmBox" class="modal">
		<div class="modal-content">
			<div class="message"></div>
			<button class="yes">Noteneingabe</button>
			<button class="no">Prüfung Editieren</button>

			<span class="close" id="span1">&times;</span>
		</div>
	</div>

	<div id='calendar'></div>

	<div id='respond'></div>

	<div id='lernende'></div>

	<br><br><input name="pruefungerf" id="pruefungserf" type="button" value="Prüfung erfassen" onClick="pruefungerfassen()"/><br>Bitte hier klicken um eine neue Prüfung zu erstellen. <br>

</body>

</html>

<style>
	.dnone {
		display: none;
	}
	
	body {
		font-family: "Dosis", "Helvetica Neue", sans-serif;
		color: #232323;
	}
	
	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>


<script>
	function doConfirm( msg, yesFn, noFn ) {
		var confirmBox = $( "#confirmBox" );
		confirmBox.find( ".message" ).text( msg );
		confirmBox.find( ".yes,.no,.close" ).unbind().click( function () {
			confirmBox.hide();
		} );
		confirmBox.find( ".yes" ).click( yesFn );
		confirmBox.find( ".no" ).click( noFn );
		confirmBox.show();
		
		
		
		
	}

	

	
	// Get the modal

window.onclick = function ( event ) {
		if ( event.target == document.getElementById( "confirmBox"  ) ) {
			document.getElementById( "confirmBox").style.display = "none";
		}
	}
	
	
	document.getElementById( "myBtn" + 1 ).onclick = function () {
			document.getElementById( "myModal" + 1 ).style.display = "block";
		}
		// When the user clicks anywhere outside of the modal, close it
	window.onclick = function ( event ) {
		if ( event.target == document.getElementById( "myModal" + 1 ) ) {
			document.getElementById( "myModal" + 1 ).style.display = "none";
		}
	}

	//When the user clicks on <span> (x), close the modal
	document.getElementById( "span" + 1 ).onclick = function () {
		document.getElementById( "myModal" + 1 ).style.display = "none";
	}

	function Mail() {


		document.getElementById( "status" ).innerHTML = "start sending...";



		if ( window.XMLHttpRequest ) {

			// code for IE7+, Firefox, Chrome, Opera, Safari

			xmlhttp = new XMLHttpRequest();

		} else {

			// code for IE6, IE5

			xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );

		}

		xmlhttp.onreadystatechange = function () {

			if ( this.readyState == 4 && this.status == 200 ) {

				document.getElementById( "status" ).innerHTML = this.responseText;

			}

		};

		xmlhttp.open( "GET", "/wp-content/themes/structr/Page_Scripts/GetPruefterminValuesMail.php?q=" + document.getElementById( 'curruser' ).value + "&m=" + document.getElementById( 'Mail' ).value, true );

		xmlhttp.send();


	}

	function myFunction3( str ) {

		if ( str.value.indexOf( "," ) > 0 ) {
			x = str.value;
			y = x.replace( ",", "." );
			alert( 'Bitte "." statt "," verwenden!' );
			str.value = y;
		}
	}
	

				
	
</script>