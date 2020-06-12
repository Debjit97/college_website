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
    <title>Admin home</title>

    <!-- FONT AWESOME STYLE  -->
  <link href="assets/css/font-awesome.css" rel="stylesheet"> 
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="assets/css/lsb.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" property="" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    
</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  href="index.html">

                    <img src="assets/img/logo.jpg" />
                    <br>
                </a>

            </div>
        </div>
    </div>
    <div class="container">
        <h3 align="CENTER"><strong>CONTROL CENTER</strong></h3>
        <button type="button" class="btn btn-info ribbon" data-toggle="modal" data-target="#myModal" ><strong>ENROLLED SYUDENTS</strong></button>
        <button type="button" class="btn btn-info ribbon" onclick="location.href = 'admin_student_info.php'"><strong>REGISTERED STUDENT</strong></button>
        <button type="button" class="btn btn-info ribbon" onclick="location.href = 'enquery_info.php'"><strong>QUERYS AND EMAILS</strong></button>
        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Existing Student Control</h4>
        </div>
        <div class="modal-body">
         <form action="admin.php" method="post">
             <div class="form-group">
                <label for="inputEnrNo">Enrollment No</label>
                <input class="form-control" placeholder="Student Enrollment No" type="text" id="inputEnrNo" name="t1">
                <button type="submit" class="btn btn-success" name="btn"><strong>GO</strong></button>
         </form>
        </div>
        <div class="modal-footer">
            
             <button type="button" class="btn btn-default" onclick="location.href = 'admin_existing_student_info.php'"><strong>VIEW STUDENT LIST</strong></button>
             <button type="button" class="btn btn-danger" onclick="location.href = 'admin_add_student.php'"><strong>ADD NEW STUDENT</strong></button>
          <button type="button" class="btn btn-primary" data-dismiss="modal"><strong>CLOSE</strong></button>
        </div>
      </div>
      
    </div>
  </div>
</div>

     
</body>
</html>