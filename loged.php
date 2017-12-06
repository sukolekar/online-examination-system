<?php
session_start();
?>

<?php
include("database.php");
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
    $_SESSION['login']=$loginid;
  }
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<style type="text/css">
  .{
    margin: 0;
    padding: 0;
  }
</style>
</head>

<body>

  <div id="container">
  	<div class="main">
<?php 
include("header.php");

  	if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Wellcome to Online Exam Portal</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>

  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';		
}
else
{

	echo "<h1 class=head1 >Sorry<h1>";
}


?>
</div>
</div>
</body>

</head>
	</html>
