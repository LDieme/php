<?php
$host = "mysql:host=localhost";
$dbname = "dbname=travail";
$root = "root";
$password = "1234";

try {
    // Correction du DSN et de la connexion PDO
    $connect = new PDO("mysql:host=localhost;dbname=travail", $root, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification si le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"] ?? '';
        $prenom = $_POST["prenom"] ?? '';
        $age = $_POST["age"] ?? '';
        $email = $_POST["email"] ?? '';

        // Vérification pour éviter les injections SQL
        if (!empty($nom) && !empty($prenom) && !empty($age) && !empty($email)) {
            $sql = "INSERT INTO user(nom, prenom, age, email) VALUES(:nom, :prenom, :age, :email)";
            $base = $connect->prepare($sql);
            $base->execute([
                "nom" => $nom,
                "prenom" => $prenom,
                "age" => $age,
                "email" => $email
            ]);

            echo "Enregistrement réussi";
        } else {
            echo "Tous les champs sont requis.";
        }
    }
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de données</title>
</head>
<body>
    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>
        <hr>
        
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required>
        <hr>
        
        <label for="age">Âge :</label>
        <input type="number" name="age" required>
        <hr>
        
        <label for="email">Email :</label>
        <input type="email" name="email" required>
        <hr>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>