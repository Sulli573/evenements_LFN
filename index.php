<?php
session_start();
require_once 'config/database.php';
require './pages/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
    include './pages/'.$page.".php"; 
    require './pages/footer.php';

?>



