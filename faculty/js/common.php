/* uses jquery -- start */

$(window).on("resize", function () {
  document.getElementById("headerRow").style.height = "auto";
  var height = $('#headerRow').css("height");
  // console.log(height);
  document.getElementById("headerRow").style.height = height;
  if(height != "74px")
  {
    document.getElementById("menuTitle").style.marginTop = (parseInt("14px".replace(/px/,"")) + ((parseInt(height.replace(/px/,""))-parseInt("74px".replace(/px/,"")))/2))+"px";
    document.getElementById("menuTitle").style.paddingBottom = (parseInt("28px".replace(/px/,"")) + ((parseInt(height.replace(/px/,""))-parseInt("74px".replace(/px/,"")))/2))+"px";
    document.getElementById("mainMenuButton").style.marginTop = (parseInt("17px".replace(/px/,"")) + ((parseInt(height.replace(/px/,""))-parseInt("74px".replace(/px/,"")))/2))+"px";
    document.getElementById("mainContentOverlay").style.top = height;
  }
  else
  {
    document.getElementById("menuTitle").style.marginTop = "14px";
    document.getElementById("menuTitle").style.paddingBottom = "28px";
    document.getElementById("mainMenuButton").style.marginTop = "17px";
    document.getElementById("mainContentOverlay").style.top = "74px";
  }
}).resize();

/* uses jquery -- end */

/* For menu */

function menuButtonToggle(x) {
  x.classList.toggle("change");
}

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function actionNav(element) {
  if (element.classList.contains('change'))
  {
    document.getElementById("mainMenu").style.width = "250px";
    document.getElementById("mainMenu").style.display = "block";
    document.getElementById("mainContent").style.marginLeft = "250px";
    document.getElementById("mainContent").style.marginRight = "-250px";
    document.getElementById("mainMenuButton").style.marginLeft = "-56px";
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
