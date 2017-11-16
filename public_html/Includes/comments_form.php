<?php

    include '../Includes/comment_databasehandler.php';
    include '../Includes/comment_functions.php';
    
    echo'<h3>Kommentera:</h3>
        <form method="POST" action="'.setComments($connection).'" id="commentform">
            <input type="hidden" name="username" value="TEST">
            <textarea rows="4" cols="70" name="comment" form="commentform"></textarea><br>
            <input type="submit" name="send_comment" value="Skicka kommentar">
        </form>';