<?php
	session_start();
	if(isset($_SESSION["user"]))
		echo "Welcome ".$_SESSION["user"];
	else
		header ("location:login_ses.php");
?>
<center>
<a href="student_logout.php">Log Out</a>
</center>