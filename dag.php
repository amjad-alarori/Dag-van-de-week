<?php

$dagenVanWeek = array ("Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag");

$dagnummer = $_POST["num"];
$dagnaam = $dagenVanWeek[$dagnummer-1];
if($dagnummer < 8){
    echo $dagnaam;
}
else {
    echo "Niet geldig";
exit;
}



?>
