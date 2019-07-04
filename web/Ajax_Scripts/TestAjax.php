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
$ID='112';
$Lehrer=$_GET['l'];

preg_match("/:(.*)/", $Lehrer, $output_array);
$Lehrer=$output_array[1];




				


    $isEntry = "Select * From sv_AbwesenheitenKompakt where SchülerID=$ID  ";
    $result = mysqli_query($con, $isEntry);
    $events = array();

	
	

    while ($line2 = mysqli_fetch_array($result)) {
		$Kursname =$line2['Kursname'];
		
		
		 $isEntry3 = "Select * From sv_AbwesenheitenGesamt where SchülerID=$ID and KursID ='$Kursname' ";
    $result3 = mysqli_query($con, $isEntry3);
        while ($line3 = mysqli_fetch_array($result3)) {
		if($line3['Abwesenheit']<>0){
		$data1 =  array(
			 'AbwesenheitenGesamt' => $line3['Abwesenheit']);
			$abwges=$line3['Abwesenheit'];
			
		}
		}

	
		 $isEntry1 = "Select * From sv_AbwesenheitenKompakt where SchülerID=$ID and Kursname ='$Kursname' ";
    $result1 = mysqli_query($con, $isEntry1);
       
		$y=0;

    while ($line1 = mysqli_fetch_array($result1)) {
		
		${'datac'.$y} =  array(
			 'Klasse'.$y => $line1['Klasse'],
			'Kursname'.$y => $line1['Kursname'],
			'Datum'.$y => $line1['Datum'],
			'Kommentar'.$y => $line1['Kommentar'],
			'KommentVer'.$y => $line1['KommentarVerwaltung'],
			'Abwesenheitsdauer'.$y => $line1['Abwesenheitsdauer'],
			'Lehrer'.$y => $line1['Lehrer']);
       
		if ($y==0){
			$data2=${'datac'.$y};
		}
		else{
		
		 $data2=array_merge($data2,${'datac'.$y});
		}
		$y++;
	
    }
		$data3 =  array(
			 'Rows' => $y);
		$data1 = array(
			 'Kursname' => $Kursname,
	         'AbwesenheitenGesamt' => $abwges);

            $datages[]=array_merge($data1,$data2,$data3);
       
	}
 



	echo json_encode($datages);



