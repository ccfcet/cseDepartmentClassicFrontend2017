<?php

/*
Selection of random landing section is handled by this php script.
*/

// Array of possible selections.
$availableLandingSections=array(/*"motto1",*/"bitNight20171"/*,"bitNight20172"*/);

// Length of array.
$possibleSelectionsAvailable = count($availableLandingSection);

if(isset($_SESSION['selectedLandingSection']) && !empty($_SESSION['selectedLandingSection']))
{

  // Debug code.
  // echo "session already set";

  $selectedLandingSection = $_SESSION["selectedLandingSection"];

}
else
{

  // Select one landing section design randomly.
  $selectedLandingSection = rand(0,($possibleSelectionsAvailable-1));

  // Set the session variable.
  $_SESSION['selectedLandingSection'] = $selectedLandingSection;

}

// For debug only.
// echo $selectedLandingSection;

// Display the selected sanding section.
require("landingSections/".$availableLandingSections[$selectedLandingSection].".php");

?>
