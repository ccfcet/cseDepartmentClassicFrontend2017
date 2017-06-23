<?php

// Session Handler.
require("session.php");

// Defined CONSTANTS
require("CONSTANTS.php");

?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <title>Department of Computer Science & Engineering, CET</title>
  <meta name="description" content="Official website of Department of Computer Science & Engineering">
  <meta name="author" content="Web Team, CET">

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->


  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <!-- Latest compiled and minified CSS - Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="<?php echo SITE_SERVER_BASE?>assets/css/style.css">

</head>

<body>

  <?php

  // main menu
  require("layout/mainMenu.php");

  // before content
  require("layout/beforeContent.php");

  // content starts here
  require("faculty/index.php");
  // content ends here

  // after content
  require("layout/afterContent.php");

  ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript - Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="<?php echo SITE_SERVER_BASE?>assets/js/common.js"></script>

</body>

</html>
