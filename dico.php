<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

$co = count($dico);

/*for ($i=0; $i < $co; $i++) { 
	
}*/

echo "le dictionnaire contient " . $co . " mots.";

/*$carac = array_map('strlen', $dico);

if ($carac == 15) {

	echo count($carac);
}*/

$carac = array();

foreach ($dico as $elements) {
	if (strlen($elements) == 15) {
		array_push($carac, $elements);
	}
}

$car = count($carac);

echo "<br><br>Il y à " . $car . " mots à 15 caractères.";


$letter = array();

foreach ($dico as $elements) {
	if (strpos($elements, "w") !== false) {
		array_push($letter, $elements);
	}
}

$let = count($letter);

echo "<br><br>Il y à " . $let . " mots contenant la lettre W.";


$lastletter = array();

foreach ($dico as $elements) {
	if (substr($elements, -1) == "q") {
		array_push($lastletter, $elements);
	}
}

$lastlet = count($lastletter);

echo "<br><br>Il y à " . $lastlet . " mots finissant par la lettre Q.";



?>