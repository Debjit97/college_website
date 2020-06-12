<?php session_start();

		
			if(isset($_POST["btn"]))
			{
				$user=$_POST["t1"];
				$pass=$_POST["t2"];
				
			
				$con=mysqli_connect("localhost","root","","college_website");
				if(!$con)
					die("cannot connect to server");
				else
				{
					$sql="select * from student_login where Enrollment_no='".$user."' and password='".$pass."'";
				
				$rs=mysqli_query($con,$sql);
				$row=mysqli_fetch_array($rs);
				if($row)
				{
					//$name="select first_name||' '||last_name from student_login where enrollment_no='".$user."';
					$_SESSION["user"]=$row[0];//stores userid in session
					header("location:student_profile_home.php");
				}
				else
				{
					echo "invalid userid/password";
				}
				}
				
			}
	?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registered student login</title>
<noscript><meta http-equiv="refresh" content="0; url=error1.jsp"></noscript>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="student_login.css">



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
		<link rel="icon" href="iemlogo.png" type="image/png" /> 
		<title><a href="<img src="iemlogo.png">"</title>
    <title>Student login</title>

 
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
    






  
<script src="jquery.min.js"></script>  
<script src="bootstrap.min.js"></script>
<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 650px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #3366CC;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #3366CC;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</body>
	
		<!-----<form method="post" action="student_login.php">
		<pre>
		USER ID<input type="text" name="t1"/>
		PASSWORD<input type="password" name="t2"/>
		<input type="submit" name="btn" value="LOG IN"/>
		</pre>
		
		</form>----->
		
		
		
		
		
		
	
<div class="table-responsive">
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

 <div class="navbar navbar-inverse set-radius-zero" >
       
   <div class="container">
  
               <div class="navbar-header">
               
                 
                <a href="student_login.php">

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
</div>
 





 



<form  action="student_login.php" method="post">

<div class="container-fluid">
 
     
    <div class="col-sm-4" class="table-responsive">
      
	  <div class="row content">   
	      		  
	      <div class="col-sm-10">&nbsp;</div>
		  <div class="col-sm-2"></div>
		 		 		 	 
		  <div class="col-sm-12">
			  <div class="panel panel-primary">
	      		<div class="panel-heading"><b>Sign - In  [Registered Student] </b></div>
	      		<div class="panel-body" style="margin-bottom:-5px;">
		      		<label for="pwd">
				   	<span class="glyphicon glyphicon-user"></span>
				  	Enter the Enrollment no.
				  	</label>		    
				    <input type="text" class="form-control" id="usr" name="t1" placeholder="Enter your enrollment_no." required="required">
	      		</div>
	      			      		
	      		<div class="panel-body" style="margin-bottom:-5px;">
		      		<label for="pwd">
				  	<span class="glyphicon glyphicon-lock"></span>
				 	Password:		  
				 	</label>
				  	<input type="password" class="form-control" id="pwd" name="t2" placeholder="Enter your Password" required>
	      		</div>
	      		
	      	<!-- 
	      		<div class="panel-body" style="margin-bottom:-5px;">	      		
	      			<label for="pwd">Verification Code :</label>
	      			<img id="captcha_id" name="imgCaptcha" src="captcha.jpg">	      			
	      			<a href="javascript:;" title="change captcha text" onclick="document.getElementById('captcha_id').src = 'captcha.jpg?' + Math.random();  return false">
					<img src="images/refresh.png" /></a>      				      			
		  		</div>		  			  		   		
	      		
	      		<div class="panel-body" style="margin-bottom:-5px;">	      		
	      			<label for="pwd">Enter the Verification Code</label>
		    		<input type="text" class="form-control" id="pwd" name="vrfcd" placeholder="Verification Code" required>
		  		</div>
		  	 -->	 	  				  			      			      		
	      		<div class="panel-body" style="margin-bottom:-5px;">
	      			<button type="submit" name="btn" value="LOG IN" class="btn btn-primary"><b>Submit</b></button>
	      			
	      			<label for="pwd"><p align="center"><font color="red">
		      		
				     
				     
				    				     		     
				     </font></p>
	      			</label>
	      			
	      		</div>	
	      			      		
	      		<!--
	      		<div class="panel-body" style="margin-bottom:-5px;" align="right">
	      				<img src="giphy-downsized.gif" width="50">
	      			<a href="student_register.php" class="btn btn-primary"><b>New Applicant?</b></a>
	      		</div>
	      		<!-- 
	      		<div class="panel-body" style="margin-bottom:-5px;" align="right">	      			
	      			<a href="forgotpass.jsp" class="btn btn-primary"><b>Forgot password?</b></a>
	      		</div>	      		      		   		
	      		 -->
	      		<div class="panel-body">
	      			      		
	      				    		
		  		</div>  		 
	    	  </div>	    	  
	    	 
		  </div> 
  </div>
 </div>
</div> 
</form>






</body>
		
		
		
		
		
		
		
		
	
	</body>
</html>