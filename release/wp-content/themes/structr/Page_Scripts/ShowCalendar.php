<!DOCTYPE html>

<html>

<head>

    <meta charset='utf-8' />





    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>jQuery UI Dialog - Default functionality</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--<link rel="stylesheet" href="/resources/demos/style.css">-->

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>







    <!--<script src='/wp-content/themes/structr/Page_Scripts/fullcalendar/lib/jquery.min.js'></script>-->

    <script src='/wp-content/themes/structr/Page_Scripts/fullcalendar/lib/moment.min.js'></script>

    <script src='/wp-content/themes/structr/Page_Scripts/fullcalendar/fullcalendar.js'></script>

    <script src='/wp-content/themes/structr/Page_Scripts/fullcalendar/locale-all.js'></script>

    <link rel='stylesheet' href='/wp-content/themes/structr/Page_Scripts/fullcalendar/fullcalendar.css' />

    <?php

    global $current_user;

    get_currentuserinfo();

    

    ?>
<input id="kidhidden" type="hidden">
	
	<input id="farbehid" type="hidden">
    
	
    <script>

		function alertcol(){
			
			alert(document.getElementById('test').value);
		}


            function reload() {

                var x = document.querySelector("#klassedrop").value;

                var y = document.querySelector("#Lehrpersondrop").value;

                window.location.href = "/terminkalender?&klasse=" + x + "&Lehrpersondr=" + y;

            }

function getKursname(str){
if (str == "") {
       
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
                document.getElementById("kursid").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","/Ajax_Scripts/getKursnamewthoutselect.php?q="+str,true);
        xmlhttp.send();
       
    }
}
		function getKursnamepre(str){
if (str == "") {
       
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
                document.getElementById("kursid").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","/Ajax_Scripts/getKursnamewthoutselect.php?q="+str+ "&k="+ document.getElementById('kidhidden').value,true);
        xmlhttp.send();
       
    }
}
function getcolor(str1){
		
		
	 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("farbediv").innerHTML = this.responseText ;
            }
        };
        xmlhttp.open("GET","/Ajax_Scripts/getcolorAK.php?q="+str1+"&c="+document.getElementById('farbehid').value.substring(1,7),true);
        xmlhttp.send();
		
	}

    </script>

    <input type="hidden" name="curruser" id="curruser" value="<?php echo $current_user->ID ?>" class="text ui-widget-content ui-corner-all" readonly >

   

   
   <table  id="tab1 "width="1300" >
  <tbody>
    <tr>
      <td><strong>Klasse</strong></td>
      <td><strong>Lehrperson</strong></td>
    </tr>
    <tr>
      <td><select name="klassedrop" id="klassedrop" onchange="reload()" >



        <?php



        include 'db.php';







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



        ?>



    </select>
</td>
      <td> <select name="Lehrpersondrop"  id="Lehrpersondrop" onchange="reload()"   >



        <?php

        $isEntry= "Select * From sv_Lehrpersonen Order By Nachname ASC";

        $result = mysqli_query($con, $isEntry);



        echo "<option>".$_GET['Lehrpersondr']."</option>";

        echo "<option></option>";

        while( $line2= mysqli_fetch_array($result))

        {

            $ID = $line2['ID'];

            $Name = $line2['Nachname'];

            $Vorname = $line2['Vorname'];





            echo "<option>" . $Name.' '. $Vorname .' ID:'. $ID. "</option>";

        }

        ?>





    </select>
</td>
    </tr>
  </tbody>
</table>
    <script>

        $(document).ready(function() {



            var calendar = $('#calendar').fullCalendar({



                editable:true,

                defaultView:'listMonth',

                header:{

                    left:'prev,next today',

                    center:'title',

                    right:'month,agendaWeek,agendaDay,listMonth'

                },

                theme:'jquery-ui',

                navLinks: true, // can click day/week names to navigate views

                editable: true,
				
				 zIndex:999,

                locale: 'de',

                eventLimit: true, // allow "more" link when too many events

                events:  "/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000"+  "&k="+ document.getElementById('klassedrop').value + "&l="+ document.getElementById('Lehrpersondrop').value,

                eventTextColor: 'black',

                selectable:true,

                selectHelper:true,

                select: function(startev, endev, allDay) {





                    var dialog, form,



                        // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29

                        tips = $(".validateTips");



                    startevdate = $.fullCalendar.formatDate(startev, "YYYY-MM-DD");

                    endevdate = $.fullCalendar.formatDate(endev, "YYYY-MM-DD");

                    startevtime = $.fullCalendar.formatDate(startev, "HH:mm:ss");

                    endevtime = $.fullCalendar.formatDate(endev, "HH:mm:ss");

                    startdatepicker = startevdate;

                    enddatepicker = endevdate;

                    starttimepicker = startevtime;

                    endtimepicker = endevtime;











                        dialog = $("#dialog-form").dialog({



                            autoOpen: false,

                            height: 800,

                            width: 300,

                            modal: true,





                            open: function () {

                                document.getElementById('startdate').value = startdatepicker;

                                document.getElementById('enddate').value = enddatepicker;

                                document.getElementById('starttime').value = starttimepicker;

                                document.getElementById('endtime').value = endtimepicker;

                                document.getElementById('title').value = "";

                                document.getElementById('zimmer').value = "";

                                document.getElementById('kursname').value = "";

                                document.getElementById('kursid').value = "";

                                document.getElementById('klasse').value = "";

                                document.getElementById('lehrpers').value = "";

                                document.getElementById('farbe').value = "";
								
								document.getElementById('kursidinp').value = "";

                            },



                            buttons: {

                                "Speichern":function()  {



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





                                    xmlhttp.open("GET", "/wp-content/themes/structr/Page_Scripts/insertCalendar.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val()+ "&klasse=" + document.getElementById('klasse').value + "&kursid=" + document.getElementById('kursid').value + "&kursname=" + document.getElementById('kursname').value + "&farbe=" + document.getElementById('farbe').value.substring(1,7) + "&zimmer=" + document.getElementById('zimmer').value + "&l=" + document.getElementById('lehrpers').value +"&kursidinp=" + document.getElementById('kursidinp').value, true);

                                    xmlhttp.send();



                                    dialog.dialog("close");



                                    



                                    calendar.fullCalendar('refetchEvents');

                                },



                                Cancel: function () {

                                    dialog.dialog("close");
									 calendar.fullCalendar('refetchEvents');

                                },





                            },

                            close: function () {

                                calendar.fullCalendar('refetchEvents');



                            }

                        });





                        dialog.dialog("open");



                    },













                editable:true,

                eventResize:function(event) {

                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");

                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                    var title = event.title;

                    var id = event.id;
					
					var klasse =event.klasse;

                    var color = event.color;

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



                    xmlhttp.open("GET", "/wp-content/themes/structr/Page_Scripts/updateCalendarDrop.php?k=" + start + "&g=" + end + "&f=" + id + "&c=" + klasse, true);

                    xmlhttp.send();

                    
                    alert('Event Update');







                    

                },



                eventDrop:function(event)

                {

                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");

                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                    var title = event.title;

                    var id = event.id;


					var klasse =event.klasse;

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



                    xmlhttp.open("GET", "/wp-content/themes/structr/Page_Scripts/updateCalendarDrop.php?k=" + start + "&g=" + end + "&f=" + id +"&c=" + klasse, true);

                    xmlhttp.send();

                  

                    alert("Event Updated");

                    },



                    

                



                eventClick:function(event)

                {

                   var dialog,form,

                    dialog = $("#dialog-form").dialog({



                        autoOpen: false,

                        height: 800,

                        width: 300,

                        modal: true,





                        open: function () {

                            var startdate = $.fullCalendar.formatDate(event.start, "Y-MM-DD");

                            var enddate = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                            var starttime = $.fullCalendar.formatDate(event.start, "HH:mm:ss");

                            var endtime = $.fullCalendar.formatDate(event.end, "HH:mm:ss");

                            var id= event.ID;

                            document.getElementById('startdate').value = startdate;

                            document.getElementById('enddate').value = enddate;

                            document.getElementById('starttime').value = starttime;

                            document.getElementById('endtime').value = endtime;

                            document.getElementById('title').value = event.title;

                            document.getElementById('zimmer').value = event.zimmer;
							document.getElementById('kidhidden').value=event.kursid;

                            
							getKursnamepre(event.klasse);
							
							 document.getElementById('farbehid').value = event.color;
							
							getcolor(event.kursid);
                           
							document.getElementById('kursname').value = event.kursname;

                            document.getElementById('kursid').value = event.kursid;
							
							 document.getElementById('kursidinp').value = "";

                            document.getElementById('klasse').value = event.klasse;

                            document.getElementById('lehrpers').value = event.lehrperson;

                            document.getElementById('farbe').value = event.color;
                        },



                        buttons: {

                            "Speichern": function(){

           var farbe= document.getElementById('farbe').value.substring(1,7);

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





                                xmlhttp.open("GET", "/wp-content/themes/structr/Page_Scripts/updateCalendar.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val()+  "&f=" + event.id  + "&kursid=" + document.getElementById('kursid').value + "&kursname=" + document.getElementById('kursname').value  + "&zimmer=" + document.getElementById('zimmer').value + "&l=" + document.getElementById('lehrpers').value + "&klasse=" + document.getElementById('klasse').value + "&farbe=" + farbe +"&kursidinp=" + document.getElementById('kursidinp').value, true);

                                xmlhttp.send();



                                dialog.dialog("close");







                                calendar.fullCalendar('refetchEvents');

                            },

                             "Löschen":function(){

                                if(confirm("Are you sure you want to remove it?")) {

                                     var id = event.id;

									var klasse = event.klasse;
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



                                     xmlhttp.open("GET", "/wp-content/themes/structr/Page_Scripts/deleteCalendar.php?f=" + id + "&c" + klasse, true);

                                     xmlhttp.send();

                                     calendar.fullCalendar('refetchEvents');

                                     alert("Event Removed");

                                 }

                             },

                            Cancel: function () {

                                dialog.dialog("close");
								 calendar.fullCalendar('refetchEvents');

                            },





                        },

                        close: function () {

                            calendar.fullCalendar('refetchEvents');

                        }

                    });

                    form = dialog.find("form").on("submit", function (event) {

                        event.preventDefault();

                    });

                    dialog.dialog("open");

            },

                    });

                });

    </script>









    <br><br>

    <style>



        body {

            margin: 40px 10px;

            padding: 0;

            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;

            font-size: 14px;

        }



        #calendar {

            max-width: 900px;

            margin: 0 auto;

        }



    </style>





    <script>





        function addUser() {



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





            xmlhttp.open("GET", "/wp-content/themes/structr/Page_Scripts/insertCalendar.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val()+ "&klasse=" + document.getElementById('klasse').value + "&kursid=" + document.getElementById('kursid').value + "&kursname=" + document.getElementById('kursname').value + "&farbe=" + document.getElementById('farbe').value.substring(1,7) + "&zimmer=" + document.getElementById('zimmer').value+ "&l=" + document.getElementById('lehrpers').value +"&kursidinp=" + document.getElementById('kursidinp').value, true);

            xmlhttp.send();



            dialog.dialog("close");





            alert("Added Successfully");

        }

        $( function() {

            var dialog, form,



                // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29



                tips = $( ".validateTips" );





            function addUser() {







                    dialog.dialog( "close" );





            }



            dialog = $( "#dialog-form" ).dialog({

                autoOpen: false,

                height: 800,

                width: 300,

                modal: true,

                buttons: {

                    "Titel in Kalender Eintagen": addUser,

                    Cancel: function() {

                        dialog.dialog( "close" );

                    }

                },



            });









        } );



    </script>



    <script>

        $(function(){



                $('input[type=datetime-local]').datepicker({

                        dateFormat : 'YYYY-MM-DD HH:mm:ss'

                    }

                );



        });

    </script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
			.fc-list-item-title:hover{
  background:lightgrey;
		 cursor: pointer;
}
        body {}

        /* The Modal (background) */
        .modal{
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

    </style>
</head>

<body>

<div id="dialog-form" title="Termin">

    <p class="validateTips">Bitte Felder ausfüllen oder ändern</p>



    <form>

       <fieldset>

            <label for="Title">Titel:</label>

            <br>

            <input type="text" name="title" id="title" value="" width="400px" readonly>

            <br>

            <label for="start">Startdatum und Zeit:</label>

            <br>

            <input type="date" name="startdate" id="startdate" value=""  class="text ui-widget-content ui-corner-all" required="required">

            <input type="time" name="starttime" id="starttime" value=""  class="text ui-widget-content ui-corner-all" required="required">

            <br>

            <label for="end">Enddatum und Zeit:</label>

            <br>

            <input type="date" name="enddate" id="enddate" value="" class="text ui-widget-content ui-corner-all" required="required">

            <input type="time" name="endtime" id="endtime" value="" class="text ui-widget-content ui-corner-all"required="required" >

            

           
            <br>

            <label for="kursname">Kursname:</label>

            <br>

            <input type="text" name="kursname" id="kursname" value="" class="text ui-widget-content ui-corner-all" >

            <br>

            <label for="klasse">Klasse:</label>

            <br>

           <select name="klasse" id="klasse" onchange="getKursname(this.value)"   required="required">



        <?php



        include 'db.php';







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



        ?>
																		</select>


            <br>
																			     <br>

            <label for="kursid">KursID:</label>

            <br>

             <select name="kursid" id="kursid" onChange="getcolor(this.value)" >
			

																		</select>
		   
		   <input name="kursidinp" id="kursidinp" value="" type="hidden" class="text ui-widget-content ui-corner-all" >
			

																		
<br><br>

            <label for="zimmer">Zimmer:</label>

            <br>

            <input type="text" name="zimmer" id="zimmer" value="" class="text ui-widget-content ui-corner-all" >

            <br>

            <label for="lehrpers">Lehrperson:</label>

            <br>

              <select name="lehrpers"  id="lehrpers"    >



        <?php

        $isEntry= "Select * From sv_Lehrpersonen Order By Nachname ASC";

        $result = mysqli_query($con, $isEntry);



        echo "<option>".$_GET['Lehrpersondr']."</option>";

        echo "<option></option>";

        while( $line2= mysqli_fetch_array($result))

        {

            $ID = $line2['ID'];

            $Name = $line2['Nachname'];

            $Vorname = $line2['Vorname'];





            echo "<option>".$Name."</option>";

        }

        ?>





    </select>


            <br>

            <label for="farbe">Farbe:</label>

            <br>
            <div id="farbediv"></div>

            <!-- Allow form submission with keyboard without duplicating the dialog button -->

            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">



        </fieldset>

       

    </form>

</div>
	
<input name="myBtn2 id="myBtn2" type="button" value="Heutige Kurstermine als Terminboard anzeigen" onclick="window.location.href='https://wios.eklasse.ch/wp-content/themes/structr/Page_Scripts/Terminboard.php'" />
<br><br>

<input name="myBtn1" id="myBtn1" type="button" value="Mail versenden"  />
<br><br>
<div id="myModal1" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
       Wenn Sie sich Ihre Termine für den Outlook Kalender zusenden lassen möchten, geben Sie hier Ihre Mailadresse an. Klicken Sie dann "Mail versenden" und es wird eine Mail an die eingegebene Adresse gesendet. Es wird dann eine Datei im Anhang der Mail sein, mit der alle Ihre Termine durch Öffnen der Datei automatisch in den Outlook Kalender eingetragen werden.
<br>
<br>Bitte die Mailadresse eingeben:   <input name="Mail" type="email" id="Mail" />    <input name="Button1" type="button" value="Mail versenden" onclick="Mail()" />

<br><br><br>
<div id='status'></div>

        <span class="close" id="span1">&times;</span>


       
    </div>

</div>



<div id='calendar'></div>

<div id='respond'></div>

<div id='lernende'></div>

</body>

</html>

<style>

    body {

        font-family:"Dosis", "Helvetica Neue", sans-serif;

        color:#232323;

    }



    #calendar {

        max-width: 900px;

        margin: 0 auto;

    }
table td{
border:none;
}
table {
border:none;
}



</style>

<script>
											 
											    // Get the modal
       

		document.getElementById("myBtn"+1).onclick = function() {
			document.getElementById("myModal"+1).style.display = "block"; 
		}
   // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal"+1)) {
         document.getElementById("myModal"+1).style.display = "none";
        }
    }
	
	 //When the user clicks on <span> (x), close the modal
     document.getElementById("span"+1).onclick = function() {
       document.getElementById("myModal"+1).style.display = "none";
    }
		  
  
    function Mail(){


            document.getElementById("status").innerHTML = "start sending...";



        if (window.XMLHttpRequest) {

            // code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        } else {

            // code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                 document.getElementById("status").innerHTML = this.responseText;

            }

        };

        xmlhttp.open("GET","/wp-content/themes/structr/Page_Scripts/GetCalendarValuesMail.php?q=1000000" + "&k="+ document.getElementById('klassedrop').value + "&l="+ document.getElementById('Lehrpersondrop').value + "&m="+ document.getElementById('Mail').value,true);

        xmlhttp.send();


    }


</script>

