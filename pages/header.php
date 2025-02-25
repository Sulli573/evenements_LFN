<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/header.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Evenements</title>
</head>

<body>

    
         <?php $current_page=$_GET["pages"]?>

        <nav class="bg-slate-800 flex justify-between item-center px-10"> 
            <ul class="h-[32px] text-white flex item-center gap-20">
            <li>
                    <a class="<?php echo $current_page ==="home" ? "text-yellow-500" : '' ?> "href="?pages/home">Home</a> <!-- change la classe si la page courrent est 'home' -->
                </li>
                <a class="<?php if($current_page ==="about.php") { // même chose qu'en haut mais avec un if
                        echo "text-blue-500";}
                         else {"";
                        } ?>" href="?pages/about.php">About</a>
                
                <li><a class="<?php if($current_page === "contact") {
                    echo "text-red-500";}
                    else {"";
                    } ?>"
                 href="?pages/contact.php">Contact</a></li>
            </ul>

            <div
                class="h-[32px] text-white"><a href="pages/sign_up.php">Connexion</a>
            </div>

        </nav>



    <?php
    
    ?>
    <html>
        <br>  <!--Le faire avec un container pour mettre une marge entre le header et le body de index.php--> 
    </html>
