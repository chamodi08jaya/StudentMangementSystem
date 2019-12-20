<?php

function checkSession(){
	if(!empty($_SESSION['user_id'])){
        session_start();
    }
    // else if(){
    //     session_start();
    // }

    // if(empty($_SESSION['user_name'])) {
    //     echo 'incorrect username/ password please try again.' ;
    // }

 }

?>