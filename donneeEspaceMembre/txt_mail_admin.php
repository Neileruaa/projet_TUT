<?php
$mail_envoie->Subject = $objet;
$mail_envoie->SetFrom($mail, $nom);
$mail_envoie->Body ='
<html>
  <body>
    <div>'.$message.'



    </div>
  </body>
</html>';

$mail_envoie->AltBody = 'ALORS SI TU LIS CA CEST COOL PARCE QUE CA MARCHE !';
$mail_envoie->AddAddress('projettutvaall@gmail.com', 'THE TEST');

if(!$mail_envoie->Send()){
  echo "L'email n'a pas pu être envoyé";
  ?>
  <a href="http://localhost/tests/confirmation.php?mail=<?= $mail ?>&key=<?= $key ?>">Reessayer ? </a>
  <?php
}
?>
