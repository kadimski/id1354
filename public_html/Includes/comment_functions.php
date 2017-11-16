<?php

    function setComments($connection)
    {
        if(isset($_POST['send_comment']))
        {
            $username = $_POST['username'];
            $comment = $_POST['comment'];
            $recipe = $_POST['recipe'];
            
            $sql_instruction = "INSERT INTO comments (username, message, recipe) VALUES('$username', '$comment', '$recipe')";
            $result = mysqli_query($connection, $sql_instruction);
        }
    }
    
    function getMeatballComments($connection)
    {
        $sql_get = "SELECT * FROM comments where recipe = 'meatballs'";
        $result = mysqli_query($connection, $sql_get);
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<p>'.$row['username'].': '.$row['message'].' '.$row['recipe'].'</p>';
        }
    }
    
    function getPancakeComments($connection)
    {
        $sql_get = "SELECT * FROM comments where recipe = 'pancakes'";
        $result = mysqli_query($connection, $sql_get);
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<p>'.$row['username'].': '.$row['message'].' '.$row['recipe'].'</p>';
        }
    }