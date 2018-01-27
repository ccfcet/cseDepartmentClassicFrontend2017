<?php
if($_SERVER['HTTP_HOST'] == 'localhost')
{
  // For local testing. Remove after complete development.
  define('SITE_SERVER_BASE', 'http://'.$_SERVER['HTTP_HOST'].'/cseDepartmentClassicFrontend2017/public/');
  define('API_SERVER_BASE', 'http://'.$_SERVER['HTTP_HOST'].':3000/');
}
else
{
  define('SITE_SERVER_BASE', 'https://'.$_SERVER['HTTP_HOST'].'/');
  define('API_SERVER_BASE', 'https://api.cet.ac.in/');
}
?>
