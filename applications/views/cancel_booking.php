<?php include('application\config\config.php')?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Receptionist Hall Booking Cancel</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/templatemo-style.css" rel="stylesheet">
    
  
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Receptionist</h1>
        </header>
        <!-- <div class="profile-photo-container">
          <img src="<?php echo base_url();?>assets/images/Receptionist.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>       -->
        <!-- Search box -->
        <!-- <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form> -->
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
        <ul>
            <li><a href="<?php echo base_url();?>index.php/Welcome/receptionist"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/edit_recep"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_noti"><i class="fa fa-database fa-fw"></i>Notification</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/payment"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li>
            <li><a href="#" class="active"><i class="fa fa-home fa-fw "></i>Hall Management</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/logout"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
         
          </ul>        
       
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
              
                <li><a href="<?php echo base_url();?>index.php/Welcome/recep_hall">Add booking</a></li>
                <li><a href="<?php echo base_url();?>index.php/Welcome/view_booking" >View booking</a></li>
                <li><a href="" class="active">Cancel booking</a></li>
               
                <!-- <li><a href="login.html">Sign in form</a></li> -->
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget padding">
              
          <form role="form" action="<?php echo site_url('Signup/delete');?>" method="post" >
                  
          <div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">Hall</span>
											<!-- <select class="form-control"> -->

                      
                       <select class="form-control" name="hall_no" id="hall_no">
                       <option >None</option>
                      <?php
                      
                      $result=$this->db->query("SELECT hall_no FROM hall");
                      foreach($result->result() as $row){
                        echo "<option>".$row->hall_no."</option>";
                        // <select class="form-control" name="hall_no" id="hall_no"> 
                      }
                      ?>
                     </select>
										
                      <!-- <div class="input-group form-group">
                
          <input type="text" class="form-control" id="user_type" name="user_type" placeholder="Receptionist" value="Receptionist" aria-describedby="basic-addon1" required="required">
                     </div> -->
											<span class="select-arrow"></span>
                    
										</div>
                  </div>
                 </div>
                  <div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<!-- <span class="form-label">Slot</span>
                      </br> -->
                      <span class="form-label">Day</span>
                      <select class="form-control" name="time" id="time">
                      <option >None</option>


                      <?php
                      
                      $result=$this->db->query("SELECT time FROM day");
                      foreach($result->result() as $row){
                        echo "<option>".$row->time."</option>";
                      }
                      ?>
                     
											</select>
											<span class="select-arrow"></span>
										</div>
                  </div>
                  </div>
                  
                 
                  
                  <div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											
                      <span class="form-label">Teacher Employee no</span>
                      <select class="form-control" name="emp_no" id="emp_no">
                      <option >None</option>
                      <?php
                      
                      $result=$this->db->query("SELECT emp_no FROM teacher");
                      foreach($result->result() as $row){
                        echo "<option>".$row->emp_no."</option>";
                      }
                      ?>
                     
											</select>
											<span class="select-arrow"></span>
										</div>
											
									</div>
								</div>
                <!-- <button type="button" class="btn btn-info">Book</button> -->
                
					  <div class="container-login100-form-btn">
					
           <input class="templatemo-blue-button width-50" type="submit" name="cancel_book" value="cancel_book">
           <!-- <input class="templatemo-blue-button width-100" type="submit" name="submit" value="submit">
                    -->
                
						<!-- <button class="login100-form-btn" onclick='loginform()'>
							Login
						</button> -->
					</div>

                
							</form>
                    </div>
            
              </div>
              </div>
           </div>
          <footer class="text-right">
            <p>Copyright &copy; Team Innoview
            | Design:UCSC</p>
          </footer>         
      
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>