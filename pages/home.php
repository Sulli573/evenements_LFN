<?php


$sql = "SELECT * FROM evenements JOIN lieu ON evenements.id_lieu = lieu.id_lieu";
$stmt = $pdo->query($sql);
$evenements = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
?>

    <div class="container">
    <?php foreach ($evenements as $evenement):
        ?>
        <div class="card">
            <div class="card__header">
                <img src="assets/images/concert-1.jpg" alt="photo de l'événement"> 
            </div>

            <div class="card__body">
                <ul>
                    <li><?= $evenement['nom_evenement']?></li>
                    <li><?php echo date('d/m/Y H:i', strtotime($evenement['date_evenement']))?></li>
                    <li><?= $evenement['description_evenement']?></li>
                    <li><?= $evenement['nom_lieu']. " " .$evenement['adresse_lieu'] ?></li>
                </ul>
            </div>

            <div class="card__footer">
                <a href="?page=event&id=<?php echo $evenement['id_evenement']?>" class="btn" >
                    Details
                </a>
            </div>
        </div>
    <?php endforeach ?>
      
    </div>

    <!-- <h1>flex-direction: row</h1>
    <h2>justify-content: centre horizontalement</h2>
    <h2>align-items: center verticalement</h2>
    <div class="wrapper">
        <div class="box1"></div>
        <div class="box2"></div>
    </div>

    <h1>flex-direction: column</h1>
    
    <h2>justify-content: centre verticalement</h2>
    <h2>align-items: center horizontalement</h2>
    <div class="wrapper2">
        <div class="box3"></div>
        <div class="box4"></div>
    </div> -->

