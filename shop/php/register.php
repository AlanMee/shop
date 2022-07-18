<?php
$mysqli = new Mysqli('localhost', 'root', '', 'muscu');

echo '<div class = "register">';

if (!empty($_POST["identifiant_user"]) && !empty($_POST["mail_user"]) && !empty($_POST["mdp_user"]) && !empty($_POST["date_naissance_user"]) && $_POST["mdp_user"]!==$_POST["mdpc"]) { 
    echo '<div class = "correspondpas">Vos mots de passe ne correspondent pas </div>';
}

    if (!empty($_POST["identifiant_user"]) && !empty($_POST["mail_user"]) && !empty($_POST["mdp_user"]) && !empty($_POST["date_naissance_user"]) && $_POST["mdp_user"]==$_POST["mdpc"]) {        
    
    
        $result = $mysqli->query('INSERT INTO connexion (identifiant_user, mail_user, mdp_user, date_naissance_user) VALUES ("'.$_POST["identifiant_user"].'", "'.$_POST["mail_user"].'", "'.$_POST["mdp_user"].'", "'.$_POST["date_naissance_user"].'")');
        echo '<div class="connexion"> <h4> Votre compte à bien été créé. <a href="connexion.php">Connexion</a> </h4> </div>';
    }

    else {
        echo '<div class="remplir"> <h4> Veuillez remplir tout les champs. </h4> </div>';
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title> Créer son compte </title>
    <link rel="stylesheet" href="register_style.css">
</head>

<body>
        <div class="contenu">     
        
            <form method="post" action="#">

            <label for="identifiant_user">Votre identifiant</label></br>
            <input type="text" name="identifiant_user" id="identifiant_user"></br>

            <label for="mail_user">Votre mail</label></br>
            <input type="text" name="mail_user" id="mail_user"></br>

            <label for="mdp_user">Votre mot de passe</label></br>
            <input type="password" name="mdp_user" id="mdp_user"></br>

            <label for="mdpc">Confimer votre mot de passe</label></br>
            <input type="password" name="mdpc" id="mdpc"></br>

            <label for="date_naissance_user">Votre date de naissance</label></br>
            <input type="text" name="date_naissance_user" id="date_naissance_user"></br>

            <input type="submit" title="Créer son compte">

            </form>
        </div>
        <div class = "titre">
            <h4>Créer son compte</h4>
        </div>
    </div>
</body>
</html>