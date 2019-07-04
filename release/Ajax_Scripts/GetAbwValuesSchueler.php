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
$Kursname=$_GET['q'];
$ID='269';
$Lehrer=$_GET['l'];

preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];




				


    $isEntry = "Select * From sv_Abwesenheitenkompakt where SchülerID=$ID Group by Kursname ";
    $result = mysqli_query($con, $isEntry);
    $events = array();

	
	

    while ($line2 = mysqli_fetch_array($result)) {
		$Kursname =$line2['KursID'];
		$data[] = array(
			 'Kursname' => $line2['KursID']);
		
		 $isEntry3 = "Select * From sv_AbwesenheitenGesamt where SchülerID=$ID and KursID ='$Kursname' ";
    $result3 = mysqli_query($con, $isEntry3);
        while ($line3 = mysqli_fetch_array($result3)) {
		
		$data[] = $data[]+ array(
			 'AbwesenheitenGesamt' => $line3['Abwesenheit']);
		}

	
		 $isEntry1 = "Select * From sv_Abwesenheitenkompakt where SchülerID=$ID and Kursname ='$Kursname' ";
    $result1 = mysqli_query($con, $isEntry1);
       
		

    while ($line1 = mysqli_fetch_array($result1)) {
		
		$data[] = $data[] + array(
			 'Datum'.$y => $line1['Datum']);
        $y++;
	
    }
		$data[] = $data[] + array(
			 'Rows' => $y);
       
	}
	

	echo json_encode($data);



