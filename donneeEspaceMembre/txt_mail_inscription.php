<?php
$mail_envoie->Subject = "Mail de confirmation";
$mail_envoie->SetFrom($mail, "JULES");
$mail_envoie->Body ='
<html>
  <body>
    <div>

      <a href="https://mecageek.000webhostapp.com/donneeEspaceMembre/validation.php?mail='.urlencode($mail).'&key='.$key.'">Cliquez ici pour confirmer !</a>
    </div>
  </body>
</html>';

$mail_envoie->AltBody = 'Ca veut dire que ca marche !';
$mail_envoie->AddAddress($mail, 'THE TEST');

if(!$mail_envoie->Send()){
  echo "L'email n'a pas pu être envoyé";
  ?>
  <a href="confirmation.php?mail=<?= $mail ?>&key=<?= $key ?>">Reessayer ? </a>
  <?php
}
?>
