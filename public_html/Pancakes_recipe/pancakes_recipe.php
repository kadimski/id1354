<!DOCTYPE html>
<html>
    <head>
        <title>Tasty recipes - Pannkakor</title>
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
            <h2>Pannkakor</h2>
                <p>En klar vardagsfavorit! Här är ett enkelt grundrecept på tunna pannkakor, bara att steka och servera med sylt, grädde, glass eller kvarg.</p>
                
            <img id="pancakesPicture" alt="Pannkakor" src="pancakes.jpg">
            
            <h3>Ingredienser(8 stycken, 15 min):</h3>
                <ul>
                    <li>3 dl vetemjöl</li>
                    <li>6 dl mjölk</li>
                    <li>3 ägg</li>
                    <li>½ tsk salt</li>
                    <li>2 msk smör</li>
                </ul>
        
            <h3>Gör så här:</h3>
                <ol>
                    <li>Vispa ut mjölet i hälften av mjölken till en slät smet.</li>
                    <li>Vispa i resterande mjölk, ägg och salt.</li>
                    <li>Låt smeten svälla ca 10 min.</li>
                    <li>Smält smör i en stekpanna och häll ner i smeten. Grädda tunna pannkakor.</li>
                </ol>
        
            <h3>Kommentarer:</h3>
                <p>Stina: Väldigt goda pannkakor!</p>
                <p>Bertil: Bra och enkelt recept.</p>
                
            <?php
                include '../Includes/comment_databasehandler.php';
                include '../Includes/comment_functions.php';
                getPancakeComments($connection);
                
                if(isset($_SESSION['id']))
                {
                    echo '<h3>Kommentera:</h3>
                            <form method="POST" action="'.setComments($connection).'">
                                <input type="hidden" name="username" value="TEST">
                                <textarea rows="4" cols="70" name="comment"></textarea><br>
                                <input type="hidden" name="recipe" value="pancakes">
                                <input type="submit" name="send_comment" value="Skicka kommentar">
                            </form>';
                }
            ?>
        </div>    
    </body>
</html>
