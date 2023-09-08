<?php 
    $host = "localhost";
    $dbname = "site_up";
    $login = "root";
    $mot_de_passe = "";
 
    try{
        $bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $mot_de_passe);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (Exception $e){
        echo $e->getMessage();
    }
?>