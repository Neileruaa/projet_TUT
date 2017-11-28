<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8','root','titi2020');
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
?>
