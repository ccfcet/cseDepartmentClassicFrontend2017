<?php

/*
Selection of random landing section is handled by this php script.
*/

// Array of possible selections.
$availableLandingSection=array(/*"motto1",*/"bitNight20171"/*,"bitNight20172"*/);

// Length of array.
$possibleSelectionsAvailable = count($availableLandingSection);

// Select one landing section design randomly.
$selectedLandingSection = rand(0,($possibleSelectionsAvailable-1));

// Display the selected sanding section.
require("landingSections/".$availableLandingSection[$selectedLandingSection].".php");

?>
