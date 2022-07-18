<?php
session_start();
$mysqli = new Mysqli('localhost', 'root', '', 'muscu');
echo '<div class = "connexion">';
if($_POST)
{
    $req="SELECT * FROM connexion WHERE identifiant_user = '$_POST[identifiant]' AND mdp_user = '$_POST[mdp]'";
    $resultat=$mysqli->query($req);
    $connexion=$resultat->fetch_assoc();

    if (!empty($connexion))
    {

        $_SESSION["user"] = "connecte";
        header("location: accueil.php");
        exit();
    }
    else
    {
        echo '<div class = "erreur"> <h4> Erreur d\'identification </h4> </div>';
    }  
}

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style_connexion.css"> 

    </head>

    <body>
        <div class="formulaire">

        <h2>Connexion</h2>
        <img src="image/muscle.png">
        
        <form method="post" action ="">        
            
            <label for="identifiant"> Votre identifiant </label> </br>
            <input type="text" name = "identifiant" id = "identifiant" title="Votre identifiant"> </br>
            <label for="mdp"> Votre mot de passe </label> </br>
            <input type="password" name = "mdp" id="mdp" title="Votre mot de passe"> </br>
            <input type="submit" title="Connexion">

        </form> 
        <h3><a href="register.php">Créer un compte</a></h3>
        </div>
    </div>
</div>
    </body>
</html>