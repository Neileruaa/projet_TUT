<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=id2957716_jules;charset=utf8','id2957716_adrey','titi20/20');
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
?>
