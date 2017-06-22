<div class="menuButtonContainer" id="mainMenuButton" onclick="menuToggle(this);">
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
