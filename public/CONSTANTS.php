<?php

if($_SERVER['HTTP_HOST'] == 'localhost')
{
  // For local testing. Remove after complete development.
  define('SITE_SERVER_BASE', 'http://'.$_SERVER['HTTP_HOST'].'/cseDepartmentClassicFrontend2017/public/');

}
else
{

  define('SITE_SERVER_BASE', 'https://'.$_SERVER['HTTP_HOST'].'/');

}

?>
