<?php include('includes/connection.php') ?>
<?php  //include('includes/session.php') ?>
<?php include('includes/messege.php') ?>

<?php
	//Unauthorized Access Check
    // checkSession();
    if(!isset($_SESSION['user_type']) || $_SESSION['user_type'] != '1'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:login.php?msg=' . $message);
       exit();
       }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Admin Dashboard - Home</title>
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
          <h1> Admin</h1>
        </header>
        <div class="profile-photo-container">
          <img src="<?php echo base_url();?>assets/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="<?php echo base_url();?>index.php/Welcome/admin"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>Student Registration</a></li>
            <!-- <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Charts</a></li> -->
            <li><a href="<?php echo base_url();?>index.php/Welcome/sturegistrations"><i class="fa fa-users fa-fw"></i>Teacher Registration</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/sturegistrations"><i class="fa fa-users fa-fw"></i>Receptionist Registration</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Notification</a></li>
            <!-- <li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Maps</a></li> -->
            <!-- <li><a href="manage-users.html"><i class="fa fa-users fa-fw"></i>Manage Users</a></li> -->
            <li><a href="preferences.html"><i class="fa fa-sliders fa-fw"></i>Manage Courses</a></li>
            <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
       
          
           
                    
            
            <!-- Second row ends -->
            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
               
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Student Registration Form</h2></div>
                <!-- <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div> -->
          <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden"> <!-- overflow hidden for iPad mini landscape view-->
            <!-- <div class="col-1 templatemo-overflow-hidden">
              <div class="templatemo-content-widget white-bg templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="container"> -->
            <!-- Top content -->
            <!-- <div class="row"> -->
                <!-- <div class="col-md-3 col-sm-10 forms-right-icons">
                  

                </div> -->
                <!--forms-right-icons-->
                <div class="templatemo-content-widget templatemo-login-widget white-bg">
                <!-- <div class="section-heading"> -->
                        <!-- <h2><span>Sign Up Students  With Us</span></h2> -->
                        <!-- <br/>
                        <p class="subheading">Register all the students to our system.
                        </p> -->
                    <!-- </div> -->
                    <div class="form-box">
                        <div class="form-top">
                            <!-- <div class="form-top-left">
                                <h3>Sign up now</h3>
                                <p>Fill in the form below to get instant access</p>
                            </div> -->
                            
                        </div>
                        <div class="form-bottom">
                        <form role="form" action="<?php echo site_url('Signup/registration');?>" method="post" class="login-form">
                                
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="user_type" name="user_type" placeholder="Student" value="Student" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="student_Id" name="student_id" placeholder=" Enter Student ID Number" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder=" First Name" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder=" Last Name" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i>&nbsp&nbsp&nbspDate of Birth</span>
                                        <input type="date" class="form-control" name="dob" placeholder="Date of Birth" label="Date of Birth" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" class="form-control" id="basic-addon1"><i class="fa fa-user"></i>Gender<input type="radio" name="gender" value="male" checked> Male <input type="radio" name="gender" value="female"> Female</span>
                    
                                            
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1" required="required">
                                </div>
                            
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                        <input type="tel" class="form-control" name="contact_number" placeholder="Contact Number" maxlength="10" minlength="10" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="pname" placeholder="Parent/Guardian Name" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="pnic" placeholder="Parent NIC Number" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                        <input type="tel" class="form-control" name="pnum" placeholder="Parent's Contact Number" maxlength="10" minlength="10" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" name="address" placeholder="Home Address" aria-describedby="basic-addon1" required="required">
                                </div>
                               
                
                <tr>
                    <td></td>
                    <td><input class="templatemo-blue-button width-100" type="submit" name="submit" value="submit" onclick="registrationform();">
                    <br/>
                    <input class="templatemo-blue-button width-100" type="reset" name="RESET"></td>
                </tr>
                
            </table>  

            
                              
                                
                            </form>       
                    <!-- <center>
                    <h3>OR</h3>
                    <a href="<?php echo base_url();?>index.php/Welcome/login">Already You have an Account ?</a>
                    </center> -->
	             </div>
                    

            </div>


    </section>

   
     
              </div>
            </div>
          </div>
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | Design: Template Mo</p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    <script>
      /* Google Chart 
      -------------------------------------------------------------------*/
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart); 
      
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

          // Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
          ]);

          // Set chart options
          var options = {'title':'How Much Pizza I Ate Last Night'};

          // Instantiate and draw our chart, passing in some options.
          var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
          pieChart.draw(data, options);

          var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
          barChart.draw(data, options);
      }

      $(document).ready(function(){
        if($.browser.mozilla) {
          //refresh page on browser resize
          // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
          $(window).bind('resize', function(e)
          {
            if (window.RT) clearTimeout(window.RT);
            window.RT = setTimeout(function()
            {
              this.location.reload(false); /* false to get page from cache */
            }, 200);
          });      
        } else {
          $(window).resize(function(){
            drawChart();
          });  
        }   
      });
      
    </script>
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>