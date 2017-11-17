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
            header("Location: ".$_SERVER['REQUEST_URI']);
        }
    }
    
    function getMeatballComments($connection)
    {
        $sql_get = "SELECT * FROM comments WHERE recipe = 'meatballs'";
        $result = mysqli_query($connection, $sql_get);
        while($row = mysqli_fetch_assoc($result))
        {
            printComments($connection, $row); 
        }
    }
    
    function getPancakeComments($connection)
    {
        $sql_get = "SELECT * FROM comments WHERE recipe = 'pancakes'";
        $result = mysqli_query($connection, $sql_get);
        while($row = mysqli_fetch_assoc($result))
        {
            printComments($connection, $row);              
        }
    }
    
    function deleteComment($connection)
    {
        if(isset($_POST['delete']))
        {
            $cid = $_POST['commentid'];
            $sql_get_author = "SELECT username FROM comments WHERE commentid ='$cid'";
            $temp= mysqli_query($connection, $sql_get_author);
            $temp2 = mysqli_fetch_object($temp);
            $commentauthor=$temp2->username;
            
            if($commentauthor == $_SESSION['usr'])
            {
                $sql_get = "DELETE FROM comments WHERE commentid = '$cid'";
                $result = mysqli_query($connection, $sql_get);
                header("Location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
    
    function printComments($connection, $row)
    {
        echo '<form method="POST" action="'.deleteComment($connection).'"><p>'.$row['username'].': '.$row['message']. '<input type="hidden" name="commentid" value="'.$row['commentid'].'">';
            if(isset($_SESSION['usr']) && $row['username'] == $_SESSION['usr'])
            {
                echo '<input type="submit" name="delete" value="Ta bort kommentar">'.'</p></form>';
            }
            else
            {
                echo ''.'</p></form>';
            }
    }