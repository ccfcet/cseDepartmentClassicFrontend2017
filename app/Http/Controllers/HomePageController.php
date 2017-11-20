<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
  /**
  * Load the home page.
  *
  * @return Webpage
  */
  public function load()
  {
    // Array of possible selections.
    $availableLandingSections=array("terminalWelcome","bitNight20171"/*,"bitNight20172"*/);

    // Length of array.
    $possibleSelectionsAvailable = count($availableLandingSections);

    // Select one landing section design randomly.
    $selectedLandingSection = rand(0,($possibleSelectionsAvailable-1));

    return view('main.landingPageThemes.'.$availableLandingSections[$selectedLandingSection]);
  }
}
