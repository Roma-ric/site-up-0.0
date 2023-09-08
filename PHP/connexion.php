<?php 
    include ("db.php");

    if (isset($_POST)) {
        
        # Recuperation des informations de l'etudiant
        $email = $_POST["email_etudiant"];
        $mot_de_passe = $_POST["mot_de_passe_etud"];

        
        #Verification de l'existence de l'utilisateur
        $verifie = "SELECT email_etudiant, mot_de_passe_etud FROM etudiants";

        $preparer_verifie = $bdd->prepare($verifie);

        $preparer_verifie->execute();

        $recup_verifie = $preparer_verifie->fetchAll();

        echo"<pre>";
        print_r($recup_verifie);

        $existe = false;
        foreach ($recup_verifie as $key => $value) {
            if ($_POST["email_etudiant"] === $value["email_etudiant"] && $_POST["mot_de_passe_etud"] === $value["mot_de_passe_etud"]) {
                $existe = true;
            }
        }
        echo $existe;

        // if ($existe) {
        //     header("location: ../HTML/tableau_bord.html");
        // }else(
        //     echo " Identifiant incorrect.";
        // )
        
              
    }
?>