#!/usr/bin/php
<?php

// $colors = ["red", "yellow", "green", "blue"];
//
// unset($colors[0]);
// unset($colors[2]);
// // print_r($colors);
//
// $colors[] = "cyan";
// $colors[] = "magenta";
//
// // for ($i=0 ; $i<count($colors) ; $i++) {
// // 	echo "$i: $colors[$i]\n";
// // }
//
// foreach ($colors as $key=>$color) {
// 	echo "$key: $color\n";
// }

$bob = ['firstName'=>"Bob", 'lastName'=>"Marley", 'birthYear'=>1945, 'isMale'=>true];

$bob['height'] = 1.68;
$bob['cry'] = "One Love";
$bob['skills'] = ["Chant", "Guitare", "Composition musicale"];

$bob['skills'][] = "Militantisme";

unset($bob['lastName']);
unset($bob['isMale']);

print_r($bob);

foreach($bob as $key=>$val) {
	echo "$key: $val\n";
}


?>
