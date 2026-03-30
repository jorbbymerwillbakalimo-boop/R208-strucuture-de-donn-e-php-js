#!/usr/bin/php
<?php

  // Simple variables
  {
    // Declarations + Initializations
    $myDateDay = 23;
    $myDateMonth = 3;
    $myDateYear = 2026;

    // Display
    echo "Aujourd'hui nous sommes le $myDateDay/$myDateMonth/$myDateYear.\n";
  }



  // Associative array
  {
    // Declarations + Initializations
    $myDateArray = [
      'day'=>23,
      'month'=>3,
      'year'=>2026
    ];

    // Display
    echo "Aujourd'hui nous sommes le $myDateArray[day]/$myDateArray[month]/$myDateArray[year].\n";
  }



  // Object
  {
    // Class declaration
    class Date {
      public $day;
      public $month;
      public $year;

      function __construct($d, $m, $y) {
        if ($d > 0 && $d <=31) $this->day = $d;
        else $this->day = 1;
        $this->month = $m;
        $this->year = $y;
      }

      function __toString() {
        return "{$this->day}/{$this->month}/{$this->year}";
      }

      function __toString2() {
        $out = "{$this->day} "; 
        if ($this->month == 1) $out = $out . "jan.";
        else if ($this->month == 2) $out = $out . "fev.";
        else if ($this->month == 3) $out = $out . "mars";
        else if ($this->month == 4) $out = $out . "avr.";
        else if ($this->month == 5) $out = $out . "mai.";
        else if ($this->month == 6) $out = $out . "jun.";
        else if ($this->month == 7) $out = $out . "jul.";
        else if ($this->month == 8) $out = $out . "aout";
        else if ($this->month == 9) $out = $out . "sep.";
        else if ($this->month == 10) $out = $out . "oct.";
        else if ($this->month == 11) $out = $out . "nov.";
        else if ($this->month == 12) $out = $out . "dec.";
        $out = $out . " {$this->year}";
        return $out;
      }
    }

    // Declaration + Initialization
    $myDate = new Date(23, 3, 2026);

    // Display
    echo "Aujourd'hui nous sommes le $myDate.\n";
    echo "Aujourd'hui nous sommes le {$myDate->__toString2()}.\n";
  }

?>
