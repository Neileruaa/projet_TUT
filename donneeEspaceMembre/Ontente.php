<?php
if(isset($_POST["Send"])){
    require 'PHPMailer-5.2.26/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    // Paramètres SMTP
    $mail->isSMTP();
    $mail->Mailer = 'smtp';
    $mail->SMTPAuth = true;
    $mail->Username = 'projettutvaall@gmail.com';
    $mail->Password = 'ProjetTutVAALLb1';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPDebug = 0/*2*/;
    $mail->SMTPSecure = /*'ssl'*/'tls';
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    $mail->Port = 587/*25*/;

    
    $mail->Subject = $_POST["objet"];
    $mail->SetFrom($_POST["email"], $_POST["nom"] . " " . $_POST["prenom"]);
    $mail->Body = "Envoyé depuis : " . $_POST["email"] . "<br>" . $_POST["message"];
    $mail->AltBody = 'ALORS SI TU LIS CA CEST COOL PARCE QUE CA MARCHE !';
    $mail->AddAddress("projettutvaall@gmail.com", 'THE TEST');
    if(!$mail->Send()){
        echo "L'email n'a pas pu être envoyé sous race";
    } else {
        echo "L'email a été envoyé.";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FAUT BIEN TESTER DES TRUCS MDLOL</title>
</head>
<body style="background-color:powderblue;">
    <div>

    <form id="contact" method="post" action="Ontente.php">
        <fieldset>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom" placeholder="Ex : PAPI" required />
            <div class="clearer"></div>
            <br>
            <label for="prenom">Prénom : </label>
            <input type="text" name="prenom" id="prenom" placeholder="EX : LLION" required />
            <div class="clearer"></div>
            <br>
            <label for="email">E-mail : </label>
            <input type="email" name="email" id="email" placeholder="Saisir votre email" required />
            <div class="clearer"></div>
            <br>
            <label for="objet">Objet : </label>
            <input type="text" name="objet" id="objet" placeholder="wesh wesh" required />
            <div class="clearer"></div>
            <br>
            <label for="message">Votre message : </label>
            <textarea name="message" id="message" placeholder="Un truc"></textarea>
            <br>
            <input type="submit" name="Send" value="Send">
            <br>
            <input type="button" name="cancel" value="cancel">
        </fieldset>
    </form>
</div>
</body>
</html>