<?php

// Paramètres de connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$database = "blog"; // Nom de la base de données

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Requête pour créer la table
$sql_create_table = "CREATE TABLE vols (
    num_vol INT PRIMARY KEY,
    depart VARCHAR(255),
    destination VARCHAR(255),
    aeroport_decollage VARCHAR(255),
    date_decollage DATE,
    heure_decollage TIME,
    aeroport_atterrissage VARCHAR(255),
    date_atterrissage DATE,
    heure_atterrissage TIME
)";

// Exécution de la requête de création de la table
if ($conn->query($sql_create_table) === TRUE) {
    echo "Table vols créée avec succès<br>";

    // Données à insérer dans la table
    $data = array(
        array(1021, 'Tunis', 'Rome', 'Aéroport de Tunis', '2024-10-05', '12:16:00', 'Aéroport de Rome', '2024-10-05', '14:41:00'),
        array(1061, 'Paris', 'Rome', 'Aéroport de Paris', '2024-07-20', '14:39:00', 'Aéroport de Rome', '2024-07-20', '00:12:00'),
        array(1101, 'Rome', 'Paris', 'Aéroport de Rome', '2024-05-16', '09:25:00', 'Aéroport de Paris', '2024-05-16', '19:03:00'),
        array(1112, 'Dubai', 'Istanbul', 'Aéroport de Dubai', '2024-07-10', '18:30:00', 'Aéroport de Istanbul', '2024-07-10', '14:36:00'),
        array(1137, 'Tunis', 'Miami', 'Aéroport de Tunis', '2024-06-17', '20:49:00', 'Aéroport de Miami', '2024-06-17', '02:39:00'),
        array(1141, 'Istanbul', 'Dubai', 'Aéroport de Istanbul', '2024-07-01', '20:44:00', 'Aéroport de Dubai', '2024-07-01', '14:33:00'),
        array(1169, 'Tokyo', 'Dubai', 'Aéroport de Tokyo', '2024-07-25', '14:54:00', 'Aéroport de Dubai', '2024-07-25', '08:33:00')
    );

    // Préparation de la requête d'insertion des données
    $sql_insert_data = "INSERT INTO vols (num_vol, depart, destination, aeroport_decollage, date_decollage, heure_decollage, aeroport_atterrissage, date_atterrissage, heure_atterrissage) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Préparation de la déclaration SQL
    $stmt = $conn->prepare($sql_insert_data);

    // Exécution de la requête d'insertion pour chaque jeu de données
    foreach ($data as $row) {
        $stmt->bind_param("issssssss", ...$row);
        $stmt->execute();
    }

    echo "Données insérées avec succès";
} else {
    echo "Erreur lors de la création de la table : " . $conn->error;
}

// Fermeture de la connexion
$conn->close();

?>