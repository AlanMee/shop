<!DOCTYPE html>
<html>
    <head>
        <title> Accueil </title>
        <meta charset="UTF-8"> 
        <link rel="stylesheet" href="style_header.css"> 
        <link rel="stylesheet" href="style_accueil.css"> 
    </head>

    <body>
        <?php include("header.php"); ?>

        <div class="content">

            <div class = "haut">
                <h2> Bienvenue sur le site de muscu le mieux de France </h2>
                <h3> Créé par moi </h3>
            </div> 

            <div class = "produita">                   
                <div class = "machine">
                    <div class = "titremachine">
                        <h4> Nos machines </h4>
                    </div>
                        
                    <div class = "meilleurevente">
                        <div class = "meilleureventecontenu">
                            <h4> Notre meilleure vente de la semaine </h4>
                            <img src="image/machine1.png" alt="Machine1">
                        </div>                        
                        <div class="meilleurventesavoir">
                            <p> <a href = "produit.php"> En savoir plus </a> </p>
                        </div>
                    </div>                    
                            
                    <div class = "autre">
                        <div class = "titreautre">
                            <h4>Autres produits</h4>
                        </div>                                
                        <div class = "imageautre">
                            <div class = "imagegauche"> 
                                <img src="image/machine2.png" alt="Machine2">
                            </div>
                            <div class= "imagedroite">
                                <img src="image/machine3.png" alt="Machine3">
                            </div>                               
                        </div>
                        <div class = "savoirautre">
                            <p> <a href ="produit.php"> En savoir plus </a> </p>
                        </div>                                
                    </div>                                            
                </div>

                <div class = "poid">                      
                    <div class = "poidcontenu">
                        <h4>Nos poids</h4>
                            <p> Nos différentes gammes de poid</p>
                            <div class = "poidimage">
                                <img src="image/poid1.webp" alt="poid1">
                                <img src="image/poid2.png" alt="poid2">
                            </div>                                
                    </div>
                    <p><a href ="produit.php">En savoir plus</a></p>
                </div>

                <div class = "complements">
                    <div class = "complementcontenu">
                        <h4> Nos compléments </h4>
                        <img src="image/complement.jpg" alt="complement">
                        <p> <a href= "produit.php"> En savoir plus </a> </p>
                    </div>                        
                </div>                    
            </div>

            <div class = "quiou">
                <div class = "quia">    

                    <div class = "titrequi">
                        <h4>Qui sommes nous?</h4>
                    </div>

                    <div class = "quicontenu">  

                        <div class = "quigauche">
                            <div class ="quiequipe">
                                <h4>Notre équipe</h4>
                                <img src="image/equipe.jpg" alt="equipe">
                            </div>
                            <div class="quiobjectif">
                                <h4>Nos objectifs</h4>
                                <img src="image/objectifs.png" alt="objectif">
                            </div>
                        </div>

                        <div class = "quidroite">
                            <h4>Notre histoire</h4>
                            <div class = "imagequidroite">
                                <img src="image/histoire.jpg" alt="histoire">
                            </div>
                            <div class = "textequidroite">
                                <p>Nous avons créé cette entreprise dans le but de
                                proposer nos différentes gammes de produit aux maximum 
                                de monde. Nous nous sommes lancé en ... <a href ="qui.php"> [lire la suite]</a>.</p>
                            </div>                                                        
                        </div>                                               
                    </div>
                </div>

                <div class = "ou"> 

                    <div class = "titreou">
                        <h4>Où nous trouver?</h4>
                    </div>

                    <div class = contenuou>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.6162088052142!2d3.1239232159278543!3d50.61566868332693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d7d77210e727%3A0x6f6c113fbbbfcfcc!2sBASIC-FIT%20FRANCE!5e0!3m2!1sfr!2sfr!4v1643925695129!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>                    
                </div>
            </div>  
            
            <div class = "fabrique">

                <div class = "titrefabriquer"> 
                   <h4> Nos fabrications </h4>
                </div>

                <div class = "contenufabriquer"> 
                    <div class = "contenugauche">
                        <h4>Fabrication de nos machines</h4>
                        </br>
                        <img src="image/planfabricationmachine.jpeg" alt="planfabricationmachine">
                        </br>
                        <h5> <a href="produit.php"> En savoir plus </a> </h5>
                    </div>
                    <div class = "contenudroite">
                        <h4>Fabrication de nos compléments</h4>
                        </br>
                        <img src="image/fabriquercomplement.png" alt="fabricationcomplement">
                        </br>
                        <h5> <a href="produit.php"> En savoir plus </a> </h5>
                    </div>
                </div>
            </div>

            <div class = "contact">
                <div class="titrecontact">
                    <h4>Nous contacter</h4>
                </div>
                <div class="contenucontact">
                    <div class="contactgauche">
                        <form method="post" action="#">
                            <label for="message">Votre message </label> </br>
                            <textarea id="message" name="message" cols="50" rows="7"></textarea>
                       
                        </form>

                    </div>
                    <div class="contactdroite"></div>
                </div>
            </div>
        </div>

        <?php include("footer.php"); ?>
        
    </body>

</html>