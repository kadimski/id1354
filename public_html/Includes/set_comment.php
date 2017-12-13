<?php
    session_start();

    require '../Includes/Comment.php';
    include_once '../Includes/comment_databasehandler.php';

    if(isset($_POST['comment']))
    {
        $username = $_SESSION['usr'];
        $comment = $_POST['comment'];
        $recipe = $_SESSION['recipe'];

        $sql_instruction = "INSERT INTO comments (username, message, recipe) VALUES('$username', '$comment', '$recipe')";
        mysqli_query($connection, $sql_instruction);
        
        $sql_get = "SELECT * FROM comments WHERE recipe = '$recipe'";
        $result = mysqli_query($connection, $sql_get);
    
        require '../Includes/load_comments.php';
    }