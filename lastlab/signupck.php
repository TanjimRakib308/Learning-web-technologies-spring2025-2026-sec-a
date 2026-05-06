<?php

session_start();

    if(isset($_GET['submit']))
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        if($username=="" || $email=="" || $password=="")
            {echo "null input";}
        else{
            $user= ['username'=> $username, 'email'=> $email, 'password'=> $password];
            
            $_SESSION['user'] =$user;
            header('location: login.php');

        }

        
    }
    else{
        header('location: home.php');
    }
    
?>