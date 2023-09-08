<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="up.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/emploie_temps.css">
    <title> Emploie du temps </title>
</head>
<body> 
    <div class="retour">
        <a href="cours.php">
            <button style="width: 100px; float:right; margin-right: 8px"> Retour </button>
        </a>
    </div>
    <div class="emploi_temps">  
        <?php 
            #A gerer par php || en utiliant la base la table matiere
        ?>
        <div class="matiere">
            <fieldset class="nom_matiere">
                        Matiere
            </fieldset>
            <fieldset class="jour_cour">
                <div class="premier_groupe_jour">
                    <table>
                        <tr>
                            <td colspan="2"> Lundi </td>
                        </tr>
                        <tr>
                            <td> 07h - 13h </td>
                            <td> 15h - 19h </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="2"> Mardi </td>
                        </tr>
                        <tr>
                            <td> 07h - 13h </td>
                            <td> 15h - 19h </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="2"> Mercredi </td>
                        </tr>
                        <tr>
                            <td> 07h - 13h </td>
                            <td> 15h - 19h </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="2"> Jeudi </td>
                        </tr>
                        <tr>
                            <td> 07h - 13h </td>
                            <td> 15h - 19h </td>
                        </tr>
                    </table>
                </div>
                <div class="deuxieme_groupe_jour">
                    <table>
                        <tr>
                            <td colspan="2"> vendredi </td>
                        </tr>
                        <tr>
                            <td> 07h - 13h </td>
                            <td> 15h - 19h </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="2"> Samedi </td>
                        </tr>
                        <tr>
                            <td> 07h - 13h </td>
                            <td> 15h - 19h </td>
                        </tr>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</body>
</html>