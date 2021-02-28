<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 30.11.2018
 * Time: 12:09
 */
include 'db.php';
//$Lehrer=$_GET['lehrer'];
//preg_match("/:(.*)/", $Lehrer, $output_array);
//$Lehrer=$output_array[1];

$y=0;
$Semester=$_GET['q'];
$KlasseInput=$_GET['k'];
$Lehrer=$_GET['l'];

preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];

 $isEntry = "Select * From sv_Settings ";
$result = mysqli_query($con, $isEntry);

    while ($line1 = mysqli_fetch_array($result)) {

        $semDB=$line1['Semesterkuerzel'];

    }

if ($semDB==$Semester){
	$Semester='sv';
}
$KurseTab=$Semester."_Lehrpersonen";
$KurseLehrer=$Semester."_KurseLehrer";
				


    $isEntry = "Select * From $KurseTab order by Nachname  ";
    $result = mysqli_query($con, $isEntry);
    $events = array();
if ($Semester<>""){
	
	$y=0;

    while ($line2 = mysqli_fetch_array($result)) {
		$x=0;
		
		$LP_ID=$line2['ID'];
		 $isEntry1 = "Select * From $KurseLehrer where LP_ID='$LP_ID' ";
    $result1 = mysqli_query($con, $isEntry1);
		unset($Kursarray);
		   while ($line3 = mysqli_fetch_array($result1)) {
		$x++;
			  
			  
			   
			   $Kursarray[]=$line3['KursID']; 
			
           
		   }
		$data[] = array(
			
			 'Vorname' => $line2['Vorname'],
			'Nachname' => $line2['Nachname'],
			'EMAIL' => $line2['EMAIL'],
			'Loginname' => $line2['Loginname']);
		
		for ($a=0;$a<$x;$a++){
			$d=$a+1;
			$Kurs='Kurs'.$d;
			$data[$y][$Kurs]=$Kursarray[$a];
		}
			 
		/*}
		
			'Kurs1' => $Kursarray[0],
		'Kurs2' => $Kursarray[1],
		'Kurs3' => $Kursarray[2],
		'Kurs4' => $Kursarray[3],
		'Kurs5' => $Kursarray[4],
		'Kurs6' => $Kursarray[5],
		'Kurs7' => $Kursarray[6],
		'Kurs8' => $Kursarray[7],
		'Kurs9' => $Kursarray[8],
		'Kurs10' => $Kursarray[9],
		'Kurs11' => $Kursarray[10],
		'Kurs12' => $Kursarray[11],
		'Kurs13' => $Kursarray[12],
		'Kurs14' => $Kursarray[13],
		'Kurs15' => $Kursarray[14],
		'Kurs16' => $Kursarray[15],
		'Kurs17' => $Kursarray[16],
		'Kurs18' => $Kursarray[17],
		'Kurs19' => $Kursarray[18],
		'Kurs20' => $Kursarray[19],
		'Kurs21' => $Kursarray[20],
		'Kurs22' => $Kursarray[21],
		'Kurs23' => $Kursarray[22],
		'Kurs24' => $Kursarray[23],
		'Kurs25' => $Kursarray[24],
		'Kurs26' => $Kursarray[25],
		'Kurs27' => $Kursarray[26],
		'Kurs28' => $Kursarray[27],
		'Kurs29' => $Kursarray[28],
		'Kurs30' => $Kursarray[29]);
		*/
	$y++;
    }
		
}
	

	echo json_encode($data);



