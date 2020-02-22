
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Receptioniest edit  profile </title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/templatemo-style.css" rel="stylesheet">

    <script type="text/javascript" src="assets\js\check.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        
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

        <!-- Left dashboard  -->
        <nav class="templatemo-left-nav">   
               <!--Dahboard in the left side of the Page  -->
          <ul>
            <li><a href="<?php echo base_url();?>index.php/Welcome/receptionist"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="#" class="active"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_noti"><i class="fa fa-database fa-fw"></i>Notification</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/payment"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome//view_booking"><i class="fa fa-users fa-fw"></i>Hall Management</a></li>
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
              <!-- Top Links in the navigation Bar -->
                <li><a href="<?php echo base_url();?>index.php/Welcome/myprofile">My profile</a></li>
                <li><a href="" class="active">Edit profile</a></li>
              </ul>
              </ul>  
            </nav>

          </div>
        </div>

        <div class="col-1">
          <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
            <i class="fa fa-times"></i>
               
              <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Edit Profile</h2></div>
                <!-- <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div> -->
                <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden"> 
                  <div class="templatemo-content-widget templatemo-login-widget white-bg">
                
                    <div class="form-box">
                        <div class="form-top">
                        </div>
                        <div class="form-bottom">
                         <?php
                        //  if(isset($_SESSION['status']) && $_SESSION['status'] != "") echo alert("Enter the name").$_SESSION['status']."</h3>"; 
                        //  ?>
                         
                        <!-- Form to update data in the database -->
                          <form  role="form" action="<?php echo site_url('update/updatedata');?>" method="post" class="login-form">

                             <!--Update the address  -->
                            <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" name="address" placeholder="Address"  aria-describedby="basic-addon1" required="required">
                            </div>

                                
                            <!-- Update the contact number -->
                            <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                    <input type="tel" class="form-control" name="contact_no" placeholder="Contact Number" maxlength="10" minlength="10" aria-describedby="basic-addon1" required="required">
                            </div>

                          <!-- Update the User Name -->
                            <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" aria-describedby="basic-addon1" required="required">
                            </div>

                          <!-- Update the password -->
                            <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="basic-addon1" required="required" onkeypress="checkPass();">
                            </div>

                            <!-- Update the confirm Password -->
                             <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Confirm Password" aria-describedby="basic-addon1" required="required" onkeypress="checkPass();">
                                    <!-- <span id='message'></span> -->
                                  </div>
                                
                                  <!-- <select id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>   -->
                               
                
                           <tr>
                               <td></td>
                               <td><input class="templatemo-blue-button width-100" type="submit" name="update" value="Update"  onclick="return Validate()"   >
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

            <!-- footer  -->
          <footer class="text-right">
            <p>Copyright &copy; Team Innoview
            | UCSC</p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->

    <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("rpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }else{
          alert("Update the Profile");
          return true;
        }
       
    }
</script>


 
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>