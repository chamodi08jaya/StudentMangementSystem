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

    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    <!-- <script src="js/ajax.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>



  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1> Admin</h1>
        </header>
        <!-- <div class="profile-photo-container">
          <img src="<?php echo base_url();?>assets/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>  -->     
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
            <li><a href="<?php echo base_url();?>index.php/Welcome/admin"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>Student Registration</a></li>
            <!-- <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Charts</a></li> -->
            <li><a href="<?php echo base_url();?>index.php/Welcome/tearegistrations"><i class="fa fa-users fa-fw"></i>Teacher Registration</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recepregistrations"><i class="fa fa-users fa-fw"></i>Receptionist Registration</a></li>
            <!-- <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Notification</a></li>
             -->
            <!-- <li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Maps</a></li> -->
            <!-- <li><a href="manage-users.html"><i class="fa fa-users fa-fw"></i>Manage Users</a></li> -->
            
            <li><a href="<?php echo base_url();?>index.php/Welcome/logout"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>            
       
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-6 col-md-6">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
                <!-- <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li> -->
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
          <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden">
               <div class="templatemo-content-widget templatemo-login-widget white-bg"> 
                    <div class="">
                        <div class="form-top">
                        </div>
                        <div class="form-bottom">
                          <?php
                          //  if(isset($_SESSION['status']) && $_SESSION['status'] != "") echo "<h3 style='color:red'>".$_SESSION['status']."</h3>";
                  
                          ?>

                        <form role="form" action="<?php echo site_url('Signup/registration');?>" method="post" class="login-form">

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="user_type" name="user_type" placeholder="Student" value="Student" readonly aria-describedby="basic-addon1" required="required">
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
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1" required="required">
                                </div>

                                <!-- <input type="radio" id="male" name="gender" value="male"> -->
                                <!-- <div class="input-group form-group">
                                    <span class="input-group-addon" class="form-control" id="basic-addon1"><i class="fa fa-user"></i>Gender<input type="radio" name="gender" value="male" checked> Male <input type="radio" name="gender" value="female"> Female</span>
                    
                                            
                                </div> -->
                              
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



                                <!-- <div class="input-group form-group">
                                  <form name="add_name" id="add_name">
                                    <span class="input-group-addon" id="dynamic_field"><i class="fa fa-phone"></i>
                                      <tr>

                                        <td><input type="text" name="name[]" placeholder="banuka" class="form-control"></td>
                                        <td><button type="button" name="add" id="add2" class="templatemo-blue-button">Add More</button></td>
                                      </tr>

                                    </span>

                                </div> -->
     <!--  <div class="form-group">
        <form name="add_name" id="add_name">
          <div class="table-responsive">
            <table class="table table-bordered" id="dynamic_field">
              <tr>
                <td>
                  
                  <input type="text" name="name[]" placeholder="Subject" class="form-control name_list"></input> -->
                    
                    <!-- <select nama="drpcourse">                               
                      <?php
                      
                      // $result=$this->db->query("SELECT course_id FROM course");
                      // foreach($result->result() as $row){
                        // echo "<option>".$row->course_id."</option>";
                         
                      
                      ?>
                    </select>
                </td>
          
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
              </tr>
            </table>
            
          </div>
        </form>
      </div> -->





          <label>Enter your Subject Preferences</label>

              <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-book"></i></span>
                                        <!-- <input type="text" class="form-control" name="sub1" placeholder="Subject ID 1" aria-describedby="basic-addon1" required="required"> -->
                      <select class="form-control" name="sub1" id="sub1">
                        <label>Subject ID 1</label> 
                        <option value="pick">None </option>
                          
                          <?php
                            $result=$this->db->query("SELECT course_id FROM course");
                            foreach($result->result() as $row){
                            echo "<option>".$row->course_id."</option>";
                            // <select class="form-control" name="hall_no" id="hall_no"> 
                            }
                          ?>
                      </select>

              </div>

              <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-book"></i></span>
                                        <!-- <input type="text" class="form-control" name="sub2" placeholder="Subject ID 2" aria-describedby="basic-addon1" > -->
                      <select class="form-control" placeholder="Select Subject ID 2" name="sub2" id="sub2">
                        <label>Subject ID 1</label> 
                        <option value="pick1">None </option>
                      
                          <?php
                            $result=$this->db->query("SELECT course_id FROM course");
                            foreach($result->result() as $row){
                            echo "<option>".$row->course_id."</option>";
                        // <select class="form-control" name="hall_no" id="hall_no"> 
                            }
                          ?>
                     </select>
              </div>

              <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-book"></i></span>
                                        <!-- <input type="text" class="form-control" name="sub4" placeholder="Subject ID 4" aria-describedby="basic-addon1" > -->
                      <select class="form-control" placeholder="Select Subject ID 3" name="sub3" id="sub3">
                        <label>Subject ID 1</label> 
                        <option value="pick2">None </option>
                      
                          <?php
                            $result=$this->db->query("SELECT course_id FROM course");
                            foreach($result->result() as $row){
                            echo "<option>".$row->course_id."</option>";
                        // <select class="form-control" name="hall_no" id="hall_no"> 
                            }
                          ?>
                     </select>
              </div>

              <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-book"></i></span>
                                        <!-- <input type="text" class="form-control" name="sub4" placeholder="Subject ID 4" aria-describedby="basic-addon1" > -->
                      <select class="form-control" placeholder="Select Subject ID 4" name="sub4" id="sub4">
                        <label>Subject ID 1</label> 
                        <option value="pick3">None </option>
                      
                          <?php
                            $result=$this->db->query("SELECT course_id FROM course");
                            foreach($result->result() as $row){
                            echo "<option>".$row->course_id."</option>";
                        // <select class="form-control" name="hall_no" id="hall_no"> 
                            }
                          ?>
                     </select>
              </div>

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="pname" placeholder="Parent/Guardian Name" aria-describedby="basic-addon1" required="required">
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
                    <td><input class="templatemo-blue-button width-100" type="submit" name="submit" value="submit">
                    <br/>
                    <br>
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

    <!-- <input type="radio" id="male" name="gender" value="male"> -->
     
              </div>
            </div>
          </div>
          <footer class="text-right">
          <!-- <input type="checkbox" name="vehicle1" value="Bike"> -->
            <p>Copyright &copy; Team Innoview
            | UCSC</p>
          </footer>         
        </div>
      </div>
    </div>
    
    
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

      // $(document).ready(function)(){
      //   $("#add2").click(function)(){
      //     console.log("banukaaaaa");
      .
      //   }
      // }
    </script>>
 <!-- 
      <script>
 $(document).ready(function(){
  var i=1;
  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Subject" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
  });
  
  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });
  
  $('#submit').click(function(){    
    $.ajax({
      url:"name.php",
      method:"POST",
      data:$('#add_name').serialize(),
      success:function(data)
      {
        alert(data);
        $('#add_name')[0].reset();
      }
    });
  });
  
});
</script> -->
   
      
    </script>
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>