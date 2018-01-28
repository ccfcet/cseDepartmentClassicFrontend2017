<?php
if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1')
{
  // For local testing with apache. Remove after complete development.
  define('SITE_SERVER_BASE', 'http://'.$_SERVER['HTTP_HOST'].'/cseDepartmentClassicFrontend2017/public/');
  define('API_SERVER_BASE', 'http://'.$_SERVER['HTTP_HOST'].':3000/');
}
else if($_SERVER['HTTP_HOST'] == 'localhost:8000')
{
  // For local testing with laravel artisan server. Remove after complete development.
  define('SITE_SERVER_BASE', 'http://'.$_SERVER['HTTP_HOST'].'/');
  define('API_SERVER_BASE', 'http://'.'localhost'.':3000/');
}
else
{
  define('SITE_SERVER_BASE', 'https://'.$_SERVER['HTTP_HOST'].'/');
  define('API_SERVER_BASE', 'https://api.cet.ac.in/');
}
?>
