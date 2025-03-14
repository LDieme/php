

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
            <select name="choix" id="choix">
                <option value="addition">addition</option>
                
                <option value="multiplication">multiplication</option>
                
                <option value="soustraction">soustraction</option>
                
         
            </select>
            <input type="submit" value="submit">
   </form>
   <hr>
    <p>
    <?php

        $choix = $_GET["choix"];
        $a = $_GET["a"];
        $b= $_GET["b"];
        switch ($choix) {
            case 'addition':
                $somme = $a + $b;
                echo "la somme est: ".$somme;
                break;
            case 'multiplication':
                    $somme = $a * $b;
                    echo "la multiplication est: ".$somme;
                    break;
            
            case 'soustraction':
                $somme = $a - $b;
                echo "la soustraction est: ".$somme;
                        break;
                    
            default:
                echo "aucun choix saisi";
                break;
        }

        

?>
    </p>
</body>
</html>