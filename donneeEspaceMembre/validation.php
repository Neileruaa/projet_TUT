<?php

    	include 'connexion_pdo.php';

  if (isset($_GET['mail'], $_GET['key'])
  AND !empty($_GET['mail']) AND !empty($_GET['key'])) {
    $mail = htmlspecialchars(urldecode($_GET['mail']));
    $key = htmlspecialchars($_GET['key']);
    $requser = $bdd->prepare('SELECT * FROM membre WHERE email = ? AND confirmkey = ?');
    $requser -> execute(array($mail, $key));

    $userexist = $requser -> rowCount();

    if($userexist == 1 ){
      $user = $requser->fetch();
        if ($user['confirm']==0) {

            $update_user = $bdd -> prepare("UPDATE membre SET confirm = 1 WHERE email = ? AND confirmkey = ?");
            $update_user->execute(array($mail,$key));
            echo "Votre compte a bien été confirmé";
            ?>
              <a href="http://localhost/tests/connexion.php">Voulez vous connectez ? </a>
            <?php
        }else {
          echo "Votre compte a déjà été confirmé ";
        }
    }else {
      echo "L'utilisateur n'existe pas ";
    }
  }
?>
