<?php
session_start();
			if(isset($_SESSION["user"]))
			{
				$con=mysqli_connect("localhost","root","","college_website");
					if(!$con)
						die("cannot connect to server");
					else
					{
						$sql="select * from iemjee_student_basicinfo where emailid='".$_SESSION["user"]."'";
					$rs=mysqli_query($con,$sql);
					$row=mysqli_fetch_array($rs);
					if($row)
					{
						
					}
					}
			}
		//echo "<h2>".$_SESSION["user"]."</h2>";
					else
						header ("location:login_ses.php");
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
    <title>iemjee student profile</title>

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

<form action="iemjee_profile_home.php" method="post">
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
        <th><button type="button" style="width:200px" onclick="location.href = 'iemjee_logout.php'" class="btn btn-primary btn-lg">Log Out</button></th>
      </tr>
      <tr>
        <th><h2><b><?php echo $row[0]." ".$row[1] ?></b></h2></th>
        <th> <img src=<?php echo $row[2] ?> class="img-circle" height="100px" width="100px" alt="Avatar"></th>
      </tr>
    
	  
	  <tr>
        <th>Applied for:</th>
        <th><?php echo $row[6] ?></th>
      </tr>
	   <tr>
        <th>Stream applied for</th>
        <th><?php echo $row[7] ?></th>
      </tr>
	 
        <th>Email-id</th>
        <th><?php echo $row[3] ?></th>
      </tr>
	  <tr>
        <th>Phone no.</th>
        <th><?php echo $row[4] ?></th>
      </tr>
	  <tr>
	  <tr>
        <th>Date of birth</th>
        <th><?php echo $row[5] ?></th>
      </tr>
        
	 
	  <tr>
        <th>10th percentage</th>
        <th><?php echo $row[8] ?></th>
      </tr>
	  <tr>
        <th>12th percentage</th>
        <th><?php echo $row[9] ?></th>
      </tr>
	  <tr>
        <th>Father's name</th>
        <th><?php echo $row[10] ?></th>
      </tr>
	  <tr>
        <th>City</th>
        <th><?php echo $row[11] ?></th>
      </tr>
	  <tr>
        <th>Address</th>
        <th><?php echo $row[12] ?></th>
      </tr>
	  <tr>
        <th>Pin-code</th>
        <th><?php echo $row[13] ?></th>
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