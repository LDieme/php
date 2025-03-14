

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul mathématique</title>
</head>
<body>
    <form method="get" action="">
            <label for="a">
                nombre1: 
            </label>
            <input type="text" name="a">
            <hr>
            <label for="b">
                nombre 2: 
            </label>
            <input type="text" name="b"><br>
        
            <input type="submit" value="submit">
   </form>
   <hr>
    <p>
    <?php

        $a = $_GET["a"];
        $b = $_GET["b"];
        $somme = $a + $b;

        echo "<p> la somme est : ".$somme."</p>";

?>
    </p>
</body>
</html>