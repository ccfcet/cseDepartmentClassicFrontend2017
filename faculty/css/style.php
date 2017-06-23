@import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed|Raleway|Montserrat');

body
{
  overflow-x: hidden;

}

.menuButtonContainer
{
  display: inline-block;
  cursor: pointer;
  margin-left: 22px;
  margin-top: 17px;
  position: absolute;
  z-index: 1;
}

.bar1, .bar2, .bar3
{
  width: 35px;
  height: 5px;
  background-color: #CCE4FF;
  margin: 6px 0;
  transition: 0.4s;
}

.change .bar1
{
  -webkit-transform: rotate(-45deg) translate(-7px, 7px) ;
  transform: rotate(-45deg) translate(-7px, 7px) ;
}

.change .bar2
{
  opacity: 0;
}

.change .bar3
{
  -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
  transform: rotate(45deg) translate(-8px, -8px) ;
}

#headerRow
{
  min-height: 73.5px;
  background: #0077FF;
}

#headingDepartmentText {
  font-family: 'Open Sans Condensed', sans-serif;
  margin-left: 79px;
  color: #FFFFFF;
  top: 6px;
  position: relative;
}

#headingCollegeText {
  font-family: 'Raleway', sans-serif;
  margin-left: 80px;
  color: #FFFFFF;
  top: 4px;
  position: relative;
  margin-bottom: -1px;
  font-weight: 700;
  padding-bottom: 22px;
}

#mainMenu {
  display: none;
  background-color: #0077FF;
  float: left;
  height: 100vh;
}

#mainMenu a {
  font-family: 'Montserrat', sans-serif;
  background-color: #0077FF;
  color: #fff;
  display: block;
  padding: 8px;
  text-decoration: none;
  padding-left: 21px;
  border-style: solid;
  border-left-width: 0px;
  border-right-width: 0px;
  border-top-width: 0px;
  border-bottom-width: 1px;
  border-color: #006DE7;
}

#mainMenu a:hover {
  background-color: #006DE7;
}

#mainMenu ul {
  list-style-type: none;
}

#mainMenu ul li {
}

h4#menuTitle {
  font-family: 'Montserrat', sans-serif;
  padding-left: 20px;
  padding-top: 12px;
  padding-bottom: 28px;
  color: #FFFFFF;
  margin-top: 14px;
  border-style: solid;
  border-width: 0px 0px 1px 0px;
  margin-bottom: 0px;
  border-color: #006DE7;
}

#mainContent {
  position: relative;
  left : 0px;
  right: 0px;
  z-index: 0;
}

#mainContentOverlay {
  display: none;
  position: fixed;
  height: 100%;
  width: 100%;
  top: 74px;
  left: 250px;
  background-color: rgba(0, 0, 0, 0.75);
}


#profName{

  background-color:#0077FF;
  color: #FFFFFF;
  font-family: 'Raleway', sans-serif;
  margin-left: 40%;
  margin-right: 40%;
  /*width: 50%;
  display: block;
  margin: auto;
*/}

#profDP{
  padding-top: 10px;
  overflow: hidden;
  padding-bottom: 10px;
}

#profIMG{
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
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border: 1px solid #ddd;
    margin:2%;
    padding-left: 0px;
    padding-right: 0px;
   
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4);
}


.row{
  margin-top: 0px;
  margin-left:0px;
  margin-right: 0px;
}

.cardHeader{
  background-color:#0077FF;
  color: white;
  font-family: 'Montserrat',sans-serif;
  font-size: 27px;
}