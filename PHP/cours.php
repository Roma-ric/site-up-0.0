<!DOCTYPE php>
<html lang="fr">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="up.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/cours.css">
    <title> Cours </title>
</head>
<body>  
    <?php 
        // echo date("d-m-Y");  
    ?>
    <div class="retour">
        <a href="../HTML/tableau_bord.html">
            <button style="width: 100px; float:right; margin-right: 8px"> Retour </button>
        </a>
    </div>
    <div class="cate">
        <!-- <h3> Accès rapide ( cliquer sur la catégorie voulu )</h3> -->
        <div class="categorie">
            <?php #HTML
                #script pour l'affichage des options de choix de la categorie du cours
                #                          FORMAT                        #
                ##########################################################
                #        TRONC COMMUN       |         SCPECIALITE        #
                ##########################################################
            ?>
            <a href="#tc">
                <fieldset>
                    <div class="tronc_commun"> 
                        <p> TRONC COMMUN </p>
                    </div>
                </fieldset>
            </a>
            <a href="#sp">
                <fieldset>
                    <div class="specialite">
                        <p> SPÉCIALITÉ </p>
                    </div>
                </fieldset>
            </a>
        </div>
    </div>
    <hr size="5px" width="100%">
    <div id="tc">
        <?php #PHP
            #script pour l'affichage des matieres en utilisant la table cours
            #                          FORMAT                        #                                                   #
            ##############################################################################################################
            #                                                        #                NOM COURS (UE | ECUE)              #  
            #                                                        #                                                   #
            #                                                        # Description bref de la matiere                    #
            #            PHOTO ILLUSTRANT LE COURS                   #                                                   #
            #                                                        #####################################################
            #                                                        #      Nombre d'heure       |   Nombre de credits   #
            #                                                        #####################################################
            #                                                        # DATE ET HEURE (STATUT? color::green | color::red) #
            ##############################################################################################################
        ?>
        <h3> TRONC COMMUN </h3>
        <div class="cours">
            <img src="PHP.php" alt="le cours de ....">
            <div class="infos_cours">
                <h4> 
                    <?php echo "NOM COURS"." "."(UE | ECUE)"; ?>
                </h4>
                <p>
                    <?php echo "Bref decriptiion du cours::explication generale des trucs qui sont dans le cours et......  "; ?>
                </p>
                <div class="heure_credit">
                    <div>
                        <?php echo "NOMBRE D'HEURE"; ?>
                    </div>
                    <div>
                        <?php echo "NOMBRE DE CREDITS"; ?> 
                    </div>
                </div>
                <div class="date_heure">
                     <?php echo "SALLE & DATE & HEURE <br/> (STATUT? color::green | color::red) <br/> & <br/> (FAIT? color::orange)"; ?>
                </div>
                <a href="emploie_temps.php" style="color: blue"><div> Voir plus </div></a>
            </div>
        </div>
    </div>
    <hr size="5px" width="100%">
    <div id="sp">
        <?php #PHP
            #script pour l'affichage des matieres en utilisant la table cours
            #                          FORMAT                        #                                                   #
            ##############################################################################################################
            #                                                        #                NOM COURS (UE | ECUE)              #  
            #                                                        #                                                   #
            #                                                        # Description bref de la matiere                    #
            #            PHOTO ILLUSTRANT LE COURS                   #                                                   #
            #                                                        #####################################################
            #                                                        #      Nombre d'heure       |   Nombre de credits   #
            #                                                        #####################################################
            #                                                        # DATE ET HEURE (STATUT? color::green | color::red) #
            ##############################################################################################################
        ?>
        <h3> SPÉCIALITÉ </h3>
        <div class="cours">
            <img src="PHP.php" alt="le cours de ....">
            <div class="infos_cours">
                <h4> 
                    <?php echo "NOM COURS"." "."(UE | ECUE)"; ?>
                </h4>
                <p>
                    <?php echo "Bref decriptiion du cours::explication generale des trucs qui sont dans le cours et......  "; ?>
                </p>
                <div class="heure_credit">
                    <div>
                        <?php echo "NOMBRE D'HEURE"; ?>
                    </div>
                    <div>
                        <?php echo "NOMBRE DE CREDITS"; ?> 
                    </div>
                </div>
                <div class="date_heure">
                     <?php echo "SALLE & DATE & HEURE <br/> (STATUT? color::green | color::red) <br/> & <br/> (FAIT? color::orange)"; ?>
                </div>
                <a href="emploie_temps.php" style="color: blue"><div> Voir plus </div></a>
            </div>
        </div>
    </div>
    

    <script>
        window.addEventListener("load", function () {
            alert("Veillez cliquer sur la catégorie voulu.");
        }, false);
    </script>

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