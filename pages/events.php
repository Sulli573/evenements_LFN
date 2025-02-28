<?php
require_once __DIR__ . "/../config/database.php";

// // Insertion de données dans la table 'lieu'
// $id_lieu = '2';
// $nom_lieu = 'stade eaux vives';
// $adresse_lieu = '2 rue du';

// $sql = "INSERT INTO lieu (id_lieu, nom_lieu, adresse_lieu) VALUES (:id_lieu, :nom_lieu, :adresse_lieu)";
// $stmt = $pdo->prepare($sql);

// $stmt->bindParam(':id_lieu', $id_lieu);
// $stmt->bindParam(':nom_lieu', $nom_lieu);
// $stmt->bindParam(':adresse_lieu', $adresse_lieu);

// $stmt->execute();

// // Insertion de données dans la table 'organisateur'
// $id_organisateur = '2';
// $nom_organisateur = 'clem';
// $contact_organisateur = "clem@c.com";

// $sql = "INSERT INTO organisateur (id_organisateur, nom_organisateur, contact_organisateur) VALUES (:id_organisateur, :nom_organisateur, :contact_organisateur)";
// $stmt = $pdo->prepare($sql);

// $stmt->bindParam(':id_organisateur', $id_organisateur);
// $stmt->bindParam(':nom_organisateur', $nom_organisateur);
// $stmt->bindParam(':contact_organisateur', $contact_organisateur);

// $stmt->execute();

// // Insertion de données dans la table 'evenements'
// $nom_evenement = 'toto';
// $date_evenement = '01-01-2025';
// $description_evenement = 'Very Nice';
// $place_evenement = 100;
// $id_organisateur = '1';
// $id_lieu = '1';

// $sql = "INSERT INTO evenements (nom_evenement, date_evenement, description_evenement, place_evenement, id_organisateur, id_lieu) VALUES (:nom_evenement, :date_evenement, :description_evenement, :place_evenement, :id_organisateur, :id_lieu)";
// $stmt = $pdo->prepare($sql);

// $stmt->bindParam(':nom_evenement', $nom_evenement);
// $stmt->bindParam(':date_evenement', $date_evenement);
// $stmt->bindParam(':description_evenement', $description_evenement);
// $stmt->bindParam(':place_evenement', $place_evenement);
// $stmt->bindParam(':id_organisateur', $id_organisateur);
// $stmt->bindParam(':id_lieu', $id_lieu);

// $stmt->execute();

// Requête pour récupérer les événements
$sql = "SELECT nom_evenement, date_evenement, description_evenement, place_evenement FROM evenements";
$stmt = $pdo->query($sql);
$evenements = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des événements</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <header class="header">
        <div></div>
        <nav>
            <ul>
                <li>
                    <a href="#">
                        Événements
                    </a>
                </li>
                <li>
                    <a href="users.html">
                        Utilisateurs
                    </a>
                </li>
                <li>
                    <a href="organizers.html">
                        Organisateurs
                    </a>
                </li>
            </ul>
        </nav>
        <div class="header_actions">
            <a href="#">
                <i class="fa-solid fa-power-off"></i>
            </a>
        </div>
    </header>
    <main>
        <h1>Liste des événements</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom de l'événement</th>
                    <th>Date de l'événement</th>
                    <th>Description de l'événement</th>
                    <th>Place de l'événement</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($evenements as $evenement) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($evenement['nom_evenement']); ?></td>
                        <td><?php echo htmlspecialchars($evenement['date_evenement']); ?></td>
                        <td><?php echo htmlspecialchars($evenement['description_evenement']); ?></td>
                        <td><?php echo htmlspecialchars($evenement['place_evenement']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>