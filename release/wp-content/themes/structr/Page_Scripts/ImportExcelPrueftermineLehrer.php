<form action="/wp-content/themes/structr/Page_Scripts/uploadsPruefungenLehrer.php" method="post" enctype="multipart/form-data">



  <?
    global $current_user;

    get_currentuserinfo();

?>
	<input type="hidden" name="user_id" value="<?php echo $current_user->ID ?>">
	
    Wählen Sie eine csv-Datei aus :

    <br>

    <input type="file" name="fileToUpload" id="fileToUpload">

    <input type="submit" value="Upload File" name="submit">

    <br>

    Hier die CSV-Vorlage zum ausfüllen:

    <br>

    <a href="/wp-content/themes/structr/Page_Scripts/Wios_PruefungstermineLehrer_Vorlage.csv" download>

         CSV-Prufungsimportvorlage

    </a>

</form>