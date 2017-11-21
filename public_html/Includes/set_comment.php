<?php
    include_once '../Includes/comment_databasehandler.php';

    if(isset($_POST['send_comment']))
    {
        $username = $_POST['username'];
        $comment = $_POST['comment'];
        $recipe = $_POST['recipe'];

        $sql_instruction = "INSERT INTO comments (username, message, recipe) VALUES('$username', '$comment', '$recipe')";
        $result = mysqli_query($connection, $sql_instruction);

        if ($recipe == "meatballs")
        {
            header("Location: ../Meatballs_recipe/meatballs_recipe.php");
        } 
        elseif ($recipe == "pancakes")
        {
            header("Location: ../Pancakes_recipe/pancakes_recipe.php");
        }
    }