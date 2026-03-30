#!/usr/bin/php
<?php

// Declarations
$login = "Betty";
$songs = ["Three Little Birds", "No Woman No Cry", "One Love", "Get Up Stand Up"];
$bobInfos = ['firstName'=>"Bob", 'lastName'=>"Marley", 'birthYear'=>1945, 'height'=>1.68, 'skills'=>["Guitare", "Chant", "Ecriture"]];
$otherSongs = ["Redemption Song", "Jaming"];
$bobCoordinates = ['firstName'=>"Bobounet", 'address'=>"1 place des Palmistes", 'zipCode'=>"97300", 'city'=>"Cayenne", 'phone'=>"0694112233"];

// Access
$login = "Beth";
$songs[0] = "Three Big Birds";
$bobInfos['firstName'] = "Boby";
$bobInfos['skills'][2] = "Composition";

// Update
unset($songs[2]);
unset($bobInfos['height']);
$songs[2] = "Two Loves";
$songs[18] = "The Unknown Song";
$songs[] = "The Last Song";
$bobInfos['isMan'] = true;
$allSongs = array_merge($songs, $otherSongs);
$strangeTest = array_merge($songs, $bobInfos);
$bobAllInfos = array_merge($bobInfos, $bobCoordinates);

// Display
echo "Bonjour $login, comment vas-tu ?\n";
print_r($songs);
print_r($bobInfos);
print_r($allSongs);
print_r($strangeTest);
print_r($bobAllInfos);
echo "Ma première chanson est $songs[0].\n";
echo "Mon nom est $bobInfos[lastName].\n";

// Display array with 'holes'
for ($i=0 ; $i<count($songs) ; $i++) {
  if (isset($songs[$i])) echo "$i : $songs[$i]\n";
}

// Foreach
foreach ($songs as $val) {
  echo "$val\n";
}
foreach ($bobInfos as $key=>$val) {
  echo "$key : $val\n";
}



?>