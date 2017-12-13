<?php
    $array = array();
    
    while($row = mysqli_fetch_assoc($result))
    {
        $comment = new Comment($row['username'], $row['message'], $row['commentid'], false);
        if(isset($_SESSION['usr']) && $_SESSION['usr'] == $row['username'])
        {
            $comment = new Comment($row['username'], $row['message'], $row['commentid'], true);
        }   
        $array[] = $comment;
    }

    echo json_encode($array);