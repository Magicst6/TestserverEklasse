



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">

    google.charts.load('current', {'packages':['corechart']});





    function drawChart() {

        document.getElementById('chart_div').innerHTML = "";

        var client = new XMLHttpRequest();

        client.open('GET', '/Ajax_Scripts/data.json');

        client.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

               myObj = JSON.parse(this.responseText);





            }

        }

        client.send();

        var x;

        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Schueler');



        data.addColumn('number', 'Wert');

             for (x = 0 ; x < 10; x++){

                 data.addRow([myObj[x].Name,x]);

             }







        // Set chart options

        var options = {

            title: 'Population of Largest U.S. Cities',

            chartArea: {width: '50%'},

            hAxis: {

                title: 'Total Population',

                minValue: 0

            },

            vAxis: {

                title: 'City'

            }

        };

        // Instantiate and draw our chart, passing in some options.

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(data, options);

    }

</script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"

            type="text/javascript"></script><script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script type='text/javascript'>

        <!--

        $(document).ready( function () {

        } );

        //-->

    </script>

<?php

include 'db.php';



global $current_user;

get_currentuserinfo();



/*      echo 'Username: ' . $current_user->user_login . "\n";

echo 'User email: ' . $current_user->user_email . "\n";

echo 'User level: ' . $current_user->user_level . "\n";

echo 'User first name: ' . $current_user->user_firstname . "\n";

echo 'User last name: ' . $current_user->user_lastname . "\n";

echo 'User display name: ' . $current_user->display_name . "\n";

echo 'User ID: ' . $current_user->ID . "\n";



*/

if ($_GET['date']==''){

$heute=date("Y-m-d");



}

else {$heute=$_GET['date'];}



?>











    Lehrperson:





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

    echo '<input name="lehrer" id="lehrer" type="text" value="'.$Vorname .' '.$Name .' ID:'. $value .'" readonly />' ;

    $Lehrer=$value;

    }



    ?>





    <input name="Klassenname" type="hidden" value='<?php echo $_GET['lehrer'];?>' />

    <button onclick="drawChart()">Chart</button>

     <button onclick="myFunction()">Test</button>

    <script type='text/javascript'>

         function showTable () {

            $('#table_id').DataTable();

        }

        //-->

    </script>

    <script type='text/javascript'>

        function myFunction1() {

            var x = document.querySelector("#Kursname").value;

            var y = document.querySelector("#lehrer").value;





            window.location.href = "meine-lernenden?&Kursname=" + x + "&lehrer=" + y;

        }

        function getKursname(str){

            location.reload;

            if (str == "") {

                document.getElementById("Kursname").innerHTML = "";

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

                        document.getElementById("Kursname").innerHTML = this.responseText;

                    }

                };

                xmlhttp.open("GET","/Ajax_Scripts/getKursnameMeineLernenden.php?q="+str,true);

                xmlhttp.send();

            }

        }

        function test(str){

            if (str == "") {

                document.getElementById("lernende").innerHTML = "";

                return;

            } else {

                if (window.XMLHttpRequest) {

                    // code for IE7+, Firefox, Chrome, Opera, Safari

                    xmlhttp = new XMLHttpRequest();

                } else {

                    // code for IE6, IE5

                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

                }

                xmlhttp.onreadystatechange = function () {

                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("lernende").innerHTML = this.responseText;

                    }

                };

                xmlhttp.open("GET", "/Ajax_Scripts/showTableMeineLernenden.php?q=" + str, true);

                xmlhttp.send();

                document.getElementById('chart_div').innerHTML = "";

                for (var i = 1; i <= 80; i++) {

                    window.setTimeout(showTable,i*20);

                    window.setTimeout(drawChart,i*20);

                }



            }

        }

        //-->

    </script>







    Kursname:

    <select name="Kursname" onchange="test(this.value)"   id="Kursname" required="required"  >



        <?php

        //$Lehrer=$_GET['lehrer'];

        //preg_match("/:(.*)/", $Lehrer, $output_array);

        //$Lehrer=$output_array[1];



        $y=0;







       
    $isEntry= "Select KursID From sv_KurseLehrer Where LP_ID = $Lehrer";

    $result = mysqli_query($con,$isEntry);





    echo "<option>" . '-Select-' . "</option>";



    while( $line2= mysqli_fetch_array($result))

    {

        

            $value = $line2['KursID'];

            if ($value<>"") echo "<option>" . $value . "</option>";



        

    }

        ?>





    </select>









    <div id="lernende" onmouseover="showTable()"><b></b></div>





<div id="chart_div" style="width:400px; height:300px"></div>



<div id="demo" style="width:400px; height:300px"></div>



</form>



&nbsp;

&nbsp;















