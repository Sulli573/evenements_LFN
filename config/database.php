<?php 
#Création chaîne de connexion à la base de données
$dsn = "mysql:host=localhost; dbname=gestion_evenements; charset=utf8";

#Créer l'obejt PDO
$user = "root";
$pass = "";
$pdo = new PDO($dsn, $user,$pass);

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
var_dump($pdo);
