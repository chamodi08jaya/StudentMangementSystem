
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
        <div class="profile-photo-container"> -->
          <!-- <img src="<?php echo base_url();?>assets/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">   -->
          <!-- <div class="profile-photo-overlay"></div> -->
        </div>      
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
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/sturegistrations"><i class="fa fa-users fa-fw"></i>Student Registration</a></li>
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
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Notification</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
          
          </div>
          <div class="templatemo-content-container">
         
         <div class="templatemo-flex-row flex-content-row">
           
           <div class="col-1">
             <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
               <i class="fa fa-times"></i>
               <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Inbox</h2></div>
               <div class="table-responsive">
                 
                 <table class="table table-striped table-bordered">
                   <thead>
                     <tr>
                       <td>Date</td>
                       <td>Message</td>
                     
                     </tr>
                     
                    
                   </thead>
                   <tbody>
                       <?php
                     // $result=$this->db->query("SELECT hall_no, day ,emp_no FROM booking_details");
                     // while($result->result() as $row){
                       $result=$this->db->query("SELECT date, message  FROM notification ORDER BY notification_id DESC ");
                       foreach($result->result() as $row){
                         ?>
                     <tr>
                       <td><?php echo $row->date;?></td>
                       <td><?php echo $row->message; ?></td>
                  
                           
                     </tr>
                     <?php
                       }
                     ?>
                                     
                   </tbody>
                 </table>    
               </div>                          
             </div>
           </div>           
         </div> <!-- Second row ends -->
           
          <footer class="text-right">
            <p>Copyright &copy; Team Innoview
            | Design: UCSC</p>
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