
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperation d'un formulaire</title>
</head>
<body>
    <form method="post" action="">
        <label for="nom">
            nom: 
        </label>
        <input type="text" name="nom">
        <input type="submit" value="submit">
    </form>
    <p>
        <?php

    
   
        $nom = $_POST["nom"];

        echo "bonjour ".$nom;
    

?>
    </p>
</body>
</html>