<!DOCTYPE php>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="up.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/calendrier.css">
    <title> Calendrier </title>
</head>
<body> 
    <div class="retour">
        <a href="cours.php">
            <button style="width: 100px; float:right; margin-right: 8px"> Retour </button>
        </a>
    </div>
    
    <?php #HTML
        #script pour l'affichage des evenements en utilisant la table evenement
        #                                                       FORMAT                                                     #
        ####################################################################################################################
        #                                                Université de Parakou                                             #
        #                                                         ===                                                      #
        #                                                                                                                  #
        #     Chercher par catégorie               Chercher par date                                                       #
        # ##############################    ##############################    #####################  ####################  #
        # |           Tous  .^.        |    |         00/00/0000         |    #     Rechercher    #  #   Réinitialiser  #  #
        # ##############################    ##############################    #####################  ####################  #
        #                                                                                                                  #
        ####################################################################################################################
    ?>
    <h2 style="text-align: center"> Université de Parakou </h2>
    <div class="recherche">
        <form action="calendrier.php" method="post">
            <p>
                Chercher par catégorie <br/>  
                <select name="categorie" id="categorie">
                   <?php  
                        echo '<option value="tous"> Tous </option>';
                   ?>
                </select>
            </p>
            <p>
                Chercher par date <br/> 
                <input type="date" name="date_" id="date_"> 
            </p>
            <p> 
                <br>
                <input type="submit" value="Rechercher">
            </p>
            <p>
                <br>
                <input type="reset" value="Réinitialiser">
            </p>
        </form>
    </div>
    <?php #PHP
        #script pour l'affichage des matieres en utilisant la table evenement
        #                                                     FORMAT                                                              #
        ###########################################################################################################################
        #                                         #                                         #                                     #
        #                                         #                                         #                                     #
        #        PHOTO ILLUSTANT L'EVEMENT        #        PHOTO ILLUSTANT L'EVEMENT        #      PHOTO ILLUSTANT L'EVEMENT      #
        #                                         #                                         #                                     #
        #                                         #                                         #                                     #
        ###########################################################################################################################
        #          DATE_DEBUT & DATE_FIN          #          DATE_DEBUT & DATE_FIN          #         DATE_DEBUT & DATE_FIN       #
        ###########################################################################################################################
        #                                         #                                         #                                     #
        #        INTITULLE DE L'EVENENEMT         #         INTITULLE DE L'EVENENEMT        #       INTITULLE DE L'EVENENEMT      #
        #                                         #                                         #                                     #
        ###########################################################################################################################
    ?>
    <!-- <hr size="5px" width="100%"> -->
    <div class="search_result">
        <div class="result">
            <fieldset>
                <div class="evenement">
                    <img src="photo.jpg" alt="l'image">
                    <div class="intitulle">
                        <?php 
                            echo " INTITULLE DE L'EVENENEMT ";
                        ?>
                    </div>
                    <div class="debut_fin">
                        <?php 
                            echo "DATE_DEBUT"." & ". " DATE_FIN ";
                        ?>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="evenement">
                    <img src="photo.jpg" alt="l'image">
                    <div class="intitulle">
                        <?php 
                            echo " INTITULLE DE L'EVENENEMT ";
                        ?>
                    </div>
                    <div class="debut_fin">
                        <?php 
                            echo "DATE_DEBUT"." & ". " DATE_FIN ";
                        ?>
                    </div>
                </div>  
            </fieldset>
            <fieldset>
                <div class="evenement">
                    <img src="photo.jpg" alt="l'image">
                    <div class="intitulle">
                        <?php 
                            echo " INTITULLE DE L'EVENENEMT ";
                        ?>
                    </div>
                    <div class="debut_fin">
                        <?php 
                            echo "DATE_DEBUT"." & ". " DATE_FIN ";
                        ?>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</body>
</html>