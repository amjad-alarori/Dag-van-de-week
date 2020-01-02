<?php

$dagenVanWeek = array ("Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag");

$dagnummer = $_POST["num"];
$dagnaam = $dagenVanWeek[$dagnummer-1];
echo $dagnaam;


?>