<?php
// Connexion à la base de données
try
{
	 $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','titi2020');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (Pseudo, Message) VALUES(?, ?)');
$req->execute(array($_POST['Pseudo'], $_POST['Message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>