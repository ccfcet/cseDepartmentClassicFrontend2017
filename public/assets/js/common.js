/* uses jquery -- start */

$(window).on("resize", function () {
  document.getElementById("headerRow").style.height = "auto";
  var height = $('#headerRow').css("height");
  var windowHeight = $(window).height();
  // console.log(windowHeight);
  document.getElementById("headerRow").style.height = height;
  document.getElementById("menuItemsContainer").style.height = (parseInt(windowHeight)-parseInt(height.replace(/px/,"")))+"px";
  document.getElementById("contentsContainer").style.height = (parseInt(windowHeight)-parseInt(height.replace(/px/,"")))+"px";
  if(height != "74px")
  {
    document.getElementById("menuTitle").style.marginTop = (parseInt("14px".replace(/px/,"")) + ((parseInt(height.replace(/px/,""))-parseInt("74px".replace(/px/,"")))/2))+"px";
    document.getElementById("menuTitle").style.paddingBottom = (parseInt("28px".replace(/px/,"")) + ((parseInt(height.replace(/px/,""))-parseInt("74px".replace(/px/,"")))/2))+"px";
    document.getElementById("mainMenuButton").style.marginTop = (parseInt("17px".replace(/px/,"")) + ((parseInt(height.replace(/px/,""))-parseInt("74px".replace(/px/,"")))/2))+"px";
    document.getElementById("mainContentOverlay").style.top = height;
    document.getElementById("contentsContainer").style.top = height;
  }
  else
  {
    document.getElementById("menuTitle").style.marginTop = "14px";
    document.getElementById("menuTitle").style.paddingBottom = "28px";
    document.getElementById("mainMenuButton").style.marginTop = "17px";
    document.getElementById("mainContentOverlay").style.top = "74px";
    document.getElementById("contentsContainer").style.top = "74px";
  }
}).resize();

$(window).load(function() {
  // resize();
  $(window).trigger('resize');
});

/* uses jquery -- end */

/* For menu */

/* For accordion menu action */

function closeAllLists() {

}

function stopClickEventPropogation(e)
{
  if (!e)
  e = window.event;

  //IE9 & Other Browsers
  if (e.stopPropagation) {
    e.stopPropagation();
  }
  //IE8 and Lower
  else {
    e.cancelBubble = true;
  }
}

function toggleMenuNestedList(x) {
  var string = "ul#"+x.id.replace("Button","");
  // console.log(string);
  // uses jquery
  var display = $(string).css("display");
  string = string.replace("ul#","");
  var string2 = "glyphicon"+string.replace("NestedList","");
  // console.log(string2);
  if(display == "none")
  {
    closeAllLists();
    document.getElementById(string).style.display = "block";
    document.getElementById(string2).classList.remove('glyphicon-chevron-down');
    document.getElementById(string2).classList.add('glyphicon-chevron-up');
  }
  else
  {
    document.getElementById(string).style.display = "none";
    document.getElementById(string2).classList.remove('glyphicon-chevron-up');
    document.getElementById(string2).classList.add('glyphicon-chevron-down');
  }
  x.classList.toggle("change");
  // console.log(string);
}

function menuToggle(x){
  menuButtonToggle(x);
  actionNavSelf(x);
  actionHeader();
}

function menuButtonToggle(x) {
  x.classList.toggle("change");
}

function actionNavSelf(element) {
  if (element.classList.contains('change'))
  {
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
    $("#mainMenu").animate({marginLeft: '0px'});
    $("#mainContent").animate({marginLeft: '250px', marginRight: '-250px'});
    $("#mainMenuButton").animate({marginLeft: '194px'});
    $("#headingDepartmentText").animate({marginLeft: '20px'});
    $("#headingCollegeText").animate({marginLeft: '21px'});
    $("#mainContentOverlay").animate({left: '250px'});
    document.getElementById("mainContentOverlay").style.display = "block";
    // document.getElementById("mainMenu").style.width = "250px";
    // document.getElementById("mainContent").style.marginLeft = "250px";
    // document.getElementById("mainContent").style.marginRight = "-250px";
    // document.getElementById("mainMenuButton").style.marginLeft = "194px";
    // document.getElementById("headingDepartmentText").style.marginLeft = "20px";
    // document.getElementById("headingCollegeText").style.marginLeft = "21px";
  }
  else
  {
    $("#mainMenu").animate({marginLeft: '-250px'});
    $("#mainContent").animate({marginLeft: '0px', marginRight: '0px'});
    $("#mainMenuButton").animate({marginLeft: '22px'});
    $("#headingDepartmentText").animate({marginLeft: '79px'});
    $("#headingCollegeText").animate({marginLeft: '80px'});
    $("#mainContentOverlay").animate({left: '0px'});
    document.getElementById("mainContentOverlay").style.display = "none";
    // document.getElementById("mainMenu").style.width = "0";
    // document.getElementById("mainMenu").style.display = "none";
    // document.getElementById("mainContent").style.marginLeft = "0";
    // document.getElementById("mainContent").style.marginRight = "0";
    // document.getElementById("mainMenuButton").style.marginLeft = "22px";
    // document.getElementById("headingDepartmentText").style.marginLeft = "79px";
    // document.getElementById("headingCollegeText").style.marginLeft = "80px";
    // document.getElementById("mainContentOverlay").style.display = "none";
  }
}

function actionHeader()
{
  if (document.getElementById("headerRow").classList.contains('transparent'))
  {
    document.getElementById("headerRow").classList.remove("transparent");
    document.getElementById("headerRow").classList.add("transparent-revoked");
  }
  else if (document.getElementById("headerRow").classList.contains('transparent-revoked'))
  {
    document.getElementById("headerRow").classList.remove("transparent-revoked");
    document.getElementById("headerRow").classList.add("transparent");
  }
  actionBars();
}

function actionBars()
{
  if (document.getElementById("headerRow").classList.contains('transparent'))
  {
    var searchEles = document.getElementById("mainMenuButton").children;
    for(var i = 0; i < searchEles.length; i++)
    {
      if(searchEles[i].tagName == 'DIV')
      {
        searchEles[i].classList.remove("transparent-revoked");
        searchEles[i].classList.add("transparent");
      }
    }
  }
  else if (document.getElementById("headerRow").classList.contains('transparent-revoked'))
  {
    var searchEles = document.getElementById("mainMenuButton").children;
    for(var i = 0; i < searchEles.length; i++) {
      if(searchEles[i].tagName == 'DIV') {
        searchEles[i].classList.remove("transparent");
        searchEles[i].classList.add("transparent-revoked");
      }
    }
  }
}

// for mainSearch

function actionMainSearch()
{
  if(document.getElementById("mainSearchContainer").classList.contains("change"))
  {
    $("#mainSearchContainer").animate({right: '-100vw'});
    $("#mainContent").animate({marginLeft: '0px', marginRight: '0px'});
    document.getElementById("mainContentOverlay").style.display = "none";
    $("#mainContentOverlay").animate({left: '0px'});

    $("#mainSearchInput").focusout();
  }
  else
  {
    $("#mainSearchContainer").animate({right: '0px'});
    $("#mainContent").animate({marginLeft: '-100vw', marginRight: '100vw'});
    document.getElementById("mainContentOverlay").style.display = "block";
    $("#mainContentOverlay").animate({left: '-100vw'});

    $("#mainSearchInput").focus();
  }
  document.getElementById("mainSearchContainer").classList.toggle("change");
}

function searchToggle()
{
  if(document.getElementById("mainSearchOpenButton").classList.contains('change'))
  {
    // $("#mainMenuButton").attr("onclick","menuToggle(this);");
    //
    // $("#mainMenuButton").animate({marginLeft: '+=1'});
    $("#mainMenuButton").animate({left: '0px'});
  }
  else
  {
    // $("#mainMenuButton").attr("onclick","searchToggle();");
    //
    // $("#mainMenuButton").animate({marginLeft: '-=1'});
    $("#mainMenuButton").animate({left: '-100vw'});
  }
  document.getElementById("mainSearchOpenButton").classList.toggle("change");
  // menuButtonToggle(document.getElementById("mainMenuButton"));
  actionHeader();
  actionMainSearch();
}
