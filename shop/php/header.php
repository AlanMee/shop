<?php
session_start();
?>

<nav class = "menu"> 

    <a href = "accueil.php"> <img class = "image" src="image/logo.png"> </a>

    <ul class = "menuul">
        <li class = "produittest"> <a href="produit.php"> Nos produits </a> 

            <ul class ="produitliste"> 
                <li> <a href="#"> Nos machines </a></li>
                <li> <a href= "#"> Nos barres de musculation </a> </li>
                <li> <a href ="#"> Nos compléments </a> </li>
            </ul>  

        </li>             
        <li><a href="qui.php"> Qui sommes nous?  </a> </li>
        <li><a href="outrouver.php"> Où nous trouver? </a> </li>    
        <li><a href="comment.php"> Fabrication de nos produits </a> </li>  
    </ul>

    <?php if (isset($_SESSION["user"]) && !empty($_SESSION["user"])): ?>

    <a href="#"> <img class = "image2" src="image/manchot.png" alt="bonjour" title="MANCHOT"> </a>

    <?php else: ?> 
        
    <a href="connexion.php"> <img class = "image2" src="image/compte.png" alt="oui"> </a> 

    <?php endif; ?>


    
    

</nav>


    


