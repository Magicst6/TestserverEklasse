<?php

/**

 * Created by PhpStorm.

 * User: stefa

 * Date: 30.11.2018

 * Time: 16:39

 */

include 'db.php';





if(isset($_GET["f"]))

{

    

    $start = $_GET['k'].":00";

    $end = $_GET['g'].":00";

    $id = $_GET['f'];

    $datum=date("Y-m-d", strtotime($start));







        $query = "UPDATE sv_Klassentermine  SET  Start='$start', Ende='$end' ,Datum='$datum'  WHERE id='$id'";

        mysqli_query($con, $query);

        echo "Eintrag geändert!";



}



?>