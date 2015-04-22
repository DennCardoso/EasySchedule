<?php
include('changepw.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EasySchedule</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="container">
    <div id="header"><h1>EasySchedule</h1></div>
  <div id="menu"> <a href="index_logged.php">HOME</a> &nbsp; &nbsp; &nbsp; &nbsp; 
                  <a href="aboutus_logged.php">ABOUT US</a> &nbsp; &nbsp; &nbsp; &nbsp; 
                  <!--<a href="login_start.php">LOGIN</a> &nbsp; &nbsp; &nbsp; &nbsp;-->
                  <!--<a href="signup.php">SIGN UP</a>-->
                  <a href="myschedule.php">MY SCHEDULE</a> &nbsp; &nbsp; &nbsp; &nbsp;
                  <a href="myaccount.php">MY ACCOUNT</a>
  </div>
  <div id="sidebar">
    <h1>Account</h1>
  </div>
  <div id="main">
    <div class="container">
      <!--<h2>Account Management</h2>-->
      <form action="logout.php" method="post">
      <input type="submit" value="Log-out" name="logoutsubmit">
      </form>
      <br>
      <form action="deleteacc.php" method="post">
      <input type="submit" value="Delete Account" name="deleteaccsubmit">
      </form>
      <!--<br>-->
      <form action="" method="post">
          <h2>Change password:</h2>
          <table>
              <tr>
                  <td><label>Old Password</label><br><input type="password" name="oldpw"></td>
              </tr>
              <tr>
                  <td><label>New Password</label><br><input type="password" name="newpw1"></td>
              </tr>
              <tr>
                  <td><label>New Password</label><br><input type="password" name="newpw2"></td>
              </tr>
              <!--<br><br>-->
              <tr> 
                  <td><input type="submit" value="Change Password" name="changepwsubmit"></td>
              </tr>
          </table>
      </form>
      <?php echo $changepwerror ?>
    </div>
  </div>
  <div id="footer"> &copy;2007 Keep it Simple &nbsp;<span class="separator">|</span>&nbsp; it Simple Design by <a href="http://www.realitysoftware.ca">Reality Software</a> </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>

