<?php
		require 'connexion_mysqli.php';
        $reqadminpost = $bdd -> prepare("DELETE FROM ticket");
        $reqadminpost-> execute();
        $reqadmintest = $bdd-> prepare("ALTER TABLE ticket AUTO_INCREMENT = 1");
        $reqadmintest -> execute();
        $reqadmin = $bdd -> prepare("INSERT INTO ticket (date_et_temps, dispo) VALUES ('2017-11-06 17:00:00', 1),('2017-11-07 18:00:00', 0),('2017-11-08 19:00:00', 1),('2017-11-09 20:00:00', 0)");
        $reqadmin->execute();
				if(isset($_GET['id']) AND $_GET['id']>=1){
        	$getid= intval($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Choix d'un horaire</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<h1>Bonjour</h1>
	<h3>Faites votre choix : </h3>
	<form method="POST" action="">
		<select name="jour">
			<option selected="defaut">Choisir un créneau</option>
			<?php
			$req = mysqli_query($bdd,"SELECT * FROM ticket WHERE dispo = 1") or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
			while($data = mysqli_fetch_array($req)){
			 echo "<option>";
			 echo $data['date_et_temps']." ";
			 echo "</option>";
			}
			mysqli_free_result($req);
			mysqli_close($bdd);
			?>
		</select>
	<input type="submit" name="validation_date" value="Valider le jour">
	</form>
 <?php
		if(isset($_POST['validation_date'])){
				$defaut_rep = "Choisir un créneau";
				$selected_val = $_POST['jour'];
				if (strcmp($defaut_rep, $selected_val) == 0) {
						echo "<div class=\"alert alert-warning alert-dismissable\">
							<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
							<strong>Error!!</strong> <span class=\"message_erreur \">Tu dois choisir une vrai valeur !</span>
						</div>";
				}else {
							echo "Tu as choisi le jour : ". $selected_val;
						// echo "<div class=\"alert alert-danger alert-dismissable\">
						// 	<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
						// 	<strong>Error!!</strong> <span class=\"message_erreur \">Votre compte n'a pas été confirmé !! Vous devez le faire pour pouvoir continuer !</span>
						// </div>";
						?>
						<input type="button" name="lien_vers_profil" value="Valider votre choix" onclick="goToProfil()">
						<?php
				}
		}
 ?>
 <script>
 function goToProfil() {
	 var idFromPhp = "<?php echo $getid ?>"
	 var dateFromPhp = "<?php echo $selected_val ?>"
	 window.location="profil.php?id=".concat(idFromPhp,"&date=",dateFromPhp);
 }
 </script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
 ?>
