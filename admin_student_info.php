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
    <title>IEMJEE student info</title>

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
<body>
<div class="container">
<br>
  <pre><h2>Registered student details       			                                             <button type="button"  onclick="location.href = 'admin.php'" class="btn btn-primary btn-lg" style="width:200px">Back</button></h2></pre>
<body>                                                            
  <div class="table-responsive">  
<?php

$con=mysqli_connect("localhost","root","","college_website");
//localhost-server name root-user name product-db-data-database name
if(!$con)
{
	die("cannot connect to server");
}	
else
{
	$sql="select * from iemjee_student_basicinfo";
	$rs=mysqli_query($con,$sql);
	echo "<table class='table'><thead><tr><tr><th>First Name</th><th>Last Name</th><th>Photo</th><th>Email ID</th><th>Phone</th><th>Date of Birth</th><th>Course</th><th>Stream</th><th>10th Percentage</th><th>12th percentage</th><th>Father's Name</th><th>City</th><th>Address</th><th>Pin</th></tr>";
	while($row=mysqli_fetch_array($rs))
	{
		echo "<tr>";
		echo "<td>$row[0]</td><td>$row[1]</td><td><img src=$row[2] width=50px height=50px alt=sorry/></td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td></td>";
		echo "</tr>";
	}
	echo "</table>";
	
}
?>
</body>
</html>