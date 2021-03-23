<?
include "db.php";

$Schueler=$_GET['p'];

preg_match("/:(.*)/", $Schueler, $output_array);
$SchID=$output_array[1];

$Klasse=$_GET['q'];
$ZZ=$_GET['c'];



$x=0;

$isEntry3= "Select * From sv_LernendeModule where ID='$SchID'  ";

        $result3 = mysqli_query($con, $isEntry3);


        while( $line5= mysqli_fetch_array($result3))

        {
			
           $Geburtsort=$line5['Geburtsort'];
			$Geburtstag=$line5['Geburtsdatum'];
			$Vorname=$line5['Vorname'];
			$Nachname=$line5['Name'];
		}
			




$isEntry1= "Select * From sv_Kurse where Klasse='$Klasse' Group by KursID order by Kursname asc   ";

        $result1 = mysqli_query($con, $isEntry1);


        while( $line3= mysqli_fetch_array($result1))

        {
			$x++;
			${'Kurs' . $x} = $line3['Kursname'];
		    $KursID= $line3['KursID'];
			
			
			$isEntry2= "Select * From sv_Noten where KursID='$KursID' and SchuelerID='$SchID'  ";

        $result2 = mysqli_query($con, $isEntry2);
$NoteGes=0;
$GewGes=0;
        while( $line4= mysqli_fetch_array($result2))
          
        {
			$Note=$line4['Note'];
			$Gew= $line4['Gewichtung'];
				$GewGes=$GewGes+$Gew;
			$NoteGes=$NoteGes+$Note*$Gew;
		}
		  	${'Note' . $x}= $NoteGes/$GewGes;
			
		}



?>

<h3>Zeugnisdaten:</h3>

<input type="hidden" name="Klasse"   value="<? echo $Klasse;?>">

<input type="hidden" name="SchuelerID"   value="<? echo $SchID;?>">

<label class="col-sm-2 col-form-label">Vorname: &nbsp; &nbsp;  </label> <input type="text" name="Vorname" class="form-control"  value="<? echo $Vorname;?>"
                                                                    placeholder="Vorname" size=100>

<br><br>


<label class="col-sm-2 col-form-label">Nachname:  </label> <input type="text" name="Nachname" class="form-control" value="<? echo $Nachname;?>"
                                                                    placeholder="Nachname" size=100> 
<br><br>


<label class="col-sm-2 col-form-label">Geburtstag:  </label> <input type="date" name="Geburtstag" class="form-control" value="<? echo $Geburtstag;?>"
                                                                    placeholder="Geburtstag" size=100>

<br><br>

<label class="col-sm-2 col-form-label">Geburtsort:  </label> <input type="text" name="Geburtsort" class="form-control" value="<? echo $Geburtsort;?>"
                                                                    placeholder="Geburtsort" size=100>

<br><br>

<label class="col-sm-2 col-form-label">Verhalten:  &nbsp;  </label> <input type="text" name="Verhalten" class="form-control" value="<? echo $Verhalten;?>"
                                                                    placeholder="Verhalten" size=100>
<br><br>

<label class="col-sm-2 col-form-label">Mitarbeit: &nbsp; &nbsp;  </label> <input type="text" name="Mitarbeit" class="form-control" value="<? echo $Mitarbeit;?>"
                                                                    placeholder="Mitarbeit" size=100>
<br><br>
	
<label class="col-sm-2 col-form-label">Klassenziel:    </label> <input type="text"  name="Klassenziel" class="form-control"  value="<? echo $Klassenziel;?>"
                                                                    placeholder="Klassenziel" size=100>
	
<br><br>

<div class="zd1">

<h5>Fächer:</h5>
<label class="col-sm-2 col-form-label">Fach1: &nbsp;&nbsp; &nbsp;  </label> <input type="text" name="Fach1" class="form-control"  value="<? echo $Kurs1;?>"
                                                                    placeholder="Fach1" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note1: &nbsp;&nbsp;   </label> <input type="text" name="Note1" class="form-control" value="<? echo $Note1;?>"
                                                                    placeholder="Note1" size=30>

<br><br>

<label class="col-sm-2 col-form-label">Fach2: &nbsp; &nbsp;  </label> <input type="text" name="Fach2" class="form-control" value="<? echo $Kurs2;?>"
                                                                    placeholder="Fach2" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note2: &nbsp;   </label> <input type="text" name="Note2" class="form-control" value="<? echo $Note2;?>"
                                                                    placeholder="Note2" size=30>

<br><br>
	
<label class="col-sm-2 col-form-label">Fach3: &nbsp; &nbsp;  </label> <input type="text" name="Fach3" class="form-control" value="<? echo $Kurs3;?>"
                                                                    placeholder="Fach3" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note3: &nbsp;   </label> <input type="text" name="Note3" class="form-control" value="<? echo $Note3;?>"
                                                                    placeholder="Note3" size=30>

<br><br>
	
<label class="col-sm-2 col-form-label">Fach4: &nbsp; &nbsp;  </label> <input type="text" name="Fach4" class="form-control" value="<? echo $Kurs4;?>"
                                                                    placeholder="Fach4" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note4: &nbsp;   </label> <input type="text" name="Note4" class="form-control" value="<? echo $Note4;?>"
                                                                    placeholder="Note4" size=30>

<br><br>
	
<label class="col-sm-2 col-form-label">Fach5: &nbsp; &nbsp;  </label> <input type="text" name="Fach5" class="form-control" value="<? echo $Kurs5;?>"
                                                                    placeholder="Fach5" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note5: &nbsp;   </label> <input type="text" name="Note5" class="form-control"  value="<? echo $Note5;?>"
                                                                    placeholder="Note5" size=30>

<br><br>
	
<label class="col-sm-2 col-form-label">Fach6: &nbsp; &nbsp;  </label> <input type="text" name="Fach6" class="form-control" value="<? echo $Kurs6;?>"
                                                                    placeholder="Fach6" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note6: &nbsp;   </label> <input type="text" name="Note6" class="form-control" value="<? echo $Note6;?>"
                                                                    placeholder="Note6" size=30>

<br><br>
	
	
<label class="col-sm-2 col-form-label">Fach7: &nbsp; &nbsp;  </label> <input type="text" name="Fach7" class="form-control" value="<? echo $Kurs7;?>"
                                                                    placeholder="Fach7" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note7: &nbsp;   </label> <input type="text" name="Note7" class="form-control" value="<? echo $Note7;?>"
                                                                    placeholder="Note7" size=30>

<br><br>
	


<label class="col-sm-2 col-form-label">Fach8: &nbsp; &nbsp;  </label> <input type="text" name="Fach8" class="form-control" value="<? echo $Kurs8;?>"
                                                                    placeholder="Fach8" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note8: &nbsp;   </label> <input type="text" name="Note8" class="form-control" value="<? echo $Note8;?>"
                                                                    placeholder="Note8" size=30>

<br><br>

<label class="col-sm-2 col-form-label">Fach9: &nbsp; &nbsp;  </label> <input type="text" name="Fach9" class="form-control" value="<? echo $Kurs9;?>"
                                                                    placeholder="Fach9" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note9: &nbsp;   </label> <input type="text" name="Note9" class="form-control" value="<? echo $Note9;?>"
                                                                    placeholder="Note9" size=30>

<br><br>
	

	
<label class="col-sm-2 col-form-label">Fach10:  &nbsp;  </label> <input type="text" name="Fach10" class="form-control" value="<? echo $Kurs10;?>"
                                                                    placeholder="Fach10" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note10: &nbsp;   </label> <input type="text" name="Note10" class="form-control" value="<? echo $Note10;?>"
                                                                    placeholder="Note10" size=30>

<br><br>

<label class="col-sm-2 col-form-label">Fach11: &nbsp; &nbsp;  </label> <input type="text" name="Fach11" class="form-control" value="<? echo $Kurs11;?>"
                                                                    placeholder="Fach11" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note11: &nbsp;   </label> <input type="text" name="Note11" class="form-control" value="<? echo $Note11;?>"
                                                                    placeholder="Note11" size=30>

<br><br>
	

<label class="col-sm-2 col-form-label">Fach12:  &nbsp;  </label> <input type="text" name="Fach12" class="form-control" value="<? echo $Kurs12;?>"
                                                                    placeholder="Fach12" size=30> <label class="col-sm-2 col-form-label"> &nbsp; &nbsp;&nbsp; &nbsp;Note12: &nbsp;   </label> <input type="text" name="Note12" class="form-control" value="<? echo $Note12;?>"
                                                                    placeholder="Note12" size=30>

<br><br>
	

	</div>
<br><br>

<label class="col-sm-2 col-form-label">Bemerkung:  </label> <input type="text" name="Bemerkung" class="form-control" value="<? echo $Bemerkung;?>"
                                                                    placeholder="Bemerkung" size=100>
<br><br>


<label class="col-sm-2 col-form-label">Datum:  </label> <input type="date" name="Datum" class="form-control" value="<? echo $Datum;?>"
                                                                    placeholder="Datum" size=100>

<br><br>

<br><br>
	
	
	
 <input name="Senden" type="submit" value="Zeugnis für diesen Schüler erstellen" />




