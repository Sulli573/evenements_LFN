<?php
require 'header.php';
?>

<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/login.css" rel="stylesheet">
</head>
<body>
    <!--How to structure a web form: -->
    <!--https://developer.mozilla.org/fr/docs/Learn_web_development/Extensions/Forms/How_to_structure_a_web_form
    https://developer.mozilla.org/fr/docs/Learn_web_development/Extensions/Forms/Your_first_form-->
    <div class="login">
      <form class="form" action="#" method="post">
        <h1>Connexion</h1>
        <div class="form_container">
          <div>
            <label for="email">Courriel&nbsp;:</label><!--&nbsp force à mettre unb espace insécable-->
            <input class=input type="email" name="email"> <!--email =clé pour passer la valeur taper du front vers le bac-->
          </div>
          <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password">
          </div>

          <button type="submit" class="btn btn-blue">Se connecter</button>

          <div class="form_actions">
            <a href="sign_up.html">
              <button type="button" class="btn btn-green"><!-- erreur 405 si on ne met pas type boutton car il croit que c'est un boutton de soumission(submit)-->
                S'inscrire
              </button>
            </a>
          </div>
        </div>
      </form>
    </div>

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
     
</body>
</html>