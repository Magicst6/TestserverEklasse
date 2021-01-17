<head>




		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	 <script type = "text/javascript">
         google.charts.load('current', {packages: ['table']});     
      </script>
</head>

<?
include 'db.php';
 
	

    global $current_user;

    get_currentuserinfo();



   

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
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
	  
	  ['Lehrer', 'Lektionen'],

  <?  
      
       $select='Select KursID, Sum(Lektionen) As Lektionen1 from sv_Kurshistorie where KursID in (Select KursID from sv_Kurse where Lehrperson="';
 $sel1=$value;
		
$sel2= '") and Stattgefunden="ja" Group by KursID';
 $isEntryUpd1 = $select.$sel1.$sel2;
$result2=	mysqli_query( $con, $isEntryUpd1 );	
while( $line3= mysqli_fetch_array($result2))

    {



 echo "['".$line3[KursID]."',".$line3[Lektionen1]." ],";
			
  }
  ?>
]);
		
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Ihre gehaltenen Lektionen', 'width':"90%", 'height':"500",is3D:true,};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('PieChart'));
  chart.draw(data, options);
}
</script>	

	<div id="PieChart"></div>



