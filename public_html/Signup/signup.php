<!DOCTYPE html>
<html>
    <head>
        <title>Tasty recipes - Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../reset.css">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
    </head>
    <body>
        <?php
            include_once '../Includes/logo_and_meny.php';
        ?>
              
        <div class="background">
            <h1>Registrera dig:</h1>
            <form action="register.php" method="POST">
                    Användarnamn:<input type="text" name="username" placeholder="Användarnamn"><br>
                    Lösenord:<input type="password" name="password" placeholder="Lösenord"><br>
                    <input type="submit" name="register" value="Registrera dig">
            </form>     
        </div>
    </body>
</html>
