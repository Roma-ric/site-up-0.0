<?php 
    include ("db.php");

    if (isset($_POST)) {
        
        # Recuperation des informations de l'etudiant
        $email = $_POST["email"];
        $mot_de_passe = $_POST["mot_de_passe"];
         
        echo "<br>";
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $mot_de_passe;

        #Verification de l'existence de l'utilisateur
        $verifie = "SELECT email_etudiant, mot_de_passe_etu FROM etudiants";

        $preparer_verifie = $bdd->prepare($verifie);

        $preparer_verifie->execute();

        $recup_verifie = $preparer_verifie->fetchAll();

        echo"<pre>";
        print_r($recup_verifie);

        $existe = false;
        foreach ($recup_verifie as $key => $value) {
            if ($email == $value["email_etudiant"] && $mot_de_passe == $value["mot_de_passe_etu"]) {
                $existe = true;
                break;
            }
        }

        if ($existe) {
            header("location: ../HTML/tableau_bord.html");
        }else{
            header("location: ../HTML/connexion.html");
        }
        
              
    }
?>