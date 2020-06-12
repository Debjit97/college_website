<?php session_start();

		
			if(isset($_POST["btn"]))
			{
				$t1=$_POST["t1"];
				$t2=$_POST["t2"];
				$t3=$_POST["t3"];
				
			
				$con=mysqli_connect("localhost","root","","college_website");
				if(!$con)
					die("cannot connect to server");
				else
				{
					$sql="insert into query values('".$t1."','".$t2."','".$t3."')";
				
				$rs=mysqli_query($con,$sql);
				if($rs==1)
				{
						print "Query send Successfully";
						header("location:index.php");
    
				}
				else
				{
					echo "Query not send";
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
    <title>Home Institute of Engineering and Management</title>

    <!-- FONT AWESOME STYLE  -->
  <link href="assets/css/font-awesome.css" rel="stylesheet"> 
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
            <div class="right-div">
           		<div class='social-wrap'> 
						<ul> 
							<li><a class='facebook1' href='https://www.facebook.com/iemcal' target='_blank' title='Facebook' rel='nofollow'></a>
							<a class='twitter1' href='https://twitter.com/username' target='_blank' title='Twitter' rel='nofollow'></a> 
							<a class='google-p1' href='https://plus.google.com/b/username' target='_blank' title='Google Plus' rel='nofollow'></a>  
							<a class='linkdin1' href='https://www.linkedin.com/in/username' target='_blank' title='Linkedin' rel='nofollow'></a></li> 
						</ul> 
  				</div>

            </div>
          
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-left">
                            <li><a href="index.html" class="menu-top-active" >HOME</a></li>
                           
                            <li><a href="about.html">ABOUT US</a></li>
                             <li><a href="gallery.html" >GALLERY</a></li>
                        </ul>
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                             <li><a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">SELECT LOGIN TYPE</h4>
        </div>
        <div class="modal-body">
          <p><a href="student_login.php" target="_blank"><b><h4>STUDENT LOGIN</h4></b></a></p>
          <p><a href="admin_login.php" target="_blank"><b><h4>ADMINISTRATOR LOGIN</h4></b></a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>


            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div id="slideshow-sec">
        <div id="carousel-div" class="carousel slide" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/IMG_1.jpg"  alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" >APPLY IEM JEE 2017</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Be the engineer of the future</h2>  
                            </div>
                           
                        </div>
                        <div class="item">
                            <img src="assets/img/2.jpg" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" >Create. Innovate. Patent.</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Seeking new boundaries each day in our 13 research centres</h2>  
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/3.jpg" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" >Dream. Design. Build.</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Work with our 10 international Motorsport and Aero-design teams</h2>  
                            </div>
                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-div" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-div" data-slide-to="1"></li>
                        <li data-target="#carousel-div" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-div" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-div" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
    </div>
    <div class="overlay6">
        
            <a class="modal-trigger" href="iemjee_login.php" target="_blank"> <font color="#fff">IEM-UEM JEE STUDENT REGISTRATION/LOGIN 2017</font></a>  
        </div>
    <!-- SLIDESHOW SECTION END-->
    <div class="main">
  <div class="content">
    <div class="wrap">
      <!----------- About page ------------>
          <div class="section s1">
        <div class="section group">
          <div class="row infocustxt">
                 News<a href="/about/news" class="allnews"> All News</a>
              </div>
        <div class="grid_1_of_4 images_1_of_4">
           <img src="assets/img/clg_1.jpg" alt="" />
           <h3>3rd Best College </h3>
           <p> IEM has been recognised again in THE WEEK magazine as rank 3rd Best College in Eastern India.</p>
             <div class="button"><span><a href="#">Read More</a></span></div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
           <img src="assets/img/clg_2.jpg" alt="" />
           <h3>Grade "A" College </h3>
           <p> IEM has been awarded with the prestigious Grade "A" recognition with a high score of 3.25 by NAAC - National Assessment and Accreditation Council of the Government of India.</p>
             <div class="button"><span><a href="#">Read More</a></span></div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
           <img src="assets/img/clg_3.jpg" alt="" />
           <h3>Chancellor meeting with Nobel Laureate </h3>
           <p>Nobel Laureate Dr Robert Huber is being received by Prof Dr Satyajit Chakrabarti</p>
             <div class="button"><span><a href="#">Read More</a></span></div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
           <img src="assets/img/clg_4.png" alt="" />
           <h3>Foreign Research </h3>
           <p>Students from University of Engineering & Management (UEM) go to European institutes to study for a semester to experience multicultural facets for deeper global interface</p>
             <div class="button"><span><a href="#">Read More</a></span></div>
        </div>

      </div>
    <!-- BELOW SLIDESHOW SECTION END-->
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <h1 class="tag-home"><strong>IEM UEM Group | Welcome</strong></h1> 
               <hr />
                 </div>
            </div>
          </div>
     <!-- TAG HOME SECTION END-->
   
            <div class="container">
             
        <div class="row pad-set">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="just-txt-div">
                    <h1>ABOUT THE EDUCATIONAL GROUP</h1>
                    <br />
                <p>
                    The IEM UEM group is an acclaimed educational group amongst the industry-centred academic training organisations of today.
                    IEM has set sublime standards in addressing the technical and managerial resource shortage in the new era of dyn amic globalisation. 
                    The IEM UEM group has risen to fame for its strong foundation in teaching and R&D in multifaceted areas. It aims to serve the future 
                    generation as well as the Nation through its commitment towards self sufficiency and unmatchable excellence.


                </p>
                     <p>
                     Since its inception, the IEM UEM group has surpassed innumerable benchmarks of achievements and accreditations.
                     Today IEM flaunts a colossal network of expansive operations led by an awe-inspiring student force who are the torchbearers of a better tomorrow.
                </p>
                    <p>
                    The IEM UEM Group has opened up the doors for young minds who dare to dream. It encourages the spirit of free enquiry and imagination.
                    In this temple of learning, dreams take shape. The educational group attempts to inculcate the sense of human values and discipline in students to make them respectable human beings.  It encourages learners to learn, to realize their potential and imbibe the best practices.
                </p>
                </div>
                
                </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="just-txt-div">
                      <br/>
                      <iframe width="560" height="415" src="https://www.youtube.com/embed/gkLtoe6zCvs" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
            </div>
          </div>      
  
   <!--VEDIO SECTION END-->
    <div class="parallax-like">
        <div class="overlay">

       
       <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="just-txt-div">
                  <strong> 900+</strong> 
                    <p>
                        Books
                    </p>
                </div>
                </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="just-txt-div">
                  <strong> 5+</strong> 
                    <p>
                        Campus
                    </p>
                </div>
                </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="just-txt-div">
                  <strong> 500+</strong> 
                    <p>
                        Faculties
                    </p>
                </div>
                </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="just-txt-div">
                  <strong> 1000+</strong> 
                    <p>
                        Projects
                    </p>
                </div>
                </div>
            </div>
           </div>
             </div>
    </div>
     <!-- PARALLAX LIKE SECTION END-->
  <div class="just-sec">
        <div class="container">
             <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="head-line">WHAT OUR  STUDENTS SAY </h1>
                </div>
            </div>
       <div class="w3ls_testimonials_grids">
         <section class="center slider">
            <div class="agileits_testimonial_grid">
              <div class="w3l_testimonial_grid">
                <p>World class University supporting world class learning with qualified faculties.
                 Large library which open for students 24 hrs. X 365 days.</p>
                <h4>Prasid Biswas</h4>
                <h5>Student</h5>
                <div class="w3l_testimonial_grid_pos">
                  <img src="assets/img/1.gif" alt=" " class="img-responsive" />
                </div>
              </div>
            </div>
            <div class="agileits_testimonial_grid">
              <div class="w3l_testimonial_grid">
                <p>Huge library with more than 9000 books & desktops for reading.In a 
                  year UEM undergoes several fests,where students perform.</p>
                <h4>Raya Chowdhury</h4>
                <h5>Student</h5>
                <div class="w3l_testimonial_grid_pos">
                  <img src="assets/img/2.gif" alt=" " class="img-responsive" />
                </div>
              </div>
            </div>
            <div class="agileits_testimonial_grid">
              <div class="w3l_testimonial_grid">
                <p>A premier university with separate hostel facility for boys and girls. 
                  Highly qualified faculties who are willing to help at any time of need.</p>
                <h4>Debotri Dhar Chowdhury</h4>
                <h5>Student</h5>
                <div class="w3l_testimonial_grid_pos">
                  <img src="assets/img/3.gif" alt=" " class="img-responsive" />
                </div>
              </div>
            </div>
        </section>
      </div>
    </div>
  </div>
     <!--JUST SECTION END-->
     <div class="container " >
         <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="head-line">TOP RECRUITERS </h1>
                <br />
                </div>
            </div>
             <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <hr />
                 <div class="flexslider carousel">
          <ul class="slides">
            <li>
  	    	    <img src="assets/img/info.png" />
  	    		</li>
  	    		 <li>
  	    	    <img src="assets/img/SAP.png" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/Cogn.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/San.jpg" />
  	    		</li>
            <li>
              <img src="assets/img/tcs.png" />
            </li>
            <li>
              <img src="assets/img/tech.png" />
            </li>
            <li>
              <img src="assets/img/cape.jpg" />
            </li>
            <li>
              <img src="assets/img/tcs.png" />
            </li>

            
          </ul>
        </div>
                <hr />
                <br />
                </div>
            </div>
         </div>
     <!--CLIENT SECTION END-->
    
      <!--SET-DIV SECTION END-->
   
   <div class="footer-sec">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div">
               

              
				<h3> <strong>SOCIAL PRESENCE</strong> </h3>
                We love to be social,Catch Us On
                <a href="#" ><h4 style="color:blue">FACEBOOK </h4></a>
                 <a href="#" ><h4 style="color:blue">TWITTER </h4></a>
                 <a href="#" ><h4 style="color:blue">LINKEDIN </h4></a>
									
                    
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3> <strong>PHYSICAL LOCATION</strong> </h3>
                Reach Us Below:
                <br />
                <h4>GN-34/2, Ashram Building,Sector – V</h4> 
                  <h4>Kolkata</h4>
                 <h4>India</h4>
                 <h4>Pin: 700091</h4>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="just-txt-div">

              
                  <form action="index.php" method="post">
                                        
                                 <div class="form-group">
                                            <label>Enter Your Email</label>
                                            <input class="form-control" type="text" name="t1" />
                                        </div>
                                            <div class="form-group">
                                            <label>Enter Subject </label>
                                            <input class="form-control" type="text" name="t2" />
                                        </div>
                                <div class="form-group">
                                            <label>Enter query/Feedback</label>
                                            <textarea class="form-control"  rows="5" name="t3"></textarea>
                                        </div>
                                 
                                        <button type="submit" class="btn btn-success btn-lg" name="btn">SEND QUERY </button>
									</form>

                 </div>
            </div>

          

        </div>
 <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <hr />
                <div style="text-align:right;padding:5px;">
                    &copy;2017 deb1225.com | <a href="#" style="color:black;" target="_blank" >Designed By: Debjit and Debajyoti</a>
                </div>
            </div>
    </div>
    </div>
       </div>
     <!--FOOTER SECTION END-->
      <!-- WE PUT SCRIPTS AT THE END TO LOAD PAGE FASTER-->
     <!--CORE SCRIPTS PLUGIN-->
     <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
     <!--BOOTSTRAP SCRIPTS PLUGIN-->
<script src="assets/js/bootstrap.js"></script>
     <!--WOW SCRIPTS PLUGIN-->
    <script src="assets/js/wow.js"></script>
     <!--FLEXSLIDER SCRIPTS PLUGIN-->
    <script src="assets/js/jquery.flexslider.js"></script>
   <script src="assets/js/custom.js"></script>
     <!--CUSTOM SCRIPTS -->
    

    <!-- //footer -->
<!-- carousal -->
  <script src="assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".center").slick({
      dots: true,
      infinite: true,
      centerMode: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 768,
          settings: {
          arrows: true,
          centerMode: false,
          slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
          arrows: true,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 1
          }
        }
       ]
      });
    });
  </script>
<!-- //carousal -->
<!-- flexisel -->
    <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo1").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,        
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
          portrait: { 
            changePoint:480,
            visibleItems: 1
          }, 
          landscape: { 
            changePoint:640,
            visibleItems:2
          },
          tablet: { 
            changePoint:768,
            visibleItems: 2
          }
        }
      });
      
    });
  </script>
  <script type="text/javascript" src="assets/js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
  <script src="assets/js/lsb.min.js"></script>
  <script>
  $(window).load(function() {
      $.fn.lightspeedBox();
    });
  </script>
<!-- //gallery-pop-up -->
<!-- flexSlider -->
  <script defer src="assets/js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
      animation: "slide",
      start: function(slider){
        $('body').removeClass('loading');
      }
      });
    });
      </script>

</body>

</html>
