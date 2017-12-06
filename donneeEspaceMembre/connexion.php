<?php
session_start();
$jeDoisAfficherConfirmation =0;

				include 'connexion_pdo.php';

        if (isset($_POST['formconnect'])) {
        	$mailconnect = htmlspecialchars($_POST['mailconnect']	);
        	$mdpconnect = sha1($_POST['mdpconnect']);
        	if (!empty($mailconnect) AND !empty($mdpconnect)){
        		$requser = $bdd -> prepare("SELECT * FROM membre WHERE email= ? AND mdp=?");
        		$requser->execute(array($mailconnect, $mdpconnect));
        		$userexist = $requser->rowCount();
        		if($userexist == 1){
        			$userinfo = $requser -> fetch();
        			$_SESSION['id'] = $userinfo['id'];
        			$_SESSION['nom'] = $userinfo['nom'];
        			$_SESSION['email'] = $userinfo['email'];
							$_SESSION['confirmation'] = $userinfo['confirm'];

								 if($userinfo['confirm'] == 1){
									header("Location: profil.php?id=".$_SESSION['id']);
								}else {
									$erreur ="<div class=\"alert alert-danger alert-dismissable\">
									  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
									  <strong>Error!!</strong> <span class=\"message_erreur \">Votre compte n'a pas été confirmé !! Vous devez le faire pour pouvoir continuer !</span>
									</div>";

									$jeDoisAfficherConfirmation = 1;
								}
        		}else{
							$erreur ="<div class=\"alert alert-danger alert-dismissable\">
							  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
							  <strong>Error!!</strong> <span class=\"message_erreur \">Mauvais mail ou mot de passe !</span>
							</div>";
        		}
        	}else{
						$erreur ="<div class=\"alert alert-danger alert-dismissable\">
						  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
						  <strong>Error!!</strong> <span class=\"message_erreur \">Tous les champs doivent être completés !</span>
						</div>";
        	}
        }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=\"utf-8">
	<title>Test espace membre !</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style type="text/css">
		span{ color : red;}
		.jumbotron{width: 500px;}
	</style>
	<script>
		function goToConfirmation() {
			var mailFromPhp = "<?php echo $_SESSION['email'] ?>"
			window.location="confirmation.php?mail=".concat(mailFromPhp);
		}
	</script>
</head>
<body>
<div class="container-fluid">
	<div align="center" class="jumbotron">
		<h2>Connexion : </h2>
		<br><br>
		<form method="POST" action="">
			<input type="mail" name="mailconnect" placeholder="Votre mail">
			<input type="password" name="mdpconnect" placeholder="Votre mot de passe">
			<input type="submit" name="formconnect" value="Se Connecter">
		</form>
		<?php
			if(isset($erreur)){
				echo '<span class="message_erreur">'.$erreur.'</span>';
				if($jeDoisAfficherConfirmation == 1 ){
					echo "<input type=\"button\" name=\"lien_vers_confirmation\" value=\"Confirmer votre adresse email\" onclick=\"goToConfirmation()\">";
				}
			}
		?>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
