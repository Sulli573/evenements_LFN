<?php
#chaine de connexion
$dsn = "mysql:host=localhost;dbname=evenements;charset=utf8";
$user = "root";
$pass = "";

#Objet pdo
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>