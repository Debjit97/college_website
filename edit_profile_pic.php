<?php
session_start();
			if(isset($_SESSION["user"]))
			{
				
				$con=mysqli_connect("localhost","root","","college_website");
					if(!$con)
						die("cannot connect to server");
					else
					{
						/*$sql="select * from student_basicinfo where Enrollment_no='".$_SESSION["user"]."'";
						$sql1="select * from grade where Enrollment_no='".$_SESSION["user"]."'";
					$rs=mysqli_query($con,$sql);
					$row=mysqli_fetch_array($rs);
					$rs1=mysqli_query($con,$sql1);
					$row1=mysqli_fetch_array($rs1);
					if($row)
					{
						
					}*/
					}
			}
		//echo "<h2>".$_SESSION["user"]."</h2>";
					else
						header ("location:login_ses.php");
			
			
			if(isset($_POST["btn1"]))
			{
				$file_name=$_FILES["file"]["name"];
	$temp_name=$_FILES["file"]["tmp_name"];
	$path="C:/xampp/htdocs/college_website_new/uploads/".$file_name;
	$t1="uploads/".$file_name;
	move_uploaded_file($temp_name,$path);
	
	

	$sql2="update student_basicinfo set photo='".$t1."' where Enrollment_no= '".$_SESSION["user"]."'";
	/*$sql3="update grade set first='".$t13."',second='".$t14."',third='".$t15."',fourth='".$t16."',fifth='".$t17."',sixth='".$t18."',seventh='".$t19."',eight='".$t20."' where Enrollment_no= '".$_SESSION["user"]."'";*/
	
	$n=mysqli_query($con,$sql2);
	/*$n1=mysqli_query($con,$sql3);*/
	if($n==1)
	{
		print "Upadated Successfully";
		header("location:student_profile_home.php");
    
	}
	else
	{
		echo "update failed!";
	}
}
?>














<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
		<link rel="icon" href="iemlogo.png" type="image/png" /> 
		
    <title>Student profile edit</title>

    <!-- BOOTSTRAP CORE STYLE  -->
	<link rel="stylesheet" href="student_profile_edit.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- FLEXSLIDER STYLE  -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css" />
     <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

 <div class="navbar navbar-inverse set-radius-zero" >
       
   <div class="container">
  
               <div class="navbar-header">
               
                 
                <a href="index.html">

                    <img src="assets/img/logo.jpg" />
                    <br>
                </a>

            </div>
            <div class="right-div">
            </div>
    </div>
    </div>
    <!-- LOGO HEADER END-->
    
    </div>
	<br>
	<br><br>
</body>

<form action="edit_profile_pic.php" method="post" enctype="multipart/form-data">
<div class="table1">
<div class="form">

<div class="container">
  
<body>                                                            
  <div class="table-responsive">          
  <table class="table" style="width:650px">
    <thead>
	<tr>
	<tr>
        <th><h2>Edit profile picture</h2></th>
        <th></th>
      </tr>
      <tr>
        <th>Enter the new image</th>
        <th><input type="file"  name="file"></th>
      </tr>
	  <tr>
        <th><button type="button" style="width:200px" onclick="location.href = 'student_profile_home.php'" class="btn btn-primary btn-lg">Back</button></th>
        <th><button type="submit" style="width:200px" class="btn btn-success btn-lg" name="btn1">Submit</button></th>
      </tr>
      
  </table>
  
  <br>
  </div>
  </body>
</div>
</div>
</div>
</form>

</html>