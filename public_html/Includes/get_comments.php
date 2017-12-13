<?php
    session_start();
    
    require '../Includes/Comment.php';
    include_once '../Includes/comment_databasehandler.php';
    
    $recipe = $_SESSION['recipe'];
    
    $sql_get = "SELECT * FROM comments WHERE recipe = '$recipe'";
    $result = mysqli_query($connection, $sql_get);
    
    require '../Includes/load_comments.php';