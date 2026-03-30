#!/usr/bin/php
<?php

  // Read JSON
    // Read file
    $jsonPeoples = file_get_contents("peoples.json");

    // Convert from JSON
    $peoples = json_decode($jsonPeoples, true);

    // Display
    print_r($peoples);



  // Extract fields
    // Copy usefull fields
    $simplifiedPeoples = [];
    foreach ($peoples as $people) {
        $simplifiedPeoples[] = ['lastName'=>$people['lastName'], 'firstName'=>$people['firstName'], 'birthDate'=>$people['birthDate'], 'height'=>$people['height']];
    }

    // Display
    print_r($simplifiedPeoples);


  
  // Convert to CSV
    // Extract colNames
    $colNames = array_keys($simplifiedPeoples[0]);
    $csvSimplifiedPeoples = join(";", array_values($colNames)) . "\n";

    // Foreach record
    foreach ($simplifiedPeoples as $simplifiedPeople) {
        // Add line to CSV with separator ";"
        $csvSimplifiedPeoples .= join(";", array_values($simplifiedPeople)) . "\n"; 
    }

    // Display
    print_r($csvSimplifiedPeoples);

    // Write CSV
    file_put_contents("peoples.csv", $csvSimplifiedPeoples, LOCK_EX);



  // Convert from CSV
  $newSimplifiedPeoples = csvToArray($csvSimplifiedPeoples);
  print_r($newSimplifiedPeoples);




  // Array to CSV
  function arrayToCsv($array, $csvSep=";") {
    // Extract colNames
    $colNames = array_keys($array[0]);
    $csv = join($csvSep, array_values($colNames)) . "\n";

    // Foreach record
    foreach ($array as $line) {
        // Add line to CSV with separator
        $csv .= join($csvSep, array_values($line)) . "\n"; 
    }
    
    // Return
    return $csv;
  }



  // CSV to Array
  function csvToArray($csv, $csvSep=";") {
    $outArray = [];

    // Split CSV into rows
    $csvRows = preg_split("/\n/", $csv);

    // Extract headers
    $csvHeaders = preg_split("/$csvSep/", $csvRows[0]);
    unset($csvRows[0]);

    // Foreach row
    foreach ($csvRows as $csvRow) {
      // Not empty row
      if (!preg_match("/^$/", $csvRow)) {
        // Split row into cells
        $csvCells = preg_split("/$csvSep/", $csvRow);

        // Append new associative array to outArray
        $outArray[] = array_combine($csvHeaders, $csvCells);
      }
    }

    return $outArray;
  }
?>
