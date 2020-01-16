<?php




$dagenVanWeek = array("Maandag" => 1, "Dinsdag" => 2, "Woensdag" => 3, "Donderdag" => 4, "Vrijdag" => 5, "Zaterdag" => 6, "Zondag" => 7);

$dagnummer = (int) $_POST["num"];


function countdag($dagenVanWeek, $dagnummer) {
    foreach ($dagenVanWeek as $dagnaam => $dagvalue) {
        if ($dagnummer == $dagvalue) {
            return $dagnaam;
        }
    }
    if ($dagnummer > $dagvalue) {
        return "Niet geldig";
    }
    elseif ($dagnummer < $dagvalue) {
        return "Niet geldig";
    }
}

echo countdag($dagenVanWeek, $dagnummer);


?>

