<?php
require 'header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/login.css" rel="stylesheet">
</body>

<div class="login">
    <form class="form" action="#" method="post">
      <h1>Inscription</h1>
      <div class="form_container">
        <div>
          <label for="username">Nom :</label>
          <input type="text" name="username">
        </div>
        <div>
          <label for="email">Courriel&nbsp;:</label><!--&nbsp force à mettre unb espace insécable-->
          <input class=input type="email" name="email"> <!--email =clé pour passer la valeur taper du front vers le bac-->
        </div>
        <div>
          <label for="password">Mot de passe :</label>
          <input type="password" name="password">
        </div>

        <button type="submit" class="btn btn-blue"><a href='login.php'>s'inscrire
        </a>
        </button>

        <div class="form_actions">
            <a href="login.html">
              <!-- erreur 405 si on ne met pas type boutton car il croit que c'est un boutton de soumission(submit)-->
              <button type="button" class="btn btn-green"><a href="login.php">
                Se Connecter
              </a>
              </button>
            </a>
          </div>
      </div>
    </form>
  </div>

</html>