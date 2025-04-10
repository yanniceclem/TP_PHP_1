<?php
// Paramètres de connexion à la base de données
$host = 'localhost';
$dbname = 'BDD';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options pour PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
        // Création de l'instance PDO
        $pdo = new PDO($dsn, $username, $password, $options);
        // À ce stade, la connexion est établie
        echo "Connexion à la base de données réussie !<br><br>";

    print("exercie 1 </br></br>");
    $sql = "INSERT INTO utilisateurs (nom, age) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['yannice', 20]);
        echo "Nouvel utilisateur inséré avec l'ID: " . $pdo->lastInsertId() . "<br><br>";

    print("</br></br><hr></br></br>");
    print("exercie 2 </br></br>");

    echo "Utilisateurs de plus de 30 ans:<br>";
    $sql = "SELECT * FROM utilisateurs WHERE age > ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([30]);
    $utilisateurs = $stmt->fetchAll();

    foreach ($utilisateurs as $user) {
        echo "ID: {$user['id']} - Nom: {$user['nom']} - Âge: {$user['age']}<br>";
    }

    echo "<br>";

    print("</br></br><hr></br></br>");
    print("exercie 3 </br></br>");

    $sql = "UPDATE utilisateurs SET age = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([40, 1]);
        echo "Nombre d'utilisateurs mis à jour: " . $stmt->rowCount() . "<br><br>";

    print("</br></br><hr></br></br>");
    print("exercie 4 </br></br>");

    $sql = "DELETE FROM utilisateurs WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([1]); // Suppression de l'utilisateur avec ID 1
    echo "Nombre d'utilisateurs supprimés: " . $stmt->rowCount() . "<br>";

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}