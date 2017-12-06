<div id="container">
<div id="heading">
	
		<img id="logo" src="ml.png" width="100px" height="100px">
		<div style="clear:both;display: inline-block;"></div>
		<h1><span style="color:red">Online</span> Examinaion System</h1>
	
	</div>
	
	<div id="nav">
		<ul>
		<?php @$_SESSION['login']; 
  		error_reporting(1);
  		?>
			
			<?php
			if(isset($_SESSION['login']))
			{
			 echo "<a class=\"current\" href=\"loged.php\"><li>Dashboard</li></a><a href=\"signout.php\"><li>Logout</li></a>";
			 }

			 else
			 {
			 	echo "<a class=\"current\" href=\"index.php\"><li>Home</li></a>
			<a href=\"signup.php\"><li>Registration</li></a>";
			 }
			?>
		</ul>
		<div style="clear:both"></div>
	</div>
</div>


  

	

