<?php
include 'db.php';
 $sem=$_POST['sem'];
$kid=$_POST['kid'];
$sid=$_POST['sid'];
preg_match("/:(.*)/", $sid, $output_array);
$sid=$output_array[1];

 $isEntry2 = "Select Semesterkuerzel From sv_Settings";
    $result2 = mysqli_query($con, $isEntry2);

    while ($value3 = mysqli_fetch_array($result2)) {
        $SemesterkuerzelDB = $value3['Semesterkuerzel'];
    }
	
if ($SemesterkuerzelDB==$sem or !$sem ){
	$abwKomp='sv_AbwesenheitenKompakt';
	
}

else{
	$abwKomp=$sem.'_AbwesenheitenKompakt';
	
}

/*
 * Example PHP implementation used for the index.html example
 */
 
// DataTables PHP library
include( "DataTablesEditor/DataTables.php" );
 
// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate,
    DataTables\Editor\ValidateOptions;
 

if ($kid){
	Editor::inst( $db, $abwKomp )
    ->fields(
	
        Field::inst( 'Vorname' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Vorname muss angegeben werden' ) 
            ) ),
        Field::inst( 'Nachname' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Nachname muss angegeben werden' )  
            ) ),
        Field::inst( 'Klasse' ),
        Field::inst( 'Kursname' ),
            
        Field::inst( 'Abwesenheitsdauer' ),
	
	  Field::inst( 'Kommentar' ),
	  Field::inst( 'KommentVerw' ),
	  Field::inst( 'Lehrer' ),
	  Field::inst( 'Entschuldigt' ),
	
	
	 Field::inst( 'Datum' )
	  ->validator( Validate::dateFormat( 'Y-m-d' ) )
            ->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
            ->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
	
       
    )
		->where( 'Kursname',$kid )
    ->process( $_POST )
    ->json();
}

else if ($sid){
	Editor::inst( $db, $abwKomp )
    ->fields(
	
        Field::inst( 'Vorname' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Vorname muss angegeben werden' ) 
            ) ),
        Field::inst( 'Nachname' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Nachname muss angegeben werden' )  
            ) ),
        Field::inst( 'Klasse' ),
        Field::inst( 'Kursname' ),
            
        Field::inst( 'Abwesenheitsdauer' ),
	
	  Field::inst( 'Kommentar' ),
	  Field::inst( 'KommentVerw' ),
	  Field::inst( 'Lehrer' ),
	  Field::inst( 'Entschuldigt' ),
	
	
	 Field::inst( 'Datum' )
	  ->validator( Validate::dateFormat( 'Y-m-d' ) )
            ->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
            ->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
	
       
    )
		->where( 'SchuelerID',$sid )
    ->process( $_POST )
    ->json();
}
else{
// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, $abwKomp )
    ->fields(
	
        Field::inst( 'Vorname' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Vorname muss angegeben werden' ) 
            ) ),
        Field::inst( 'Nachname' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Nachname muss angegeben werden' )  
            ) ),
        Field::inst( 'Klasse' ),
        Field::inst( 'Kursname' ),
            
        Field::inst( 'Abwesenheitsdauer' ),
	
	  Field::inst( 'Kommentar' ),
	  Field::inst( 'KommentVerw' ),
	  Field::inst( 'Lehrer' ),
	  Field::inst( 'Entschuldigt' ),
	
	
	 Field::inst( 'Datum' )
	  ->validator( Validate::dateFormat( 'Y-m-d' ) )
            ->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
            ->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
	
       
    )
    ->process( $_POST )
    ->json();
}