
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Student-Dashboard Home</title>
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
          <h1> Student</h1>
        </header>
            
       
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>

        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="<?php echo base_url();?>index.php/Welcome/students"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/editusers"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
             <li><a href="<?php echo base_url();?>index.php/Welcome/stu_pay"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li>
            <li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>Course Content</a></li>
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
              <ul class="text-uppercase">
                <li><a href="" class="active">Upload Answers</a></li>
                <li><a href="<?php echo base_url();?>index.php/Welcome/view_tutes">View Questions</a></li>
                <!-- <li><a href="<?php echo base_url();?>Studentret/download">Download files</a></li> -->
                
               
                
              </ul>
              </ul>  
            </nav>

          </div>
        </div>

     
        <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
               
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Upload Answers</h2></div>
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
          <form role="form" action="<?php echo site_url('upload/uploadanswers');?>" method="post" class="login-form">
                                
                                <div class="input-group form-group">
                                        <!-- <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                        -->
                                        <input type="text" class="form-control" name="student_id" size="100" max-length="100"placeholder="Student_ID"  aria-describedby="basic-addon1" required="required">
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
                                        <input style="height:200px" type="text" class="form-control" id="answer"size="100" max-length="100"  name="answer" placeholder="Answer" aria-describedby="basic-addon1" required="required">
                                    </div>
    
                                    
                                   
                    
                    <tr>
                        <td></td>
                        <td><input class="templatemo-blue-button width-100" type="submit" name="submit" value="Upload answers">
                      
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
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>