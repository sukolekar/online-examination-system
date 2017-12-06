<?php
session_start();
extract($_SESSION);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>




<body>
  <div id="container">
<?php
include("database.php");
include("header.php");
extract($_POST);
if(isset($submit))
{
  $rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
  if(mysql_num_rows($rs)<1)
  {
    $found="N";
  }
  else
  {
    $_SESSION[login]=$loginid;
  }
}

?>


<div class="main">
<table width="100%" border="0">
  <tr>
    <td width="70%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor="#CC3300"><span class="style6"></span></td>
    <td width="29%" bgcolor="#CC3333"><div align="center" class="style1">User Login </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Wel come to Online Quiz</h1>


      <span class="style5"><img src="image/paathshala.jpg" width="129" height="100"><span class="style7"><img src="image/HLPBUTT2.JPG" width="50" height="50"><img src="image/BOOKPG.JPG" width="43" height="43"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
         

<p align="left" class="style5"><span class="style7" style="text-align:center;"><h1 style=text-color:red;>INSTRUCTIONS</h1> <br>
           
              <p>
                <ul>Resitration</ul>
                <ul>Login</ul>
                <ul>Select Subject For Quiz</ul>
                <ul>Attempt All The Quiz Questions</ul>
                <ul>Visit Dashbord For Quiz Result</ul>
            </p>
             
           </span></p>

          
        </blockquote>
    </div></td>
    <td valign="top"><form  name="form1" method="post" action="loged.php">
      <table class="f1" width="200" border="0">
        <tr>
          <td><span class="style2">Login ID:</span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password:</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><span class="style4">New User ? <a href="signup.php">Signup Free</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5"><img src="images/topleft.jpg" width="134" height="128">          </p>
        </div>
    </form></td>
  </tr>
</table>
</div>
</div>
 

</body>



</html>
