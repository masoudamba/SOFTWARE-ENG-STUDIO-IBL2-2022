<?php
require_once('connect.php');
session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
  <title>Laundry Services</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
    <link rel="shortcut icon" href="images/download.png"/>
  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="images/download.png" border="0" />
      <div class="topnav">
        <a href="usermanagement.php">Home</a>
      </div>
    </div>
   
  </div>
  <body>
    <div class="row">
    <div class="content">

      <div class="boxWrapper">


        <div class="">
          <h1 style="text-align:center">Promotion</h1>
            <br><br><br><br>
          <table>
                  <col width="5%">
                  <col width="15%">
                  <col width="5%">



                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Discount</th>
                  </tr>


                   <tr>
                      <td>1.</td>
                      <td>Discount for Gold member</td>
                      <td>15%</td>
                  </tr>
                  <tr>
                     <td>2.</td>
                     <td>Discount for Silver member</td>
                     <td>5%</td>
                 </tr>



              </table>
              <br><br><br><br>
              <h2 style="text-align:center">Infrom staff at counter to use promotion </h2>
              <br><br><br><br>
              <a href="usermanagement.php">
                <h2 style="text-align:center">Go back</h2>
              </a>
        </div>





      </div>

    </div>
  </div>

  <footer>
    <div class="footerContent">
      <div class="logoWrapper">
        <img class="logo" src="images/download.png" border="0" />
      </div>
      <div class="leftFooter">
        <h1 id="followUs">Follow Me on. . </h1>
        <div class="iconWrapper">
          <a href="https://www.facebook.com/">
            <img class="socialIcon" src="images/facebook.png" border="0" />
          </a>
          <a href="https://www.instagram.com/">
            <img class="socialIcon" src="images/ig.jpg" border="0" />
          </a>
          <a href="https://twitter.com/">
            <img class="socialIcon" src="images/twitter.png" border="0" />
          </a>
        </div>
      </div>
      <div class="rightFooter">
        <div class="memberCredit">
          <h1>Created by</h1>
        </div>
        <div class="nameList">
          <ul id="name">
            <li>Otieno Amba</li>
           
          </ul>

        </div>
      </div>
    </div>
  </footer>
  </body>

</html>
