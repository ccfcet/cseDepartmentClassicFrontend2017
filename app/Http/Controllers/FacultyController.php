<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class FacultyController extends Controller
{
  /**
  * Load the home page.
  *
  * @return Webpage
  */

  public function main()
  {
    $menuData = getMenuData();

    if(empty($menuData))
    {
      // failure or error in obtaining $menuData
      return "Unable to proceed with the request. Unable to communicate properly with backend API.";
    }
    else
    {
      return view('main.faculty.faculty_search', ['menuData' => $menuData]);
    }
  }
}
