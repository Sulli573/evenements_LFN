<?php

require __DIR__ . "/../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courriel_utilisateur = $_POST['email'];
    $mot_de_passe_utilisateur = $_POST['password'];

    try {
        // Récupération nom, mdp, role avec requête SQL
        $stmt = $pdo->prepare("SELECT nom_utilisateur, mot_de_passe_utilisateur, role_utilisateur FROM utilisateur WHERE courriel_utilisateur = :email");
        $stmt->bindParam(':email', $courriel_utilisateur);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
            // Vérification du mot de passe
            if (password_verify($mot_de_passe_utilisateur, $utilisateur['mot_de_passe_utilisateur'])) {
                $_SESSION['nom_utilisateur'] = $utilisateur['nom_utilisateur'];
                $_SESSION['courriel_utilisateur'] = $courriel_utilisateur;
                $_SESSION['role'] = $utilisateur['role_utilisateur'];

                // Redirection basée sur le rôle de l'utilisateur
                if ($utilisateur['role_utilisateur'] === 'admin') {
                    header("Location: ?page=events");
                } else {
                    header("Location: ?page=home");
                }
                exit();
            } else {
                echo 'Mot de passe incorrect';
            }
        } else {
            echo 'Courriel ou mot de passe incorrect';
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/login.css" rel="stylesheet">
</head>
<body>
    <div class="login">
        <form class="form" action="" method="post">
            <h1>Connexion</h1>
            <div class="form_container">
                <div>
                    <label for="email">Courriel&nbsp;:</label>
                    <input class="input" type="email" name="email" required>
                </div>
                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-blue">Se connecter</button>
                <div class="form_actions">
                    <a href="?page=sign_up">
                        <button type="button" class="btn btn-green">S'inscrire</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>