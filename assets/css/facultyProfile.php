<?php

header("Content-type: text/css; charset: UTF-8");
require("../../CONSTANTS.php");

?>

#profName{

  background-color:#0077FF;
  color: #FFFFFF;
  font-family: 'Raleway', sans-serif;
  margin:auto;
  width: 300px;

}


#profDP{
  padding-top: 10px;
  overflow: hidden;
  padding-bottom: 10px;
}

#profIMG{
  background-image: url('<?php echo SITE_SERVER_BASE ?>faculty/nizar.jpg');
  background-size: 250px 250px;
  height: 250px;
  width: 250px;
  display: block;
  margin: auto;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 119, 0.19);
  -webkit-transition: box-shadow 1s;
}

#profIMG:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 150, 0.5), 0 6px 20px 0 rgba(0, 0, 150, 0.19);
}


.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,255,0.2);
    transition: 0.3s;
    border: 1px solid #ddd;
    margin:2%;
    padding-left: 0px;
    padding-right: 0px;
    border-radius: 3px;
    font-family: 'Roboto condensed';

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,255,0.4);
  border-color: #acd;
}

.cardHeader{
  background-color:#FFFFFF;
  color: #0077FF;
  transition: 0.3s;
  font-family: 'Roboto condensed',sans-serif;
  font-size: 27px;
}

.cardHeader:hover{
  background-color:#0077FF;
  color: #FFFFFF;

}


.noMargin{
  margin-top: 0px;
  margin-left:0px;
  margin-right: 0px;
}