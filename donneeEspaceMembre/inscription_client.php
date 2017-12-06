<?php
					include 'connexion_pdo.php';
				//partie preparation pour envoie du mail
					require 'PHPMailer-5.2.26/PHPMailerAutoload.php';
					include 'mail_init.php';
        if(isset($_POST['forminscription'])){
        	$nom = htmlspecialchars($_POST['nom']);
        	$mail = htmlspecialchars($_POST['mail']);
        	$mail2 = htmlspecialchars($_POST['mail2']);
        	$mdp = sha1($_POST['mdp']);
        	$mdp2 = sha1($_POST['mdp2']);
        	if (!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp'])) {
        		$nomlength = strlen($nom);
        		if ($nomlength <= 255) {
        			if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
	        			if($mail == $mail2 AND $mdp == $mdp2){
	        				$reqmail = $bdd->prepare("SELECT * FROM membre WHERE email = ? ");
        					$reqmail->execute(array($mail));
        					$mailexist = $reqmail->rowCount();
	        				if ($mailexist == 0) {
											//preparation pour systeme de confirmation, on fabrique la clé
											$longueurKey = 15;
											$key ="";
												for ($i=1; $i < $longueurKey; $i++) {
													$key .= mt_rand(0,9);
												}
		        				$insertmembre=$bdd->prepare("INSERT INTO membre(nom, email, mdp, confirmkey) VALUES(?,?,?,?)");
		        				$insertmembre->execute(array($nom,$mail,$mdp,$key));
		        				$erreur = '<p style="color : green;">Votre compte a bien été enregistré!'."un mail a été envoyé à cette adresse  ".$mail;
		        				//header('Location:espacemembre_lenovo.php');
														//PARTIE ENVOIE DU MAIL
														include 'txt_mail_inscription.php';
		        			}else{
		        				$erreur = "L'email fourni est déjà utilisée ! ";
		        			}
		        		}else{
		        			$erreur = "Le mot de passe ou l'email fourni sont mal confirmés, veuillez vérifiez!!!";
		        		}
        			}else{
        				echo "Votre adresse mail n'est pas valide ";
        			}
        		}else{
        			$erreur = "votre pseudo ne doit pas dépasser 255 caractere ";
        		}
        	}else{
        		$erreur = "Tous les champs doivent etre completés";
        	}
        }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test espace membre !</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style type="text/css">
		span{
			color : red;
		}
		.jumbotron{
			width: 500px;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div align="center" class="jumbotron">
		<h2>Mon espace membre : </h2>
		<br><br>
		<form method="POST" action="">
			<table>
				<tr>
					<td>
						<label for="nom">Nom :</label>
					</td>
					<td>
						<input type="text" id="nom" name="nom" value="<?php  if (isset($nom)){echo $nom;}?>" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="mail">Mail : </label>
					</td>
					<td>
						<input type="email" id="mail" name="mail" value="<?php  if (isset($mail)){echo $mail;}?>">
					</td>
				</tr>
				<tr>
					<td>
						<label for="mail2">Confirmez votre adresse email : </label>
					</td>
					<td>
						<input type="email" id="mail2" name="mail2" value="<?php  if (isset($mail2)){echo $mail2;}?>">
					</td>
				</tr>
				<tr>
					<td>
						<label for="mdp">Mot de Passe : </label>
					</td>
					<td>
						<input type="password" id="mdp" name="mdp">
					</td>
				</tr>
				<tr>
					<td>
						<label for="mdp2">Confirmez mot de Passe : </label>
					</td>
					<td>
						<input type="password" id="mdp2" name="mdp2">
					</td>
				</tr>

			</table>

			<input type="submit" name="forminscription" value="Je m'inscris">
		</form>
		<?php
			if(isset($erreur)){
				echo '<span class="message_erreur">'.$erreur.'</span>';
			}
		?>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
