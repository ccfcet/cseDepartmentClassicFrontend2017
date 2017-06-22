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

/* uses jquery -- end */

/* For menu */

function menuToggle(x){
  menuButtonToggle(x);
  actionNavSelf(x);
  actionHeader();
}

function menuButtonToggle(x) {
  x.classList.toggle("change");
}

/* For accodion menu action */

function closeAllLists() {

}

function toggleMenuNestedList(x) {
  var string = "ul#"+x.id.replace("Button","");
  // console.log(x.id);
  // uses jquery
  var display = $(string).css("display");
  string = string.replace("ul#","");
  var string2 = "glyphicon"+string.replace("NestedList","");
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

// function actionNav(element) {
//   if ($(".actionNavOverride")[0]){
//     // Override of values present.
//     actionNavOverride(element,$(".actionNavOverride").attr('data-extraMarginLeftProvided'));
// }
// else {
//   actionNavSelf(element);
// }
// }

function actionNavSelf(element) {
  if (element.classList.contains('change'))
  {
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
    document.getElementById("mainMenu").style.width = "250px";
    document.getElementById("mainMenu").style.display = "block";
    document.getElementById("mainContent").style.marginLeft = "250px";
    document.getElementById("mainContent").style.marginRight = "-250px";
    document.getElementById("mainMenuButton").style.marginLeft = "194px";
    document.getElementById("headingDepartmentText").style.marginLeft = "20px";
    document.getElementById("headingCollegeText").style.marginLeft = "21px";
    document.getElementById("mainContentOverlay").style.display = "block";
  }
  else
  {
    document.getElementById("mainMenu").style.width = "0";
    document.getElementById("mainMenu").style.display = "none";
    document.getElementById("mainContent").style.marginLeft = "0";
    document.getElementById("mainContent").style.marginRight = "0";
    document.getElementById("mainMenuButton").style.marginLeft = "22px";
    document.getElementById("headingDepartmentText").style.marginLeft = "79px";
    document.getElementById("headingCollegeText").style.marginLeft = "80px";
    document.getElementById("mainContentOverlay").style.display = "none";
  }
}

// function actionNavOverride(element, extraMarginLeftProvided) {
//   if (element.classList.contains('change'))
//   {
//     /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
//     document.getElementById("mainMenu").style.width = "250px";
//     document.getElementById("mainMenu").style.display = "block";
//     document.getElementById("mainContent").style.marginLeft = "250px";
//     document.getElementById("mainContent").style.marginRight = "-250px";
//     document.getElementById("mainMenuButton").style.marginLeft = "194px";
//     document.getElementById("headingDepartmentText").style.marginLeft = "20px";
//     document.getElementById("headingCollegeText").style.marginLeft = "21px";
//     document.getElementById("mainContentOverlay").style.display = "block";
//   }
//   else
//   {
//     document.getElementById("mainMenu").style.width = "0";
//     document.getElementById("mainMenu").style.display = "none";
//     document.getElementById("mainContent").style.marginLeft = "0";
//     document.getElementById("mainContent").style.marginRight = "0";
//     var windowWidth = $(window).width();
//     var windowWidthUnit = parseInt(windowWidth/100)+"px";
//     var extraMarginLeftToBeProvided = (parseInt(extraMarginLeftProvided.replace(/vw/,""))*parseInt(windowWidthUnit.replace(/px/,"")))+"px";
//     document.getElementById("mainMenuButton").style.marginLeft = (parseInt(extraMarginLeftToBeProvided.replace(/px/,""))+parseInt("22px".replace(/px/,"")))+"px";
//     document.getElementById("headingDepartmentText").style.marginLeft = (parseInt(extraMarginLeftToBeProvided.replace(/px/,""))+parseInt("79px".replace(/px/,"")))+"px";
//     document.getElementById("headingCollegeText").style.marginLeft = (parseInt(extraMarginLeftToBeProvided.replace(/px/,""))+parseInt("80px".replace(/px/,"")))+"px";;
//     document.getElementById("mainContentOverlay").style.display = "none";
//   }
// }

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
