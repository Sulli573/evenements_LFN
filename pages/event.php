<?php
//$sql="SELECT * FROM evenements WHERE id=$_GET['id']; mais comme c'est un parametre de l'url ça pourrait être modifié par un utulisateur donc il faut bind pour plus ed sécurité
#avec le join si lieu ou organisateur sont null on ne recupére pas les données
$sql = "SELECT * FROM evenements 
JOIN lieu ON evenements.id_lieu = lieu.id_lieu 
JOIN organisateur ON evenements.id_organisateur = organisateur.id_organisateur 
WHERE id_evenement=:id"; 

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id',$_GET['id']);
$stmt->execute();
$evenements = $stmt->fetchAll(PDO::FETCH_ASSOC);//recupération de la requête (1evenement) dans un tableau

$event = $evenements[0]; // récupération de l'évenement.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/event.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</head>
<body>
    <div class="event">
        <div class="event_picture">
            <img src="https://picsum.photos/1920/1080" alt="photo evenement" />
        </div>

        <div class="event_description">
            <ul>
                <li>
                    <span><?=$event['nom_evenement']?></span>
                </li>
                <li>
                    <span><?=date("d/m/Y H:i", strtotime($event['date_evenement']))?></span>
                </li>
                <li>
                    <span><?=$event['description_evenement']?></span>
                </li>
                <li>
                    <span><?=$event['nom_lieu']?></span>
                </li>
                <li>
                    <span><?=$event['adresse_lieu']?></span>
                </li>
                <li>
                    <span><?=$event['nom_organisateur']?></span>
                </li>
                <li>
                    <span><?=$event['place_evenement']?></span>
                </li>
            </ul>
            <div class="event_description_action">
                <button class="btn btn-blue">S'inscrire</button>
                <button class="btn btn-red">Se désincrire</button>
            </div>
        </div>
    </div>
<!--Pour les boutons, vérifier si l'utilisateur est inscrit
si pas inscrit-> s'inscrire ajouter l'id de l'utilisateur dans la table s'inscrire. id_utilisateur (avec $_session) et id_evenement (avec $event)
si inscrit->se desincrire
-->
</body>
</html>

