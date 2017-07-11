<?php

header("Content-type: text/css; charset: UTF-8");
require("../../../CONSTANTS.php");

?>

@font-face {
  font-family: "Terminus";
  src: url('<?php echo SITE_SERVER_BASE ?>assets/fonts/terminus-ttf-4.40.1/TerminusTTF-4.40.1.ttf') format("truetype");
}

body {
  background: #000000;
}

/*
* Base structure
*/

#terminalWelcome {
  height: 100%;
  background-color: #000000;
  color: rgba(255,255,255,0.8);
  text-shadow: 0 1px 3px rgba(0,0,0,.5);
}

p#startlines {
  display: inline;
  color: rgba(255,255,255,0.8);
  font-family: Terminus;
  font-size: 18px;
}

p#welcomelines {
  display: inline;
  color: rgba(255,255,255,0.8);
  font-family: Terminus;
  font-size: 18px;
}

input#terminalInput {
  color: rgba(255,255,255,0.8);
  background: black;
  border: none;
  font-family: Terminus;
  font-size: 18px;
}

/* CSS Blinking cursor / Mac terminal
See : https://codepen.io/alandunning/pen/RWRrEW */

#terminalcursor {
  content: "";
  display: inline-block;
  background-color: rgba(255,255,255,0.8);
  vertical-align: top;
  width: 10px;
  height: 18px;
  margin-top: 5px;

  /*
  Animation paramaters:
  blink = animation-name,
  1s = animation-duration,
  step-end = animation-timing-function,
  infinite = animation-iteration-count
  */

}

@-webkit-keyframes blink {
  0% { opacity: 1.0; }
  50% { opacity: 0.0; }
  100% { opacity: 1.0; }
}

@keyframes blink {
  0% { opacity: 1.0; }
  50% { opacity: 0.0; }
  100% { opacity: 1.0; }
}

