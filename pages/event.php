<?php
require_once '../config/database.php';
?>
<?php

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
                    <span>Nom de l'évenement :</span> Mon Concert
                </li>
                <li>
                    <span>Description de l'évement :</span>
                </li>
                <li>
                    <span>Date :</span>
                </li>
                <li>
                    <span>Lieu :</span>
                </li>
                <li>
                    <span>Adresse :</span>
                </li>
                <li>
                    <span>Organisateur :</span>
                </li>
                <li>
                    <span>Nombre de place restantes :</span>
                </li>
            </ul>
            <div class="event_description_action">
                <button class="btn btn-blue">Vous êtes inscrit</button>
                <button class="btn btn-red">Se désincrire</button>
            </div>
        </div>
    </div>
</body>
</html>

