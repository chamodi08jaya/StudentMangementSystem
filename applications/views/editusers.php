<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Student-Dashboard Home</title>
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
          <h1>Student</h1>
        </header>
      
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
        <ul>
            <li><a a href="<?php echo base_url();?>index.php/Welcome/students"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="#" class="active"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
             <li><a href="<?php echo base_url();?>index.php/Welcome/stu_pay"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/stu_coursecontent"><i class="fa fa-users fa-fw"></i>Course Content</a></li>
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
                <li><a href="" class="active">My Profile</a></li>
                <li><a href="<?php echo base_url();?>index.php/Welcome/edit_student">Edit Profile</a></li>
                
              </ul>  
            </nav>

          </div>
        </div>

        <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
               
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">My Profile</h2></div>
                <!-- <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div> -->
          <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden"> 
                <div class="templatemo-content-widget templatemo-login-widget white-bg">
                
                    <div class="form-box">
                        <div class="form-top">
                        </div>
                        <div class="form-bottom">
                        <form>
                        <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1" ><i>   Student Id</i> </span>
                                    
                                 
                                   
                                  

                                      <span class="form-control" name="student_id" > 
                                    <?php
                                          echo $_SESSION['user_id'] ;
                                     ?>
                                     </span>        
                                </div>
                           
                                <div class="input-group form-group">
                                <span class="input-group-addon" id="basic-addon1" ><i>   User Name</i> </span>
                                    
                                
<!-- 
                                     User Name -->
                                      <span class="form-control" name="user_name" > 
                                    <?php
                                          echo $_SESSION['user_name'] ;
                                     ?>
                                     </span>        
                                </div>
                           
                                
                                <div class="input-group form-group">
                                <span class="input-group-addon" id="basic-addon1" ><i> Name</i> </span>
                                    
                                     <!-- Name -->
                                      <span class="form-control" name="name" > 
                                      <?php
                                         $result=$this->db->query("SELECT first_name FROM student Where student_id='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->first_name."</option>";
                                          }  
                                     ?>
                                     </span> 
                                 </div>
                                
                                <div class="input-group form-group">
                                <span class="input-group-addon" id="basic-addon1" ><i>  Address</i> </span>
                                    
                                     <!-- Address -->
                                      <span class="form-control" name="address" > 
                                    <?php
                                         $result=$this->db->query("SELECT address FROM student Where student_id='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->address."</option>";
                                          }
                                      ?>
                                     </span> 
                                       
                                </div>

                                <div class="input-group form-group">
                                <span class="input-group-addon" id="basic-addon1" ><i> Contact Number</i> </span>
                                    
                                     <!-- Contact Number -->
                                      <span class="form-control" name="contact_no" > 
                                    <?php
                                         $result=$this->db->query("SELECT contact_no FROM student Where student_id='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->contact_no."</option>";
                                          }  
                                     ?>
                                     </span> 
                                       
                                </div>

                                <div class="input-group form-group">
                                <span class="input-group-addon" id="basic-addon1" ><i>  Date of Birthday</i> </span>
                                    
                                     <!-- date of Birthday -->
                                     <span class="form-control" name="date_of_birth" > 
                                     <?php
                                         $result=$this->db->query("SELECT date_of_birth FROM student Where student_id='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->date_of_birth."</option>";
                                          }  
                                     ?>
                                     </span> 
                                       
                                </div>

                                <div class="input-group form-group">
                                <span class="input-group-addon" id="basic-addon1" ><i> Email Address</i> </span>
                                    
                                     <!-- Email Address -->
                                     <span class="form-control" name="email_address" > 
                                     <?php
                                         $result=$this->db->query("SELECT email_address FROM student Where student_id='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->email_address."</option>";
                                          }  
                                     ?>
                                     </span> 
                                       
                                </div>

                                <div class="input-group form-group">
                                <span class="input-group-addon" id="basic-addon1" ><i>  Students Parents Name</i> </span>
                                    
                                     <!-- Student Parents Name -->
                                     <span class="form-control" name="name" > 
                                     <?php
                                         $result=$this->db->query("SELECT name FROM student_parent Where studentid_fk='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->name."</option>";
                                          }  
                                     ?>
                                     </span> 
                                       
                                </div>

                                <div class="input-group form-group">
                                <span class="input-group-addon" id="basic-addon1" ><i> Student Parents Cntact Number</i> </span>
                                    
                                     <!-- Student Parents Contact Number -->
                                     <span class="form-control" name="name" > 
                                     <?php
                                         $result=$this->db->query("SELECT contact_no FROM student_parent Where studentid_fk='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->contact_no."</option>";
                                          }  
                                     ?>
                                     </span> 
                                       
                                </div>


   
                
            </table>  

            
                              
                                
                            </form>       
                  
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