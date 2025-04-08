<?php
// Paramètres de connexion à la base de données
$host = 'localhost';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options pour PDO
$options = [
     // Gestion des erreurs avec exceptions
    // Mode de récupération par défaut: tableau associatif
    // Désactiver l'émulation des requêtes préparées
];

try {
    // Création de l'instance PDO
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // À ce stade, la connexion est établie
    echo "Connexion à la base de données réussie !<br><br>";
};
