<?php
session_start();
require '../config/database.php';
require 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courriel_utilisateur = $_POST['email'];
    $mot_de_passe_utilisateur = $_POST['password'];

    try {
        $stmt = $pdo->prepare("SELECT nom_utilisateur, mot_de_passe_utilisateur FROM utilisateur WHERE courriel_utilisateur = :email");
        $stmt->bindParam(':email', $courriel_utilisateur);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($mot_de_passe_utilisateur, $utilisateur['mot_de_passe_utilisateur'])) {
                $_SESSION['nom_utilisateur'] = $utilisateur['nom_utilisateur'];
                $_SESSION['courriel_utilisateur'] = $courriel_utilisateur;
                echo 'Connexion réussie';
                header("Location: home.php");
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
                    <a href="sign_up.php">
                        <button type="button" class="btn btn-green">S'inscrire</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

    <!-- flex influ les enfant direct, pas les sous-enfants.
      Si j'ai directement, label, input, label, input, button, avec un flex-direction: column, les éléments seront alignés verticalement. Donc, les labels et les inputs ne seront pas sur la même ligne (ils seront l'un au dessus de l'autre ou plutot courriel sera au dessus de sont champs et pareil pour mot de passe).
      
      Cependant, si on les englobe dans des div, cela n'influe plus directement les labels et inputs, car ce sont des sous-enfant de .form.
      Les enfants de .form sont devenu les div, donc les divs vont se mettre en column, mais leur contenu (label et input) restent en ligne.
    -->

    <!-- 
     [
        'email' => 'exemple@exempel.com',
        'password' => '123456'
     ]

     $bdd->prepare('INSERT INTO users (courriel_utlisateur, password) VALUES (:email, :password)'); insere dans la colonne courriel_utilisateur la valeur email
    -->
     
