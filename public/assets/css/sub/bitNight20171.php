<?php

header("Content-type: text/css; charset: UTF-8");
require("../../../CONSTANTS.php");

?>

#bitNight20171 {
  display: block;
  font-family: 'Montserrat', sans-serif;
  color: rgba(255,255,255,0.9);
  height: 100%;
  position: fixed;
  width: 100%;
  top: 0px;
}

#landingDisplayText {
  position: absolute;
}

#landingDisplayTextSub {
  position: absolute;
}

#landingDisplayButton {
  font-family: 'Montserrat', sans-serif;
  position: absolute;
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

@media screen and (max-height: 599px) and (max-width: 703px) {

  #bitNight20171 {
    background-image: url('<?php echo SITE_SERVER_BASE ?>assets/images/homeLanding/bitNight20172.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }

  #landingDisplayText {
    left: 8px;
    top: 165px;
  }

  #landingDisplayTextSub {
    left: 8px;
    top: 221px;
  }

  #landingDisplayButton {
    left: 8px;
    top: 292px;
  }
}

@media screen and (min-height: 400px) {
  #bitNight20171 {
    background-image: url('<?php echo SITE_SERVER_BASE ?>assets/images/homeLanding/bitNight20172.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }

  #landingDisplayText {
    left: 38px;
    top: 165px;
  }

  #landingDisplayTextSub {
    left: 38px;
    top: 221px;
  }

  #landingDisplayButton {
    left: 38px;
    top: 292px;
  }
}

@media screen and (max-height: 500px) and (max-width: 607px), screen and (min-height: 400px) and (max-width: 600px) {

  #bitNight20171 {
    background-image: url('<?php echo SITE_SERVER_BASE ?>assets/images/homeLanding/bitNight20171.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }


  #landingDisplayText {
    left: 8px;
    top: 125px;
  }

  #landingDisplayTextSub {
    left: 8px;
    top: 181px;
  }

  #landingDisplayButton {
    left: 8px;
    top: 252px;
  }

}

@media screen and (min-height: 600px) and (min-width: 704px) {

  #bitNight20171 {
    background-image: url('<?php echo SITE_SERVER_BASE ?>assets/images/homeLanding/bitNight20172.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }

  #landingDisplayText {
    left: 58px;
    top: 280px;
  }

  #landingDisplayTextSub {
    left: 58px;
    top: 336px;
  }

  #landingDisplayButton {
    left: 58px;
    top: 407px;
  }
}

@media screen and (min-height: 1000px) and (min-width: 1000px) {

  #landingDisplayText {
    left: 98px;
    top: 350px;
  }

  #landingDisplayTextSub {
    left: 98px;
    top: 406px;
  }

  #landingDisplayButton {
    left: 98px;
    top: 477px;
  }
}

@media screen and (min-height: 320px) and (max-width: 320px) {
  #bitNight20171 {
    background-image: url('<?php echo SITE_SERVER_BASE ?>assets/images/homeLanding/bitNight20171.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }

  #landingDisplayText {
    left: 8px;
    top: 110px;
    font-size: 30px;
  }

  #landingDisplayTextSub {
    left: 8px;
    top: 155px;
    font-size: 18px;
  }

  #landingDisplayButton {
    left: 8px;
    top: 213px;
    font-size: 16px;
  }
}

@media screen and (min-height: 300px) and (max-height: 320px) and (max-width: 320px) {

  #bitNight20171 {
    background-color: #3C3C3C;
    background-image: none;
  }

  #landingDisplayText {
    left: 41px;
    top: 109px;
    font-size: 28px;
  }

  #landingDisplayTextSub {
    left: 41px;
    top: 155px;
    font-size: 20px;
  }

  #landingDisplayButton {
    left: 41px;
    top: 222px;
    font-size: 20px;
  }
}

@media screen and (max-height: 300px)
{

  #bitNight20171 {
    background-color: #3C3C3C;
    background-image: none;
  }

  #landingDisplayText {
    left: 41px;
    top: 75px;
    font-size: 28px;
  }

  #landingDisplayTextSub {
    left: 41px;
    top: 116px;
    font-size: 20px;
  }

  #landingDisplayButton {
    left: 41px;
    top: 174px;
    font-size: 20px;
  }
}

@media screen and (min-height: 260px) and (min-width: 260px) and (max-height: 290px) and (max-width: 290px) {

  #bitNight20171 {
    background-color: #3C3C3C;
    background-image: none;
  }

  #landingDisplayText {
    left: 21px;
    top: 83px;
    font-size: 28px;
  }

  #landingDisplayTextSub {
    left: 21px;
    top: 128px;
    font-size: 20px;
  }

  #landingDisplayButton {
    left: 21px;
    top: 190px;
    font-size: 20px;
  }
}

@media screen and (min-height: 1000px) and (min-width: 1600px) {
  #bitNight20171 {
    background-size: cover;
    background-repeat: no-repeat;
  }

  #landingDisplayText {
    left: 98px;
    top: 400px;
  }

  #landingDisplayTextSub {
    left: 98px;
    top: 456px;
  }

  #landingDisplayButton {
    left: 98px;
    top: 527px;
  }
}

@media screen and (min-height: 400px) and (min-width: 900px) and (max-height: 599px) and (max-width: 1100px) {
  #landingDisplayText {
    left: 38px;
    top: 205px;
  }

  #landingDisplayTextSub {
    left: 38px;
    top: 261px;
  }

  #landingDisplayButton {
    left: 38px;
    top: 332px;
  }
}

@media screen and (min-height: 1920px) and (min-width: 1200px) {
  #bitNight20171 {
    background-size: cover;
    background-repeat: no-repeat;
  }
}

@media screen and (min-height: 400px) and (min-width: 900px) and (max-height: 599px) and (max-width: 1100px) {
  #landingDisplayText {
    left: 38px;
    top: 205px;
  }

  #landingDisplayTextSub {
    left: 38px;
    top: 261px;
  }

  #landingDisplayButton {
    left: 38px;
    top: 332px;
  }
}
