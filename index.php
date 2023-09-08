<!DOCTYPE php>
<html lang="fr">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="up.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/acceuil.css">
    <title> Université de Parakou </title>
</head>
<body> 
    <?php include("header.php") ?>
    <div style="height: 600px; background-image: url(IMAGE/photo2_campus.png); background-size: cover; color: white">
        <div style="height: 40%">  </div>
        <h1 style=" text-align: center; margin-top: 0"> Bienvenue sur notre site de gestion universitaire !</h1>
        <p style=" text-align: center; font-size: 20px;"> Notre plateforme en ligne permet aux étudiants, aux enseignants et au personnel de l'université de gérer facilement <br> 
            toutes les informations liées à leur parcours universitaire. Vous pouvez accéder à votre emploi du temps, voir vos <br> 
            résultats de cours, trouver des ressources pour vous aider à réussir vos études, et bien plus encore.
        </p>
    </div>
    <div id="campus" style="height: auto; padding: 10px; background-size: cover;">
        <h1 id="anime" class="h1" style="text-align: center; padding: 5px; border: 1px solid rgb(0, 0, 75); border-radius: 10px;"> Campus Universitaire </h1>
        <h2 id="direction" style=" text-align: center; padding: 5px; border: 1px solid rgb(0, 0, 75); border-radius: 10px;"> DIRECTION GÉNERALE </h2>
        <div class="campus1">
            <a style="color: black;" href="HTML/connexion.html"> 
                <div>
                    <h4 > Rectorat </h4>
                    <center><img src="IMAGE/rectorat.png" alt="le logo"></center>
                    <p> Le rectorat est l'instance administrative 
                        qui dirige l'université et coordonne les 
                        activités des différentes entités qui la 
                        composent. Il assure également la représentation 
                        de l'université auprès des autorités académiques 
                        et politiques.  
                    </p>
                </div>
            </a>
            <a style="color: black;" href="HTML/connexion.html"> 
                <div>
                    <h4> Scolarité centrale (SC) </h4>
                    <center><img src="IMAGE/sco.png" alt="le logo"></center>
                    <p> La scolarité centrale est le service en charge 
                        de la gestion des inscriptions et des examens des 
                        étudiants. C'est elle qui assure le suivi des parcours      
                        universitaires et la délivrance des diplômes. 
                    </p>
                </div>
            </a>
            <a style="color: black;" href="HTML/connexion.html"> 
                <div>
                    <h4> Centre des Oeuvres Universitaires et Sociales (COUS-P) </h4>
                    <center><img src="IMAGE/cous-p.png" alt="le logo"></center>
                    <p> le centre des œuvres universitaires et sociales a 
                        pour mission d'améliorer les conditions de vie des 
                        étudiants en leur offrant des services tels que la restauration, 
                        le logement, les activités culturelles et sportives, ainsi 
                        que l'aide sociale. 
                    </p>
                </div>
            </a>
        </div>
        <h2 id="entite" style=" text-align: center; padding: 5px; border: 1px solid rgb(0, 0, 75); border-radius: 10px;"> LES ENTITÉS DE FORMATIONS </h2>
        <div class="campus1">
            <a style="color: black;" href="ENTITE/FASEG/PHP/faseg.php"> 
                <div>
                    <h4> Faculté des Sciences Économiques et de Gestion (FASEG)</h4>
                    <center><img src="IMAGE/faseg.jpeg" alt="le logo"></center>
                    <p> La FASEG offre des programmes dans les domaines de l'économie, 
                        de la gestion et de la finance. Les étudiants peuvent s'attendre 
                        à une formation académique solide ainsi qu'à des possibilités de 
                        stages et de recherche pour développer leur carrière dans 
                        le monde des affaires  
                    </p>
                </div>
            </a>
            <a style="color: black;" href="ENTITE/FLASH/PHP/flash.php"> 
                <div>
                    <h4>Faculté des Lettres, Arts et Sciences Humaines (FLASH) </h4>
                    <center><img src="IMAGE/flash.jpeg" alt="le logo"></center>
                    <p> La FLASH est la plus grande faculté de notre université, 
                        proposant une variété de programmes dans les domaines des  
                        lettres, de la linguistique, de l'histoire, de la philosophie,  
                        des arts et des sciences sociales. Les étudiants bénéficient  
                        d'un environnement stimulant pour développer leur créativité,
                        leur réflexion critique et leur compréhension du monde. 
                    </p>
                </div>
            </a>
            <a style="color: black;" href="ENTITE/IUT/PHP/iut.php"> 
                <div>
                    <h4> Institut Universitaire de Technologie (IUT) </h4>
                    <center><img src="IMAGE/iut.jpg" alt="le logo"></center>
                    <p> L'IUT propose des programmes d'enseignement supérieur  
                        courts et professionnalisants dans les domaines de la gestion, 
                        de l'informatique, de l'ingénierie. Les étudiants peuvent s'attendre  
                        à une formation de qualité qui leur permettra de s'adapter rapidement 
                        aux besoins du marché de l'emploi.
                    </p>
                </div>
            </a>
        </div>
        <div class="campus1">
            <a style="color: black;" href="ENTITE/FM/PHP/fm.php"> 
                <div>
                    <h4> Faculté de Médecine (FM) </h4>
                    <center><img src="IMAGE/fm.jpeg" alt="le logo"></center>
                    <p> La FM est une faculté de renom qui offre des programmes   
                        de formation en médecine, en pharmacie et en odontostomatologie.  
                        Les étudiants bénéficient d'un enseignement de haute qualité 
                        dans des environnements cliniques et hospitaliers modernes, 
                        et ont accès à des équipements de pointe pour la recherche  
                        et la pratique clinique. 
                    </p>
                </div>
            </a>
            <a style="color: black;" href="ENTITE/FA/PHP/fa.php"> 
                <div>
                    <h4> Faculté d'Agronomie (FA) </h4>
                    <center><img src="IMAGE/fa.jpeg" alt="le logo"></center>
                    <p> La FA offre des programmes de formation en agriculture,  
                        en agro-industrie et en sciences de la terre. Les étudiants 
                        ont la possibilité de travailler sur des projets concrets,  
                        tels que des expériences agricoles et des projets de développement   
                        rural, pour acquérir une expérience pratique et développer leur 
                        compréhension de la production alimentaire durable. 
                    </p>
                </div>
            </a>
            <a style="color: black;" href="ENTITE/IFSIO/PHP/ifsio.php"> 
                <div>
                    <h4> Institut de Formations en Soins Infirmiers et Obstétricaux (IFSIO) </h4>
                    <center><img src="IMAGE/ifsio.png" alt="le logo"></center>
                    <p> L'IFSIO est l'école de formation pour les professions de la santé,  
                        notamment pour les infirmiers et les sages-femmes. Les étudiants 
                        reçoivent une formation théorique et pratique pour leur permettre 
                        de fournir des soins de qualité aux patients et aux femmes enceinte, 
                        en utilisant les dernières technologies et les meilleures pratiques 
                        de soins de santé.
                    </p>
                </div>
            </a>
        </div>
        <div class="campus1">
            <a style="color: black;" href="ENTITE/FDSP/PHP/fdsp.php"> 
                <div>
                    <h4> Faculté de Droit et de Science Politique (FDSP) </h4>
                    <center><img src="IMAGE/fdsp.jpeg" alt="le logo"></center>
                    <p> La FDSP offre des programmes de formation en droit, en science 
                        politique et en administration publique. Les étudiants ont la 
                        possibilité de travailler avec des experts du domaine et de 
                        participer à des projets de recherche de haut niveau pour 
                        développer leur expertise dans ces domaines. 
                    </p>
                </div>
            </a>
            <a style="color: black;" href="ENTITE/ENATSE/PHP/enatse.php"> 
                <div>
                    <h4> École Nationale des Techniciens en Santé Publique et Surveillance Epidémiologique (ENATSE) </h4>
                    <center><img src="IMAGE/enatse.jpeg" alt="le logo"></center>
                    <p> L'ENATSE est une école de formation spécialisée dans les domaines 
                        de la santé publique et de la surveillance épidémiologique. 
                        Les étudiants acquièrent des compétences en matière de surveillance et 
                        de prévention des maladies infectieuses, de gestion des crises sanitaires 
                        et de promotion de la santé publique.  
                    </p>
                </div>
            </a>
            <a style="color: black;" href="ENTITE/ENSPD/PHP/enspd.php"> 
                <div>
                    <h4> École Nationale de Statistique, de Planification et de Démographie (ENSPD) </h4>
                    <center><img src="IMAGE/enspd.jpeg" alt="le logo"></center>
                    <p> L'ENSPD offre des programmes de formation en statistique, en planification 
                        et en démographie, avec une approche axée sur la pratique. Les étudiants acquièrent des  
                        compétences en matière d'analyse de données, de planification stratégique et de 
                        gestion des ressources pour répondre aux besoins des secteurs public et privé en 
                        matière de statistiques et de planification.
                    </p>
                </div>
            </a>
        </div>
        <h2 id="organisation" style=" text-align: center; padding: 5px; border: 1px solid rgb(0, 0, 75); border-radius: 10px;"> LES ORGANISATIONS ESTUDIANTINES </h2>
        <div class="campus">
            <a style="color: black;" href="HTML/connexion.html"> 
                <div>
                    <h4> Fédération Nationale des Etudiants de l'Université de Parakou (FNEUP) </h4>
                    <center><img src="IMAGE/fneup.jpg" alt="le logo"></center>
                    <p> La FNEUP est une organisation estudiantine dynamique qui représente les intérêts <br> 
                        des étudiants de l'Université de Parakou, située au Bénin. La FNEUP est dédiée à <br>
                        l'amélioration de la vie étudiante, à la promotion de l'éducation de qualité et <br>
                        à la défense des droits des étudiants. <br>
                    </p>
                </div>
            </a>
            <a style="color: black;" href="HTML/connexion.html"> 
                <div>
                    <h4> Union Nationale des Etudiants de l'Univerité de Parakou (UNEUP) </h4>
                    <center><img src="IMAGE/uneup.jpg" alt="le logo"></center>
                    <p> L'UNEUP est une organisation estudiantine engagée qui représente les étudiants de <br> 
                        l'Université de Parakou, située au Bénin. L'UNEUP a pour objectif de défendre les <br> 
                        droits et les intérêts des étudiants, de promouvoir leur bien-être et de favoriser <br>
                        leur épanouissement au sein de la communauté universitaire. <br>
                    </p>
                </div>
            </a>
        </div>
        <h2 id="association" style=" text-align: center; padding: 5px; border: 1px solid rgb(0, 0, 75); border-radius: 10px;"> LES ASSOCIATIONS D'ANIMATIONS </h2>
        <div class="campus">
            <a style="color: black;" href="HTML/connexion.html"> 
                <div>
                    <h4> Union Culturelle et Artistique Olatomi (UCAO) </h4>
                    <center><img src="IMAGE/ucao.png" alt="le logo"></center>
                    <p> L'UCAO  est une organisation dédiée à la promotion de la culture et des arts au sein <br>
                        de la communauté de Parakou. Fondée avec la vision de préserver et de valoriser le <br> 
                        patrimoine culturel local, l'UCAO s'engage à travers diverses activités artistiques <br> 
                        et culturelles. <br>
                    </p>
                </div>
            </a>
            <a style="color: black;" href="HTML/connexion.html"> 
                <div>
                    <h4> Ensemble Artistique et Culturel des Etudiants de Parakou  (EACEP)  </h4>
                    <center><img src="IMAGE/eacep.jpeg" alt="le logo"></center>
                    <p> L'EACEP est une organisation estudiantine dynamique dédiée à la promotion de la <br>
                        culture et des arts au sein de la communauté estudiantine de Parakou, au Bénin. <br>
                        L'EACEP offre une plateforme aux étudiants pour exprimer leur créativité, explorer <br>
                        les arts et participer à des activités culturelles enrichissantes. <br>
                    </p>
                </div>
            </a>
        </div> 
    </div>
    <?php include("footer.php") ?>




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
