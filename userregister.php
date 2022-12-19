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
        <a href="usersignin.php">Log in</a>
        <a href="userregister.php">Sign up</a>
        <a href="usermanagement.php">Home</a>
      </div>
    </div>

  </div>
  <body>

    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign Up (USER)</h1>
        <hr>
        <br>
        <form action="userfinishregister.php" method="post">


          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstName" placeholder="Your name..">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastName" placeholder="Your last name..">


          <label for="status">Gender</label>
          <select class="statusSelect" name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>

          <label for="mobileNo">Mobile number</label>
          <input type="text" id="mobileNo" name="mobileNo" placeholder="Enter Phonenumber..">

          <label for="address">Address</label>
          <input type="address" id="address" name="address" placeholder="Mayor Rd, Tumaini, Gataka, Olekasasi,Kiserian">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="Your Email">

          <label for="userId">User id</label>
          <input type="text" id="userId" name="userId" placeholder="Your userId">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">

          <label for="rePassword">Retype Password</label>
          <input type="password" id="rePassword" name="rePassword" placeholder="Your password">


          <input type="submit" name="userRegisterSubmit" value="Submit">
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
