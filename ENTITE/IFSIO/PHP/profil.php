<!DOCTYPE php>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="up.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/profil.css">
    <title> Profil </title>
</head>
<body>  
    <?php //include("header.php") ?>
    <div class="retour">
        <a href="../HTML/tableau_bord.html">
            <button style="width: 100px; float:right"> Retour </button>
        </a>
    </div>
    <div class="haut_profil"></div>
    <div class="contain">
        <div class="conteneur">
            <div> 
                <?php 
                    # Vérifier l'exitence du fichier
                    if ( isset($_FILES['photo_profil']) ) {
                        # Vérifier la taille du fichier
                        if ($_FILES['photo_profil']['size'] <= 500000) {
                            # Vérifier l'extension du fichier
                            $infosFichier = pathinfo($_FILES['photo_profil']['name']);
                            $extension_recu = $infosFichier['extension'];
                            $extension_autoriser = array("jpg", "png", "jpeg");
                            $accepter = false;
                            for ($i=0; $i < sizeof($extension_autoriser) ; $i++){ 
                                if (in_array($extension_recu, $extension_autoriser)){
                                $accepter = true;
                                }
                            }
                            if ($accepter == true ){
                                #Sauvegarde du fichier
                                // move_uploaded_file($_FILES['photo_profil']['tmp_name'], "IMAGE/".$_FILES['photo_profil']['name']);

                                echo"<style> #ombre_image{display: none;} </style>";
                                echo '<img src="'.$_FILES['photo_profil']['name'].'" style=" border: none; border-radius: 50%; width: 300px; height: 300px;">';
                            }else {
                                echo '<img id="ombre_image" src="" style="display:flex; border: none; border-radius: 50%; width: 300px; height: 300px;"> <br/>';
                                echo '<script> alert("La fichier doit être un fichier.jpg, un fichier.png ou un fichier.jpeg"); </script>';
                                echo '<strong> Pas de photo de profil </strong>'; 
                            }
                            
                        }else {
                            echo '<script> alert("La taille du fichier ne doit pas dépasser 500ko."); </script>';
                            echo '<img id="ombre_image" src="" style="display:flex; border: none; border-radius: 50%; width: 300px; height: 300px;"> <br/>';
                            echo '<strong> Pas de photo de profil </strong>'; 
                        }
                    } else {
                        echo '<img id="ombre_image" src="" style="display:flex; border: none; border-radius: 50%; width: 300px; height: 300px;"> <br/>';
                        echo '<strong> Pas de photo de profil </strong>'; 
                    } 
                ?>
            </div>
            <div style="margin-left: 20px">
                <form action="profil.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="photo_profil" id="photo_profil" required> <br>
                    <input type="submit" value=" Changer la photo ">
                </form>
            </div>
        </div>
    </div>
    <hr size="10" width="100%" style="border-radius: 5px">
    <div class="information">
        <div class="info">
            <h2> Informations personnelles </h2>
            <?php 
                    echo "<p> <strong> Utilisateur: </strong> </p>";
                    echo "<p> <strong> Date de naissance: </strong> </p>";
                    echo "<p> <strong> Matricule: </strong> </p>";
                    echo "<p> <strong> Email: </strong> </p>";
                    echo "<p> <strong> Mot de passe: </strong> ********* </p>";
            ?>
            <button id="input"> Modifier mes informations </button>   
            <button id="fermer"> Fermer le formulaire </button>   
        </div>
        <div>
                        
            <form id="form" action="" method="post">
                <p>
                    <input type="text" name="nom" id="nom" placeholder="Nom" required>
                </p>
                <p>
                    <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
                </p>
                <p>
                    <input type="date" name="date" id="date" placeholder="Date de naissance" required>
                </p>
                <p>
                    <input type="number" name="matricule" id="" placeholder="Numero matricule" required>
                </p>
                <p>
                    <input type="email" name="mail" id="mail" placeholder="Adresse mail" required>
                </p>
                <p>
                    <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Mot de passe" required>
                </p>
                <input type="submit" name="changer" value="Changer">
            </form>
           
            <script>
                var input = document.getElementById("input");
                var form = document.getElementById("form");
                var fermer = document.getElementById("fermer");

                input.addEventListener("click", function () {
                    form.style.display = "flex";
                    form.style.flexDirection = "column";
                }, false);

                fermer.addEventListener("click", function () {
                    form.style.display = "none";
                }, false);
            </script>
        </div>
    </div>
    
</body>
</html>