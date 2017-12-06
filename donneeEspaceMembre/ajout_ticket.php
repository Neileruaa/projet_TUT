<?php session_start();
include 'connexion_pdo.php';
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
    <form action="" method="post">
        <input type="date" name="date_new_ticket" id="date_new_ticket" required><br>
        <input type="time" name="heure_new_ticket" id="heure_new_ticket" required><br>
        <input type="submit" name="validation_ticket" value="Valider ce ticket" id="validation_ticket"><br>
    </form>

    <?php if (isset($_POST['validation_ticket'])){
        $newDate =$_POST['date_new_ticket'];
        $newHeure =$_POST['heure_new_ticket'];

        $new =  $newDate." ".$newHeure.":00<br>";

        $newticket = $bdd->prepare("INSERT INTO ticket (date_et_temps, dispo, libre)
                                    VALUES (?, 1, 1)");
        $newticket -> execute(array($new));

    } ?>
    Voir la liste de créneau disponible
    <select name="rdv">
    <option selected="defaut">Liste de créneau actuel</option>
    <?php
    $reqticket = $bdd->prepare("SELECT * FROM ticket WHERE dispo=1");
    $reqticket -> execute();
    $ticket = $reqticket->fetchAll();
    for ($i=0; $i <sizeof($ticket) ; $i++) {
      $rdv =  $ticket[$i]['date_et_temps'];
      echo $rdv;
      echo "<option>";
      echo $rdv." ";
      echo "</option>";
      }
    ?>
    </select>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
