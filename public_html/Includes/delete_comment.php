<?php
    include_once '../Includes/comment_databasehandler.php';

    if(isset($_POST['delete']))
    {
        $cid = $_POST['commentid'];
        $recipe = $_POST['recipe'];
            
        $sql_get = "DELETE FROM comments WHERE commentid = '$cid'";
        mysqli_query($connection, $sql_get);
        
        if($recipe == "meatballs")
        {
            header("Location: ../Meatballs_recipe/meatballs_recipe.php");
        }
        elseif($recipe == "pancakes")
        {
            header("Location: ../Pancakes_recipe/pancakes_recipe.php");
        }       
    }