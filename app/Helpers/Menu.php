<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Menu {
  public function getMenuData()
  {
    require_once("../CONSTANTS.php");
    $client = new Client(); //GuzzleHttp\Client
    try {
      $result_1 = $client->request('GET', API_SERVER_BASE.'public/menu/cse/1');
      $result_1_json = json_decode($result_1->getBody());
      if ($result_1->getStatusCode() == 200 && strpos($result_1->getHeader('content-type')[0], "application/json") == 0) {
        if (!property_exists($result_1_json, "success")) {
          // success
          $menuData[0] = $result_1_json;
          try {
            $result_2 = $client->request('GET', API_SERVER_BASE.'public/menu/cse/2');
            $result_2_json = json_decode($result_2->getBody());
            if ($result_1->getStatusCode() == 200 && strpos($result_1->getHeader('content-type')[0], "application/json") == 0) {
              $menuData[1] = $result_2_json;
            } else {
              return;
            }
          } catch (RequestException $e) {
            report($e);
          }
          return $menuData;
        } else {
          // failure or error
          return;
        }
      } else {
        return;
      }
    } catch (RequestException $e) {
      report($e);
      return false;
    } catch (Exception $e) {
      report($e);
      return false;
    }
  }
}
