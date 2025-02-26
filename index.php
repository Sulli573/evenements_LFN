<?php

require './pages/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
    include './pages/'.$page.".php"; 
    require './pages/footer.php';

?>



