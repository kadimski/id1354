<?php
    session_start();
    
    require '../Includes/Comment.php';
    include_once '../Includes/comment_databasehandler.php';
    
    if(isset($_POST['commentid']))
    {
        $cid = $_POST['commentid'];
        $recipe = $_SESSION['recipe'];
            
        $sql_get = "DELETE FROM comments WHERE commentid = '$cid'";
        mysqli_query($connection, $sql_get);
        
        $sql_get = "SELECT * FROM comments WHERE recipe = '$recipe'";
        $result = mysqli_query($connection, $sql_get);
    
        require '../Includes/load_comments.php';
    }