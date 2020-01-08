<?php
    echo "hello";
include('includes/connection.php');
include('includes/session.php');

if(isset($_POST['submit'])){
    echo "hello";

    //Assign data from login form to variables
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
    // print_r('hello');
    
    //Select User from database
    $userQuery = "SELECT * FROM users WHERE user_name ='$user_name' and password ='$password'";
    $userResult= mysqli_query($connection, $userQuery);
    //print_r($userResult);
    
    //User Exists
    if (mysqli_num_rows($userResult) == 1) {
            $userRow = mysqli_fetch_array($userResult);
            //print_r($userRow);
            
            //Creating Session
            //  checkSession();   
            //     if(!empty($_SESSION['user_id'])){
            //              session_start();
            //          }
            //         );   
            $_SESSION["user_name"] = $userRow['user_name'];
            $_SESSION["user_id"] = $userRow['user_id'];
            $_SESSION["user_type"] = $userRow['user_type'];
        
            $user_type= $userRow['user_type'];
            //echo $usertype;

            
            if($user_type == '1' ){
                // header( "Location:admin.php" );
                // redirect(base_url('application\views\admin.php'));
         
                $this->load->view('admin');
                // $message = "Username and/or Password incorrect.\\nTry again.";
                // echo "<script type='text/javascript'>alert('$message');</script>";
            }
            // }else{
            //     $message = "Username and/or Password incorrect.\\nTry again.";
            //     echo "<script type='text/javascript'>alert('$message');</script>";
            // }
            // else{
            //     $this->load->view('login');
            // }
            // elseif ($user_type == 'c'){
            //     header( "Location:customer-dashboard.php" );
            // }
            // elseif ($user_type='v'){
            //     header( "Location:vendor-dashboard.php" );
            // }
            
                // $message = base64_encode(urlencode("Invalid Email or Password"));
                // header('Location:login.php?msg=' . $message);
                // exit();
           
    }
    else{ 
        // $this->load->view('login');
        // System.out.println("alert('Login fail.')");
        // $this->load->view('admin');
        // $this->load->view('login');
        $message = "Username and/or Password incorrect.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        // exit($this->load->view('login'));
        redirect(base_url().'index.php/Welcome/login','refresh');
        // print_r("Wrong");
        // if(empty($user_name)) {array_push($errors, "User Name is Required")};
        // if(empty($password)) {array_push($errors, "Password is Required")};            
            
        // $this->load->view('login');      
        // $message = base64_encode(urlencode("Invalid Email or Password"));
        // header('Location:login.php?msg=' . $message);
        // exit();
    }
    
}

mysqli_close($connection);
    
    
?>