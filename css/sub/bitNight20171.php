<?php
header("Content-type: text/css; charset: UTF-8");
require("../../CONSTANTS.php");
?>

#bitNight20171 {
  display: block;
  height: 100%;
  font-family: 'Montserrat', sans-serif;
  color: #FFFFFF;
  background-image: url('<?php echo SITE_SERVER_BASE ?>assets/images/homeLanding/bitNight20171.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  position: fixed;
  width: 100%;
}

#landingDisplayText {
  position: absolute;
  left: 98px;
  top: 55px;
}

#landingDisplayTextSub {
  position: absolute;
  left: 98px;
  top: 111px;
}

#landingDisplayButton {
  font-family: 'Montserrat', sans-serif;
  position: absolute;
  top: 182px;
  left: 98px;
  text-shadow: 0 1px 0 #fff;
  background-image: -webkit-linear-gradient(top,#fff 0,#e0e0e0 100%);
  background-image: -o-linear-gradient(top,#fff 0,#e0e0e0 100%);
  background-image: -webkit-gradient(linear,left top,left bottom,from(#fff),to(#e0e0e0));
  background-image: linear-gradient(to bottom,#fff 0,#e0e0e0 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  background-repeat: repeat-x;
  border-color: #dbdbdb;
  border-color: #ccc;
}

#landingDisplayButton:hover {
  background-color: #e0e0e0;
  background-position: 0 -15px;
}
