<?php session_start();

		
			if(isset($_POST["btn"]))
			{
				$user=$_POST["t1"];
				
				
			
				$con=mysqli_connect("localhost","root","","college_website");
				if(!$con)
					die("cannot connect to server");
				else
				{
					$sql="select * from student_login where Enrollment_no='".$user."'";
				
				$rs=mysqli_query($con,$sql);
				$row=mysqli_fetch_array($rs);
				if($row)
				{
					//$name="select first_name||' '||last_name from student_login where enrollment_no='".$user."';
					$_SESSION["user"]=$row[0];//stores userid in session
					header("location:student_profile_edit.php");
				}
				else
				{
					echo "invalid userid/password";
				}
				}
				
			}
	?>


<html>
<body>
<form action="admin_home.php" method="post">
<lable>Enter enro. no.:</lebel>
<input type="text" name="t1">
<input type="submit" name="btn">
<br>
<button type="button"  onclick="location.href = 'admin_add_student.php'" class="btn btn-primary btn-lg">Add Student Information</button>
<br>
<button type="button"  onclick="location.href = 'admin_existing_student_info.php'" class="btn btn-primary btn-lg">Existing Student Information</button>
<br>
<button type="button"  onclick="location.href = 'admin_student_info.php'" class="btn btn-primary btn-lg">Registered Student Information</button>
<br>
<button type="button"  onclick="location.href = 'enquery_info.php'" class="btn btn-primary btn-lg">Enquery Information</button>

</form>
</body>
</html>