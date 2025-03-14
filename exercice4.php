<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
 
   <?php


$a = $_GET["a"];
$b= $_GET["b"];
if ($a>$b){
    $s=$a-$b;
    echo "<p> la valeur ".$a."  est supérieure à ".$b."la soustraction est possible. La réponse est ".$s."</p>";
}
else{
    $s=$a+$b;
    echo "<p> la valeur ".$a."  est inférieur à ".$b." l'addition est possible. La réponse est ".$s."</p>";
}
?>
 
</body>
</html>