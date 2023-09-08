<?php 
    include ("db.php");

    if (isset($_POST)) { 
        
        # Recuperation des informations de l'etudiant
        $nom = $_POST["nom_etudiant"];
        $prenom = $_POST["prenom_etudiant"];
        $birthday = $_POST["birthday_etudiant"];
        $matricule = $_POST["matricule_etudiant"];
        $email = $_POST["email_etudiant"];
        $mot_de_passe = $_POST["mot_de_passe_etud"];

        #Insertion de ces informations dans la base de donnees
        $requete = "INSERT INTO  etudiants(nom_etudiant, prenom_etudiant, birthday_etudiant, matricule_etudiant, email_etudiant, mot_de_passe_etu)
                    VALUES (?,?,?,?,?,?)";

        $preparer = $bdd->prepare($requete);

        try {
            $preparer->execute([$nom, $prenom, $birthday, $matricule, $email, $mot_de_passe]);
            header("location: ../HTML/connexion.html");
        } catch (Exception $e) {
            echo $e->getMessage();
            header("location: ../HTML/inscription.html");
        }
         
    }
?>
<?php 
    /*
    #Verification de l'existence de l'utilisateur
    $verifie = "SELECT * FROM etudiants";

    $preparer_verifie = $bdd->prepare($verifie);

    $preparer_verifie->execute();

    $recup_verifie = $preparer_verifie->fetchAll();

    echo"<pre>";
    print_r($recup_verifie);

    $existe = false;
    foreach ($recup_verifie as $value) {
        if ($_POST["nom_etudiant"] === $value["nom_etudiant"] && $_POST["prenom_etudiant"] === $value["prenom_etudiant"] && $_POST["birthday_etudiant"] === $value["birthday_etudiant"]  && $_POST["matricule_etudiant"] === $value["matricule_etudiant"] && $_POST["email_etudiant"] === $value["email_etudiant"] && $_POST["mot_de_passe_etud"] === $value["mot_de_passe_etud"]) {
            $existe = true;

            echo $existe;
        }
    }
    */
?>