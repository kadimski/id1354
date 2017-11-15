<?php

    if(isset($_POST['register']))
    {
        include_once '../Includes/databasehandler.php';
        
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        
        // Check empty input
        if(empty($username) || empty($password))
        {
            header("Location: signup.php?signup=empty");
            exit();
        }
        else
        {
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            // Check valid username
            if($resultCheck > 0)
            {
                header("Location: signup.php?=usertaken");
                exit();
            }
            else 
            {
                // Register user
                $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password');";
                
                mysqli_query($connection, $sql);
                header("Location: signup.php?=success");
                exit();
            }
        }
    }
    else
    {
        header("Location: signup.php");
        exit();
    }