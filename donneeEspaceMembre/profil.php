<?php
session_start();

				include 'connexion_pdo.php';

				if(isset($_GET['id']) AND $_GET['id']>=1){
        	$getid= intval($_GET['id']);
        	$requser = $bdd->prepare('SELECT * FROM membre WHERE id = ?');
        	$requser -> execute(array($getid));
        	$userinfo = $requser -> fetch();
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
			width: 500px;		}
	</style>
	<script>
		function goToTicket() {
			var idFromPhp = "<?php echo $getid ?>"
			window.location="testdetabletime.php?id=".concat(idFromPhp);
		}
	</script>
</head>
<body>
<div class="container-fluid">
	<div align="center" class="jumbotron">
		<h2>Profil de : <?php echo $userinfo['nom']; ?></h2>
		<br><br>
		Nom = <?php echo $userinfo['nom']; ?>
		<br>
		Mail = <?php echo $userinfo['email']; ?>
		<?php
			if(isset($_SESSION['id']) AND $userinfo['id']==$_SESSION['id']){
		?>
		<a href="#">Editer mon profil</a>
		<input type="button" name="lien_vers_timetable" value="Choisir un créneau" onclick="goToTicket()">
		<a href="demande_admin.php">Demande pour devenir un admin</a>
		<a href="deconnexion.php">Se deconnecter</a>
		<?php
		}
		?>
			<?php
						if (isset($_GET['date'])) {
							echo 	"<div class=\"container\">
											<br><br>
										<h6>Hey c'est votre demande</h6>";
							$getDate = $_GET['date'];
							echo "Vous avez demandé cette date :";
										echo $getDate ;
							echo "<input type=\"button\" name=\"lien_vers_MAIL\" value=\"Finir validation avec mail\" onclick=\"goToProfil()\"> ";
						}
			?>
		</div>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>
