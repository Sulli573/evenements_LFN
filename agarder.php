if ($stmt->rowCount() == 1) {
            $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($mot_de_passe_utilisateur, $utilisateur['mot_de_passe_utilisateur'])) {
                $_SESSION['nom_utilisateur'] = $utilisateur['nom_utilisateur'];
                $_SESSION['courriel_utilisateur'] = $courriel_utilisateur;
                $_SESSION['role'] = $utilisateur['role_utilisateur'];

                echo 'Connexion réussie';

                   #Redirection selon role utilisateur
                if ($utilisateur['role_utilisateur'] === 'admin') {
                    header("Location: ?page=events.php");
                }else {
                    echo 'Mot de passe incorrect';
                }
                exit();
            } else {
                echo 'Mot de passe incorrect';
            }
        } else {
            echo 'Courriel ou mot de passe incorrect';
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}