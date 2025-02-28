<?php
// var_dump($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom_utilisateur = $_POST['nom'];
  $courriel_utilisateur = $_POST['courriel'];
  //hachage du password 
  $mot_de_passe_utilisateur = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);


  #stockage données dans SESSION
  $_SESSION['nom_utilisateur'] = $nom_utilisateur;
  $_SESSION['courriel_utilisateur'] = $courriel_utilisateur;

  #Requête sql d'insertion en base de données
  try {
    $stmt = $pdo->prepare("INSERT INTO utilisateur (nom_utilisateur, courriel_utilisateur, mot_de_passe_utilisateur) VALUES (:nom, :courriel, :mot_de_passe)");
    $stmt->bindParam(':nom', $nom_utilisateur);
    $stmt->bindParam(':courriel', $courriel_utilisateur);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe_utilisateur);

    if ($stmt->execute()) {
      echo 'Inscription réussie';
    } else {
      echo 'Erreur lors de l\'inscription';
    }
  } catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
  }
}

?>



<div class="login">
  <form class="form" action="" method="post">
    <h1>Inscription</h1>
    <div class="form_container">
      <div>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>
      </div>
      <div>
        <label for="courriel">Courriel&nbsp;:</label><!--&nbsp force à mettre unb espace insécable-->
        <input class=input type="email" name="courriel" required> <!--email =clé pour passer la valeur taper du front vers le bac-->
      </div>
      <div>
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" required>
      </div>

      <button type="submit" class="btn btn-blue">
        s'inscrire
      </button>

      <div class="form_actions">
        <a href="login.html">
          <!-- erreur 405 si on ne met pas type boutton car il croit que c'est un boutton de soumission(submit)-->
          <button type="button" class="btn btn-green"><a href="?page=login.php"> <!--Attention en croyant envoyer le formulaire ça envoie sur une page-->
              Se Connecter
            </a>
          </button>
        </a>
      </div>
    </div>
  </form>
</div>