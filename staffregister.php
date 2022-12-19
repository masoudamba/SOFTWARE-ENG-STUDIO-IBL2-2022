<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
  <title>laundry Sevices</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
    <link rel="shortcut icon" href="images/download.png"/>
    <style>
    .navactive {
        color: white;
        background-color: #bcb562;
    }
    </style>
  </head>
  <div class="header">
    <div class="logoWrapper">
    
      <img class="logo" src="images/download.png" border="0" />
      <div class="topnav">
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="management.php">Home</a>
      </div>
    </div>

  </div>
  <body>

    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign Up (STAFF,ADMIN)</h1>
        <hr>
        <br>
        <form action="finishregister.php" method="post">
          <label for="status">Status</label>
          <select class="statusSelect" name="status">
            <option value="ADMIN">Admin</option>
            <option value="STAFF">Staff</option>
          </select>

          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstName" placeholder="Your name..">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastName" placeholder="Your last name..">

          <label for="status">Gender</label>
          <select class="statusSelect" name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
          
          <label for="citizenNo">Citizen Number</label>
          <input type="text" id="citizenNo" name="citizenNumber" placeholder="Ex. 114220014xx">

          <label for="dob">Date of birth</label>
          <input type="date" id="dob" name="dateOfBirth" placeholder=""><br>

          <label for="mobileNo">Mobile Number</label>
          <input type="text" id="mobileNo" name="mobileNumber" placeholder="Ex. 0711111111">

          <label for="address">Address</label>
          <input type="address" id="address" name="address" placeholder="Mayor Rd, Tumaini, Gataka, Olekasasi,Kiserian">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="Your Email">

          <label for="userid">ID for this website</label>
          <input type="text" id="userid" name="userId" placeholder="Your ID">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">

          <label for="rePassword">Retype Password</label>
          <input type="password" id="rePassword" name="rePassword" placeholder="Your password">


          <input type="submit" name="staffRegisterSubmit"value="Submit">
        </form>
      </div>
    </div>
      <div class="regisImageWrapper">
        <img src="images/regis.jpg" alt="">
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
