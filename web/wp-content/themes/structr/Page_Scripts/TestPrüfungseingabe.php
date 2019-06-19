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





    <link rel='stylesheet' href='https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/fullcalendar/fullcalendar.css' />

    <!--<script src='https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/fullcalendar/lib/jquery.min.js'></script>-->

    <script src='https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/fullcalendar/lib/moment.min.js'></script>

    <script src='https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/fullcalendar/fullcalendar.js'></script>

    <script src='https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/fullcalendar/locale-all.js'></script>

    <?php

    global $current_user;

    get_currentuserinfo();



    ?>

    <script>



        function reload() {

            var x = document.querySelector("#klassedrop").value;

            var y = document.querySelector("#Lehrperson").value;

            window.location.href = "https://schulverwaltungheimtest.ch/deine-termine?&klasse=" + x + "&Lehrperson=" + y;

        }



    </script>

    <input type="hidden" name="curruser" id="curruser" value="<?php echo $current_user->ID ?>" class="text ui-widget-content ui-corner-all" readonly >

    <br>

    <br>

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

        $(document).ready(function() {

            var calendar = $('#calendar').fullCalendar({

                editable:false,

                defaultView:'listMonth',

                header:{

                    left:'prev,next today',

                    center:'title',

                    right:'month,agendaWeek,agendaDay,listMonth'

                },

                navLinks: true, // can click day/week names to navigate views

                editable: false,

                locale: 'de',

                theme:'jquery-ui',

                eventLimit: true, // allow "more" link when too many events

                events:  "https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q="+ document.getElementById('curruser').value,

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

                            document.getElementById('lehrperson').value = "";

                            document.getElementById('farbe').value = "";

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





                                xmlhttp.open("GET", "https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/insertCalendar.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val()+ "&klasse=" + document.getElementById('klasse').value + "&kursid=" + document.getElementById('kursid').value + "&kursname=" + document.getElementById('kursname').value + "&farbe=" + document.getElementById('farbe').value + "&zimmer=" + document.getElementById('zimmer').value+ "&lehrperson=" + document.getElementById('lehrperson').value, true);

                                xmlhttp.send();



                                dialog.dialog("close");







                                calendar.fullCalendar('refetchEvents');

                            },

*/

                            Cancel: function () {

                                dialog.dialog("close");

                            },





                        },

                        close: function () {

                            calendar.fullCalendar('refetchEvents');



                        }

                    });





                   // dialog.dialog("open");



                },













                editable:false,

                eventResize:function(event) {

                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");

                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                    var title = event.title;

                    var id = event.id;

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



                    xmlhttp.open("GET", "https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/updateCalendarDrop.php?k=" + start + "&g=" + end + "&f=" + id, true);

                    xmlhttp.send();

                    calendar.fullCalendar('refetchEvents');

                    alert('Event Update');









                },



                eventDrop:function(event)

                {

                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");

                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                    var title = event.title;

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



                    xmlhttp.open("GET", "https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/updateCalendarDrop.php?k=" + start + "&g=" + end + "&f=" + id, true);

                    xmlhttp.send();

                    calendar.fullCalendar('refetchEvents');

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

                                document.getElementById('kursname').value = event.kursname;

                                document.getElementById('kursid').value = event.kursid;

                                document.getElementById('klasse').value = event.klasse;

                                document.getElementById('lehrperson').value = event.lehrperson;

                                document.getElementById('farbe').value = event.color;

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





                                    xmlhttp.open("GET", "https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/updateCalendar.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val()+"&f=" + event.id + "&klasse=" + document.getElementById('klasse').value + "&kursid=" + document.getElementById('kursid').value + "&kursname=" + document.getElementById('kursname').value + "&farbe=" + document.getElementById('farbe').value + "&zimmer=" + document.getElementById('zimmer').value+ "&lehrperson=" + document.getElementById('lehrperson').value, true);

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



                                        xmlhttp.open("GET", "https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/deleteCalendar.php?f=" + id, true);

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





            xmlhttp.open("GET", "https://schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/insertCalendar.php?q=" + title.val() + "&k=" + startCustdate.val() + "T" + startCusttime.val() + "&g=" + endCustdate.val() + "T" + endCusttime.val()+ "&klasse=" + document.getElementById('klasse').value + "&kursid=" + document.getElementById('kursid').value + "&kursname=" + document.getElementById('kursname').value + "&farbe=" + document.getElementById('farbe').value + "&zimmer=" + document.getElementById('zimmer').value+ "&lehrperson=" + document.getElementById('lehrperson').value, true);

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



                    OK: function() {

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

</head>

<body>

<div id="dialog-form" title="Termin">

    <p class="validateTips">Bitte Felder ausfüllen oder ändern</p>



    <form>
<style type="text/css">
    .auto-style1 {
        background-color: red;
    }
    .auto-style2 {
        color: black;
        background-color: ;
        font-size: large;

    }
</style>
<?php
include 'db.php';
$Klasse= $_GET['k'];
$Kursnme= $_GET['q'];
$heute= $_GET['h'];

if ($Kursnme<>'' && $Kursnme<>"-Select-") {
    $isEntry2 = "Select Stattgefunden,Kommentar From sv_Kurshistorie Where KursID='$Kursnme' and Datum='$heute'";
    $result2 = mysqli_query($con, $isEntry2);
    echo '<br>';
    while ($value3 = mysqli_fetch_array($result2)) {
        $Stattgefunden = $value3['Stattgefunden'];
        $Comment = $value3['Kommentar'];
    }
    if ($Stattgefunden=='ja'){
        echo '<div class="panel panel-default" style="background-color:aliceblue"><div class="panel-body"><strong><span class="auto-style2">Kurs hat stattgefunden:</span></strong>   <input type="checkbox" name="tookplace" value="ja" checked="checked" class="auto-style1" ><br></div></div>';
    }
    else
    {
        echo '<div class="panel panel-default" style="background-color:aliceblue"><div class="panel-body"><strong><span class="auto-style2">Kurs hat stattgefunden:</span></strong>   <input type="checkbox" name="tookplace" value="ja" class="auto-style1" ><br></div></div>';
    }
    echo '<br>';
    echo "Kommentar zur Lektion:";
    echo '<textarea name="Comment">' . $Comment . '</textarea>';


    echo "Um die Abwesenheitsdauer nach Falscheingabe auf 0 zurück zu setzen bitte 99 eingeben";

    echo '<br>';

    $isEntry = "SELECT Name, Vorname, ID,Profil  From sv_Lernende Where Klasse='$Klasse' Order By Name ";
    $result = mysqli_query($con, $isEntry);
    $y = 0;
    while ($value1 = mysqli_fetch_array($result)) {
        $isfilled = 0;
        $Vorname = $value1['Vorname'];
        $Name = $value1['Name'];
        $ID = $value1['ID'];
        $Profil = $value1['Profil'];

        preg_match("/.fz./", $Kursnme, $output_array1);
        $KursnameReg = $output_array1[0];
        preg_match("/e/", $Profil, $output_array2);
        $ProfilReg = $output_array2[0];
        preg_match("/.itplus./", $Kursnme, $output_array3);
        $KursnameReg1 = $output_array3[0];
        preg_match("/it/", $Profil, $output_array4);
        $ProfilReg1 = $output_array4[0];

        if ((($KursnameReg == '.fz.') and ($ProfilReg == 'e')) or (($KursnameReg <> '.fz.') and ($KursnameReg1 <> '.itplus.')) or (($KursnameReg1 == '.itplus.') and ($ProfilReg1 == 'it'))) {
            $isEntry1 = "SELECT SchülerID, Kommentar, Abwesenheitsdauer,Datum From sv_AbwesenheitenKompakt Where Kursname='$Kursnme'  ";

            $result1 = mysqli_query($con, $isEntry1);

            while ($value2 = mysqli_fetch_array($result1)) {

                if (($ID == $value2['SchülerID']) and ($value2['Datum'] == $heute)) {
                    $y++;
                    $z = "Comment" . "$y";
                    $u = "Dauer" . "$y";
                    echo '<br>';
                    echo '<label for=' . $ID . '><b>' . $Vorname . ' ' . $Name . '   </b></label>';
                    echo '<input type="hidden" name=' . $y . ' value=' . $ID . '><br>';
                    echo '<br>';
                    echo 'Abwesenheitsdauer:';
                    echo '<br>';
                    echo '<input name=' . $u . ' type="number" value=' . $value2['Abwesenheitsdauer'] . ' min="0" max="999">';
                    echo '<br>';
                    echo 'Kommentar: ';
                    echo '<br>';

                    echo '<textarea name=' . $z . '>' . $value2['Kommentar'] . '</textarea>';
                    echo '<br>';
                    echo '<hr>';
                    $isfilled = 1;
                }
            }

            if ($isfilled == 0) {
                $y++;
                $z = "Comment" . "$y";
                $u = "Dauer" . "$y";
                echo '<br>';
                echo '<label for=' . $ID . '><b>' . $Vorname . ' ' . $Name . '   </b></label>';
                echo '<input type="hidden" name=' . $y . ' value=' . $ID . '><br>';
                echo '<br>';
                echo 'Abwesenheitsdauer:';
                echo '<br>';
                echo '<input name=' . $u . ' type="number" value="0" min="0" max="999">';
                echo '<br>';
                echo 'Kommentar: ';
                echo '<br>';

                echo '<textarea name=' . $z . ' ></textarea>';
                echo '<br>';
                echo '<hr>';

            }
            echo '<input name="Schueler" id="Schueler" type="hidden" value=' . $y . ' />';
        }
    }
}
mysqli_close($con);

?>



    </form>

</div>



<?php



include 'db.php';



$today=date("Y-m-d");

$delOlder= "Delete  From sv_KurseAll Where Datum < '$today' ";

mysqli_query($con,$delOlder);



?>





<div id='calendar'></div>

<div id='respond'></div>



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



</style>


