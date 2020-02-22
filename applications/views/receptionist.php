<?php
	//Unauthorized Access Check
    // checkSession();
    if(!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'Receptionist'){
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
    <title>Receptionist-Dashboard Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/templatemo-style.css" rel="stylesheet">
    
  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">

        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1> Receptionist</h1>
        </header>
            
       
        <!-- <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div> -->

        <!-- Dashboard left navigation bar -->

        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/myprofile"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_noti"><i class="fa fa-database fa-fw"></i>Notification</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/payment"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/view_booking"><i class="fa fa-users fa-fw"></i>Hall Management</a></li>
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
                <li><a href="" class="active">Notifications</a></li>
              </ul>  
            </nav>

          </div>
        </div>

        <div class="templatemo-content-container">
         
         <div class="templatemo-flex-row flex-content-row">
           
           <div class="col-1">
             <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
               <i class="fa fa-times"></i>
               <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Inbox</h2></div>
               <div class="table-responsive">
                 
                 <!-- Table in the notification page -->
                 <table class="table table-striped table-bordered">
                   <thead>
                     <tr>
                     <!-- Table headings -->
                       <td>Sender Name</td>
                       <td>Sender Email</td>
                       <td>Sender Subject</td>
                       <td>Sender Message</td>
                     </tr>
                     
                    
                   </thead>
                   <tbody>
                       <?php
                     // $result=$this->db->query("SELECT hall_no, day ,emp_no FROM booking_details");
                     // while($result->result() as $row){
                      //  Select a rows in the the database and input to the table as query 
                       $result=$this->db->query("SELECT name,email,subject,message  FROM contact_us ORDER BY contactno DESC");
                    //    if ($result) {
                    //     die('Invalid query: ' . mysql_error());
                    // }
                      
                       foreach($result->result() as $row){
                         ?>
                     <tr>
                       <td><?php echo $row->name;?></td>
                       <td><?php echo $row->email; ?></td>
                       <td><?php echo $row->subject;?></td>
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
          

          <!-- footer class -->
        <footer class="text-right">
            <p>Copyright &copy; Team Innoview
            | Design: UCSC</p>
          </footer>         
        </div> 
    
   
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>