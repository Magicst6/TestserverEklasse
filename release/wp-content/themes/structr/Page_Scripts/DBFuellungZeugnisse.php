<?
require __DIR__.'/vendor/autoload.php';

include 'db.php';

if( $_POST['Senden'])
{
	
	
  
	$Geburtsort=$_POST['Geburtsort'];
			$Geburtstag=$_POST['Geburtstag'];
			$Vorname=$_POST['Vorname'];
			$Nachname=$_POST['Nachname'];
			$Verhalten=$_POST['Verhalten'];
			$Mitarbeit=$_POST['Mitarbeit'];
			$Klassenziel=$_POST['Klassenziel'];
			$Bemerkung=$_POST['Bemerkung'];
			$Datum=$_POST['Datum'];
			$Kurs1=$_POST['Fach1'];
			$Note1=$_POST['Note1'];
			$Kurs2=$_POST['Fach2'];
			$Note2=$_POST['Note2'];
			$Kurs3=$_POST['Fach3'];
			$Note3=$_POST['Note3'];
			$Kurs4=$_POST['Fach4'];
			$Note4=$_POST['Note4'];
			$Kurs5=$_POST['Fach5'];
			$Note5=$_POST['Note5'];
			$Kurs6=$_POST['Fach6'];
			$Note6=$_POST['Note6'];
			$Kurs7=$_POST['Fach7'];
			$Note7=$_POST['Note7'];
			$Kurs8=$_POST['Fach8'];
			$Note8=$_POST['Note8'];
			$Kurs9=$_POST['Fach9'];
			$Note9=$_POST['Note9'];
			$Kurs10=$_POST['Fach10'];
			$Note10=$_POST['Note10'];
			$Kurs11=$_POST['Fach11'];
			$Note11=$_POST['Note11'];
			$Kurs12=$_POST['Fach12'];
			$Note12=$_POST['Note12'];
	$Zwischenzeugnis=$_POST['Zwischenzeugnis'];
	$SchuelerID=$_POST['SchuelerID'];
	$Klasse=$_POST['Klasse'];
			
		
	
	$iszwischenzgnis=false;
$isEntry4= "Select * From sv_Zeugnisse where SchuelerID='$SchuelerID' and Zwischenzeugnis='$Zwischenzeugnis'  ";

        $result4 = mysqli_query($con, $isEntry4);


        while( $line6= mysqli_fetch_array($result4))

        {
		$iszwischenzgnis=true;
		}
	if ($iszwischenzgnis) 
	{
		
		$sql_befehl1="Delete From sv_Zeugnisse where Zwischenzeugnis='$Zwischenzeugnis' and SchuelerID='$SchuelerID'";	
	
	 mysqli_query($con, $sql_befehl1);
		
	}
	
	$isEntry5= "Select * From sv_Settings ";

        $result5 = mysqli_query($con, $isEntry5);


        while( $line7= mysqli_fetch_array($result5))

        {
		$Schuljahr=$line7['Semesterkuerzel'];
		$Schulort=$line7['Schulort'];
		$Schulname=$line7['Schulname'];
		}
			 
$sql_befehl="Insert Into sv_Zeugnisse (Vorname,Nachname,Geburtstag,Geburtsort,Verhalten,Mitarbeit,Klassenziel,Bemerkung,Datum,Zwischenzeugnis,SchuelerID,Klasse,Schuljahr,Schulname,Schulort,Fach1,Note1,Fach2,Note2,Fach3,Note3,Fach4,Note4,Fach5,Note5,Fach6,Note6,Fach7,Note7,Fach8,Note8,Fach9,Note9,Fach10,Note10,Fach11,Note11,Fach12,Note12) VALUES  ('$Vorname','$Nachname','$Geburtstag','$Geburtsort','$Verhalten','$Mitarbeit','$Klassenziel','$Bemerkung','$Datum','$Zwischenzeugnis','$SchuelerID','$Klasse','$Schuljahr','$Schulname','$Schulort','$Kurs1','$Note1','$Kurs2','$Note2','$Kurs3','$Note3','$Kurs4','$Note4','$Kurs5','$Note5','$Kurs6','$Note6','$Kurs7','$Note7','$Kurs8','$Note8','$Kurs9','$Note9','$Kurs10','$Note10','$Kurs11','$Note11','$Kurs12','$Note12')";	
	
	 mysqli_query($con, $sql_befehl);
 
	//echo $sql_befehl;
	
	}
		

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('ZeugnisTemplate.docx');
 
$templateProcessor->setValue('klasse', $Klasse);
$templateProcessor->setValue('Schuljahr', $Schuljahr);
$templateProcessor->setValue('Vorname', $Vorname);
$templateProcessor->setValue('Nachname', $Nachname);
$templateProcessor->setValue('Geburtsdatum', $Geburtstag);
$templateProcessor->setValue('Geburtsort', $Geburtsort);
$templateProcessor->setValue('Verhalten', $Verhalten);
$templateProcessor->setValue('Mitarbeit', $Mitarbeit);
$templateProcessor->setValue('Klassenziel', $Klassenziel);
$templateProcessor->setValue('Bemerkung', $Bemerkung );
$templateProcessor->setValue('Datum', $Datum);
$templateProcessor->setValue('Zusatzfeld1', $Zusatzfeld1);
$templateProcessor->setValue('Zusatzfeld2', $Zusatzfeld2);
$templateProcessor->setValue('Zusatzeintrag1', $Zusatzeintrag1);
$templateProcessor->setValue('Zusatzeintrag2', $Zusatzeintrag2);
$templateProcessor->setValue('Fach1', $Kurs1);
$templateProcessor->setValue('Note1', $Note1);
$templateProcessor->setValue('Fach2', $Kurs2);
$templateProcessor->setValue('Note2', $Note2);
$templateProcessor->setValue('Fach3', $Kurs3);
$templateProcessor->setValue('Note3', $Note3);
$templateProcessor->setValue('Fach4', $Kurs4);
$templateProcessor->setValue('Note4', $Note4);
$templateProcessor->setValue('Fach5', $Kurs5);
$templateProcessor->setValue('Note5', $Note5);
$templateProcessor->setValue('Fach6', $Kurs6);
$templateProcessor->setValue('Note6', $Note6);
$templateProcessor->setValue('Fach7', $Kurs7);
$templateProcessor->setValue('Note7', $Note7);
$templateProcessor->setValue('Fach8', $Kurs8);
$templateProcessor->setValue('Note8', $Note8);
$templateProcessor->setValue('Fach9', $Kurs9);
$templateProcessor->setValue('Note9', $Note9);
$templateProcessor->setValue('Fach10', $Kurs10);
$templateProcessor->setValue('Note10', $Note10);
$templateProcessor->setValue('Fach11', $Kurs11);
$templateProcessor->setValue('Note11', $Note11);
$templateProcessor->setValue('Fach12', $Kurs12);
$templateProcessor->setValue('Note12', $Note12);
$templateProcessor->setValue('Schulname', $Schulname);
$templateProcessor->setValue('Schulort', $Schulort);


//$templateProcessor->setValue('name', 'John Doe');
//$templateProcessor->setValue(
  //  ['city', 'street'],
   // ['Sunnydale, 54321 Wisconsin', '123 International Lane']);
 
$templateProcessor->saveAs('Zeugnis.docx');

	?>


 Hier das Zeugnis von <? echo $Vorname.' '.$Nachname;?> zum download:

    <br><br>

    <a href="/wp-content/themes/structr/Page_Scripts/Zeugnis.docx" download>

            Zeugnis

    </a>
	<br><br>

