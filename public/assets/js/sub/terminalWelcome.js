var lines = "Do you want to know more? (yes/no)";
i=0;
var text = '';
var inputText = '';

function checkForYes() {
  setTimeout(function () {
    inputText = document.getElementById('terminalInput').value;
    inputText = inputText.toLowerCase();
    if(inputText ==  "yes")
    {
      // alert(inputText); // Debug code.
      window.location.href = window.location.href+"about";
    }
    checkForYes();
  }, 400);
}

function loopLi() {
  setTimeout(function () {
    text += lines.charAt(i);
    i=i+1;
    document.getElementById("welcomelines").innerHTML = text;
    if( i < lines.length ) {
      loopLi();
    }
    else {
      // document.getElementById("terminalcursor").style.WebkitAnimation = "blink 1s step-end infinite";
      // document.getElementById("terminalcursor").style.animation= "blink 1s step-end infinite";
      document.getElementById("terminalcursor").style.display= "none";
      document.getElementById("terminalInput").style.display= "block";
      if(document.getElementById("mainMenuButton").classList.contains('change') || document.getElementById("mainSearchContainer").classList.contains('change'))
      {
        //do nothing
      }
      else
      {
        document.getElementById("terminalInput").focus();
      }
      checkForYes();
    }
  }, 40);
}

$("div#content").load(function(){
  loopLi();
});

// code to enable input like a terminal
$("html").click(function(){
  if(document.getElementById("mainMenuButton").classList.contains('change') || document.getElementById("mainSearchContainer").classList.contains('change'))
  {
    //do nothing
  }
  else
  {
    document.getElementById("terminalInput").focus();
  }
});
