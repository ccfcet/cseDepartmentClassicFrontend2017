document.getElementById("headerRow").classList.add('transparent');

var searchEles = document.getElementById("mainMenuButton").children;
for(var i = 0; i < searchEles.length; i++)
{
  if(searchEles[i].tagName == 'DIV')
  {
    searchEles[i].classList.add("transparent");
  }
}

document.getElementById("searchSVG").setAttribute('stroke', "rgba(255,255,255,0.5)");
