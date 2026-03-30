#!/usr/bin/php
<?php

// Read / Write file (tictac)
    // Create empty file
    file_put_contents("tictac.txt", "", LOCK_EX);

    // Write to file
    for ($i=5 ; $i>=0 ; $i--) {
        file_put_contents("tictac.txt", "Plus que $i secondes ...\n", LOCK_EX|FILE_APPEND);
    }
    file_put_contents("tictac.txt", "BOOOOOOUM !!!\n", LOCK_EX|FILE_APPEND);

    // Read from file
    $tictac = file_get_contents("tictac.txt");

    // Display
    echo "Contenu du fichier tictac.txt :\n$tictac\n";



// Regex (firstNames)
    // Read file
    $firstNames = file_get_contents("firstNames.txt");

    // Search / Replace
    $replacedFirstNames = preg_replace("/([io])/", "$1$1$1", $firstNames);

    // Display
    echo "$replacedFirstNames";



// CSV (colors)
    // Read file
    $csvColors = file_get_contents("colors.csv");

    // Display
    echo "CSV colors : $csvColors\n";

    // Text to array
    $colors = preg_split("/;/", $csvColors);

    // Display
    print_r($colors);

    // Filtering
    $filteredColors = [];
    foreach ($colors as $color) {
        if (preg_match("/[PB]/", $color)) {
            echo "J'aime la couleur $color\n";
            $filteredColors[] = $color;
        } 
    }

    // Display
    print_r($filteredColors);

    // Array to CSV
    $csvFilteredColors = join(";", $filteredColors);

    // Display
    echo "CSV fileteredColors : $csvFilteredColors\n";



// JSON (bobInfos)
    // Declarations
    $songs = ["Three Little Birds", "No Woman No Cry", "One Love", "Get Up Stand Up"];
    $bobInfos = ['firstName'=>"Bob", 'lastName'=>"Marley", 'birthYear'=>1945, 'height'=>1.68, 'skills'=>["Guitare", "Chant", "Ecriture"], 'songs'=>$songs];
  
    // Display
    print_r($bobInfos);

    // Array to JSON
    $jsonBobInfos = json_encode($bobInfos);

    // Display
    echo "JSON bobInfos : $jsonBobInfos\n";

    // Write file
    file_put_contents("bobInfos.json", $jsonBobInfos, LOCK_EX);

    // Use function
    echo "\n\n\n";
    displayArray($bobInfos);









// FUNCTIONS
    // Display associative array
    function displayArray($array, $sep="\n") {
        foreach($array as $key=>$val) {
            if (is_scalar($val)) echo "$key:$val$sep";
            else {
                echo "$key:[";   
                displayArray($val, $sep);
                echo "]$sep";
            }
        }
    }
?>

