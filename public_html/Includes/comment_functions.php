<?php

    function setComments($connection)
    {
        if(isset($_POST['send_comment']))
        {
            $username = $_POST['username'];
            $comment = $_POST['comment'];
            
            $sql_instruction = "INSERT INTO comments (username, message) VALUES('$username', '$comment')";
            $result = mysqli_query($connection, $sql_instruction);
        }
    }