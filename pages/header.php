<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/header.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/events.css">

    <title>Evenements</title>
</head>

<body>




    <nav class="bg-slate-800 flex justify-between item-center px-10">
        <ul class="h-[32px] text-white flex item-center gap-20">
            <!-- <li>
                    <a class="<?php echo 'page' === "home" ? "text-yellow-500" : '' ?> "href="?page=home">Home</a> 
                </li>
                <a class="<?php if ($current_page === "about.php") {
                                echo "text-blue-500";
                            } else {
                                "";
                            } ?>" href="?pages/about.php">About</a>
                
                <li><a class="<?php if ($current_page === "contact") {
                                    echo "text-red-500";
                                } else {
                                    "";
                                } ?>"
                 href="?page=contact">Contact</a></li>  -->
            <li>
                <a href="?page=home">Home</a>
            </li>
            <li>
                <a href="?page=about">About</a>
            </li>
            <li>
                <a href="?page=contact">Contact</a>
            </li>
        </ul>

        <div
            class="h-[32px] text-white"><a href="?page=login">Connexion</a>
         
            <a href="?page=sign_up"><a href="?page=sign_up">S'inscrire</a>
        
        </div>
        
    </nav>



  