<?php
			if(isset($_POST["btn1"]))
			{
				$con=mysqli_connect("localhost","root","","college_website");
					if(!$con)
						die("cannot connect to server");
					else
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
	$t21=$_POST["t21"];
	
	$file_name=$_FILES["file"]["name"];
	$temp_name=$_FILES["file"]["tmp_name"];
	$path="C:/xampp/htdocs/college_website_new/uploads/".$file_name;
	$t4="uploads/".$file_name;
	move_uploaded_file($temp_name,$path);
	
	//$sql="insert into product values('".$pid."','".$pname."','".$db_path."','".$pdes."',".$pcost.")";
	$sql2="insert into iemjee_student_basicinfo values('".$t2."','".$t3."','".$t4."','".$t5."','".$t6."','".$t7."','".$t8."','".$t9."','.$t10.','.$t11.','".$t12."','".$t13."','".$t14."','".$t15."','".$t21."')";
	$sql3="insert into iemjee_login values('".$t5."','".$t21."')";
	//$sql3="insert into grade values(,'".$t16."','".$t17."','".$t18."','".$t19."','".$t20."')";
	
	$n=mysqli_query($con,$sql2);
	$n1=mysqli_query($con,$sql3);
	//$n1=mysqli_query($con,$sql3);
	if($n==1 && $n1==1)
	{
		print "Inserted Successfully";
		header("location:iemjee_login.php");
    
	}
	else
	{
		echo "Insertion failed!";
	}
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
    <title>IEMJEE Register</title>

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

<form action="student_register.php" method="post" enctype="multipart/form-data">
<div class="table1">
<div class="form">

<div class="container">
  <h2>Add profile details</h2>
<body>                                                            
  <div class="table-responsive">          
  <table class="table" style="width:650px">
    <thead>
	<tr>
      <tr>
        <th>First Name</th>
        <th><input type="text" class="form-control" name="t2" placeholder="Enter your first name" required></th>
      </tr>
      <tr>
        <th>Last Name</th>
        <th><input type="text" class="form-control" name="t3" placeholder="Enter your last name" required></th>
      </tr>
	  <tr>
        <th>Photo</th>
        <th><input type="file"  name="file"></th>
      </tr>
	  <tr>
        <th>Email-id</th>
        <th><input type="text" class="form-control" name="t5" placeholder="Enter your email id" required></th>
      </tr>
	  <tr>
        <th>Create password</th>
        <th><input type="password" class="form-control" name="t21" placeholder="Create your password" required></th>
      </tr>
	  <tr>
        <th>Confirm password</th>
        <th><input type="password" class="form-control" placeholder="Confirm your password" required></th>
      </tr>
	  <tr>
        <th>Phone no.</th>
        <th><input type="text" class="form-control" name="t6" placeholder="Enter your phone no." required></th>
      </tr>
	  <tr>
        <th>Date of birth</th>
        <th><input type="text" class="form-control" name="t7" placeholder="DD-MON-YY" required></th>
      </tr>
	  <tr>
        <th>Course</th>
        <th><input type="text" class="form-control" name="t8" placeholder="Enter your Course" required></th>
      </tr>
	  <tr>
        <th>Stream</th>
        <th><input type="text" class="form-control" name="t9" placeholder="Enter your stream" required></th>
      </tr>
	  <tr>
        <th>10th percentage</th>
        <th><input type="text" class="form-control" name="t10" placeholder="10th%" required></th>
      </tr>
	  <tr>
        <th>12th percentage</th>
        <th><input type="text" class="form-control" name="t11" placeholder="12th%" required></th>
      </tr>
	  <tr>
        <th>Father's name</th>
        <th><input type="text" class="form-control" name="t12" placeholder="Enter your father's name" required></th>
      </tr>
	  <tr>
        <th>City</th>
        <th><input type="text" class="form-control" name="t13" placeholder="Enter your city" required></th>
      </tr>
	  <tr>
        <th>Address</th>
        <th><input type="text" class="form-control" name="t14" placeholder="Enter your address" required></th>
      </tr>
	  <tr>
        <th>Pin-code</th>
        <th><input type="text" class="form-control" name="t15" placeholder="Enter your pin-code" required></th>
        
      </tr>
	  <th align="center">
	  <button type="button" style="width:200px" onclick="location.href = 'iemjee_login.php'" class="btn btn-primary">Back</button>
        </th>
        <th><button type="submit" class="btn btn-success" style="width:200px" name="btn1">Submit</button></th>
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