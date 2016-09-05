<?php

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

// ----- Affiche full array
/*echo "<ol>";
foreach ($top as $elements) {
	echo "<li>" . $elements["im:name"]["label"] . "</li>";
}
echo "</ol>";*/

// ------ Ex1 Top 10
/*echo "<ol>";
for ($i=0; $i < 10; $i++) { 
	echo "<li>" . $top[$i]["im:name"]["label"] . "</li>";
}
echo "</ol>";*/

// ----- Ex2 Classement
/*$grav = $_POST['txt'];
foreach ($top as $key => $elements) {
	if ($elements['im:name']['label'] == $grav) {
		echo $elements['im:name']['label'] . " est le numéro " . ($key+1);
	}
}*/

// ------ Ex3 Réalistateur
/*foreach ($top as $elements) {
	if ($elements['im:name']['label'] == 'The LEGO Movie') {
		echo "Le réalisateur de " . $elements['im:name']['label'] . " est " . $elements['im:artist']['label'];
	}
}*/

// ------ Ex4 Nombre de films
/*$arr = count($top);
$inc = 0;

for ($i=0; $i < $arr; $i++) { 
	$date = $top[$i]['im:releaseDate']['label'];
	if ($date < 2000) {
		$inc++;
	}
}
echo "Le nombre de films avant 2000 est de " . $inc;*/


?>