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

  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

  <div class="menuButtonContainer" id="mainMenuButton" onclick="menuButtonToggle(this); actionNav(this);">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>

  <div id="mainMenu">
    <div id="menuTitleContainer">
      <h4 id="menuTitle">Menu</h4>
    </div>
    <div id="menuItemsContainer">
      <ul>
        <li onclick="toggleMenuNestedList(this)"><a href="#">About</a></li>
        <!-- <ul id="AboutNestedList"> -->
          <!-- <li class="mainMenuSubNestedItem"><a href="#">Leadership & Administration</a></li> -->
          <!-- <li class="mainMenuSubNestedItem"><a href="#">Initiatives</a></li> -->
          <!-- <li class="mainMenuSubNestedItem"><a href="#">News, Publications, and Facts</a></li> -->
          <!-- <li class="mainMenuSubNestedItem"><a href="#">Careers</a></li> -->
          <!-- <li class="mainMenuSubNestedItem"><a href="#">Visitor Information</a></li> -->
          <!-- <li class="mainMenuSubNestedItem"><a href="#">Giving to the Department</a></li> -->
        <!-- </ul> -->
        <li onclick="location.href='#';"><a href="#">Admissions</a></li>
        <li onclick="location.href='#';"><a href="#">Academics</a></li>
        <li onclick="location.href='#';"><a href="#">Campus Life</a></li>
        <li onclick="location.href='#';"><a href="#">Research</a></li>
      </ul>
      <div id="mainMenuDivider">
      </div>
      <div id="mainMenuSub">
        <span id="mainMenuSubTitle">Information for:</span>
        <ul>
          <li id="mainMenuSubFirstItem" onclick="location.href='#';"><a href="#">Students</a></li>
          <li onclick="location.href='#';"><a href="#">Faculty</a></li>
          <li onclick="location.href='#';"><a href="#">Alumni</a></li>
          <li onclick="location.href='#';"><a href="#">Employees</a></li>
          <li onclick="location.href='#';"><a href="#">Community</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid" id="mainContent">
    <div id="mainContentOverlay" onclick="$('#mainMenuButton').click();">
    </div>
    <div class="row" id="headerRow">
      <h4 id="headingDepartmentText"><a href="" style="text-decoration: none;">Department of Computer Science & Engineering</a></h4>
      <h6 id="headingCollegeText"><a href="http://www.cet.ac.in" style="text-decoration: none;">College of Engineering Trivandrum</a></h6>
    </div>

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript - Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="js/common.js"></script>

</body>

</html>
