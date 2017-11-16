<!DOCTYPE html>
<html>
    <head>
        <title>Tasty Recipes - Logga in</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../reset.css">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'
    </head>
    <body>
        <?php
            include_once '../Includes/logo_and_meny.php';
        ?>
        
        <div class="background">
            <h1>Logga in:</h1>
            <form action="login_function.php" method="POST">
                Användarnamn:<input type="text" name="username" placeholder="Användarnamn" required><br>
                Lösenord:<input type="password" name="password" placeholder="Lösenord" required><br>
                <input type="submit" name="login" value="Logga in">
            </form>     
        </div>
    </body>
</html>
