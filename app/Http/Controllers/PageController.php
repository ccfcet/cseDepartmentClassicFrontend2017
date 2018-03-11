<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use App\Helpers\Menu;
use App\Helpers\Information;

class PageController extends Controller
{
  /**
  * Load pages using Karma API.
  *
  * @return Webpage
  */

  public function index($slug)
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
      $Information = new Information();
      $infoData = $Information->getInformation($slug);

      if(empty($infoData))
      {
        abort(404);
      }
      else
      {
        return view('main.api_content', ['menuData' => $menuData, 'infoData' => $infoData]);
      }
    }
  }
}
