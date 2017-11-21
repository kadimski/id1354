<?php
    include_once '../Includes/comment_databasehandler.php';

    $sql_get = "SELECT * FROM comments WHERE recipe = '$recipe'";
    $result = mysqli_query($connection, $sql_get);

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<form method="POST" action="../Includes/delete_comment.php"><p>' . $row['username'] . ': ' . $row['message'] . 
             '<input type="hidden" name="commentid" value="' . $row['commentid'] . '">'
             .'<input type="hidden" name="recipe" value="'.$recipe.'">';
        if (isset($_SESSION['usr']) && $row['username'] == $_SESSION['usr'])
        {
            echo '<input type="submit" name="delete" value="Ta bort kommentar">' . '</p></form>';
        } 
        else
        {
            echo '' . '</p></form>';
        }
    }