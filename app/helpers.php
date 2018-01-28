<?php

use GuzzleHttp\Client;

function getMenuData()
{
  require_once("../CONSTANTS.php");

  $client = new Client(); //GuzzleHttp\Client

  $result_1 = $client->request('GET', API_SERVER_BASE.'public/menu/cse/1');

  $result_1_json = json_decode($result_1->getBody());

  if($result_1->getStatusCode() == 200 && strpos($result_1->getHeader('content-type')[0], "application/json") == 0)
  {
    if($result_1_json->state === "success")
    {
      // success
      $menuData[0] = $result_1_json->data;

      $result_2 = $client->request('GET', API_SERVER_BASE.'public/menu/cse/2');

      $result_2_json = json_decode($result_2->getBody());

      if($result_2->getStatusCode() == 200 && strpos($result_2->getHeader('content-type')[0], "application/json") == 0)
      {
        if($result_2_json->state === "success")
        {
          // success
          $menuData[1] = $result_2_json->data;
        }
        else
        {
          // failure
        }
        return $menuData;
    }
    else
    {
      return;
    }
  }
  else
  {
    // failure or error
    return;
  }
}
else
{
  return;
}
}

?>
