<?php
  include 'connexion_pdo.php';

  include 'mail_init.php';

  $mail= $_GET['mail'];
  $key = $_GET['key'];

  $mail_envoie->Subject = "Mail de confirmation";
  $mail_envoie->SetFrom($mail, "JULES");
  $mail_envoie->Body =$mail.	'
  <html>
    <body>
      <div>
        <a href="http://localhost/tests/validation.php?mail='.urlencode($mail).'&key='.$key.'">Cliquez ici pour confirmer !</a>
      </div>
    </body>
  </html>';
  $mail_envoie->AltBody = 'ALORS SI TU LIS CA CEST COOL PARCE QUE CA MARCHE !';
  $mail_envoie->AddAddress("projettutvaall@gmail.com", 'THE TEST');
  if(!$mail_envoie->Send()){
    echo "L'email n'a pas pu être envoyé";
?>
    <a href="http://localhost/tests/confirmation.php?mail=<?= $mail ?>">Reessayer ? </a>
    <?php
  }
    ?>
