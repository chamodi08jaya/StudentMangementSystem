<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Receptionist-Dashboard Home</title>
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
  

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Receptionist</h1>
        </header>
       
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
        <ul>
            <li><a href="<?php echo base_url();?>index.php/Welcome/receptionist"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/edit_recep"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_noti"><i class="fa fa-database fa-fw"></i>Notification</a></li>
            <li><a href="#" class="active"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome//view_booking"><i class="fa fa-users fa-fw"></i>Hall Management</a></li>
            <!-- <li><a href="<?php echo base_url();?>index.php/Welcome/recep_attend"><i class="fa fa-sliders fa-fw"></i>Attendence</a></li> -->
            <!-- <li><a href="<?php echo base_url();?>index.php/Welcome/recep_stu"><i class="fa fa-users fa-fw"></i>Student Registration</a></li>
             -->
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
                 <li><a href="" class="active">Payment</a></li>
                 <li><a href="<?php echo base_url();?>index.php/Welcome/viewpayment">View Payment</a></li>
                
                
                <!-- <li><a href="login.html">Sign in form</a></li> -->
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
                   
              <div class="templatemo-content-widget white-bg">
                <i class="fa fa-times"></i>
                             
              
            <div class="templatemo-content-container">
          <div class="templatemo-content-widget padding">
           
           <div class="row">
 



<form action="<?php echo site_url('Search/search_keyword');?>" method = "post">
<table>
<tr>
<td><input class="form-control" type="text" name = "keyword" /></td>
<td><input class="btn btn-success" type="submit" value = "Search" /></td>
</tr>
</table>
</form>




<div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
                   
              <div class="templatemo-content-widget white-bg">
                <i class="fa fa-times"></i>
                             
              
            <div class="templatemo-content-container">
          <div class="templatemo-content-widget padding">
           
           <div class="row">
            <form role="form" action="<?php echo site_url('spayment/stpayment');?>" method="post" class="login-form">
              
           
              <label>Select the Subject for Payment</label>

              <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-book"></i></span>
                                        <!-- <input type="text" class="form-control" name="sub1" placeholder="Subject ID 1" aria-describedby="basic-addon1" required="required"> -->
                      <select class="form-control" name="sub" id="sub">
                        <label>Subject ID 1</label> 
                        <option value="pick">None </option>
                          
                          <?php
                            //$result=$this->db->query("SELECT course_id FROM course");
                            // foreach($result->result() as $row){
                            foreach($data as $row){
                            echo "<option>".$row->courseid_fk."</option>";
                            // <select class="form-control" name="hall_no" id="hall_no"> 
                            }
                          ?>
                      </select>
              </div>

              

              <!--  -->

               <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-book"></i></span>


                <input type="text" class="form-control" name="stuid" aria-describedby="basic-addon1" placeholder="Re-Enter the Student ID to confirm" required="required">    
               
                <?php
                                        //   if(isset($_POST['submit'])){
                                        //     $keyword=$_POST['keyword'];
                                        //     echo  $keyword;
                                          
                                     
                                        //  $result=$this->db->query("SELECT name FROM student Where student_id=$keyword ");
                                        //  foreach($result->result() as $row){
                                        //     echo "<option>".$row->name."</option>";
                                        //  } 
                                        // } 
               ?> 
             
              </div>



                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-bell"></i>&nbsp&nbsp&nbspPayment Date</span>
                                        <input type="date" class="form-control" name="pdate" aria-describedby="basic-addon1" required="required">
                                </div>
                               
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-check"></i></span>
                                        <input type="number" min="0" class="form-control" name="amount" placeholder="Amount" maxlength="10" minlength="10" aria-describedby="basic-addon1" required="required">
                                </div>

                                <br>
                                <input class="templatemo-blue-button width" type="submit" name="submit" value="submit">




                                </div>
        </div>
                          </div>
         </div>
          <footer class="text-right">
            <p>Copyright &copy; Team Innoview
            | Design:UCSC</p>
          </footer>         
        </div>
      </div>
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
