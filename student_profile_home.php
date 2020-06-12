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
				//$_SESSION["user1"]=$_SESSION["user"];//stores userid in session
					header("location:edit_profile_pic.php");
				/*$user1=$_POST["t1"];
				$pass=$_POST["t2"];
				
			
				$con=mysqli_connect("localhost","root","","college_website");
				if(!$con)
					die("cannot connect to server");
				else
				{
					$sql="select * from iemjee_login where email='".$user."' and password='".$pass."'";
				
				$rs=mysqli_query($con,$sql);
				$row=mysqli_fetch_array($rs);
				if($row)
				{
					
					$_SESSION["user"]=$row[0];//stores userid in session
					header("location:iemjee_profile_home.php");
				}
				else
				{
					
					echo "invalid userid/password";
					
				}
				}*/
				
			}
?>
<!DOCTYPE html>
<html>
<title>Student Profile</title>
<link rel="icon" href="iemlogo.png" type="image/png" /> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src=<?php echo $row[3] ?> class="img-rounded" width="100%" height="50%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
		  <?php
		  echo "<h2 style='color:white'>".$row[1]." ".$row[2]."</h2>";
			
?>
           <button onclick="location.href = 'edit_profile_pic.php'" class="btn btn-info" name="btn1">Edit Profile Picture</button>
          </div>
        </div>
		
        <div class="w3-container">
	<br>
		<br>
		
		<hr>
	
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[4] ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[9].",".$row[10] ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[7] ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[8] ?></p>
         
		  <hr>
		  <br>
	
</div>
         <!--<p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
           <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>-->
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
	
    <div class="w3-twothird">
 <!--
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>
      </div>-->

      <div class="w3-container w3-card-2 w3-white">
	  
        <pre><h1 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education                                        <button type="button"  onclick="location.href = 'student_logout.php'" class="btn btn-primary btn-lg">LOG OUT</button></pre></h1>
        <br><br><br><div class="w3-container">
          <h3 class="w3-opacity"><b><?php echo $row[11] ?></b></h3>
          <h4 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row[5]." - ".$row[6] ?></h4>
          
          <hr>
        </div>
		<br><br><br><br><br>
        <div class="w3-container">
		 <h3 class="w3-opacity"><b>Grade</b></h3>
   <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        
        <th class="w3-opacity">Semester</th>
        <th class="w3-opacity">CGPA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="w3-opacity">First</td>
        <td class="w3-opacity"><?php echo $row1[1] ?></td>
        
      </tr>
	  <tr>
        <td class="w3-opacity">Second</td>
        <td class="w3-opacity"><?php echo $row1[2] ?></td>
        
      </tr>
	  <tr>
        <td class="w3-opacity">Third</td>
        <td class="w3-opacity"><?php echo $row1[3] ?></td>
        
      </tr>
	  <tr>
        <td class="w3-opacity">Fourth</td>
        <td class="w3-opacity"><?php echo $row1[4] ?></td>
        
      </tr>
	  <tr>
        <td class="w3-opacity">Fifth</td>
        <td class="w3-opacity"><?php echo $row1[5] ?></td>
        
      </tr>
	  <tr>
        <td class="w3-opacity">Sixth</td>
        <td class="w3-opacity"><?php echo $row1[6] ?></td>
        
      </tr>
	  <tr>
        <td class="w3-opacity">Seventh</td>
        <td class="w3-opacity"><?php echo $row1[7] ?></td>
        
      </tr>
	  <tr>
        <td class="w3-opacity">Eighth</td>
        <td class="w3-opacity"><?php echo $row1[8] ?></td>
        
      </tr>
    </tbody>
  </table>
 
  
</div>
		<!--
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>-->
        </div>
        <div class="w3-container">
		<!--
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
		  -->
        </div>
      </div>

    <!-- End Right Column -->
   
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>


</body>
</html>