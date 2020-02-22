
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title> Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/templatemo-style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--

Host Cloud Template

https://templatemo.com/tm-541-host-cloud

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg bg-custome">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Southern <em>Institute</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/class_schedule">Class Schedule</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/contact">Contact Us</a>
              </li>
            </ul>
            <div class="functional-buttons">
            <ul>
              <li><a href="<?php echo base_url();?>index.php/Welcome/login">Log in</a></li>
            </ul>
          </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading-responsive">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="overlay">
              <h1>Contact Us</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- Contact Us Starts Here -->
    <div class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- <div class="contact-form">
              <form>
                <div class="row">
                  <form role="form" action="<?php echo site_url('Contactsubmit/contactus');?>" method="post" class="login-form">
                  -->

                  
                  <div class="form-box">
                        <div class="form-top">
                        </div>
                        <div class="form-bottom">
                        <form role="form" action="<?php echo site_url('Contactsubmit/contactus');?>" method="post" class="login-form">
                                
                           
                  <div class="input-group form-group">
                     <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"  aria-describedby="basic-addon1" required="required">
                </div>

                <div class="input-group form-group">
                     <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"  aria-describedby="basic-addon1" required="required">
                </div>
                 
                <div class="input-group form-group">
                     <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"  aria-describedby="basic-addon1" required="required">
                </div>
                 
                <div class="input-group form-group">
                     <input type="text" class="form-control" id="message" name="message" placeholder="Your Message"  aria-describedby="basic-addon1" required="required">
                </div>


                <td></td>
                    <td><input class="templatemo-blue-button width-0" type="submit" name="submit" value="Send Message">
              <br/>
                
                  <!-- <div class="col-lg-12"> -->
                    <!-- <fieldset> -->
                      <!-- <input class="templatemo-blue-button width-100" id="form-submit" type="submit" name="submit" value="Send Message" >
                      -->
                      <!-- onclick="send_message();" -->
                      <!-- <a href="<?php echo base_url();?>index.php/Welcome/contact_submit"><i class="fa fa-eject fa-fw" name="submit" id="form-submit" class="main-button" ></i>Send Message</a> -->
                      <!-- <a href button name="submit" type="submit" value="submit"  >Send Message</button> -->
                    <!-- </fieldset> -->
                  <!-- </div> -->
                </div>
              </form>

              
          </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span>Contact Us</span>
                <h2>Let's keep in touch</h2>
                <!-- <p>Quisque sagittis blandit sapien et elementum. Fusce pretium viverra consequat. Aliquam at feugiat mi. Pellentesque hendrerit, felis ac sodales commodo.</p>
               -->
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <ul>
                    
                                        <!-- <p>Phone:+0912 242 189<br> -->
                    <li><i class="fa fa-phone"></i> 091-224-2189</li>
                    <!-- <li><i class="fa fa-support"></i> support@company.com</li> -->
                  </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                  <ul>
                    	<li>Visit Us</li>
									    <li>Southern Educational Institute <br>
                          Wimalasurendra Mawatha,<br>
								      	Galle 80000,<br>
									Sri Lanka. </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Us Ends Here -->


    <!-- Map Starts Here -->
    <div id="map">
    
   <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="<?php echo base_url();?>index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="<?php echo base_url();?>index.php/Welcome/about"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="j<?php echo base_url();?>index.php/Welcome/class_schedule"><i class="fa fa-angle-double-right"></i>Class Schedule</a></li>
						<li><a href="<?php echo base_url();?>index.php/Welcome/contact"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Reach Us</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Wimalasurendra Mawatha<br>Galle<br>80000<br>Sri Lanka</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>CONTACT</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Phone: (+94)91 2242 189</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>E-mail: southern@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
  
      <!-- Bootstrap core JavaScript -->
      <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
      <!-- Additional Scripts -->
      <script src="<?php echo base_url();?>assets/js/custom.js"></script>
      <script src="<?php echo base_url();?>assets/js/owl.js"></script>
      <script src="<?php echo base_url();?>assets/js/accordions.js"></script>
  
  
      <script language = "text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
      </script>
  
    </body>
  </html>