<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  @if(View::hasSection('title'))
<title>@yield('title') - Department of Computer Science, CET</title>
  @else
<title>Department of Computer Science, CET</title>
  @endif
<meta name="description" content="Official website of Department of Computer Science, College of Engineering Trivandrum.">
  <meta name="author" content="Web Team, CCF CET">

  <meta property="og:title" content="Department of Computer Science, CET" />
  <meta property="og:description" content="Official website of Department of Computer Science, College of Engineering Trivandrum." />
  <meta property="og:image" content="<?php echo url('/'); ?>/favicon-96x96.png" />

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?php echo url('/'); ?>/favicon.ico" type="image/x-icon">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/style.css">

</head>
<body>
  <div class="menuButtonContainer" id="mainMenuButton" onclick="menuToggle(this);">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>

  <div id="mainMenu" class="transparent">
    <div id="menuTitleContainer">
      <h4 id="menuTitle">Menu</h4>
    </div>
    <div id="menuItemsContainer">
      <ul>
        <li id="AboutNestedListButton" onclick="toggleMenuNestedList(this)"><a href="#">About</a><span id="glyphiconAbout" class="glyphicon glyphicon-chevron-down"></span></li>
        <ul id="AboutNestedList" class="mainMenuNested">
          <li onclick="location.href='#';"><a href="#">Leadership and Administration</a></li>
          <!-- <li><a href="#">Initiatives</a></li> -->
          <!-- <li><a href="#">News, Publications, and Facts</a></li> -->
          <!-- <li><a href="#">Careers</a></li> -->
          <li onclick="location.href='#';"><a href="#">Visitor Information</a></li>
          <!-- <li><a href="#">Giving to the Department</a></li> -->
        </ul>
        <li id="AdmissionsNestedListButton" onclick="toggleMenuNestedList(this)"><a href="#">Admissions</a><span id="glyphiconAdmissions" class="glyphicon glyphicon-chevron-down"></span></li>
        <ul id="AdmissionsNestedList" class="mainMenuNested">
          <li onclick="location.href='#';"><a href="#">Undergraduate Admissions</a></li>
          <li onclick="location.href='#';"><a href="#">Graduate Admissions</a></li>
          <!-- <li onclick="location.href='#';"><a href="#">Financial Aid and Scholarships</a></li> -->
        </ul>
        <li id="AcademicsNestedListButton" onclick="toggleMenuNestedList(this)"><a href="#">Academics</a><span id="glyphiconAcademics" class="glyphicon glyphicon-chevron-down"></span></li>
        <ul id="AcademicsNestedList" class="mainMenuNested">
          <li onclick="location.href='#';"><a href="#">Academic Programs</a></li>
          <li onclick="location.href='#';"><a href="#">Faculties</a></li>
          <li onclick="location.href='#';"><a href="#">Awards and Highlights</a></li>
          <li onclick="location.href='#';"><a href="#">Facilities</a></li>
          <li onclick="location.href='#';"><a href="#">Library</a></li>
          <li onclick="location.href='#';"><a href="#">Academic Resources</a></li>
        </ul>
        <li onclick="location.href='#';"><a href="#">Campus Life</a></li>
        <li onclick="location.href='#';"><a href="#">Research</a></li>
      </ul>
      <div id="mainMenuDivider">
      </div>
      <div id="mainMenuSub">
        <span id="mainMenuSubTitle">Information for:</span>
        <ul>
          <li id="StudentsNestedListButton" class="mainMenuSubFirstItem" onclick="toggleMenuNestedList(this)"><a href="#">Students</a><span id="glyphiconStudents" class="glyphicon glyphicon-chevron-down"></span></li>
          <ul id="StudentsNestedList" class="mainMenuSubNested">
            <li onclick="location.href='#';"><a href="#">Communities and Groups</a></li>
          </ul>
          <li onclick="location.href='#';"><a href="#">Faculty</a></li>
          <li onclick="location.href='#';"><a href="#">Alumni</a></li>
          <li onclick="location.href='#';"><a href="#">Employees</a></li>
          <li id="CommunityNestedListButton" onclick="toggleMenuNestedList(this)"><a href="#">Community</a><span id="glyphiconCommunity" class="glyphicon glyphicon-chevron-down"></span></li>
          <ul id="CommunityNestedList" class="mainMenuSubNested">
            <li onclick="location.href='#';"><a href="#">Neighbours and Nonprofits</a></li>
            <li onclick="location.href='#';"><a href="#">Parents</a></li>
            <li onclick="location.href='#';"><a href="#">Conference and Event Services</a></li>
            <!-- <li onclick="location.href='#';"><a href="#">Facilities</a></li> -->
            <!-- <li onclick="location.href='#';"><a href="#">Library</a></li> -->
            <!-- <li onclick="location.href='#';"><a href="#">Academic Resources</a></li> -->
          </ul>
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
    <div id="contentsContainer">
      @yield("homeBody","code is poetry")
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="<?php echo url('/'); ?>/assets/js/common.js"></script>

</body>
</html>
