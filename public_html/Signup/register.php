<?php

    if(isset($_POST['register']))
    {
        include_once '../Includes/databasehandler.php';
        
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        
        
    }
    else
    {
        header("Location: signup.php");
        exit();
    }
