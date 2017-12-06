<?php
include 'connexion_pdo.php';

//partie preparation pour envoie du mail
require 'PHPMailer-5.2.26/PHPMailerAutoload.php';
include 'mail_init.php';

if(isset($_POST['nom'])){
  $nom = $_POST['nom'];
}
if(isset($_POST['email'])){
  $mail = $_POST['email'];
}
if(isset($_POST['objet'])){
  $objet = $_POST['objet'];
}
if(isset($_POST['message'])){
  $message = $_POST['message'];
}

if(isset($_POST['Send'])){
  include 'txt_mail_admin.php';
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Page demande admin</title>
</head>
<body style="background-color:powderblue;">
<div>

<form id="contact" method="post" action="demande_admin.php">
    <fieldset>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" placeholder="Ex : PAPI" required />
        <div class="clearer"></div>
        <br>
        <label for="email">E-mail : </label>
        <input type="email" name="email" id="email" placeholder="Saisir votre email" required />
        <div class="clearer"></div>
        <br>
        <label for="objet">Objet : </label>
        <input type="text" name="objet" id="objet" placeholder="Titre" required />
        <div class="clearer"></div>
        <br>
        <label for="message">Votre message : </label>
        <textarea name="message" id="message" placeholder="Pourquoi voulez vous devenir un admin ?"></textarea>
        <br>
        <input type="submit" name="Send" value="Send">
        <br>
        <input type="button" name="cancel" value="cancel">
    </fieldset>
</form>
</div>
</body>
</html>
