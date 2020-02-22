<?php include('includes/connection.php') ?>
<?php include('includes/session.php') ?>
<?php include('includes/messege.php') ?>
<?php //echo base_url)


	
    if(!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'Teacher'){
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
    <title> Teacher-course</title>
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
          <h1>Teacher</h1>
        </header>
        
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
          <li><a href="<?php echo base_url();?>index.php/Welcome/edit_teacher"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/edit_teacher"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
            <!-- <li><a href="<?php echo base_url();?>index.php/Welcome/teacher_noti"><i class="fa fa-database fa-fw"></i>Notification</a></li>
            -->
            <!-- <li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li> -->
            <li><a href="" class="active"><i class="fa fa-users fa-fw"></i>Course Content</a></li>
            <!-- <li><a href="preferences.html"><i class="fa fa-sliders fa-fw"></i>Attendence</a></li> -->
            <li><a href="<?php echo base_url();?>index.php/Welcome/logout"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
         
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lsg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Upload Questions</a></li>
                <li><a href="<?php echo base_url();?>index.php/Welcome/view_answers">View Answers</a></li>
                <!-- <li><a href="<?php echo base_url();?>index.php/Welcome/upload_grades class="active">Upload Grades</a></li>
              -->
              <li><a href="<?php echo base_url();?>index.php/Welcome/teachercourse">Upload content</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
               
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Upload Question</h2></div>
                <!-- <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div> -->
          <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden"> 
                <div class="templatemo-content-widget templatemo-login-widget white-bg">
                
                    <div class="form-box">
                        <div class="form-top">
                        </div>
                        <div class="form-bottom">
         
          <!-- <form action="" method="POST" target="" class="upload-form">
            <div class="form-group">
              <label for="InputID">Student Id</label>
              <input type="text" name="studentId" class="form-control" id="InputID" placeholder="Enter student ID" required="required"></div>
              <div class="form-group">
            <label for="InputName">Full Name</label>
            <input type="text" name="employeeName" class="form-control" id="InputName" placeholder="Enter name"></div>
            <div class="form-group">
            <label for="InputSubject">Subject</label>
            <input type="text" name="subject" class="form-control" id="InputSubject" placeholder="Enter subject"></div>

            <div class="form-group mt-3">
              <label class="mr-2">Upload your Text</label>
              <input type="text" name="subject" class="form-control" id="InputSubject" placeholder="Enter subject"></div>
             -->
            <!-- <input type="file" name="file"> -->
  
          <!-- <hr>
          <button type="submit" class="btn btn-primary">Submit</button> -->
          <form role="form" action="<?php echo site_url('upload/uploadquestion');?>" method="post" class="login-form">
                                
                                <div class="input-group form-group">
                                        <!-- <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                        -->
                                        <input type="text" class="form-control" name="emp_no" size="100" max-length="100"placeholder="Employee Number"  aria-describedby="basic-addon1" required="required">
                                    </div>
    
                                    
                                
                                    <div class="input-group form-group">
                                        <!-- <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                           -->
                                        <input type="text" class="form-control" size="100" max-length="100"name="name" placeholder="name"  aria-describedby="basic-addon1" required="required">
                                    </div>
    
                              
                                    <div class="input-group form-group">
                                        <!-- <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                          -->
                                        <input type="text" class="form-control" size="100" max-length="100"id="subject_id" name="subject_id" placeholder="Subject ID" aria-describedby="basic-addon1" required="required">
                                    </div>
    
                                    <div class="input-group form-group">
                                        <!-- <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                        -->
                                        <input style="height:200px" type="text" class="form-control" id="file"size="100" max-length="100"  name="file" placeholder="Question" aria-describedby="basic-addon1" required="required">
                                    </div>
    
                                    
                                   
                    
                    <tr>
                        <td></td>
                        <td><input class="templatemo-blue-button width-100" type="submit" name="submit" value="Upload question">
                      
                    </tr>
                    
                </table>  
    
                
                                  
                                    
        </form>
    </div> 
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
            <p>Copyright &copy; Team Innoview
            | UCSC</p>
          </footer>         
        </div>
      </div>
    </div>
    
<!--File upload section ends-->
    
    <!-- JS -->
    <script src="assetsjs/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
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
      // function drawChart() {
      //     Create the data table.
      //     var data = new google.visualization.DataTable();
      //     data.addColumn('string', 'Topping');
      //     data.addColumn('number', 'Slices');
      //     data.addRows([
      //       ['Mushrooms', 3],
      //       ['Onions', 1],
      //       ['Olives', 1],
      //       ['Zucchini', 1],
      //       ['Pepperoni', 2]
      //     ]);
      //     Set chart options
      //     var options = {'title':'How Much Pizza I Ate Last Night'};
      //     Instantiate and draw our chart, passing in some options.
      //     var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
      //     pieChart.draw(data, options);
      //     var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
      //     barChart.draw(data, options);
      // }
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
    <script type="text/javascript" src="assets/js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
  
</html>