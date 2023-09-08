<!DOCTYPE php>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="up.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/resultat.css">
    <title> Résultats </title>
</head> 
<body> 
    <!-- PAGE R-1: CHOISIR EXAMEN -->
    <!-- Resultats disponible & Resultat a venir -->
    <!-- L'examen (Premier semestre | Second semestre ) et la session (Normale | Rattrapage ) -->
    <!-- Recevoir par mail | Voir directement -->
    <!-- PAGE R-2; RENSEIGNER INFOS -->
    <!-- Critere de recherche : numero matricule  [select, option(numero matricule)] [ input:number ]-->
    <!-- Resulats de la recherche : Affichage informations a propos du bnumero matricule donner -->
    <!-- Payer les 100f via kakiapay => acces pour renseigner son email -->
    <!-- Payer les 100f via kakiapay => affichage du resultat -->
    <!-- Recevoir --> 
    <!-- Confirmation d'envoie -->
    <!-- Resultats de la recherche : Matiere & Note dans le message email -->
    <div class="retour">
        <a href="../HTML/tableau_bord.html">
            <button style="width: 100px; float:right;"> Retour </button>
        </a>
    </div>
    <h1> Faculté d'Agronomie  </h1>
    <div class="resultats_dispo">
        <fieldset>
            <legend><h3> Résultats disponibles </h3>  </legend>  
            <?php #PHP
                #script pour l'affichage des options en utilisant la table resultat_option
                #                          FORMAT                        #
                ##########################################################
                #  Entite                                                #
                #                                                        #
                #  EXAMEN & SESSION                                      #
                #                                                        #
                ##########################################################
                # RECEVOIR PAR EMAIL        |     CONSULTER MON RESULTAT #
                ##########################################################
            ?>
            <fieldset style="width: 30%;">
                <div class="result_dispo">
                    <p> <?php echo "Entite"; ?> </p> 
                    <p> <?php echo "EXAMEN & SESSION"; ?> </p> <br>
                    <div class="boutton">
                        <a href="#critere"> <button> RECEVOIR PAR EMAIL </button> </a>
                        <a href="#critere"> <button> CONSULTER MON RESULTAT </button> </a>
                    </div>
                </div>
            </fieldset>
        </fieldset>
    </div>
    <div class="resultats_a_venir">
        <fieldset>
            <legend><h3> Résulats en attente </h3>  </legend>
            <?php #PHP
                #script pour l'affichage des options en utilisant la table resultat_option
                #                          FORMAT                        #
                ##########################################################
                #  Entite                                                #
                #                                                        #
                #  EXAMEN & SESSION                                      #
                #                                                        #
                ##########################################################
                # RECEVOIR PAR EMAIL(lors de la disponibilite)           #
                ##########################################################  
            ?>
            <fieldset style="width: 30%;">
                <div class="result_dispo">
                    <p> <?php echo "Entite"; ?> </p> 
                    <p> <?php echo "EXAMEN & SESSION"; ?> </p> <br>
                    <div class="boutton">
                        <a href="#critere"> <button> RECEVOIR PAR EMAIL(lors de la délibération)</button> </a>
                    </div>
                </div>
            </fieldset>
        </fieldset>
    </div>
    <div class="resultat">
        <div id="critere">
            <fieldset>
                <legend> <h3> Critère de la recherche </h3> </legend>
                <?php #HTML
                    #script pour donner les criteres de recherche (matricule seul ici) en utilisant la table etudiant
                    #                          FORMAT                        #
                    ##########################################################
                    #               Critere de la recherche                  #
                    #                                                        #
                    #  Vous pouvez utilisez votre numero matricule, votre... #
                    #  pour faire la recherche                               #
                    #                                                        #
                    # ------------------------------------------------------ #
                    # | Numero matricule  .^.                              | #
                    # ------------------------------------------------------ #
                    #                                                        #
                    # ------------------------------------------------------ #
                    # | 00000000                                           | #
                    # ------------------------------------------------------ #
                    #                                                        #
                    ##################                                       #
                    #   Rechercher   |                                       #
                    ##########################################################
                ?>
                <p> Vous pouvez utilisez votre numero matricule, votre ... pour faire la recherche. </p>
                <form action="resutats.php" method="post">
                    <p>
                       <select name="critere">
                            <option value="matricule"> Numéro matricule </option>
                       </select> 
                    </p>
                    <p>
                        <input type="number" name="matricule" id="matricule" placeholder="00000000">
                    </p>
                    <p>
                        <input type="submit" value="Rechercher">
                    </p>
                </form>
            </fieldset>
        </div>
        <div class="afficher">
            <fieldset>
                <legend> <h3> Résultats de la recherche </h3>  </legend>
                <?php #PHP
                    #script pour l'affichage des informations personnnelles en utilisant la table etudiant
                    #                          FORMAT                        #
                    ##########################################################
                    #               Resultats de la recherche                #
                    #                                                        #
                    #  Numero matricule:                                     #
                    #  Entite :                                              #
                    #  Nom :                                                 #
                    #  Prenom :                                              #
                    #  Date de naissance :                                   #
                    #  Email :                                               #
                    #                                                        #
                    #  Recevoir :                                 \\hidden\\ #
                    #                                           ##############
                    #                                           | PAYER 100F #
                    ##########################################################
                ?>
                <?php 
                    echo " <p> <strong> Numero matricule: </strong>";
                    echo " <p> <strong> Entite : </strong></p> "; 
                    echo " <p> <strong> Nom : </strong> </p> "; 
                    echo " <p> <strong> Prenom : </strong> </p> "; 
                    echo " <p> <strong> Date de naissance : </strong> </p> ";  
                    echo " <p> <strong> Email : </strong> </p> ";
                    echo " <p> <strong> Recevoir : </strong>"."".'<input type="email" name="mail" id="mail" placeholder="prenom_nom@gmail.com" hidden> </p> ';
                    echo " <p> <button> PAYER 100FCFA </button> </p> "; 
                ?>
            </fieldset>
        </div>
    </div>


    <script>
        // fonction qui anime le défilement de la page
        function smoothScroll(target, duration) {
        // récupérer la position actuelle de la page
        var currentPos = window.pageYOffset;
        // calculer la distance à parcourir pour atteindre la cible
        var distance = target.offsetTop - currentPos;
        // calculer le nombre de pixels à parcourir par intervalle de temps
        var step = distance / (duration / 10);
        
        // fonction qui anime le défilement de la page à chaque intervalle de temps
        function scrollAnimation() {
            // ajuster la position de la page de la distance à parcourir par intervalle de temps
            currentPos += step;
            // vérifier si la page a atteint la cible
            if (currentPos >= target.offsetTop) {
            // arrêter l'animation lorsque la page atteint la cible
            clearInterval(scrollInterval);
            }
            // déplacer la page à la position actuelle
            window.scrollTo(0, currentPos);
        }
        
        // démarrer l'animation de défilement de la page à chaque intervalle de temps
        var scrollInterval = setInterval(scrollAnimation, 10);
        }

        // sélectionner tous les liens qui pointent vers une ancre
        var anchorLinks = document.querySelectorAll('a[href^="#"]');

        // boucle à travers tous les liens qui pointent vers une ancre
        for (var i = 0; i < anchorLinks.length; i++) {
        // ajouter un écouteur d'événement pour le clic sur chaque lien
        anchorLinks[i].addEventListener('click', function(event) {
            // annuler le comportement par défaut du clic sur le lien
            event.preventDefault();
            // récupérer la cible de l'ancre à partir de l'attribut href du lien
            var target = document.querySelector(this.getAttribute('href'));
            // vérifier si la cible de l'ancre existe sur la page
            if (target) {
            // appeler la fonction qui anime le défilement de la page
            smoothScroll(target, 500);
            }
        });
        }
    </script>
</body>
</html>