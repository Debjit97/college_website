<?php
session_start();
			if(isset($_SESSION["user"]))
			{
			
				$con=mysqli_connect("localhost","root","","college_website");
					if(!$con)
						die("cannot connect to server");
					else
					{
						$sql="select * from student_basicinfo where Enrollment_no='".$_SESSION["user"]."'";
						$sql1="select * from grade where Enrollment_no='".$_SESSION["user"]."'";
					$rs=mysqli_query($con,$sql);
					$row=mysqli_fetch_array($rs);
					$rs1=mysqli_query($con,$sql1);
					$row1=mysqli_fetch_array($rs1);
					if($row)
					{
						
					}
					}
			}
		//echo "<h2>".$_SESSION["user"]."</h2>";
					else
						header ("location:login_ses.php");
			
			
			if(isset($_POST["btn1"]))
			{
	
	$t2=$_POST["t2"];
	$t3=$_POST["t3"];
	$t5=$_POST["t5"];
	$t6=$_POST["t6"];
	$t7=$_POST["t7"];
	$t8=$_POST["t8"];
	$t9=$_POST["t9"];
	$t10=$_POST["t10"];
	$t11=$_POST["t11"];
	$t12=$_POST["t12"];
	$t13=$_POST["t13"];
	$t14=$_POST["t14"];
	$t15=$_POST["t15"];
	$t16=$_POST["t16"];
	$t17=$_POST["t17"];
	$t18=$_POST["t18"];
	$t19=$_POST["t19"];
	$t20=$_POST["t20"];
	

	$sql2="update student_basicinfo set first_name='".$t2."',last_name='".$t3."',course='".$t5."',startingdate='".$t6."',endingdate='".$t7."',mailid='".$t8."',phoneno='".$t9."',city='".$t10."',address='".$t11."',stream='".$t12."' where Enrollment_no= '".$_SESSION["user"]."'";
	$sql3="update grade set first='".$t13."',second='".$t14."',third='".$t15."',fourth='".$t16."',fifth='".$t17."',sixth='".$t18."',seventh='".$t19."',eight='".$t20."' where Enrollment_no= '".$_SESSION["user"]."'";
	
	$n=mysqli_query($con,$sql2);
	$n1=mysqli_query($con,$sql3);
	if($n==1 && $n1=1)
	{
		print "Upadated Successfully";
		header("location:admin.php");
    
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
</body>

<form action="student_profile_edit.php" method="post">
<div class="table1">
<div class="form">

<div class="container">
  
<body>                                                            
  <div class="table-responsive">          
  <table class="table" style="width:650px">
    <thead>
	<tr>
	<tr>
        <th><h2>Profile details</h2></th>
        <th><button type="button" style="width:200px" onclick="location.href = 'admin.php'" class="btn btn-primary btn-lg">Back</button></th>
      </tr>
      <tr>
        <th>First Name</th>
        <th><input type="text" class="form-control" name="t2" default value="<?php echo $row[1]?>"></th>
      </tr>
      <tr>
        <th>Last Name</th>
        <th><input type="text" class="form-control" name="t3" default value="<?php echo $row[2]?>"></th>
      </tr>
	  
	  <tr>
        <th>Course</th>
        <th><input type="text" class="form-control" name="t5" default value="<?php echo $row[4]?>"></th>
      </tr>
	  <tr>
        <th>Starting Date</th>
        <th><input type="text" class="form-control" name="t6" default value="<?php echo $row[5]?>"></th>
      </tr>
	  <tr>
        <th>Ending Date</th>
        <th><input type="text" class="form-control" name="t7" default value="<?php echo $row[6]?>"></th>
      </tr>
	  <tr>
        <th>Email-id</th>
        <th><input type="text" class="form-control" name="t8" default value="<?php echo $row[7]?>"></th>
      </tr>
	  <tr>
        <th>Phone no.</th>
        <th><input type="text" class="form-control" name="t9" default value="<?php echo $row[8]?>"></th>
      </tr>
	  <tr>
        <th>City</th>
        <th><input type="text" class="form-control" name="t10" default value="<?php echo $row[9]?>"></th>
      </tr>
	  <tr>
        <th>Address</th>
        <th><input type="text" class="form-control" name="t11" default value="<?php echo $row[10]?>"></th>
      </tr>
	  <tr>
        <th>Stream</th>
        <th><input type="text" class="form-control" name="t12" default value="<?php echo $row[11]?>"></th>
      </tr>
	  <tr>
        <th><h2>Grade in CGPA</h2></th>
      </tr>
	  <tr>
        <th>First Semester</th>
        <th><input type="text" class="form-control" name="t13" default value="<?php echo $row1[1]?>"></th>
      </tr>
	  <tr>
        <th>Second Semester</th>
        <th><input type="text" class="form-control" name="t14" default value="<?php echo $row1[2]?>"></th>
      </tr>
	  <tr>
        <th>Third Semester</th>
        <th><input type="text" class="form-control" name="t15" default value="<?php echo $row1[3]?>"></th>
      </tr>
	  <tr>
        <th>Fourth Semester</th>
        <th><input type="text" class="form-control" name="t16" default value="<?php echo $row1[4]?>"></th>
      </tr>
	  <tr>
        <th>Fifth Semester</th>
        <th><input type="text" class="form-control" name="t17" default value="<?php echo $row1[5]?>"></th>
      </tr>
	  <tr>
        <th>Sixth Semester</th>
        <th><input type="text" class="form-control" name="t18" default value="<?php echo $row1[6]?>"></th>
      </tr>
	  <tr>
        <th>Seventh Semester</th>
        <th><input type="text" class="form-control" name="t19" default value="<?php echo $row1[7]?>"></th>
      </tr>
	  <tr>
        <th>Eight Semester</th>
        <th><input type="text" class="form-control" name="t20" default value="<?php echo $row1[8]?>"></th>
      </tr>
	  <tr>
        <th></th>
        <th><button type="submit" class="btn btn-success" style="width:200px" name="btn1">Save</button></th>
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