<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Information {
  public function getInformation($entity_information_slug)
  {
    // process $entity_information_slug to change / to _
    $entity_information_slug = str_replace("/","_", $entity_information_slug);
    
    require_once("../CONSTANTS.php");

    $client = new Client(); //GuzzleHttp\Client

    try {
      $result_1 = $client->request('GET', API_SERVER_BASE.'public/information/'.$entity_information_slug.'/cse');
      $result_1_json = json_decode($result_1->getBody());
      if ($result_1->getStatusCode() == 200 && strpos($result_1->getHeader('content-type')[0], "application/json") == 0) {
        if (!property_exists($result_1_json, "success")) {
          // success
          $infoData[0] = $result_1_json;
          return $infoData;
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
