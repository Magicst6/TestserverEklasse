<?

include 'db.php';




	$isEntry1 = "SELECT  Klasse From sv_Lernende Group by Klasse";
                $result1 = mysqli_query($con, $isEntry1);

                while ($value1 = mysqli_fetch_array($result1)) {
					
					$Klasse=$value1['Klasse'];
					$Klasse =stripslashes( preg_replace("/[^a-zA-Z0-9_äöüÄÖÜ ]/" , "_", $Klasse));
					
$klasseTab="sv_KurseAll".$Klasse;
$crtbl="	CREATE TABLE $klasseTab (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Kursname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `Tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Start` datetime DEFAULT NULL,
  `Ende` datetime DEFAULT NULL,
  `Lektionen` int(11) DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zimmer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZI_ID` int(11) DEFAULT NULL,
  `Lehrperson` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LP_ID` int(11) DEFAULT NULL,
  `Farbe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Startdatum` date DEFAULT NULL,
  `Enddatum` date DEFAULT NULL,
  `Stundenplan` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
mysqli_query($con, $crtbl);
				}

?>