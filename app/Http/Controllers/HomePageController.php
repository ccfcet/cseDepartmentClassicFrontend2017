<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use App\Helpers\Menu;

class HomePageController extends Controller
{
  /**
  * Load the home page.
  *
  * @return Webpage
  */

  public function load()
  {
    $Menu = new Menu();
    $menuData = $Menu->getMenuData();

    if(empty($menuData))
    {
      // failure or error in obtaining $menuData
      return "Unable to proceed with the request. Unable to communicate properly with backend API.";
      abort(500);
    }
    else
    {
      // Array of possible selections.
    $availableLandingSections=array("terminalWelcome", "bitNight20171"/*,"bitNight20172"*/);

    // Length of array.
    $possibleSelectionsAvailable = count($availableLandingSections);

    // Select one landing section design randomly.
    $selectedLandingSection = rand(0,($possibleSelectionsAvailable-1));

    return view('main.landingPageThemes.'.$availableLandingSections[$selectedLandingSection], ['menuData' => $menuData]);
  }
}
}
