<?php
$mail_envoie = new PHPMailer;
// Paramètres SMTP
$mail_envoie->isSMTP();
$mail_envoie->Mailer = 'smtp';
$mail_envoie->SMTPAuth = true;
$mail_envoie->Username = 'projettutvaall@gmail.com';
$mail_envoie->Password = 'ProjetTutVAALLb1';
$mail_envoie->Host = 'smtp.gmail.com';
$mail_envoie->SMTPDebug = 0/*2*/;
$mail_envoie->SMTPSecure = /*'ssl'*/'tls';
$mail_envoie->SMTPOptions = array(
'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
)
);
$mail_envoie->Port = 587/*25*/;
?>
