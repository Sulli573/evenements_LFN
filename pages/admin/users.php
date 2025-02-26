<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements - Admin</title>
    <link href="../../assets/css/admin/admin.css" rel="stylesheet">
    <link href="../../assets/css/admin/users.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</head>
<body>
    <header class="header">
        <div></div>
         <!--Ajout de la balise afin d'avoir un justify-space-between qui amène la nav bar au centre et les actions à droite, sinon si la balise n'est pas là, la navbar serait à gauche et l'action à droite-->

        <nav>
            <ul>
                <li>
                    <a href="events.html">
                        Événements
                    </a>
                </li>
                <li>
                    Utilisateurs
                </li>
                <li>
                    <a href="organizers.html">
                        Organisteurs
                    </a>
                </li>
            </ul>
        </nav>

        <div class="header_actions">
            <a href="#">
                <i class="fa-solid fa-power-off"></i>
            </a>
        </div>
    </header>

    <main>
        <h1>Les Utilisateurs</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Courriel</th>
                    <th>Rôles</th>
                    <th>Activé</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Doe</td>
                    <td>John</td>
                    <td>exemple@exemple.com</td>
                    <td>Utilisateur</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Doe</td>
                    <td>John</td>
                    <td>exemple@exemple.com</td>
                    <td>Utilisateur</td>
                    <td>Non</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>